<?php
namespace NOS\Tests;

use NOS\Core\NosException;
use NOS\NosClient;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestNosClientBase.php';

class NosClientObjectTest extends TestNosClientBase
{

    public function testGetObjectWithHeader()
    {
        $object = "upload-test-object-name.txt";
        try {
            $res = $this->nosClient->getObject($this->bucket, $object, array(
                NosClient::NOS_LAST_MODIFIED => "xx"
            ));
            $this->assertEquals(file_get_contents(__FILE__), $res);
        } catch (NosException $e) {
            $this->assertEquals('"/ilegal.txt" object name is invalid', $e->getMessage());
        }
    }

    public function testGetObjectWithIleggalEtag()
    {
        $object = "upload-test-object-name.txt";
        try {
            $res = $this->nosClient->getObject($this->bucket, $object, array(
                NosClient::NOS_ETAG => "xx"
            ));
            $this->assertEquals(file_get_contents(__FILE__), $res);
        } catch (NosException $e) {
            $this->assertEquals('"/ilegal.txt" object name is invalid', $e->getMessage());
        }
    }

    public function testPutIllelObject()
    {
        $object = "/ilegal.txt";
        try {
            $this->nosClient->putObject($this->bucket, $object, "hi", null);
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals('"/ilegal.txt" object name is invalid', $e->getMessage());
        }
    }

    public function testObject()
    {
        /**
         * 设置桶的去重属性
         */
//         try{
//             $this->nosClient->putBucketDuplication($this->bucket, NosClient::NOS_DUPLICATION_ENABLE);
//         }catch (NosException $e) {
//             $this->assertFalse(true);
//         }

        /**
         * 上传本地变量到bucket
         */
        $object = "upload-test-object-name.txt";
        $content = file_get_contents(__FILE__);
        $options = array(
            NosClient::NOS_LENGTH => strlen($content),
            NosClient::NOS_HEADERS => array(
                'Expires' => 'Fri, 28 Feb 2020 05:38:42 GMT',
                'Cache-Control' => 'no-cache',
                'Content-Disposition' => 'attachment;filename=oss_download.log',
                'Content-Encoding' => 'utf-8',
                'Content-Language' => 'zh-CN',
                'x-nos-self-define-title' => 'user define meta info'
            )
        );

        try {
            $this->nosClient->putObject($this->bucket, $object, $content, $options);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        try {
            $this->nosClient->uploadFile($this->bucket, $object, "notexist.txt", $options);
            $this->assertFalse(true);
        } catch (NosException $e) {
            $this->assertEquals('notexist.txt file does not exist', $e->getMessage());
        }

        /**
         * getObject到本地变量，检查是否match
         */
        try {
            $content = $this->nosClient->getObject($this->bucket, $object);
            $this->assertEquals($content, file_get_contents(__FILE__));
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        /**
         * getObject的前五个字节
         */
        try {
            $options = array(
                NosClient::NOS_RANGE => '0-4'
            );
            $content = $this->nosClient->getObject($this->bucket, $object, $options);
            $this->assertEquals($content, '<?php');
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

                try {
                    $this->nosClient->deleteObject($this->bucket, "upload-test-object-name.txt", $options);
                } catch (NosException $e) {
                    $this->assertFalse(true);
                }

        /**
         * 上传本地文件到object
         */
        try {
            $this->nosClient->uploadFile($this->bucket, $object, __FILE__);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        /**
         * 下载文件到本地变量，检查是否match
         */
        try {
            $content = $this->nosClient->getObject($this->bucket, $object);
            $this->assertEquals($content, file_get_contents(__FILE__));
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        /**
         * 下载文件到本地文件
         */
        $localfile = "upload-test-object-name-local.txt";
        $options = array(
            NosClient::NOS_FILE_DOWNLOAD => $localfile
        );

        try {
            $this->nosClient->getObject($this->bucket, $object, $options);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }
        $this->assertTrue(file_get_contents($localfile) === file_get_contents(__FILE__));
        unlink($localfile);
        // if (file_exists($localfile)) {
        // unlink($localfile);
        // }

        /**
         * 复制object
         */
        $to_bucket = $this->bucket;
        $to_object = $object . '.copy';
        $options = array();
        try {
            $this->nosClient->copyObject($this->bucket, $object, $to_bucket, $to_object, $options);
        } catch (NosException $e) {
            $this->assertFalse(true);
            var_dump($e->getMessage());
        }

        /**
         * 检查复制的是否相同
         */
        try {
            $content = $this->nosClient->getObject($this->bucket, $to_object);
            $this->assertEquals($content, file_get_contents(__FILE__));
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        /**
         * 获取object信息
         */
        try {
            var_dump($object);
            $this->nosClient->GetObjectMeta($this->bucket, $object);
        } catch (NosException $e) {
            var_dump($e->getErrorMessage());
            $this->assertFalse(true);
        }

        /**
         * move object
         */
        $to_bucket = $this->bucket;
        $to_object = $object . '.move';
        $options = array();
        try {
            $this->nosClient->moveObject($this->bucket, $object, $to_bucket, $to_object, $options);
        } catch (NosException $e) {
            $this->assertFalse(true);
            var_dump($e->getMessage());
        }

        /**
         * 检查复制的是否相同
         */
        try {
            $content = $this->nosClient->getObject($this->bucket, $to_object);
            $this->assertEquals($content, file_get_contents(__FILE__));
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        /**
         * 设置meta信息
         */
//         try {
//             $options[NosClient::NOS_HEADERS]['x-nos-meta-meta1'] = 'aa';
//             $options[NosClient::NOS_HEADERS]['x-nos-meta-meta2'] = 'bb';
//             $this->nosClient->putObjectMeta($this->bucket, $object, $options);
//             $this->assertFalse(true);
//         } catch (NosException $e) {
//             $this->assertEquals("error_internal_permission", $e->getErrorMessage());
//         }

        /**
         * 查看
         *
         */
//         try {
//             $md5 = md5($content);
//             var_dump($md5);
//             $this->nosClient->isObjDeduplicate($this->bucket, $object,$md5);
//         } catch (NosException $e) {
//             var_dump($e->getMessage());
//             $this->assertFalse(true);
//         }



        /**
         * 列出bucket内的文件列表
         */
        $prefix = '';
        $delimiter = '/';
        $next_marker = '';
        $maxkeys = 1000;
        $options = array(
            'delimiter' => $delimiter,
            'prefix' => $prefix,
            'max-keys' => $maxkeys,
            'marker' => $next_marker,
        );

        try {
            $listObjectInfo = $this->nosClient->listObjects($this->bucket, $options);
            $objectList = $listObjectInfo->getObjectList();
            $this->assertNotNull($objectList);
            $this->assertTrue(is_array($objectList));
        } catch (NosException $e) {
            $this->assertTrue(false);
        }

        /**
         *  删除多个个文件
         */
        $object1 = "upload-test-object-name.txt。move";
        $object2 = "upload-test-object-name.txt.copy";
        $list = array($object1,$object2);
        try {
            $this->assertTrue($this->nosClient->doesObjectExist($this->bucket, $object2));
            $this->nosClient->deleteObjects($this->bucket, $list);
            $this->nosClient->deleteObjects($this->bucket, $list);
            $this->assertFalse($this->nosClient->doesObjectExist($this->bucket, $object2));
        } catch (NosException $e) {
            $this->assertFalse(true);
        }
    }

    public function setUp()
    {
        parent::setUp();
        $this->nosClient->putObject($this->bucket, 'upload-test-object-name.txt', file_get_contents(__FILE__));
    }
}

