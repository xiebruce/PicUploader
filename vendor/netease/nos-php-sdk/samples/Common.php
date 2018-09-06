<?php
if (is_file(__DIR__ . '/../autoload.php')) {
    require_once __DIR__ . '/../autoload.php';
}
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}
require_once __DIR__ . '/Config.php';

use NOS\NosClient;
use NOS\Core\NosException;

class Common
{

    const endPoint = Config::NOS_ENDPOINT;

    const accessKey = Config::NOS_ACCESS_ID;

    const accessKeySecret = Config::NOS_ACCESS_KEY;

    const bucket = Config::NOS_TEST_BUCKET;

    public static function getNosClient()
    {
        try {
            $nosClient = new NosClient(self::accessKey, self::accessKeySecret, self::endPoint);
        } catch (NosException $e) {
            printf(__FUNCTION__ . "creating NosClient instance: FAILED\n");
            printf($e->getMessage() . "\n");
            return null;
        }
        return $nosClient;
    }

    public static function getTestBucketName()
    {
        return self::bucket;
    }

    public static function createBucket()
    {
        $nosClient = self::getNosClient();
        if (is_null($nosClient))
            exit(1);
        try {
            $exist = $nosClient->doesBucketExist(self::bucket);
        } catch (NosException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        if ($exist) {
            return;
        }
        $acl = NosClient::NOS_ACL_TYPE_PUBLIC_READ;
        try {
            $nosClient->createBucket(self::bucket, $acl);
        } catch (NosException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        printf(__FUNCTION__ . ": OK\n");
    }

    public static function println($message)
    {
        if (! empty($message)) {
            echo strval($message) . "\n";
        }
    }
}

Common::createBucket();