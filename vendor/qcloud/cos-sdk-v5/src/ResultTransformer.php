<?php

namespace Qcloud\Cos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Result;

class ResultTransformer {
    private $config;
    private $operation;

    public function __construct($config, $operation) {
        $this->config = $config;
        $this->operation = $operation;
    }

    public function writeDataToLocal(CommandInterface $command, RequestInterface $request, ResponseInterface $response) {
        $action = $command->getName();
        if ($action == "GetObject" || $action == "GetSnapshot") {
            if (isset($command['SaveAs'])) {
                $fp = fopen($command['SaveAs'], "wb");
                $stream = $response->getBody();
                $offset = 0;
                $partsize = 8192;
                while (!$stream->eof()) {
                    $output = $stream->read($partsize);
                    fseek($fp, $offset);
                    fwrite($fp, $output);
                    $offset += $partsize;
                }
                fclose($fp);
            }
        }
    }

    public function metaDataTransformer(CommandInterface $command, ResponseInterface $response, Result $result) {
        $headers = $response->getHeaders();
        $metadata = array();
        foreach ($headers as $key => $value) {
            if (strpos($key, "x-cos-meta-") === 0) {
                $metadata[substr($key, 11)] = $value[0];
            }
        }
        if (!empty($metadata)) {
            $result['Metadata'] = $metadata;
        }
        return $result;
    }

    public function extraHeadersTransformer(CommandInterface $command, RequestInterface $request, Result $result) {
        if ($command['Key'] != null && $result['Key'] == null) {
            $result['Key'] = $command['Key'];
        }
        if ($command['Bucket'] != null && $result['Bucket'] == null) {
            $result['Bucket'] = $command['Bucket'];
        }
        $result['Location'] = $request->getHeader("Host")[0] .  $request->getUri()->getPath();
        return $result;
    }

    public function selectContentTransformer(CommandInterface $command, Result $result) {
        $action = $command->getName();
        if ($action == "SelectObjectContent") {
            $result['Data'] = $this->getSelectContents($result);
        }
        return $result;
    }

    public function ciContentInfoTransformer(CommandInterface $command, Result $result) {
        $action = $command->getName();
        if ($action == "ImageInfo" || $action == "ImageExif" || $action == "ImageAve" || $action == "GetPrivateM3U8") {
            $length = intval($result['ContentLength']);
            if($length > 0){
                $result['Data'] = $this->geCiContentInfo($result, $length);
            }
        }

        if ($action == "PutObject" && isset($command["PicOperations"]) &&  $command["PicOperations"]) {
            $picOperations = json_decode($command["PicOperations"], true);
            $picRuleSize = isset($picOperations['rules']) && is_array($picOperations['rules']) ? sizeof($picOperations['rules']) : 0;
            $length = intval($result['ContentLength']);
            if($length > 0){
                $content = $this->geCiContentInfo($result, $length);
                $obj = simplexml_load_string($content, "SimpleXMLElement", LIBXML_NOCDATA);
                $xmlData = json_decode(json_encode($obj),true);
                if ($picRuleSize == 1 && isset($xmlData['ProcessResults']['Object'])){
                    $tmp = $xmlData['ProcessResults']['Object'];
                    unset($xmlData['ProcessResults']['Object']);
                    $xmlData['ProcessResults']['Object'][] = $tmp;
                }
                $result['Data'] = $xmlData;
            }
        }

        if ($action == "GetBucketGuetzli" ) {
            $length = intval($result['ContentLength']);
            if($length > 0){
                $content = $this->geCiContentInfo($result, $length);
                $obj = simplexml_load_string($content, "SimpleXMLElement", LIBXML_NOCDATA);
                $arr = json_decode(json_encode($obj),true);
                $result['GuetzliStatus'] = isset($arr[0]) ? $arr[0] : '';
            }
        }

        $xml2JsonActions = array(
            'CreateMediaTranscodeJobs' => 1,
            'CreateMediaJobs' => 1,
            'DescribeMediaJob' => 1,
            'DescribeMediaJobs' => 1,
            'CreateMediaSnapshotJobs' => 1,
            'CreateMediaConcatJobs' => 1,
            'CreateMediaVoiceSeparateJobs' => 1,
            'DescribeMediaVoiceSeparateJob' => 1,
            'UpdateMediaQueue' => 1,
            'CreateMediaSmartCoverJobs' => 1,
            'CreateMediaVideoProcessJobs' => 1,
            'CreateMediaVideoMontageJobs' => 1,
            'CreateMediaAnimationJobs' => 1,
        );
        if (key_exists($action, $xml2JsonActions)) {
            $length = intval($result['ContentLength']);
            if($length > 0){
                $content = $this->geCiContentInfo($result, $length);
                $obj = simplexml_load_string($content, "SimpleXMLElement", LIBXML_NOCDATA);
                $xmlData = json_decode(json_encode($obj),true);
                $result['Response'] = $xmlData;
            }
        }

        return $result;
    }

    public function geCiContentInfo($result, $length) {
        $f = $result['Body'];
        $data = "";
        while (!$f->eof()) {
            $tmp = $f->read($length);
            if (empty($tmp)) {
                break;
            }
            $data .= $tmp;
        }
        return $data;
    }

    public function getSelectContents($result) {
        $f = $result['RawData'];
        while (!$f->eof()) {
            $data = array();
            $tmp = $f->read(4);
            if (empty($tmp)) {
                break;
            }
            $total_length = (int)(unpack("N", $tmp)[1]);
            $headers_length = (int)(unpack("N", $f->read(4))[1]);
            $body_length = $total_length - $headers_length - 16;
            $predule_crc = (int)(unpack("N", $f->read(4))[1]);
            $headers = array();
            for ($offset = 0; $offset < $headers_length;) {
                $key_length = (int)(unpack("C", $f->read(1))[1]);
                $key = $f->read($key_length);
    
                $head_value_type = (int)(unpack("C", $f->read(1))[1]);
    
                $value_length = (int)(unpack("n", $f->read(2))[1]);
                $value = $f->read($value_length);
                $offset += 4 + $key_length + $value_length;
                if ($key == ":message-type") {
                    $data['MessageType'] = $value;
                }
                if ($key == ":event-type") {
                    $data['EventType'] = $value;
                }
                if ($key == ":error-code") {
                    $data['ErrorCode'] = $value;
                }
                if ($key == ":error-message") {
                    $data['ErrorMessage'] = $value;
                }
            }
            $body = $f->read($body_length);
            $message_crc = (int)(unpack("N", $f->read(4))[1]);
            $data['Body'] = $body;
            yield $data;
        }
    }
    public function __destruct() {
    }

}
