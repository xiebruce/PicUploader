<?php

require_once("utils.php");
require_once("conf.php");

define("NO_AUTH_CHECK", 0);
define("HEAD_FIELD_CHECK", 1);
define("QUERY_STRING_CHECK", 2);

// ----------------------------------------------------------
function CanonicalizedResource($bucket, $key)
{
    return "/" . $bucket . "/" . $key;
}

function CanonicalizedUCloudHeaders($headers)
{

    $keys = array();
    foreach($headers as $header) {
        $header = trim($header);
        $arr = explode(':', $header);
        if (count($arr) < 2) continue;
        list($k, $v) = $arr;
        $k = strtolower($k);
        if (strncasecmp($k, "x-ucloud") === 0) {
            $keys[] = $k;
        }
    }

    $c = '';
    sort($keys, SORT_STRING);
    foreach($keys as $k) {
        $c .= $k . ":" . trim($headers[$v], " ") . "\n";
    }
    return $c;
}

class UCloud_Auth {

    public $PublicKey;
    public $PrivateKey;

    public function __construct($publicKey, $privateKey)
    {
        $this->PublicKey = $publicKey;
        $this->PrivateKey = $privateKey;
    }

    public function Sign($data)
    {
        $sign = base64_encode(hash_hmac('sha1', $data, $this->PrivateKey, true));
        return "UCloud " . $this->PublicKey . ":" . $sign;
    }

    //@results: $token
    public function SignRequest($req, $mimetype = null, $type = HEAD_FIELD_CHECK)
    {
        $url = $req->URL;
        $url = parse_url($url['path']);
        $data = '';
        $data .= strtoupper($req->METHOD) . "\n";
        $data .= UCloud_Header_Get($req->Header, 'Content-MD5') . "\n";
        if ($mimetype)
            $data .=  $mimetype . "\n";
        else
            $data .= UCloud_Header_Get($req->Header, 'Content-Type') . "\n";
        if ($type === HEAD_FIELD_CHECK)
            $data .= UCloud_Header_Get($req->Header, 'Date') . "\n";
        else
            $data .= UCloud_Header_Get($req->Header, 'Expires') . "\n";
        $data .= CanonicalizedUCloudHeaders($req->Header);
        $data .= CanonicalizedResource($req->Bucket, $req->Key);
        return $this->Sign($data);
    }
}

function UCloud_MakeAuth($auth)
{
    if (isset($auth)) {
        return $auth;
    }

    global $UCLOUD_PUBLIC_KEY;
    global $UCLOUD_PRIVATE_KEY;

    return new UCloud_Auth($UCLOUD_PUBLIC_KEY, $UCLOUD_PRIVATE_KEY);
}

//@results: token
function UCloud_SignRequest($auth, $req, $type = HEAD_FIELD_CHECK)
{
    return UCloud_MakeAuth($auth)->SignRequest($req, $type);
}

// ----------------------------------------------------------


