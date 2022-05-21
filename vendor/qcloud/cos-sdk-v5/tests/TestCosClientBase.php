<?php

namespace Qcloud\Cos\Tests;

class TestCosClientBase extends \PHPUnit\Framework\TestCase
{
    protected $cosClient;
    protected $bucket;

    protected function setUp(): void
    {
        $this->bucket = Common::getBucketName();
        $this->cosClient = Common::getCosClient();
        try{
            $this->cosClient->createBucket(array('Bucket' => $this->bucket));
        } catch(\Exception $e) {
        }
        Common::waitSync();
    }

    protected function tearDown(): void
    {
        if (!$this->cosClient->doesBucketExist($this->bucket)) {
            return;
        }

        $result = $this->cosClient->listObjects(
            array('Bucket' => $this->bucket));

        if (isset($result['Contents'])) {
            foreach ($result['Contents'] as $content) {
                $this->cosClient->deleteObject(array('Bucket' => $this->bucket, 'Key' => $content['Key']));
            }
        }
        while(True){
            $result = $this->cosClient->ListMultipartUploads(
                array('Bucket' => $this->bucket));
            if ($result['Uploads'] == array()) {
                break;
            }
            foreach ($result['Uploads'] as $upload) {
                try {
                    $this->cosClient->AbortMultipartUpload(
                        array('Bucket' => $this->bucket,
                            'Key' => $upload['Key'],
                            'UploadId' => $upload['UploadId']));
                } catch (\Exception $e) {
                    print_r($e);
                }
            }
        }
        $this->cosClient->deleteBucket(array('Bucket' => $this->bucket));
    }
}
