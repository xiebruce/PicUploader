<?php

namespace Qcloud\Cos;

use Exception;
use Qcloud\Cos\Exception\CosException;
use GuzzleHttp\Pool;

class RangeDownload {
    const DEFAULT_PART_SIZE = 52428800;

    private $client;
    private $options;
    private $partSize;
    private $parts;
    private $body;
    private $progress;
    private $totolSize;
    private $uploadedSize;

    public function __construct($client, $contentLength, $saveAs, $options = array()) {
        $this->client = $client;
        $this->options = $options;
        $this->partSize = isset($options['PartSize']) ? $options['PartSize'] : self::DEFAULT_PART_SIZE;
        $this->concurrency = isset($options['Concurrency']) ? $options['Concurrency'] : 10;
        $this->progress = isset($options['Progress']) ? $options['Progress'] : function($totolSize, $downloadedSize) {};
        $this->parts = [];
        $this->partNumberList = [];
        $this->downloadedSize = 0;
        $this->totolSize = $contentLength;
        $this->saveAs = $saveAs;
    }
    public function performdownloading() {
        $this->fp = fopen($this->saveAs, "wb");
        $rt = $this->donwloadParts();
        fclose($this->fp);
        return $rt;
    }
    public function donwloadParts() {
        $uploadRequests = function () {
            $index = 1;
            $partSize = 0;
            for ($offset = 0; $offset < $this->totolSize; ) {
                $partSize = $this->partSize;
                if ($offset + $this->partSize >= $this->totolSize) {
                    $partSize = $this->totolSize - $offset;
                }
                $this->parts[$index]['PartSize'] = $partSize;
                $this->parts[$index]['Offset'] = $offset;
                $params = array(
                    'Bucket' => $this->options['Bucket'],
                    'Key' => $this->options['Key'],
                    'Range' => sprintf("bytes=%d-%d", $offset, $offset + $partSize)
                );
                $command = $this->client->getCommand('getObject', $params);
                $request = $this->client->commandToRequestTransformer($command);
                yield $request;
                $offset += $partSize;
                $index += 1;
            }
        }; 
        $pool = new Pool($this->client->httpClient, $uploadRequests(), [
            'concurrency' => $this->concurrency,
            'fulfilled' => function ($response, $index) {
                $index = $index + 1;
                
                $stream = $response->getBody();
                $offset = $this->parts[$index]['Offset'];
                $partsize = 8192;
                while (!$stream->eof()) {
                    $output = $stream->read($partsize);
                    fseek($this->fp, $offset);
                    $writeLen = fwrite($this->fp, $output);
                    $offset += $writeLen;
                }
                $partSize = $this->parts[$index]['PartSize'];
                $this->downloadedSize += $partSize;
                call_user_func_array($this->progress, [$this->totolSize, $this->downloadedSize]);
            },
            'rejected' => function ($reason, $index) {
                throw($reason);
            }
        ]);
        $promise = $pool->promise();
        $promise->wait();
    }

}
