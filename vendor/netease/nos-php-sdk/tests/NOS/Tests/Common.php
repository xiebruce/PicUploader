<?php
namespace NOS\Tests;

require_once __DIR__ . '/../../../autoload.php';

use NOS\NosClient;
use NOS\Core\NosException;

class Common
{
    /**
     * 根据Config配置，得到一个NosClient实例
     *
     * @return NosClient NosClient实例
     */
    public static function getNosClient()
    {
        try {
            $NosClient = new NosClient(
                getenv('NOS_ACCESS_KEY_ID'),
                getenv('NOS_ACCESS_KEY_SECRET'),
                getenv('NOS_ENDPOINT'), false);
        } catch (NosException $e) {
            printf(__FUNCTION__ . "creating NosClient instance: FAILED\n");
            printf($e->getMessage() . "\n");
            return null;
        }
        return $NosClient;
    }

    public static function getBucketName()
    {
        return getenv('NOS_BUCKET');
    }

    /**
     * 工具方法，创建一个bucket
     */
    public static function createBucket()
    {
        $nosClient = self::getNosClient();
        if (is_null($nosClient)) exit(1);
        $bucket = self::getBucketName();
        $acl = NosClient::NOS_ACL_TYPE_PUBLIC_READ;
        try {
            $nosClient->createBucket($bucket, $acl);
        } catch (NosException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
    }

    /**
     * Wait for bucket meta sync
     */
    public static function waitMetaSync()
    {
        if (getenv('TRAVIS')) {
            sleep(30);
        }
    }
}

