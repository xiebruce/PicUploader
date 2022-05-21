<?php

namespace Qcloud\Cos\Tests;

use Qcloud\Cos\Exception\ServiceResponseException;

class CosClientBucketTest extends TestCosClientBase {

    private $bucket2;
    private $prBucket;
    private $hyphenBucket;
    private $doubleHyphenBucket;

    /**********************************
     * TestBucket
     **********************************/

    /*
    * get Service
    * 200
    */
    public function testGetService()
    {
        try {
            $this->cosClient->ListBuckets();
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
    * put bucket,bucket已经存在
    * BucketAlreadyOwnedByYou
    * 409
    */
    public function testCreateExistingBucket()
    {
        try {
            $this->cosClient->createBucket(['Bucket' => $this->bucket]);
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'BucketAlreadyOwnedByYou' && $e->getStatusCode() === 409);
        }
    }


    /*
     * put bucket,bucket名称非法
     * InvalidBucketName
     * 400
     */
    public function testCreateInvalidBucket()
    {
        try {
            $this->cosClient->createBucket(array('Bucket' => "qwe_123".$this->bucket));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'InvalidBucketName' && $e->getStatusCode() === 400);
        }
    }

    /*
     * put bucket，设置bucket公共权限为private
     * 200
     */
    public function testCreatePrivateBucket()
    {
        try {
            $this->cosClient->createBucket(
                array(
                    'Bucket' => $this->bucket2,
                    'ACL'=>'private'
                ));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket，设置bucket公共权限为public-read
     * 200
     */
    public function testCreatePublicReadBucket()
    {
        try {
            $this->cosClient->createBucket(
                array(
                    'Bucket' => $this->prBucket ,
                    'ACL'=>'public-read'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            print($e);
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket，公共权限非法
     * InvalidArgument
     * 400
     */
    public function testCreateInvalidACLBucket()
    {
        try {
            $this->cosClient->createBucket(
                array(
                    'Bucket' => $this->bucket2,
                    'ACL'=>'public'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'InvalidArgument' && $e->getStatusCode() === 400);
        }
    }

    /*
     * put bucket acl，设置bucket公共权限为private
     * 200
     */
    public function testPutBucketAclPrivate()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' => $this->bucket,
                    'ACL'=>'private'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket公共权限为public-read
     * 200
     */
    public function testPutBucketAclPublicRead()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' => $this->bucket,
                    'ACL'=>'public-read'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，公共权限非法
     * InvalidArgument
     * 400
     */
    public function testPutBucketAclInvalid()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' => $this->bucket,
                    'ACL'=>'public'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'InvalidArgument' && $e->getStatusCode() === 400);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限为grant-read
     * 200
     */
    public function testPutBucketAclReadToUser()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantRead' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限为grant-write
     * 200
     */
    public function testPutBucketAclWriteToUser()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantWrite' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限为grant-full-control
     * 200
     */
    public function testPutBucketAclFullToUser()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantFullControl' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限，同时授权给多个账户
     * 200
     */
    public function testPutBucketAclToUsers()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantFullControl' => 'id="qcs::cam::uin/100018617869:uin/100018617869",id="qcs::cam::uin/100018617869:uin/100018617869",id="qcs::cam::uin/100018617869:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限，授权给子账号
     * 200
     */
    public function testPutBucketAclToSubuser()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantFullControl' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限，同时指定read、write和fullcontrol
     * 200
     */
    public function testPutBucketAclReadWriteFull()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantRead' => 'id="qcs::cam::uin/123:uin/123"',
                    'GrantWrite' => 'id="qcs::cam::uin/100018617869:uin/100018617869"',
                    'GrantFullControl' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限，grant值非法
     * InvalidArgument
     * 400
     */
    public function testPutBucketAclInvalidGrant()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket,
                    'GrantFullControl' => 'id="qcs::camuin/321023:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'InvalidArgument' && $e->getStatusCode() === 400);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限，通过body方式授权
     * 200
     */
    public function testPutBucketAclByBody()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' => $this->bucket,
                    'Grants' => array(
                        array(
                            'Grantee' => array(
                                'DisplayName' => 'qcs::cam::uin/100018617869:uin/100018617869',
                                'ID' => 'qcs::cam::uin/100018617869:uin/100018617869',
                                'Type' => 'CanonicalUser',
                            ),
                            'Permission' => 'FULL_CONTROL',
                        ),
                    ),
                    'Owner' => array(
                        'DisplayName' => 'qcs::cam::uin/100018617869:uin/100018617869',
                        'ID' => 'qcs::cam::uin/100018617869:uin/100018617869',
                    )
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，设置bucket账号权限，通过body方式授权给anyone
     * 200
     */
    public function testPutBucketAclByBodyToAnyone()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' => $this->bucket,
                    'Grants' => array(
                        array(
                            'Grantee' => array(
                                'DisplayName' => 'qcs::cam::anyone:anyone',
                                'ID' => 'qcs::cam::anyone:anyone',
                                'Type' => 'CanonicalUser',
                            ),
                            'Permission' => 'FULL_CONTROL',
                        ),
                    ),
                    'Owner' => array(
                        'DisplayName' => 'qcs::cam::uin/100018617869:uin/100018617869',
                        'ID' => 'qcs::cam::uin/100018617869:uin/100018617869',
                    )
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket acl，bucket不存在
     * NoSuchBucket
     * 404
     */
    public function testPutBucketAclBucketNonExisted()
    {
        try {
            $this->cosClient->PutBucketAcl(
                array(
                    'Bucket' =>  $this->bucket2,
                    'GrantFullControl' => 'id="qcs::cam::uin/321023:uin/100018617869"'
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'NoSuchBucket' && $e->getStatusCode() === 404);
        }
    }

    /*
 * put bucket acl，覆盖设置
 * x200
 */
    public function testPutBucketAclCover()
    {
        try {
            $this->cosClient->PutBucketAcl(array(
                'Bucket' =>  $this->bucket,
                'GrantFullControl' => 'id="qcs::cam::uin/100018617869:uin/100018617869"',
                'GrantRead' => 'id="qcs::cam::uin/100018617869:uin/100018617869"',
                'GrantWrite' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'));
            $this->cosClient->PutBucketAcl(array(
                'Bucket' =>  $this->bucket,
                'GrantWrite' => 'id="qcs::cam::uin/100018617869:uin/100018617869"'));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * 正常head bucket
     * 200
     */
    public function testHeadBucket()
    {
        try {
            $this->cosClient->HeadBucket(array(
                'Bucket' =>  $this->bucket));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * head bucket，bucket不存在
     * NoSuchBucket
     * 404
     */
    public function testHeadBucketNonExisted()
    {
        try {
            $this->cosClient->HeadBucket(array(
                'Bucket' =>  $this->bucket2));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'NoSuchBucket' && $e->getStatusCode() === 404);
        }
    }

    /*
     * get bucket,bucket为空
     * 200
     */
    public function testGetBucketEmpty()
    {
        try {
            $this->cosClient->ListObjects(array(
                'Bucket' =>  $this->bucket));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * get bucket, prefix为中文
     * 200
     */
    public function testGetBucketWithChinese()
    {
        try {
            $this->cosClient->ListObjects(array(
                'Bucket' =>  $this->bucket,
                'Prefix' => '中文',
                'Delimiter' => '/'));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * get bucket，bucket不存在
     * NoSuchBucket
     * 404
     */
    public function testGetBucketNonExisted()
    {
        try {
            $this->cosClient->ListObjects(
                array(
                    'Bucket' =>  $this->bucket2
                )
            );
            $this->assertTrue(False);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'NoSuchBucket' && $e->getStatusCode() === 404);
        }
    }


    /*
     * put bucket cors，cors规则包含多条
     * 200
     */
    public function testPutBucketCors()
    {
        try {
            $this->cosClient->putBucketCors(
                array(
                    'Bucket' => $this->bucket,
                    'CORSRules' => array(
                        array(
                            'ID' => '1234',
                            'AllowedHeaders' => array('*',),
                            'AllowedMethods' => array('PUT',),
                            'AllowedOrigins' => array('*',),
                            'ExposeHeaders' => array('*',),
                            'MaxAgeSeconds' => 1,
                        ),
                        array(
                            'ID' => '12345',
                            'AllowedHeaders' => array('*',),
                            'AllowedMethods' => array('GET',),
                            'AllowedOrigins' => array('*',),
                            'ExposeHeaders' => array('*',),
                            'MaxAgeSeconds' => 1,
                        ),
                    ),
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }


    /*
     * 正常get bucket cors
     * 200
     */
    public function testGetBucketCors()
    {
        try {
            $this->cosClient->putBucketCors(
                array(
                    'Bucket' => $this->bucket,
                    'CORSRules' => array(
                        array(
                            'ID' => '1234',
                            'AllowedHeaders' => array('*',),
                            'AllowedMethods' => array('PUT',),
                            'AllowedOrigins' => array('*',),
                            'ExposeHeaders' => array('*',),
                            'MaxAgeSeconds' => 1,
                        ),
                        array(
                            'ID' => '12345',
                            'AllowedHeaders' => array('*',),
                            'AllowedMethods' => array('GET',),
                            'AllowedOrigins' => array('*',),
                            'ExposeHeaders' => array('*',),
                            'MaxAgeSeconds' => 1,
                        ),
                    ),
                )
            );
            $this->cosClient->getBucketCors(
                array(
                    'Bucket' => $this->bucket
                )
            );
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * bucket未设置cors规则，发送get bucket cors
     * NoSuchCORSConfiguration
     * 404
     */
    public function testGetBucketCorsNull()
    {
        try {
            $this->cosClient->deleteBucketCors(
                array(
                    'Bucket' => $this->bucket
                )
            );
            $rt = $this->cosClient->getBucketCors(
                array(
                    'Bucket' => $this->bucket
                )
            );
            $this->assertTrue(False);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'NoSuchCORSConfiguration' && $e->getStatusCode() === 404);
        }
    }

    /*
     * 正常get bucket lifecycle
     * 200
     */
    public function testGetBucketLifecycle()
    {
        try {
            $result = $this->cosClient->putBucketLifecycle(
                array(
                    'Bucket' => $this->bucket,
                    'Rules' => array(
                        array(
                            'Status' => 'Enabled',
                            'Filter' => array(
                                'Tag' => array(
                                    'Key' => 'datalevel',
                                    'Value' => 'backup'
                                )
                            ),
                            'Transitions' => array(
                                array(
                                    # 30天后转换为Standard_IA
                                    'Days' => 30,
                                    'StorageClass' => 'Standard_IA'),
                                array(
                                    # 365天后转换为Archive
                                    'Days' => 365,
                                    'StorageClass' => 'Archive')
                            ),
                            'Expiration' => array(
                                # 3650天后过期删除
                                'Days' => 3650,
                            )
                        )
                    )
                )
            );
            $result = $this->cosClient->getBucketLifecycle(array(
                'Bucket' => $this->bucket,
            ));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * 正常delete bucket lifecycle
     * 200
     */
    public function testDeleteBucketLifecycle()
    {
        try {
            $result = $this->cosClient->putBucketLifecycle(
                array(
                    'Bucket' => $this->bucket,
                    'Rules' => array(
                        array(
                            'Status' => 'Enabled',
                            'Filter' => array(
                                'Tag' => array(
                                    'Key' => 'datalevel',
                                    'Value' => 'backup'
                                )
                            ),
                            'Transitions' => array(
                                array(
                                    # 30天后转换为Standard_IA
                                    'Days' => 30,
                                    'StorageClass' => 'Standard_IA'),
                                array(
                                    # 365天后转换为Archive
                                    'Days' => 365,
                                    'StorageClass' => 'Archive')
                            ),
                            'Expiration' => array(
                                # 3650天后过期删除
                                'Days' => 3650,
                            )
                        )
                    )
                )
            );
            $result = $this->cosClient->deleteBucketLifecycle(array(
                // Bucket is required
                'Bucket' => $this->bucket,
            ));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket lifecycle，请求body中不指定filter
     * 200
     */
    public function testPutBucketLifecycleNonFilter()
    {
        try {
            $result = $this->cosClient->putBucketLifecycle(
                array(
                    'Bucket' => $this->bucket,
                    'Rules' => array(
                        array(
                            'Expiration' => array(
                                'Days' => 1000,
                            ),
                            'ID' => 'id1',
                            'Status' => 'Enabled',
                            'Transitions' => array(
                                array(
                                    'Days' => 100,
                                    'StorageClass' => 'Standard_IA'),
                            ),
                        ),
                    )
                )
            );
            $result = $this->cosClient->deleteBucketLifecycle(array(
                // Bucket is required
                'Bucket' => $this->bucket,
            ));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket,bucket名称带有-
     * 200
     */
    public function testPutBucket2()
    {
        try {
            $this->cosClient->createBucket(array('Bucket' => $this->hyphenBucket));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            print($e);
            $this->assertFalse(True);
        }
    }

    /*
     * put bucket,bucket名称带有两个-
     * 200
     */
    public function testPutBucket3()
    {
        try {
            $this->cosClient->createBucket(array('Bucket' => $this->doubleHyphenBucket));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            print($e);
            $this->assertFalse(True);
        }
    }

    /*
     * 正常get bucket location
     * 200
     */
    public function testGetBucketLocation()
    {
        try {
            $this->cosClient->getBucketLocation(array('Bucket' => $this->bucket));
            $this->assertTrue(True);
        } catch (ServiceResponseException $e) {
            $this->assertFalse(True);
        }
    }

    /*
     * bucket不存在，发送get bucket location请求
     * NoSuchBucket
     * 404
     */
    public function testGetBucketLocationNonExisted()
    {
        try {
            $this->cosClient->getBucketLocation(array('Bucket' => $this->bucket2));
            $this->assertTrue(False);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'NoSuchBucket' && $e->getStatusCode() === 404);
        }
    }

    /*
    * 上传文件Bucket不存在
    * NoSuchBucket
    * 404
    */
    public function testPutObjectIntoNonExistedBucket() {
        try {
            $this->cosClient->putObject(
                array(
                    'Bucket' => $this->bucket2, 'Key' => Common::FILE_NAME, 'Body' => 'Hello World'
                )
            );
            $this->assertTrue(False);
        } catch (ServiceResponseException $e) {
            $this->assertTrue($e->getExceptionCode() === 'NoSuchBucket');
            $this->assertTrue($e->getStatusCode() === 404);
        }
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->bucket2 = "tmp-".$this->bucket;
        $this->prBucket = 'public-read' . $this->bucket2;
        $this->hyphenBucket = '12345-'. $this->bucket;
        $this->doubleHyphenBucket = '12-333-4445' . $this->bucket2;
    }

    protected function tearDown(): void {
        parent::tearDown();
        try {
            $this->cosClient->deleteBucket(array('Bucket' => $this->bucket2));
        } catch(\Exception $e) {
        }
        try {
            $this->cosClient->deleteBucket(array('Bucket' => $this->prBucket));
        } catch(\Exception $e) {
        }
        try {
            $this->cosClient->deleteBucket(array('Bucket' => $this->hyphenBucket));
        } catch(\Exception $e) {
        }
        try {
            $this->cosClient->deleteBucket(array('Bucket' => $this->doubleHyphenBucket));
        } catch(\Exception $e) {
        }
    }
}
