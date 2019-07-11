<?php
/*
* Copyright 2014 Baidu, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

include 'BaiduBce.phar';
require 'SampleConf.php';

use BaiduBce\BceClientConfigOptions;
use BaiduBce\Util\Time;
use BaiduBce\Util\MimeTypes;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Services\Bos\BosClient;
use BaiduBce\Services\Bos\CannedAcl;
use BaiduBce\Services\Bos\BosOptions;
use BaiduBce\Auth\SignOptions;

use BaiduBce\Log\LogFactory;

class BosClientTest extends PHPUnit_Framework_TestCase
{
    private $client;
    private $bucket;
    private $key;
    private $filename;
    private $download;

    public function __construct()
    {
        global $BOS_TEST_CONFIG;

        parent::__construct();
        $this->client = new BosClient($BOS_TEST_CONFIG);
        $this->logger = LogFactory::getLogger(get_class($this));
    }

    public function setUp()
    {
        $id = rand();
        $this->bucket = sprintf('test-bucket%d', $id);
        $this->key = sprintf('test_object%d', $id);
        $this->filename = sprintf(__DIR__.'\\'.'temp_file%d.txt', $id);
        $this->download = __DIR__.'\\'.'download.txt';
        $this->client->createBucket($this->bucket);
    }

    public function tearDown()
    {
        // Delete all buckets
        $response = $this->client->listBuckets();

        foreach ($response->buckets as $bucket) {
            if (substr($bucket->name, 0, 11) == 'test-bucket') {
                $response = $this->client->listObjects($bucket->name);
                foreach ($response->contents as $object) {
                    $this->client->deleteObject($bucket->name, $object->key);
                }
                $this->client->deleteBucket($bucket->name);
            }
        }

        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
        if (file_exists($this->download)) {
            unlink($this->download);
        }
    }

    /**
     * Generate a random file of specified size
     * @param int $size The size of generated file.
     * @return null
     */
    private function prepareTemporaryFile($size)
    {
        $fp = fopen($this->filename, 'w');
        fseek($fp, $size - 1, SEEK_SET);
        fwrite($fp, '0');
        fclose($fp);
    }

    //test of bucket create/doesExist/list/delete operations
    public function testBucketOperations()
    {
        $bucketName = "test-bucket-operations";
        //not created, should be false
        $exist = $this->client->doesBucketExist($bucketName);
        $this->assertFalse($exist);
        //create bucket
        $this->client->createBucket($bucketName);
        //created, should be true
        $exist = $this->client->doesBucketExist($bucketName);
        $this->assertTrue($exist);
        //should be in the bucket list
        $exist = false;
        $response = $this->client->listBuckets();
        foreach ($response->buckets as $bucket) {
            if ($bucket->name == $bucketName) {
                $exist = true;
            }
        }
        $this->assertTrue($exist);
        //delete
        $this->client->deleteBucket($bucketName);
        //deleted should be false
        $exist = $this->client->doesBucketExist($bucketName);
        $this->assertFalse($exist);
    }

    //test of acl set/set canned/get
    public function testAclOperations()
    {
        //there is no public-read-write
        $result = $this->client->getBucketAcl($this->bucket);
        $found = false;
        foreach($result->accessControlList as $acl) {
            if(strcmp($acl->grantee[0]->id, '*') == 0) {
                $this->assertEquals($acl->permission[0], 'READ');
                $this->assertEquals($acl->permission[1], 'WRITE');
                $found = true;
            }
        }
        $this->assertFalse($found);
        //there is public-read-write
        $this->client->setBucketCannedAcl($this->bucket, CannedAcl::ACL_PUBLIC_READ_WRITE);
        $result = $this->client->getBucketAcl($this->bucket);
        $found = false;
        foreach($result->accessControlList as $acl) {
            if(strcmp($acl->grantee[0]->id, '*') == 0) {
                $this->assertEquals($acl->permission[0], 'READ');
                $this->assertEquals($acl->permission[1], 'WRITE');
                $found = true;
            }
        }
        $this->assertTrue($found);
        //upload customized acl
        $found = false;
        $myAcl = array(
            array(
                'grantee' => array(
                    array(
                        'id' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
                    ),
                    array(
                        'id' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                    ),
                ),
                'permission' => array('FULL_CONTROL'),
            ),
        );
        $this->client->setBucketAcl($this->bucket, $myAcl);
        $result = $this->client->getBucketAcl($this->bucket);
        foreach($result->accessControlList as $acl) {
            foreach($acl->grantee as $grantee) {
                if(strcmp($grantee->id, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa') == 0) {
                    $found = true;
                    $this->assertEquals($acl->permission[0], 'FULL_CONTROL');
                }
            }
        }
        $this->assertTrue($found);
    }

    //test of object operations basic:
    //List; listObjects
    //Delete: deleteObject
    //Copy: copyObject
    //Put: putObjectFromString/putObjectFromFile
    //Get: getObjectAsString/getObjectToFile
    public function testObjectBasicOperations()
    {
        //put string
        $this->client->putObjectFromString($this->bucket, $this->key, 'test');

        //put file
        file_put_contents($this->filename, "test of put object from string");
        $otherKey = $this->key."other";
        $this->client->putObjectFromFile($this->bucket, $otherKey, $this->filename);

        //list the objects and check
        $response = $this->client->listObjects($this->bucket);
        $keyArr = array(
            $this->key => false,
            $otherKey => false,
        );
        $this->assertEquals(2, count($response->contents));
        foreach ($response->contents as $object) {
            foreach(array_keys($keyArr) as $tempKey) {
                if(strcasecmp($object->key, $tempKey) == 0) {
                    unset($keyArr[$tempKey]);
                    break;
                }
            }
        }
        $this->assertEquals(0, count($keyArr));

        //copy object
        $response = $this->client->copyObject($this->bucket, $this->key, $this->bucket, "copy_of_test");

        //list the bucket and check
        $response = $this->client->listObjects($this->bucket);
        $keyArr = array(
            $this->key => false,
            $otherKey => false,
            "copy_of_test" => false,
        );
        $this->assertEquals(3, count($response->contents));
        foreach ($response->contents as $object) {
            foreach(array_keys($keyArr) as $tempKey) {
                if(strcasecmp($object->key, $tempKey) == 0) {
                    unset($keyArr[$tempKey]);
                    break;
                }
            }
        }
        $this->assertEquals(0, count($keyArr));

        //delete object
        $this->client->deleteObject($this->bucket, "copy_of_test");

        //list the bucket and check
        $response = $this->client->listObjects($this->bucket);
        $keyArr = array(
            $this->key => false,
            $otherKey => false,
            "copy_of_test" => false,
        );
        $this->assertEquals(2, count($response->contents));
        foreach ($response->contents as $object) {
            foreach(array_keys($keyArr) as $tempKey) {
                if(strcasecmp($object->key, $tempKey) == 0) {
                    unset($keyArr[$tempKey]);
                    break;
                }
            }
        }
        $this->assertEquals(1, count($keyArr));
        $this->assertTrue(array_key_exists("copy_of_test", $keyArr));

        //get object as string
        $result = $this->client->getObjectAsString($this->bucket, $otherKey);
        $this->assertStringEqualsFile($this->filename, $result);

        //get object to file
        $this->client->getObjectToFile($this->bucket, $this->key, $this->download);
        $this->assertStringEqualsFile($this->download, 'test');
    }

    //test of object operations advanced:
    //List; listObjects
    //Delete: deleteObject
    //Copy: copyObject
    //Put: putObjectFromString/putObjectFromFile
    //Get: getObjectAsString/getObjectToFile
    public function testObjectAdvancedOperations()
    {
        //put object from file with options
        file_put_contents($this->filename, "test of put object from string");
        $userMeta = array("private" => "private data");
        $options = array(
            BosOptions::CONTENT_TYPE=>"text/plain",
            BosOptions::CONTENT_MD5=>base64_encode(hash_file("md5", $this->filename, true)),
            BosOptions::CONTENT_LENGTH=>filesize($this->filename),
            BosOptions::CONTENT_SHA256=>hash_file("sha256", $this->filename),
            BosOptions::USER_METADATA => $userMeta,
        );
        $response = $this->client->putObjectFromFile($this->bucket, $this->key, $this->filename, $options);
        //stash etag which will be used in copy with options
        $sourceEtag = $response->metadata[BosOptions::ETAG];

        //get object with options:
        //get content from 12 to 17 in $this->key
        $options = array(
            BosOptions::RANGE=>array(12,17),
        );
        $slice = $this->client->getObjectAsString($this->bucket, $this->key, $options);
        $this->assertEquals("object", $slice);

        //put a dir and objects under this dir
        $this->client->putObjectFromString($this->bucket, "usr", '');
        for ($i = 0; $i < 10; $i++) {
            $this->client->putObjectFromString($this->bucket, "usr/".'object'.$i, "test".$i);
        }

        //list objects with options:
        //list 5 objects under dir usr start from usr/object4
        $options = array(
            BosOptions::MAX_KEYS=>5,
            BosOptions::PREFIX=>"usr/",
            BosOptions::MARKER=>"usr/object4",
            BosOptions::DELIMITER=>"/",
        );
        $response = $this->client->listObjects($this->bucket, $options);
        $this->assertEquals(5, count($response->contents));

        //copy object with options
        $options = array(
            BosOptions::USER_METADATA=>$userMeta,
            BosOptions::ETAG=>$sourceEtag,
        );
        $this->client->copyObject($this->bucket, $this->key, $this->bucket, "copy_of_test", $options);

        //get user meta from source
        $response = $this->client->getObjectMetadata($this->bucket, $this->key);
        $this->assertTrue(array_key_exists('private', $response['userMetadata']));
        $this->assertEquals('private data', $response['userMetadata']['private']);

        //get user meta from copy
        $response = $this->client->getObjectMetadata($this->bucket, "copy_of_test");
        $this->assertTrue(array_key_exists('private', $response['userMetadata']));
        $this->assertEquals('private data', $response['userMetadata']['private']);
    }

    //test of multi-part operations
    public function testMultiPartBaseOperations() {
        //initiate multi-upload
        $response = $this->client->initiateMultipartUpload($this->bucket, $this->key);
        $uploadId1 =$response->uploadId;
        $response = $this->client->initiateMultipartUpload($this->bucket, $this->key);
        $uploadId2 =$response->uploadId;

        //list multi-upload and check
        $upload_array = array(
            $uploadId1 => 0,
            $uploadId2 => 0,
        );
        $response = $this->client->listMultipartUploads($this->bucket);
        $this->assertEquals(2, count($response->uploads));
        foreach($response->uploads as $upload) {
            $this->assertEquals($upload->key, $this->key);
            $this->assertTrue(array_key_exists($upload->uploadId, $upload_array));
        }

        //about multi-upload
        $this->client->abortMultipartUpload($this->bucket, $this->key, $uploadId2);

        //list multi-upload and check
        $response = $this->client->listMultipartUploads($this->bucket);
        $this->assertEquals(1, count($response->uploads));
        $this->assertEquals($uploadId1, $response->uploads[0]->uploadId);
        $this->assertNotEquals($uploadId2, $response->uploads[0]->uploadId);

        //upload part from file
        $this->prepareTemporaryFile(6 * 1024 * 1024);
        $eTags = array();
        $partList = array();
        $response = $this->client->uploadPartFromFile($this->bucket,
            $this->key,
            $uploadId1,
            1,
            $this->filename,
            0,
            5*1024*1024);
        $eTags[$response->metadata[BosOptions::ETAG]] = true;
        array_push($partList, array("partNumber"=>1, "eTag"=>$response->metadata[BosOptions::ETAG]));
        $response = $this->client->uploadPartFromFile($this->bucket,
            $this->key,
            $uploadId1,
            2,
            $this->filename,
            5*1024*1024,
            1*1024*1024);
        $eTags[$response->metadata[BosOptions::ETAG]] = true;
        array_push($partList, array("partNumber"=>2, "eTag"=>$response->metadata[BosOptions::ETAG]));

        //list parts and compare
        $response = $this->client->listParts($this->bucket, $this->key, $uploadId1);
        $this->assertEquals(2, count($response->parts));
        foreach($response->parts as $part) {
            $this->assertTrue(array_key_exists($part->eTag, $eTags));
        }

        //complete multi-upload
        $response = $this->client->completeMultipartUpload($this->bucket, $this->key, $uploadId1, $partList);

        //download it and compare
        $this->client->getObjectToFile($this->bucket, $this->key, $this->download);
        $this->assertFileEquals($this->filename, $this->download);
    }

    //test of multi-part operations
    public function testMultiPartAdvancedOperations() {
        //prepare file
        $fileSize = 101 * 1024 * 1024;
        $partSize = 5 * 1024 * 1024;
        $this->prepareTemporaryFile($fileSize);

        //multi-upload
        $userMeta = array("private" => "private data");
        $offset = 0;
        $partNumber = 1;
        $length = $partSize;
        $bytesLeft = $fileSize;
        $partList = array();
        $response = $this->client->initiateMultipartUpload($this->bucket, $this->key);
        $uploadId =$response->uploadId;
        while ($bytesLeft > 0) {
            $length = ($length > $bytesLeft) ? $bytesLeft : $length;
            $response = $this->client->uploadPartFromFile($this->bucket,
                $this->key,
                $uploadId,
                $partNumber,
                $this->filename,
                $offset,
                $length);
            array_push(
                $partList,
                array("partNumber"=>$partNumber, "eTag"=>$response->metadata[BosOptions::ETAG],)
            );
            $offset += $length;
            $partNumber++;
            $bytesLeft -= $length;
        }

        //list parts with options
        $options = array(
            BosOptions::LIMIT=>5,
            BosOptions::MARKER=>5,
        );
        $response = $this->client->listParts($this->bucket, $this->key, $uploadId, $options);
        $this->assertEquals(5, count($response->parts));

        //complete with user-metadata
        $options = array(BosOptions::USER_METADATA => $userMeta,);
        $this->client->completeMultipartUpload($this->bucket, $this->key, $uploadId, $partList, $options);

        //get user meta
        $response = $this->client->getObjectMetadata($this->bucket, $this->key);
        $this->assertTrue(array_key_exists('private', $response['userMetadata']));
        $this->assertEquals('private data', $response['userMetadata']['private']);

        //put a dir and init multi-upload for each object under dir
        $uploadIdList = array();
        $this->client->putObjectFromString($this->bucket, "usr", '');
        for ($i = 0; $i < 10; $i++) {
            $response = $this->client->initiateMultipartUpload($this->bucket, "usr/".'object'.$i);
            $uploadIdList["usr/".'object'.$i] = $response->uploadId;
        }

        //list objects with options:
        //list 5 objects under dir usr start from usr/object4
        $options = array(
            BosOptions::LIMIT=>5,
            BosOptions::PREFIX=>"usr/",
            BosOptions::MARKER=>"usr/object4",
            BosOptions::DELIMITER=>"/",
        );
        $response = $this->client->listMultipartUploads($this->bucket, $options);
        $this->assertEquals(5, count($response->uploads));

        //clear env
        foreach ($uploadIdList as $key => $uploadId) {
            $this->client->abortMultipartUpload($this->bucket, $key, $uploadId);
        }
    }

    //test of misc functions:generatePreSignedUrl
    public function testMiscOperations() {
    //put an object
    $this->client->putObjectFromString($this->bucket, $this->key, 'test string');

    //generatePreSignedUrl
    $url = $this->client->generatePreSignedUrl($this->bucket, $this->key);
    $file = file_get_contents($url);
    $this->assertEquals('test string', $file);

    //generatePreSignedUrl with timestamp and expiration
    $signOptions = array(
        SignOptions::TIMESTAMP=>new \DateTime(),
        SignOptions::EXPIRATION_IN_SECONDS=>300,
    );
    $url = $this->client->generatePreSignedUrl($this->bucket,
        $this->key,
        array(BosOptions::SIGN_OPTIONS => $signOptions)
    );
    $file = file_get_contents($url);
    $this->assertEquals('test string', $file);
    }
}
