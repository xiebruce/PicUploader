<?php

namespace Qcloud\Cos;

use Guzzle\Service\Description\Parameter;
use Guzzle\Service\Description\ServiceDescription;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Qcloud\Cos\Signature;
use Qcloud\Cos\TokenListener;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Uri;


class CosTransformer {
    private $config;
    private $operation;

    public function __construct($config ,$operation) {
        $this->config = $config;
        $this->operation = $operation;
    }

    // format bucket style
    public function bucketStyleTransformer(CommandInterface $command, RequestInterface $request) {
        $action = $command->getName();
        if ($action == 'ListBuckets') {
            return $request->withUri(new Uri($this->config['schema']."://service.cos.myqcloud.com/"));
        }
        $operation = $this->operation;
        $bucketname = $command['Bucket'];

        $appId = $this->config['appId'];
        if ($appId != null && endWith($bucketname, '-'.$appId) == False)
        {
            $bucketname = $bucketname.'-'.$appId;
        }
        $command['Bucket'] = $bucketname;
        $path = ''; 
        $http_method = $operation['httpMethod'];
        $uri = $operation['uri'];
        
        // Hoststyle is used by default
        // Pathstyle
        if ($this->config['pathStyle'] != true) {
            if (isset($operation['parameters']['Bucket']) && $command->hasParam('Bucket')) {
                $uri = str_replace("{Bucket}", '', $uri);
            }   
            if (isset($operation['parameters']['Key']) && $command->hasParam('Key')) {
                $uri = str_replace("{/Key*}", encodeKey($command['Key']), $uri);
            }
        }
        
        $host = $bucketname. '.cos.' . $this->config['region'] . '.' . $this->config['endpoint'];
        if ($this->config['ip'] != null) {
            $host = $this->config['ip'];
            if ($this->config['port'] != null) {
                $host = $this->config['ip'] . ":" . $this->config['port'];
            }
        }
        $path = $this->config['schema'].'://'. $host . $uri;
        $uri = new Uri($path);
        $uri = $uri->withQuery($request->getUri()->getQuery());
        return $request->withUri($uri);
    }

    // format upload body
    public function uploadBodyTransformer(CommandInterface $command, $request, $bodyParameter = 'Body', $sourceParameter = 'SourceFile') {
        
        $operation = $this->operation;
        if (!isset($operation['parameters']['Body'])) {
            return $request;
        }
        $source = isset($command[$sourceParameter]) ? $command[$sourceParameter] : null;
        $body = isset($command[$bodyParameter]) ? $command[$bodyParameter] : null;
        // If a file path is passed in then get the file handle
        if (is_string($source) && file_exists($source)) {
            $body = fopen($source, 'rb');
        }
        // Prepare the body parameter and remove the source file parameter
        if (null !== $body) { 
            return $request->withBody(Psr7\stream_for($body));
        } else {
            throw new Exception\InvalidArgumentException(
                "You must specify a non-null value for the {$bodyParameter} or {$sourceParameter} parameters.");
        }
    }

    // update md5
    public function md5Transformer(CommandInterface $command, $request) {
        $operation = $this->operation;
        if (isset($operation['data']['contentMd5'])) {
            $request = $this->addMd5($request);
        }
        if (isset($operation['parameters']['ContentMD5']) &&
            isset($command['ContentMD5'])) {
            $value = $command['ContentMD5'];
            if ($value === true) {
                $request = $this->addMd5($request);
            }
        }

        return $request;
    }

    // count md5
    private function addMd5($request) {
        $body = $request->getBody();
        if ($body && $body->getSize() > 0) {
            $md5 = base64_encode(md5($body, true));
            return $request->withHeader('Content-MD5', $md5);
        }
        return $request;
    }

    public function __destruct() {
    }

}
