<?php
namespace NOS\Tests;

use NOS\Core\NosException;
use NOS\NosClient;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestNosClientBase.php';

class NosClientBucketTest extends TestNosClientBase
{

    public function testBucketWithInvalidName()
    {
        try {
            $this->nosClient->createBucket("s");
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals('"s"bucket name is invalid', $e->getMessage());
        }
    }

    public function testBucketWithInvalidACL()
    {
        try {
            $this->nosClient->createBucket($this->bucket, "invalid");
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals('invalid:acl is invalid(private,public-read)', $e->getMessage());
        }
    }

    public function testBucket()
    {

        $bucketListInfo = $this->nosClient->listBuckets();
        $this->assertNotNull($bucketListInfo);
        $bucketList = $bucketListInfo->getBucketList();
        $this->assertTrue(is_array($bucketList));
        $this->assertGreaterThan(0, count($bucketList));
        $this->nosClient->putBucketAcl($this->bucket, NosClient::NOS_ACL_TYPE_PUBLIC_READ);
        Common::waitMetaSync();
        $this->assertEquals($this->nosClient->getBucketAcl($this->bucket), NosClient::NOS_ACL_TYPE_PUBLIC_READ);

        //$this->nosClient->putBucketDuplication($this->bucket,NosClient::NOS_DUPLICATION_ENABLE);
        //Common::waitMetaSync();
        //$this->assertEquals($this->nosClient->GetBucketDuplication($this->bucket), NosClient::NOS_DUPLICATION_ENABLE);
        //$this->nosClient->putBucketVersing($this->bucket, NosClient::NOS_STATUS_ENABLE);
        //Common::waitMetaSync();
        //$this->assertEquals($this->nosClient->GetBucketVersiong($this->bucket), NosClient::NOS_STATUS_ENABLE);

        $this->assertTrue($this->nosClient->doesBucketExist($this->bucket));
    }
}

