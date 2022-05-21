<?php

namespace Qcloud\Cos\Tests;

use Qcloud\Cos\Client;

class Common
{
    const SYNC_TIME = 4;
    const FILE_NAME = "hi.txt";
    const LOCAL_TEST_FILE = "local_test_file";

    public static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    public static function generateRandomFile($size = 10, $filename = 'random-file') {
        exec("dd if=/dev/urandom of=". $filename. " bs=1 count=". (string)$size);
    }

    public static function generateFile() {
        $body = self::generateRandomString(1024+1023);
        $local_test_key = self::LOCAL_TEST_FILE;
        $f = fopen($local_test_key, "wb");
        fwrite($f, $body);
        fclose($f);
        return $body;
    }

    public static function getTagSet() {
        $testTaggingKeys = array(
            'key1', 'key2'
        );
        $testTaggingValues = array(
            'value1', 'value2'
        );
        return array(
            array('Key'=> $testTaggingKeys[0],
                'Value'=> $testTaggingValues[0],
            ),
            array('Key'=> $testTaggingKeys[1],
                'Value'=> $testTaggingValues[1],
            ),
        );
    }

    public static function getCosClient()
    {
        try {
            $cosClient = new Client(
                array(
                    'region' => self::getRegion(),
                    'schema' => 'https',
                    'credentials' => array(
                        'secretId' => getenv('COS_KEY'),
                        'secretKey' => getenv('COS_SECRET')
                    )
                )
            );
        } catch (\Exception $e) {
            return null;
        }
        return $cosClient;
    }

    public static function getCiClient() {
        try {
            $cosClient = new Client(
                array(
                    'region' => self::getRegion(),
                    'schema' => 'https',
                    'credentials' => array(
                        'secretId' => getenv('CI_KEY'),
                        'secretKey' => getenv('CI_SECRET')
                    )
                )
            );
        } catch (\Exception $e) {
            return null;
        }
        return $cosClient;
    }

    public static function getCertainRegionClient($region) {
        try {
            $cosClient = new Client(
                array(
                    'region' => $region,
                    'schema' => 'https',
                    'credentials' => array(
                        'secretId' => getenv('CI_KEY'),
                        'secretKey' => getenv('CI_SECRET')
                    )
                )
            );
        } catch (\Exception $e) {
            return null;
        }
        return $cosClient;
    }

    public static function getCiBucketName()
    {
        return getenv('CI_BUCKET');
    }


    public static function getBucketName()
    {
        return getenv('COS_BUCKET');
    }

    public static function getRegion()
    {
        return getenv('COS_REGION');
    }

    public static function createBucket()
    {

        $cosClient = self::getCosClient();
        if (is_null($cosClient)) exit(1);
        $bucket = self::getBucketName();
        try {
            $cosClient->createBucket(array('Bucket' => $bucket));
        } catch (\Exception $e) {
            return;
        }
    }

    public static function waitSync()
    {
        sleep(self::SYNC_TIME);
    }

}
