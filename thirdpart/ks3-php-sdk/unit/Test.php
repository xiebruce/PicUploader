<?php
define("ENCRYPTPTION_STORAGE_MODE","InstructionFile");
require_once "../encryption/EncryptionUtil.php";
require_once "../Ks3Client.class.php";
require_once "../Ks3EncryptionClient.class.php";
require_once "TestUtil.php";
require_once "PUnit.php";
require_once "../lib/RequestCore.class.php";
class SDKTest extends PUnit{
	protected $bucket = "php-sdk-test";
	protected $key = "test==中/文？";
	protected $key_copy = "test中/文_copy？";
	protected $accesskey = "";
	protected $secrectkey = "";
	protected $client;
    protected $encryptionClient;
	protected $cachedir;
    protected $sseckey;
	public function __construct(){
		$this->client=new Ks3Client($this->accesskey,$this->secrectkey);
		$this->cachedir=KS3_API_PATH.DIRECTORY_SEPARATOR."unit".DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR;
        $filename = "secret.key";
        $handle = fopen($filename, "r");
        $sseckey = fread($handle, filesize ($filename));
        fclose($handle);
        $this->sseckey = $sseckey;
        $this->encryptionClient = new Ks3EncryptionClient($this->accesskey,$this->secrectkey,$sseckey);
	}
	public function before(){
		if($this->client->bucketExists(array("Bucket"=>$this->bucket))){
			$keys = array();
			$objects = $this->client->listObjects(array("Bucket"=>$this->bucket));
			foreach ($objects["Contents"] as $object) {
				array_push($keys, $object["Key"]);
			}
			$this->client->deleteObjects(array("Bucket"=>$this->bucket,"DeleteKeys"=>$keys));
		}else{
			$this->client->createBucket(array("Bucket"=>$this->bucket));
		}
	}
	public function testListBuckets(){
		$buckets = $this->client->listBuckets();
		$found = FALSE;
		foreach ($buckets as $bucket) {
			if($bucket["Name"] == $this->bucket)
				$found = TRUE;
		}
		if(!$found)
			throw new Exception("list buckets expected found ".$this->bucket.",but not found");
			
	}
	public function testDeleteBucket(){
		$this->client->putObjectByContent(array("Bucket"=>$this->bucket,"Key"=>"test","Content"=>""));
		$ex = NULL;
		try{
			$this->client->deleteBucket(array("Bucket"=>$this->bucket));
		}catch(Exception $e){
			$ex = $e;
		}
		if($ex == NULL||!($ex->errorCode === "BucketNotEmpty")){
			throw new Exception("delete bucket expected BucketNotEmpty but ".$ex);
		}
	}
	public function testBucketCORS(){
		$this->client->setBucketCORS($args = array(
       		"Bucket"=>$this->bucket,
        	"CORS"=>array(
        		array(
           			"AllowedMethod"=>array("GET","PUT"),
            		"AllowedOrigin"=>array("http://www.kingsoft.com"),
            		"AllowedHeader"=>array("*"),
            		"ExposeHeader"=>array("*"),
            		"MaxAgeSeconds"=>10
        		),
        		array(
         		  "AllowedMethod"=>array("GET","PUT"),
          		  "AllowedOrigin"=>array("*"),
          		  "AllowedHeader"=>array("*"),
          		  "ExposeHeader"=>array("*"),
          		  "MaxAgeSeconds"=>10
        		)
    		)));
 	    $cors = $this->client->getBucketCORS(array("Bucket"=>$this->bucket));
 	    $this->assertEquals(count($cors),2,"bucket cors count ");
   		$this->client->deleteBucketCORS(array("Bucket"=>$this->bucket));
   		$cors = $this->client->getBucketCORS(array("Bucket"=>$this->bucket));
		$this->assertEquals(count($cors),0,"bucket cors count ");
	}
	public function testCreateBucket(){
		$ex = NULL;
		try{
			$this->client->createBucket(array("Bucket"=>$this->bucket));
		}catch(Exception $e){
			$ex = $e;
		}
		if($ex == NULL||!($ex->errorCode === "BucketAlreadyExists")){
			throw new Exception("create bucket expected BucketAlreadyExists but ".$ex);
		}
	}
	public function testACL(){
		$this->client->setBucketAcl(array("Bucket"=>$this->bucket,"ACL"=>"public-read"));
		$acl = $this->client->getBucketAcl(array("Bucket"=>$this->bucket));
		$this->assertEquals($acl,"public-read","bucket acl");
	}
	public function testBucketLogging(){
		$this->client->setBucketLogging(array(
        	"Bucket"=>$this->bucket,
        	"BucketLogging"=>array(
            	"Enable"=>TRUE,
            	"TargetBucket"=>$this->bucket,
            	"TargetPrefix"=>"X-KSS"
            )
        ));
    	$logging = $this->client->getBucketLogging(array("Bucket"=>$this->bucket));
    	$this->assertEquals($logging["Enable"],TRUE,"bucket logging enable");

    	$this->client->setBucketLogging(array(
    		"Bucket"=>$this->bucket,
    		"BucketLogging"=>array(
        		"Enable"=>FALSE,//是否开启
        	)
    	));
    	$logging = $this->client->getBucketLogging(array("Bucket"=>$this->bucket));
    	$this->assertEquals($logging["Enable"],FALSE,"bucket logging enable");
	}
	public function testBucketLocation(){
		$location = $this->client->getBucketLocation(array("Bucket"=>$this->bucket));
		$this->assertEquals($location,"HANGZHOU","bucket location ");
	}
	public function testPutObjectByContentAndGetObjectContent(){
		$args = array(
        	"Bucket"=>$this->bucket,
        	"Key"=>$this->key,
        	"Content"=>"1234",//要上传的内容
        	"ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        	"ObjectMeta"=>array(
            	"Content-Type"=>"application/xml",
            	"Content-Length"=>3
            ),
        	"UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            	"x-kss-meta-test"=>"test"
            )
        );
        $this->client->putObjectByContent($args);
        $this->assertEquals($this->client->objectExists(array("Bucket"=>$this->bucket,"Key"=>$this->key)),TRUE,"object exists ");
        $meta = $this->client->getObjectMeta(array("Bucket"=>$this->bucket,"Key"=>$this->key));
        $this->assertEquals($meta["UserMeta"]["x-kss-meta-test"],"test","x-kss-meta-test");
        $this->assertEquals($meta["ObjectMeta"]["Content-Type"],"application/xml","Content-Type");
        $this->assertEquals($meta["ObjectMeta"]["Content-Length"],3,"Content-Length");
        $this->assertEquals($this->client->getObjectAcl(array("Bucket"=>$this->bucket,"Key"=>$this->key)),"public-read","object acl ");

        $s3Object = $this->client->getObject(array("Bucket"=>$this->bucket,"Key"=>$this->key));
        $this->assertEquals($s3Object["Content"],"123","s3 object content");
        $meta = $s3Object["Meta"];
        $this->assertEquals($meta["UserMeta"]["x-kss-meta-test"],"test","x-kss-meta-test");
        $this->assertEquals($meta["ObjectMeta"]["Content-Type"],"application/xml","Content-Type");
        $this->assertEquals($meta["ObjectMeta"]["Content-Length"],3,"Content-Length");

	}
	public function testPutObjectByFile(){
		$args = array(
        	"Bucket"=>$this->bucket,
        	"Key"=>$this->key,
        	"Content"=>array(
        		"content"=>$this->cachedir."test_file"
        	),//要上传的内容
        	"ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        	"ObjectMeta"=>array(
            	"Content-Type"=>"application/xml",
            	"Content-Length"=>100
            ),
        	"UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            	"x-kss-meta-test"=>"test"
            )
        );
        $this->client->putObjectByFile($args);
        $this->assertEquals($this->client->objectExists(array("Bucket"=>$this->bucket,"Key"=>$this->key)),TRUE,"object exists ");
        $meta = $this->client->getObjectMeta(array("Bucket"=>$this->bucket,"Key"=>$this->key));
        $this->assertEquals($meta["UserMeta"]["x-kss-meta-test"],"test","x-kss-meta-test");
        $this->assertEquals($meta["ObjectMeta"]["Content-Type"],"application/xml","Content-Type");
        $this->assertEquals($meta["ObjectMeta"]["Content-Length"],100,"Content-Length");
        $this->assertEquals($this->client->getObjectAcl(array("Bucket"=>$this->bucket,"Key"=>$this->key)),"public-read","object acl ");
	}
	public function testObjectAcl(){
		$this->client->putObjectByContent(array("Bucket"=>$this->bucket,"Key"=>$this->key,
"Content"=>"1234","ACL"=>"private"));
		$this->assertEquals($this->client->getObjectAcl(array("Bucket"=>$this->bucket,"Key"=>$this->key)),"private","object acl");
		$this->client->setObjectAcl(array("Bucket"=>$this->bucket,"Key"=>$this->key,"ACL"=>"public-read"));
		$this->assertEquals($this->client->getObjectAcl(array("Bucket"=>$this->bucket,"Key"=>$this->key)),"public-read","object acl");
	}
	public function testDeleteObject(){
		$this->client->putObjectByContent(array("Bucket"=>$this->bucket,"Key"=>$this->key,
"Content"=>"1234"));
		$this->client->deleteObject(array("Bucket"=>$this->bucket,"Key"=>$this->key));
		$this->assertEquals($this->client->objectExists(array("Bucket"=>$this->bucket,"Key"=>$this->key)),FALSE,"object exits");
	}
	public function testDeleteObjects(){
		$this->client->putObjectByContent(array("Bucket"=>$this->bucket,"Key"=>$this->key,
"Content"=>"1234"));
		$this->client->deleteObjects(array("Bucket"=>$this->bucket,"DeleteKeys"=>array($this->key)));
		$this->assertEquals($this->client->objectExists(array("Bucket"=>$this->bucket,"Key"=>$this->key)),FALSE,"object exits");		
	}
	public function testCopyObject(){
		$this->client->putObjectByContent(array("Bucket"=>$this->bucket,"Key"=>$this->key,
"Content"=>"1234"));
		$this->client->copyObject(array("Bucket"=>$this->bucket,"Key"=>$this->key_copy,"CopySource"=>array("Bucket"=>$this->bucket,"Key"=>$this->key)));
		$this->assertEquals($this->client->objectExists(array("Bucket"=>$this->bucket,"Key"=>$this->key)),TRUE,"object exits");
		$this->assertEquals($this->client->objectExists(array("Bucket"=>$this->bucket,"Key"=>$this->key_copy)),TRUE
			,"object exits");
	}
	public function testPutAndGetObject(){
		$args = array(
        	"Bucket"=>$this->bucket,
        	"Key"=>$this->key,
        	"Content"=>array(
        		"content"=>$this->cachedir."test_file"
        	),//要上传的内容
        	"ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        	"ObjectMeta"=>array(
            	"Content-Type"=>"application/xml",
            ),
        	"UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            	"x-kss-meta-test"=>"test"
            )
        );
        $this->client->putObjectByFile($args);
        $this->client->getObject(array("Bucket"=>$this->bucket,"Key"=>$this->key,"WriteTo"=>$this->cachedir."down"));
        $md5 = md5_file($this->cachedir."down");
        $md5pre = md5_file($this->cachedir."test_file");
        @unlink($this->cachedir."down");
        $this->assertEquals($md5,$md5pre,"contentmd5");
	}
	public function testPutAndGetObjectRanges(){
		$args = array(
        	"Bucket"=>$this->bucket,
        	"Key"=>$this->key,
        	"Content"=>array(
        		"content"=>$this->cachedir."test_file"
        	),//要上传的内容
        	"ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        	"ObjectMeta"=>array(
            	"Content-Type"=>"application/xml",
            ),
        	"UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            	"x-kss-meta-test"=>"test"
            )
        );
        $this->client->putObjectByFile($args);
        rangeGetAndCheckMd5($this->client,$this->bucket,$this->key,$this->cachedir."down",md5_file($this->cachedir."test_file"));
	}
	public function testInitAndAbortMultipart(){
		$initResult = $this->client->initMultipartUpload(array("Bucket"=>$this->bucket,"Key"=>$this->key));
		$uid = $initResult["UploadId"];
		$listParts = $this->client->listParts(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uid)));
		$this->client->abortMultipartUpload(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uid)));
		$ex = NULL;
		try{
			$this->client->listParts(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uid)));
		}catch(Exception $e){
			$ex = $e;
		}
		if($ex == NULL||!($ex->errorCode === "NoSuchUpload")){
			throw new Exception("create bucket expected NoSuchUpload but ".$ex);
		}
	}
	public function testMultipartUpload(){
		generateFile(1024*1024,$this->cachedir."multi");
		//初始化分开上传，获取uploadid
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "ACL"=>"public-read",
            "UserMeta"=>array(
            	"x-kss-meta-test"=>"example"
            ),
        "ObjectMeta"=>array(
            "Content-Type"=>"application/xml"
            )
        );
        $uploadid = $this->client->initMultipartUpload($args);
        $uploadid = $uploadid["UploadId"];//获取到uploadid
        //开始上传
        $file = $this->cachedir."multi";//要上传的文件
        $partsize = 1024*100;
        $resource = fopen($file,"r");
        $stat = fstat($resource);
        $total = $stat["size"];//获取文件的总大小
        fclose($resource);
        $count = (int)(($total-1)/$partsize)+1;;//计算文件需要分几块上传
        for($i = 0;$i < $count;$i++){
            //依次上传每一块
            $args=array(
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array(
                    "partNumber"=>$i+1,
                    "uploadId"=>$uploadid
                ),
                "ObjectMeta"=>array(
                    "Content-Length"=>min($partsize,$total-$partsize*$i)//每次上传$partsize大小
                ),
                "Content"=>array(
                    "content"=>$file,
                    "seek_position"=>$partsize*$i//跳过之前已经上传的
                )
            );
            $etag = $this->client->uploadPart($args);
            $etag = $etag["ETag"];
        }
        $parts = $this->client->listParts(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uploadid)));
        //结束上传
        $args=array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Options"=>array("uploadId"=>$uploadid),
            "Parts"=>$parts["Parts"]//使用之前列出的块完成分开上传
        );
        $result = $this->client->completeMultipartUpload($args);
        $this->assertEquals($this->client->getObjectAcl(array("Bucket"=>$this->bucket,"Key"=>$this->key)),"public-read","object acl");
        $meta = $this->client->getObjectMeta(array("Bucket"=>$this->bucket,"Key"=>$this->key));
        $this->assertEquals($meta["ObjectMeta"]["Content-Type"],"application/xml","Content-Type");
        $this->assertEquals($meta["ObjectMeta"]["Content-Length"],filesize($this->cachedir."multi"),"Content-Length");
        $this->assertEquals($meta["UserMeta"]["x-kss-meta-test"],"example","x-kss-meta-test");
        rangeGetAndCheckMd5($this->client,$this->bucket,$this->key,$this->cachedir."down",md5_file($this->cachedir."multi"));
        @unlink($this->cachedir."multi");
	}
	public function testListBucketsPresignedUrl(){
		$url = $this->client->generatePresignedUrl(
			array(
				"Method"=>"GET",
				"Options"=>array("Expires"=>60*10),
				"Headers"=>array("Content-Type"=>"text/plain")
				));
		$httpRequest = new RequestCore($url);
		$httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
		$httpRequest->send_request();
		$body = $httpRequest->get_response_body ();	
		$this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"list buckets status code");
	}
    public function testHeadBucketPresignedUrl(){
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"HEAD",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"text/plain")
                )
            );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("HEAD");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"head bucket status code");
    }
    public function testDeleteBucketPresignedUrl(){
        $this->client->putObjectByContent(array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Content"=>"123"
            )
            );
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"DELETE",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"text/plain")
                )
            );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("DELETE");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,409,"delete bucket status code");      
    }
    public function testGetBucketAclPresignedUrl(){
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"GET",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10,"acl"=>NULL),
                "Headers"=>array("Content-Type"=>"text/plain")
                )
            );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"get bucket acl status code");      
    }
    public function testPutBucketPresignedUrl(){
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"PUT",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"text/plain")
                )
            );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("PUT");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,409,"delete bucket status code");      
    }
    public function testPutBucketAclPresignedUrl(){
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"PUT",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10,"acl"=>NULL),
                "Headers"=>array("Content-Type"=>"text/plain","x-kss-acl"=>"public-read")
                )
            );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("PUT");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->add_header("x-kss-acl","public-read");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"put bucket acl status code"); 
        $this->assertEquals($this->client->getBucketAcl(array("Bucket"=>$this->bucket)),"public-read","bucket acl");
    }
    public function testListObjectsPresignedUrl(){
        $url = $this->client->generatePresignedUrl(array(
            "Method"=>"GET",
            "Bucket"=>$this->bucket,
            "Options"=>array("Expires"=>60*10,"delimiter"=>"/"),
            "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"list objects status code"); 
    }
    public function testGetBucketLoggingPresignedUrl(){
        $url = $this->client->generatePresignedUrl(array(
            "Method"=>"GET",
            "Bucket"=>$this->bucket,
            "Options"=>array("Expires"=>60*10,"logging"=>""),
            "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"get bucket logging status code"); 
    }
    public function testPutBucketLoggingPresignedUrl(){
        $xml = new SimpleXmlElement('<BucketLoggingStatus xmlns="http://s3.amazonaws.com/doc/2006-03-01/" />');
        $xml = $xml->asXml();
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"PUT",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10,"logging"=>NULL),
                "Headers"=>array("Content-Type"=>"application/xml")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("PUT");
        $httpRequest->add_header("Content-Type","application/xml");
        $httpRequest->add_header("Content-Length",strlen($xml));
        $httpRequest->request_body=$xml;
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"put bucket logging status code"); 
    }
    public function testGetBucketLocationPresignedUrl(){
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"GET",
                "Bucket"=>$this->bucket,
                "Options"=>array("Expires"=>60*10,"location"=>NULL),
                "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"get bucket location status code"); 
    }
    public function testDeleteObjectPresignedUrl(){
        $this->client->putObjectByContent(array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Content"=>"123"
            )
        );
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"DELETE",
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("DELETE");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,204,"delete object status code"); 
    }
    public function testGetObjectPresignedUrl(){
        $this->client->putObjectByContent(array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Content"=>"123"
            )
        );
        $url = $this->client->generatePresignedUrl(
            array(
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"get object status code"); 
        $this->assertEquals($body,"123","get object body"); 
    }
    public function testPutObjectPresignedUrl(){
        $body = "123";
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"PUT",
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"application/ocet-stream")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("PUT");
        $httpRequest->add_header("Content-Type","application/ocet-stream");
        $httpRequest->add_header("Content-Length",strlen($body));
        $httpRequest->request_body=$body;
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"put object status code"); 
    }
    public function testHeadObjectPresignedUrl(){
        $this->testPutObjectPresignedUrl();
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"HEAD",
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array("Expires"=>60*10),
                "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("HEAD");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"head object status code"); 
    }
    public function testGetObjectAclPresignedUrl(){
        $this->testPutObjectPresignedUrl();
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"GET",
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array("Expires"=>60*10,"acl"=>NULL),
                "Headers"=>array("Content-Type"=>"text/plain")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("GET");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"get object acl status code");         
    }
    public function testPutObjectAclPresignedUrl(){
        $this->testPutObjectPresignedUrl();
        $url = $this->client->generatePresignedUrl(
            array(
                "Method"=>"PUT",
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "Options"=>array("Expires"=>60*10,"acl"=>NULL),
                "Headers"=>array("Content-Type"=>"text/plain","x-kss-acl"=>"public-read")
            )
        );
        $httpRequest = new RequestCore($url);
        $httpRequest->set_method("PUT");
        $httpRequest->add_header("Content-Type","text/plain");
        $httpRequest->add_header("x-kss-acl","public-read");
        $httpRequest->send_request();
        $body = $httpRequest->get_response_body (); 
        $this->assertEquals($httpRequest->get_response_code()." body:".$body,200,"put object acl status code");         
    }
    public function testPutObjectSSEAndGetHeadObject(){
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Content"=>"12345",//要上传的内容
             "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
             "ObjectMeta"=>array(//设置object的元数据,可以设置"Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires"。当设置了Content-Length时，请勿大于实际长度，如果小于实际长度，将只上传部分内容。
                "Content-Type"=>"binay/ocet-stream"
            ),
            "UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
              "x-kss-meta-test"=>"test"
            ),
            "SSE"=>array(
                "Algm"=>"AES256"//暂时支持AES256
             )
        );
        $result = $this->client->putObjectByContent($args);
        $this->assertEquals($result["SSEAlgm"],"AES256");

        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key
            );
        $result = $this->client->getObjectMeta($args);
        $this->assertEquals($result["ObjectMeta"]["SSEAlgm"],"AES256");
        rangeGetAndCheckMd5($this->client,$this->bucket,$this->key,$this->cachedir."down",md5("12345"));
    }
    public function testPutObjectSSECAndGetHeadObject(){
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Content"=>"12345",//要上传的内容
             "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
             "ObjectMeta"=>array(//设置object的元数据,可以设置"Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires"。当设置了Content-Length时，请勿大于实际长度，如果小于实际长度，将只上传部分内容。
                "Content-Type"=>"binay/ocet-stream"
            ),
            "UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
              "x-kss-meta-test"=>"test"
            ),
            "SSEC"=>array(
                "Key"=>$this->sseckey
             )
        );
        $result = $this->client->putObjectByContent($args);
        $this->assertEquals($result["SSECAlgm"],"AES256");
        $this->assertEquals($result["SSECKeyMD5"],Utils::hex_to_base64(md5($this->sseckey)));

        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "SSEC"=>array(
                "Key"=>$this->sseckey
             )
            );
        $result = $this->client->getObjectMeta($args);
        $this->assertEquals($result["ObjectMeta"]["SSECAlgm"],"AES256");
        $this->assertEquals($result["ObjectMeta"]["SSECKeyMD5"],Utils::hex_to_base64(md5($this->sseckey)));

        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "WriteTo"=>$this->cachedir."down", //文件保存路径,必须提供。可以是resource
            "SSEC"=>array(
                "Key"=>$this->sseckey
             )
        );
        $this->client->getObject($args);
        $this->assertEquals("12345",file_get_contents($this->cachedir."down"));
        @unlink($this->cachedir."down");
    }
    public function testMultipartUploadSSE(){
        $file = $this->cachedir."test_file";
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "SSE"=>array(
                "Algm"=>"AES256"
                )
        );
        $uploadid = $this->client->initMultipartUpload($args);

        $this->assertEquals($uploadid["SSEAlgm"],"AES256");

        $uploadid = $uploadid["UploadId"];
        //开始上传
        $args=array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Options"=>array(
                "partNumber"=>1,
                "uploadId"=>$uploadid
                ),
            "Content"=>array(
                "content"=>$file
                )
            );
        $etag = $this->client->uploadPart($args);

        $this->assertEquals($etag["SSEAlgm"],"AES256");
        $etag = $etag["ETag"];

        $parts = $this->client->listParts(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uploadid)));
        //结束上传
        $args=array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Options"=>array("uploadId"=>$uploadid),
            "Parts"=>$parts["Parts"],
        );
        $result = $this->client->completeMultipartUpload($args);
        $this->assertEquals($result["SSEAlgm"],"AES256");
    }
    public function testMultipartUploadSSEC(){
        $file = $this->cachedir."test_file";
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "SSEC"=>array(
                "Key"=>$this->sseckey
                )
        );
        $uploadid = $this->client->initMultipartUpload($args);

        $this->assertEquals($uploadid["SSECAlgm"],"AES256");
        $this->assertEquals($uploadid["SSECKeyMD5"],Utils::hex_to_base64(md5($this->sseckey)));

        $uploadid = $uploadid["UploadId"];
        //开始上传
        $args=array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Options"=>array(
                "partNumber"=>1,
                "uploadId"=>$uploadid
                ),
            "Content"=>array(
                "content"=>$file
                ),
            "SSEC"=>array(
                "Key"=>$this->sseckey
                )
            );
        $etag = $this->client->uploadPart($args);

        $this->assertEquals($etag["SSECAlgm"],"AES256");
        $this->assertEquals($etag["SSECKeyMD5"],Utils::hex_to_base64(md5($this->sseckey)));

        $etag = $etag["ETag"];

        $parts = $this->client->listParts(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uploadid)));
        //结束上传
        $args=array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Options"=>array("uploadId"=>$uploadid),
            "Parts"=>$parts["Parts"],
        );
        $result = $this->client->completeMultipartUpload($args);
        $this->assertEquals($result["SSECAlgm"],"AES256");
        $this->assertEquals($result["SSECKeyMD5"],Utils::hex_to_base64(md5($this->sseckey)));
    }
    public function testCopySSECObject(){
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Content"=>"12345",//要上传的内容
             "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
             "ObjectMeta"=>array(//设置object的元数据,可以设置"Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires"。当设置了Content-Length时，请勿大于实际长度，如果小于实际长度，将只上传部分内容。
                "Content-Type"=>"binay/ocet-stream"
            ),
            "UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
              "x-kss-meta-test"=>"test"
            ),
            "SSEC"=>array(
                "Key"=>$this->sseckey
             )
        );
        $result = $this->client->putObjectByContent($args);

        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>"copy".$this->key_copy,
            "CopySource"=>array(
                "Bucket"=>$this->bucket,
                "Key"=>$this->key
                ),
             "SSECSource"=>array(
                "Key"=>$this->sseckey
                ),
             "SSEC"=>array(
                "Key"=>$this->sseckey
                )
            );
        $result = $this->client->copyObject($args);
    }
    public function testPutObjectByContentAndGetObjectUsingEncyptionMeta(){
        for($i = 45 ;$i < 60;$i++){

            $content = EncryptionUtil::genereateOnceUsedKey($i);

            $args = array(
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "ACL"=>"public-read",
                "Content"=>$content
            );
            $this->encryptionClient->putObjectByContent($args);
            rangeGetAndCheckMd5($this->encryptionClient,$this->bucket,$this->key,
               $this->cachedir."down",md5($args["Content"]));
        }
    }
    public function testPutObjectByFileAndGetObjectUsingEncyptionMeta(){
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "ACL"=>"public-read",
            "Content"=>array(
                "content"=>$this->cachedir."test_file"
            )
        );
        $this->encryptionClient->putObjectByFile($args);
        rangeGetAndCheckMd5($this->encryptionClient,$this->bucket,$this->key,
               $this->cachedir."down",md5_file($this->cachedir."test_file"));
    }
    public function testMultipartUploadUsingEncyptionMeta(){
        generateFile(1024*1024,$this->cachedir."multi");
        //初始化分开上传，获取uploadid
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
        );
        $uploadid = $this->encryptionClient->initMultipartUpload($args);
        $uploadid = $uploadid["UploadId"];//获取到uploadid
        //开始上传

        $file = $this->cachedir."multi";//要上传的文件
        $partsize = 1024*100;
        $resource = fopen($file,"r");
        $stat = fstat($resource);
        $total = $stat["size"];//获取文件的总大小
        fclose($resource);
        $count = (int)(($total-1)/$partsize)+1;//计算文件需要分几块上传
        for($i = 0;$i < $count;$i++){
            //依次上传每一块
            echo "upload".$i."\r\n";
            $args=array(
                "Bucket"=>$this->bucket,
                "Key"=>$this->key,
                "LastPart"=>($i===$count-1),
                "Options"=>array(
                    "partNumber"=>$i+1,
                    "uploadId"=>$uploadid
                ),
                "ObjectMeta"=>array(
                    "Content-Length"=>min($partsize,$total-$partsize*$i)//每次上传$partsize大小
                ),
                "Content"=>array(
                    "content"=>$file,
                    "seek_position"=>$partsize*$i//跳过之前已经上传的
                )
            );
            $etag = $this->encryptionClient->uploadPart($args);
            $etag = $etag["ETag"];
        }
        $parts = $this->encryptionClient->listParts(array("Bucket"=>$this->bucket,"Key"=>$this->key,"Options"=>array("uploadId"=>$uploadid)));
        //结束上传
        $args=array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "Options"=>array("uploadId"=>$uploadid),
            "Parts"=>$parts["Parts"]//使用之前列出的块完成分开上传
        );
        $result = $this->encryptionClient->completeMultipartUpload($args);

        rangeGetAndCheckMd5($this->encryptionClient,$this->bucket,$this->key,
            $this->cachedir."down",md5_file($file));
        @unlink($this->cachedir."multi");
    }
    public function testPutObjectByContentAndGetObject(){
        @unlink($this->cachedir."down");
        $content = EncryptionUtil::genereateOnceUsedKey(500);
        $args = array(
            "Bucket"=>$this->bucket,
            "Key"=>$this->key,
            "ACL"=>"public-read",
            "Content"=>$content
        );
        $this->encryptionClient->putObjectByContent($args);
        $start = (int)rand(0,520);
        $end = (int)rand($start,520);
        $s3Object = $this->encryptionClient->getObject(
        array("Bucket"=>$this->bucket,"Key"=>$this->key,
            "Range"=>"bytes=".$start."-".$end)
        );
        $this->assertEquals(substr($content,$start,$end-$start+1),$s3Object["Content"]);
    }
    public function test01(){
        $this->client->listObjects(array("Bucket"=>$this->bucket));
    }
}
$test = new SDKTest();
$methods = array(
    //"testRangeGetFile",
    "testObjectAcl"
    );
$test->run();
?>
