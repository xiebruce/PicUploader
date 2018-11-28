<?php

require_once("conf.php");
require_once("utils.php");
require_once("digest.php");

// --------------------------------------------------------------------------------

class HTTP_Request
{
    public $URL;
    public $RawQuerys;
    public $Header;
    public $Body;
    public $UA;
    public $METHOD;
    public $Params;      //map
    public $Bucket;
    public $Key;
    public $Timeout;

    public function __construct($method, $url, $body, $bucket, $key, $action_type = ActionType::NONE)
    {
        $this->URL    = $url;
        if (isset($url["query"])) {
            $this->RawQuerys = $url["query"];
        }
        $this->Header = array();
        $this->Body   = $body;
        $this->UA     = UCloud_UserAgent();
        $this->METHOD = $method;
        $this->Bucket = $bucket;
        $this->Key    = $key;

        global $CURL_TIMEOUT;
        global $UFILE_ACTION_TYPE;
        if ($CURL_TIMEOUT == null && $action_type !== ActionType::PUTFILE 
            && $action_type !== ActionType::POSTFILE) {
            $CURL_TIMEOUT = 10;
        }
        $this->Timeout = $CURL_TIMEOUT;
    }

    public function EncodedQuery() {
        if ($this->RawQuerys != null) {
            $q = "";
            foreach ($this->RawQuerys as $k => $v) {
                $q = $q . "&" . rawurlencode($k) . "=" . rawurlencode($v);
            }
            return $q;
        }
        return "";
    }
}

class HTTP_Response
{
    public $StatusCode;
    public $Header;
    public $ContentLength;
    public $Body;
    public $Timeout;

    public function __construct($code, $body)
    {
        $this->StatusCode = $code;
        $this->Header = array();
        $this->Body = $body;
        $this->ContentLength = strlen($body);

        global $CURL_TIMEOUT;
        if ($CURL_TIMEOUT == null) {
            $CURL_TIMEOUT = 10;
        }
        $this->Timeout = $CURL_TIMEOUT;
    }
}

//@results: $val
function UCloud_Header_Get($header, $key)
{
    $val = @$header[$key];
    if (isset($val)) {
        if (is_array($val)) {
            return $val[0];
        }
        return $val;
    } else {
        return '';
    }
}

//@results: $error
function UCloud_ResponseError($resp)
{
    $header = $resp->Header;
    $err = new UCloud_Error($resp->StatusCode, null);

    if ($err->Code > 299) {
        if ($resp->ContentLength !== 0) {
            if (UCloud_Header_Get($header, 'Content-Type') === 'application/json') {
                $ret = json_decode($resp->Body, true);
                $err->ErrRet = $ret['ErrRet'];
                $err->ErrMsg = $ret['ErrMsg'];
            }
        }
    }
    $err->Reqid = UCloud_Header_Get($header, 'X-SessionId');
    return $err;
}

// --------------------------------------------------------------------------------

//@results: ($resp, $error)
function UCloud_Client_Do($req)
{
    $ch = curl_init();
    $url = $req->URL;

    $options = array(
        CURLOPT_USERAGENT => $req->UA,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HEADER => true,
        CURLOPT_NOBODY => false,
        CURLOPT_CUSTOMREQUEST  => $req->METHOD,
        CURLOPT_URL => $url['host'] . "/" . rawurlencode($url['path']) . "?" . $req->EncodedQuery(),
        CURLOPT_TIMEOUT => $req->Timeout,
        CURLOPT_CONNECTTIMEOUT => $req->Timeout
    );

    $httpHeader = $req->Header;
    if (!empty($httpHeader))
    {
        $header = array();
        foreach($httpHeader as $key => $parsedUrlValue) {
            $header[] = "$key: $parsedUrlValue";
        }
        $options[CURLOPT_HTTPHEADER] = $header;
    }
    $body = $req->Body;
    if (!empty($body)) {
        $options[CURLOPT_POSTFIELDS] = $body;
    } else {
        $options[CURLOPT_POSTFIELDS] = "";
    }
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    $ret = curl_errno($ch);
    if ($ret !== 0) {
        $err = new UCloud_Error(0, $ret, curl_error($ch));
        curl_close($ch);
        return array(null, $err);
    }
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    curl_close($ch);

    $responseArray = explode("\r\n\r\n", $result);
    $responseArraySize = sizeof($responseArray);
    $headerString = $responseArray[$responseArraySize-2];
    $respBody = $responseArray[$responseArraySize-1];

    $headers = parseHeaders($headerString);
    $resp = new HTTP_Response($code, $respBody);
    $resp->Header = $headers;
    $err = null;
    if (floor($resp->StatusCode/100) != 2) {
        list($r, $m) = parseError($respBody);
        $err = new UCloud_Error($resp->StatusCode, $r, $m);
    }
    return array($resp, $err);
}

function parseError($bodyString) {

    $r = 0;
    $m = '';
    $mp = json_decode($bodyString);
    if (isset($mp->{'ErrRet'})) $r = $mp->{'ErrRet'};
    if (isset($mp->{'ErrMsg'})) $m = $mp->{'ErrMsg'};
    return array($r, $m);
}

function parseHeaders($headerString) {

    $headers = explode("\r\n", $headerString);
    foreach($headers as $header) {
        if (strstr($header, ":")) {
            $header = trim($header);
            list($k, $v) = explode(":", $header);
            $headers[$k] = trim($v);
        }
    }
    return $headers;
}

class UCloud_HttpClient
{
    //@results: ($resp, $error)
    public function RoundTrip($req)
    {
        return UCloud_Client_Do($req);
    }
}

class UCloud_AuthHttpClient
{
    public $Auth;
    public $Type;
    public $MimeType;

    public function __construct($auth, $mimetype = null, $type = HEAD_FIELD_CHECK)
    {
        $this->Type = $type;
        $this->MimeType = $mimetype;
        $this->Auth = UCloud_MakeAuth($auth, $type);
    }

    //@results: ($resp, $error)
    public function RoundTrip($req)
    {
        if ($this->Type === HEAD_FIELD_CHECK) {
            $token = $this->Auth->SignRequest($req, $this->MimeType, $this->Type);
            $req->Header['Authorization'] = $token;
        }
        return UCloud_Client_Do($req);
    }
}

// --------------------------------------------------------------------------------

//@results: ($data, $error)
function UCloud_Client_Ret($resp)
{
    $code = $resp->StatusCode;
    $data = null;
    if ($code >= 200 && $code <= 299) {
        if ($resp->ContentLength !== 0 && UCloud_Header_Get($resp->Header, 'Content-Type') == 'application/json') {
            $data = json_decode($resp->Body, true);
            if ($data === null) {
                $err = new UCloud_Error($code, 0, "");
                return array(null, $err);
            }
        }
    }

    $etag = UCloud_Header_Get($resp->Header, 'ETag');
    if ($etag != '') $data['ETag'] = $etag;
    if (floor($code/100) == 2) {
        return array($data, null);
    }
    return array($data, UCloud_ResponseError($resp));
}

//@results: ($data, $error)
function UCloud_Client_Call($self, $req, $type = HEAD_FIELD_CHECK)
{
    list($resp, $err) = $self->RoundTrip($req, $type);
    if ($err !== null) {
        return array(null, $err);
    }
    return UCloud_Client_Ret($resp);
}

//@results: $error
function UCloud_Client_CallNoRet($self, $req, $type = HEAD_FIELD_CHECK)
{
    list($resp, $err) = $self->RoundTrip($req, $type);
    if ($err !== null) {
        return array(null, $err);
    }
    if (floor($resp->StatusCode/100) == 2) {
        return null;
    }
    return UCloud_ResponseError($resp);
}

//@results: ($data, $error)
function UCloud_Client_CallWithForm(
        $self, $req, $body, $contentType = 'application/x-www-form-urlencoded')
{
    if ($contentType === 'application/x-www-form-urlencoded') {
        if (is_array($req->Params)) {
            $body = http_build_query($req->Params);
        }
    }
    if ($contentType !== 'multipart/form-data') {
        $req->Header['Content-Type'] = $contentType;
    }
    $req->Body = $body;
    list($resp, $err) = $self->RoundTrip($req, HEAD_FIELD_CHECK);
    if ($err !== null) {
        return array(null, $err);
    }
    return UCloud_Client_Ret($resp);
}

// --------------------------------------------------------------------------------

function UCloud_Client_CallWithMultipartForm($self, $req, $fields, $files)
{
    list($contentType, $body) = UCloud_Build_MultipartForm($fields, $files);
    return UCloud_Client_CallWithForm($self, $req, $body, $contentType);
}

//@results: ($contentType, $body)
function UCloud_Build_MultipartForm($fields, $files)
{
    $data = array();
    $boundary = md5(microtime());

    foreach ($fields as $name => $val) {
        array_push($data, '--' . $boundary);
        array_push($data, "Content-Disposition: form-data; name=\"$name\"");
        array_push($data, '');
        array_push($data, $val);
    }

    foreach ($files as $file) {
        array_push($data, '--' . $boundary);
        list($name, $fileName, $fileBody, $mimeType) = $file;
        $mimeType = empty($mimeType) ? 'application/octet-stream' : $mimeType;
        $fileName = UCloud_EscapeQuotes($fileName);
        array_push($data, "Content-Disposition: form-data; name=\"$name\"; filename=\"$fileName\"");
        array_push($data, "Content-Type: $mimeType");
        array_push($data, '');
        array_push($data, $fileBody);
    }

    array_push($data, '--' . $boundary . '--');
    array_push($data, '');

    $body = implode("\r\n", $data);
    $contentType = 'multipart/form-data; boundary=' . $boundary;
    return array($contentType, $body);
}

function UCloud_UserAgent() {
    global $SDK_VER;
    $sdkInfo = "UCloudPHP/$SDK_VER";

    $systemInfo = php_uname("s");
    $machineInfo = php_uname("m");

    $envInfo = "($systemInfo/$machineInfo)";

    $phpVer = phpversion();

    $ua = "$sdkInfo $envInfo PHP/$phpVer";
    return $ua;
}

function UCloud_EscapeQuotes($str)
{
    $find = array("\\", "\"");
    $replace = array("\\\\", "\\\"");
    return str_replace($find, $replace, $str);
}

// --------------------------------------------------------------------------------

