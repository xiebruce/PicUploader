# KS3 SDK For PHP使用指南 
---

[TOC]

## 1 概述
此SDK适用于PHP 5及以上版本。基于KS3 API 构建。使用此 SDK 构建您的网络应用程序，能让您以非常便捷地方式将数据安全地存储到金山云存储上。  


## 2 环境准备
配置PHP 5 以上开发环境  
添加curl拓展  
下载KS3 SDK For PHP  
在项目中引用该php文件，Ks3Client.class.php  

## 3 初始化
### 3.1 下载SDK
[https://github.com/ks3sdk/ks3-php-sdk](https://github.com/ks3sdk/ks3-php-sdk)下载SDK
### 3.2 获取秘钥
1、开通KS3服务，[http://www.ksyun.com/user/register](http://www.ksyun.com/user/register) 注册账号  
2、进入控制台, [http://ks3.ksyun.com/console.html#/setting](http://ks3.ksyun.com/console.html#/setting) 获取AccessKeyID 、AccessKeySecret
### 3.3 配置
在引用Ks3Client.class.php文件前定义  
//是否使用VHOST  
define("KS3_API_VHOST",FALSE);    
//是否开启日志(写入日志文件)  
define("KS3_API_LOG",TRUE);  
//是否显示日志(直接输出日志)  
define("KS3_API_DISPLAY_LOG", TRUE);    
//定义日志目录(默认是该项目log下)  
define("KS3_API_LOG_PATH","");  
//是否使用HTTPS  
define("KS3_API_USE_HTTPS",FALSE);  
//是否开启curl debug模式  
define("KS3_API_DEBUG_MODE",FALSE);  

### 3.4 初始化客户端
当以上全部完成之后用户便可初始化客户端进行操作了  

需要指定ks3节点  
第三个参数endpoint需要对应bucket所在region!! 详见http://ks3.ksyun.com/doc/api/index.html  Region（区域）一节

    $client = new Ks3Client("<您的AccessKeyID>","<您的AccessKeySecret>","endpoint")

ks3节点列表  
详见http://ks3.ksyun.com/doc/api/index.html  Region（区域）一节
## 4 异常说明
### 4.1 Ks3ServiceException
当抛出Ks3ServiceException时表示KS3服务端返回异常信息。Ks3ServiceException继承自RuntimeException 
用户可根据该异常中的信息获取到出错的原因
### 4.2 Ks3ClientException
当抛出Ks3ClientException时表示客户端发送了异常。Ks3ClientException继承自RuntimeException
## 5 使用示例
快速导航：  
删除文件：5.3.1 5.3.2  
下载文件：5.3.3  
判断文件是否存在：5.3.5  
上传文件：5.3.7  
分块上传：5.3.12-5.3.17  
### 5.1 Service接口
#### 5.1.1 GET Service
获取用户的所有bucket列表  
使用示例：  

    $client->listBuckets();
    
返回结果格式： 

    Array
    (
        [0] => Array
        (
            [Name] => aaphp
            [CreationDate] => 2015-03-21T06:25:45.000Z
        )

        [1] => Array
        (
            [Name] => adest
            [CreationDate] => 2015-02-10T03:55:40.000Z
        )

        [2] => Array
        (
            [Name] => afiles
            [CreationDate] => 2015-02-10T07:39:19.000Z
        )
    )

### 5.2 Bucket接口
#### 5.2.1 DELETE Bucket
删除Bucket  
注意：  
1、只能删除空的Bucket  
参数格式：

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例：

    $client->deleteBucket($args);

#### 5.2.2 DELETE Bucket cors
删除Bucket的跨域配置  
参数格式:

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例：

    $client->deleteBucketCORS($args);

#### 5.2.3 GET Bucket
罗列Bucket下的object  
参数格式：  
Options中为可选参数，用户需参考KS3 API文档根据实际情况调节参数。

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Options"=>array(
            "prefix"=>"<prefix>",
            "max-keys"=>"<max-keys>",
            "marker"=>"<marker>",
            "delimiter"=>"<delimiter>"
        )
    );
使用示例：

    $client->listObjects($args);

返回结果格式： 

    Array
    (
        [Name] => ksc-scm //bucket名称
        [Prefix] => 
        [Marker] => 
        [Delimiter] => /
        [MaxKeys] => 4
        [IsTruncated] => true  //true表示返回的结果是全部结果的一部分
        [NextMarker] => dir/  //如果IsTruncated为true，则可以使用NextMarker作为下一次请求的marker.当请求时不提供delimiter的话不会返回NextMarker,可以使用Contents的最后一项作为下一次的Marker
        [Contents] => Array
        (
            [0] => Array
                (
                    [Key] => 123.pdf
                    [LastModified] => 2015-02-06T07:39:32.687Z
                    [ETag] => 1285ba0d89e9b0883a1a5975051af159
                    [Size] => 515602
                    [Owner] => Array
                        (
                            [ID] => 73398334
                            [DisplayName] => 73398334
                        )

                    [StorageClass] => STANDARD
                )

            [1] => Array
                (
                    [Key] => 20150210154319.jpg
                    [LastModified] => 2015-02-10T07:44:20.818Z
                    [ETag] => c61d3bbb47947029b968d02be1cae7d0
                    [Size] => 141179
                    [Owner] => Array
                        (
                            [ID] => 73398334
                            [DisplayName] => 73398334
                        )

                    [StorageClass] => STANDARD
                )

            [2] => Array
                (
                    [Key] => chrome.exe
                    [LastModified] => 2015-01-07T05:30:26.845Z
                    [ETag] => ac08a03d7e579e2903925736e7ab48f2
                    [Size] => 852808
                    [Owner] => Array
                        (
                            [ID] => 73398334
                            [DisplayName] => 73398334
                        )

                    [StorageClass] => STANDARD
                )

        )

        [CommonPrefixes] => Array
        (
            [0] => dir/
        )
    )


#### 5.2.4 GET Bucket acl
获取bucket的权限  
参数格式:

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例:

    $client->getBucketAcl($args);

返回结果:

    private、public-read或者public-read-write

#### 5.2.5 GET Bucket cors
获取bucket的跨域配置  
参数格式: 

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例 

    $client->getBucketCORS($args);
    
返回结果格式: 

    Array
    (
        [0] => Array
            (
                [AllowedOrigin] => Array
                (
                    [0] => http://www.kingsoft.com
                )
                [AllowedMethod] => Array
                (
                    [0] => GET
                    [1] => PUT
                )
                [AllowedHeader] => Array
                (
                    [0] => *
                )
                [MaxAgeSeconds] => 10
                [ExposeHeader] => Array
                (
                    [0] => *
                )
            )
        [1] => Array
            (
                [AllowedOrigin] => Array
                (
                    [0] => *
                )
                [AllowedMethod] => Array
                (
                    [0] => GET
                    [1] => PUT
                )
                [AllowedHeader] => Array
                (
                    [0] => *
                )
                [MaxAgeSeconds] => 10
                [ExposeHeader] => Array
                (
                    [0] => *
                )
            )
    )

#### 5.2.6 GET Bucket location
获取bucket的地址   
参数格式:  

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例:  

    $client->getBucketLocation($args);

返回结果格式:  

    HANGZHOU

#### 5.2.7 GET Bucket logging
获取bucket的日志配置  
参数格式:  

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例:  

     $client->getBucketLogging($args);
     
返回结果格式: 

    Array
    (
        [Enable] => 1
        [TargetBucket] => ksc-scm
        [TargetPrefix] => 
    )

#### 5.2.8 HEAD Bucket
判断一个bucket是否存在  
参数格式:  

    $args = array("Bucket"=>"<您的bucket名称>")

使用示例: 

    $client->bucketExists($args);

返回结果格式: 

    TRUE或者FALSE

#### 5.2.9 List Mutipart Uploads
列出当前bucket下未完成的分块上传  
参数格式:

	$args=array(
		"Bucket"=><目标bucket名称>,
		"Options"=>array(
			"max-uploads"=>1，//调节参数,支持key-marker、prefix、upload-id-​marker、delimiter,详细作用请参考KS3 API文档
		)
	)

使用示例:

    $client->listMutipartUploads($args);

返回结果格式:

	Array
	(
   		[Bucket] => phpsdktestlijunwei
    	[KeyMarker] => 
    	[UploadIdMarker] => 
    	[NextKeyMarker] => 
    	[NextUploadIdMarker] => 
    	[MaxUploads] => 1
    	[IsTruncated] => true //true表示返回的结果只是全部结果的部分
    	[Uploads] => Array
        (
            [0] => Array
            (
                [Key] => dir/test/中文目录/@特殊字符!.txt
                [Initiated] => 2015-03-23T11:22:45.451+08:00
                [UploadId] => b05e21c69ff14386a66bbe9843976b17
                [Initiator] => Array
                (
                    [ID] => 73398529
                    [DisplayName] => 73398529
                )
                [Owner] => Array
                (
                    [ID] => 73398529
                    [DisplayName] => 73398529
                )
                [StorageClass] => STANDARD
            )
        )
	)

#### 5.2.10 PUT Bucket
创建一个bucket  
注意:  
1、bucket名称是全局唯一，如果返回BucketAlreadyExists请尝试换一个名称   
2、bucket名称规则请参考KS3 API文档  
参数格式: 

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "ACL"=>"private", //配置bucket的访问权限，合法值:private、public-read、public-read-write
        "Location"=>"HANGZHOU"//配置bucket存储地址，默认是杭州。支持HANGZHOU,AMERICA
        )

使用示例: 

    $client->createBucket($args);

#### 5.2.11 PUT Bucket acl
设置bucket的访问权限  
参数格式: 

    $args = array(
        "Bucket"=>"<您的bucket名称>"，
        "ACL"=>"private" //配置bucket的访问权限，合法值:private、public-read、public-read-write
        )
使用示例: 

    $client->setBucketAcl ($args);

#### 5.2.12 PUT Bucket cors
设置bucket的跨域规则  
注意:  
1、如果返回InvalidArguments，请查看KS3 API文档，查看各参数格式要求。  
参数格式: 

    $args = array(
        "Bucket"=>"<您的bucket名称>",
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
        )
    );

使用示例 

    $client->setBucketCORS($args);

#### 5.2.13 PUT Bucket logging
设置bucket的日志配置  
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "BucketLogging"=>array(
            "Enable"=>TRUE,//是否开启
            "TargetBucket"=>"ksc-scm",
            "TargetPrefix"=>"X-KSS"
            )
        );

使用示例

    $client->setBucketLogging ($args);

    
### 5.3 Object接口
#### 5.3.1 DELETE Object
删除一个object  
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"123.pdf"
        );

使用示例: 

    $client->deleteObject($args);

#### 5.3.2 DELETE Multiple Objects
删除多个object  
参数格式：

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "DeleteKeys"=>array("<key1>","<key2>","<key3>")
        );

使用示例:

    $client->deleteObjects($args);

#### 5.3.3 GET Object
##### 5.3.3.1 下载object
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Range"=>array( //当需要分块下载时可以提供该参数
            "start"=>1,
            "end"=>4,
            ),
        "WriteTo"=>"D://test.zip" //文件保存路径,可以不提供。可以是resource
        );

使用示例:

    $client->getObject($args);

返回结果格式(当不提供WriteTo时会有该返回结果):

    Array
    (
        [Content] => "1234"//文件内容
        [Meta] => Array
        (
            [ObjectMeta] => Array   //元数据
            (  
                [Content-Type] => binay/ocet-stream
                [Content-Length] => 4
                [ETag] => "81dc9bdb52d04dc20036dbd8313ed055"
                [Last-Modified] => Sat, 21 Mar 2015 06:31:28 GMT
            )
            [UserMeta] => Array    //用户自定义元数据
            (
                [x-kss-meta-test] => test
            )
        )
    )



##### 5.3.3.2 下载经过客户提供主密钥的服务端加密数据
参数格式:  
在原有参数的基础上加上如下

    "SSEC"=>array(
        "Algm"=>"AES256",
        "Key"=>"<PUT Object时使用的主密钥>",//
        "KeyBase64"=>"<PUT Object时使用的主密钥的Base64值>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<PUT Object时使用的主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

##### 5.3.3.3 生成object外链
参数格式:

    $args=array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Options"=>array(
            "Expires"=>60*60*24*10,//过期时间，单位秒，即x秒后过期
            "response-content-type"=>"application/xml"//覆盖返回的http header,支持的值"response-expires","response-content-encoding","response-content-disposition","response-content-language","response-content-type","response-cache-control"
            )
        );
使用示例:

    $client->generatePresignedUrl($args);
    
返回结果格式:

    http://kss.ksyun.com/aaphp/multi.zip?Expires=1427900010&response-content-type=application%2Fxml&KSSAccessKeyId=2HITWMQXL2VBB3XMAEHQ&Signature=E3YAKqMp0%2BVoBaslu%2B3eE3Ki97w%3D

#### 5.3.4 GET Object acl
获取object的权限  
参数格式:

    $args = array("Bucket"=>"<您的bucket名称>","Key"=>"<key>")

使用示例:

    $client->getObjectAcl($args);

返回结果:

    private、public-read或者public-read-write

#### 5.3.5 HEAD Object
可用来判断object是否存在或者获取object的元数据  
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>"
        );

##### 5.3.5.1  判断object是否存在
使用示例：

    $client->objectExists ($args);

返回结果格式:

    TRUE或者FALSE

##### 5.3.5.2 获取object元数据
使用示例:

    $client->getObjectMeta($args);

返回结果格式:

    Array
    (
        [ObjectMeta] => Array   //元数据
        (
            [Content-Type] => binay/ocet-stream
            [Content-Length] => 4
            [ETag] => "81dc9bdb52d04dc20036dbd8313ed055"
            [Last-Modified] => Sat, 21 Mar 2015 06:31:28 GMT
        )
        [UserMeta] => Array    //用户自定义元数据
        (
            [x-kss-meta-test] => test
        )
    )
##### 5.3.5.3 请求经过客户提供主密钥的服务端加密数据
参数格式:  
在原有参数的基础上加上如下

    "SSEC"=>array(
        "Algm"=>"AES256",
        "Key"=>"<PUT Object时使用的主密钥>",//
        "KeyBase64"=>"<PUT Object时使用的主密钥的Base64值>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<PUT Object时使用的主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

#### 5.3.6 POST Object
表单上传文件，用于获取KSSAccessKeyId、Policy和Signature  
使用示例:

    $result = postObject(
				$bucket ,//要上传的bucket
				$postFormData=array(),//表单中能确定值得表单项, 如 array("key"=>"123.txt");
				$unknowValueFormFiled=array(),//表单中不能确定值得表单项,如 array("random1","random2");
				$filename=NULL,//如果没有使用${filename}占位符的话可以不提供要上传的文件名
				$expire=18000//生成的签名过期时间,单位秒
			);

返回结果格式:

	Array
	(
   		 [Policy] => eyJleHBpcmF0aW9uIjoiMjAxNS0wMy0yNFQwMTozMjo0Ny4yODhaIiwiY29uZGl0aW9ucyI6W3sia2V5IjoiZm9ybXVwbG9hZHRlc3RcL0BcdTRlMmRcdTY1ODcudHh0In0seyJzdWNjZXNzX2FjdGlvbl9yZWRpcmVjdCI6Imh0dHA6XC9cL2tzcy5rc3l1bi5jb21cL3BocHNka3Rlc3RsaWp1bndlaSJ9LHsiQ29udGVudC1UeXBlIjoidGV4dFwvaHRtbCJ9LHsiYnVja2V0IjoicGhwc2RrdGVzdGxpanVud2VpIn0sWyJzdGFydHMtd2l0aCIsIiRyYW5kb20iLCIiXV19
    	 [Signature] => yQcB+sUpyjpwZu2JN9KYf2kXPCI=
   		 [KSSAccessKeyId] => 1GL02rRYQxK8s7FQh8dV
	)

#### 5.3.7 PUT Object
上传文件
##### 5.3.7.1 通过内容上传
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Content"=>"1234",//要上传的内容
        "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        "ObjectMeta"=>array(//设置object的元数据,可以设置"Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires"。当设置了Content-Length时，请勿大于实际长度，如果小于实际长度，将只上传部分内容。
            "Content-Type"=>"binay/ocet-stream",
            "Content-Length"=>4
            ),
        "UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            "x-kss-meta-test"=>"test"
            )
        )
使用示例:

    $client->putObjectByContent($args);

返回结果格式:

    Array
    (
        [ETag] => "????"
    )

##### 5.3.7.2 通过文件上传
参数格式:

    $content = fopen("<文件路径>", "r");
    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Content"=>array(//要上传的内容
            "content"=>$content,//可以是文件路径或者resource,如果文件大于2G，请提供文件路径
            "seek_position"=>0//跳过文件开头?个字节
            ),
        "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        "ObjectMeta"=>array(//设置object的元数据,可以设置"Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires"。当设置了Content-Length时，最后上传的为从seek_position开始向后Content-Length个字节的内容。当设置了Content-MD5时，系统会在服务端进行md5校验。
            "Content-Type"=>"binay/ocet-stream"
            //"Content-Length"=>4
            ),
        "UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            "x-kss-meta-test"=>"test"
            )
        );

使用示例:

    $client->putObjectByFile ($args);

返回结果格式:

    Array
    (
        [ETag] => "????"
    )
   
##### 5.3.7.3 上传文件时添加异步数据处理任务
参数格式:  
在原有参数的基础上加上如下

    "Adp"=>array(
		"NotifyURL"=>"<处理完成后KS3服务通知的地址>",
		"Adps"=>array(
			array(
				"Command"=>"tag=avop&f=mp4&res=1280x720&vbr=1000k&abr=128k",//处理命令。具体参考KS3 API文档数据处理，不需要在命令中写tag=saveas&..
				"Bucket"=>"<处理完成后存在该bucket>",//需要拥有对该bucket写的权限.不提供的话将为数据所在的bucket
				"Key"=>"<处理完成后存为该key>",//可以不提供，不提供的话将会是随机值。
			)，
			//......可以有多条命令
		)
	)

比如：


    $content = fopen("<文件路径>", "r");
    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Content"=>array(//要上传的内容
            "content"=>$content,//可以是文件路径或者resource
            "seek_position"=>0//跳过文件开头?个字节
        ),
        "ACL"=>"public-read",//可以设置访问权限,合法值,private、public-read
        "ObjectMeta"=>array(//设置object的元数据,可以设置"Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires"。当设置了Content-Length时，最后上传的为从seek_position开始向后Content-Length个字节的内容。当设置了Content-MD5时，系统会在服务端进行md5校验。
            "Content-Type"=>"binay/ocet-stream",
            "Content-Length"=>4
        ),
        "UserMeta"=>array(//可以设置object的用户元数据，需要以x-kss-meta-开头
            "x-kss-meta-test"=>"test"
        )
        "Adp"=>array(
			"NotifyURL"=>"<处理完成后KS3服务通知的地址>",
			"Adps"=>array(
				array(
					"Command"=>"tag=avop&f=mp4&res=1280x720&vbr=1000k&abr=128k",//处理命令。具体参考KS3 API文档数据处理，不需要在命令中写tag=saveas&..
					"Bucket"=>"<处理完成后存在该bucket>",//需要拥有对该bucket写的权限.不提供的话将为数据所在的bucket
					"Key"=>"<处理完成后存为该key>",//可以不提供，不提供的话将会是随机值。
				)，
				//......可以有多条命令
			)
		)
    );

返回结果格式:

    Array
    (
        [ETag] => "????"
		[TaskID] => "????"
    )

##### 5.3.7.4 上传文件时添加回调
参数格式:  
在原有参数的基础上加上如下

    "CallBack"=>array(
		"Url"=>"<KS3通知的URL>",
		"BodyMagicVariables"=>array("bucket"=>"bucket","key"=>"key"),//魔法变量，key=>value中的value将被最后的实际值替换，比如"bucket"=>"bucket"替换为"bucket"=>"<上传的bucket>"。支持:"bucket","key","etag","objectSize","mimeType","createTime"
		"BodyVariables"=>array("name"=>"lijunwei")//自定义KS3回调时需要在body中带的参数
	)

##### 5.3.7.5 上传文件时使用服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSE"=>array(
        "Algm"=>"<服务端加密算法>"//暂时支持AES256
    )

##### 5.3.7.6 上传文件时使用客户提供主密钥的服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSEC"=>array(
        "Algm"=>"AES256",
        "Key"=>"<主密钥>",//KS3服务端将使用该主密钥对数据进行加密
        "KeyBase64"=>"<主密钥的Base64>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

#### 5.3.8 PUT Object acl
设置object的访问权限  
参数格式: 

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "ACL"=>"private" //合法值 private、public-read
        );
使用示例:

    $client->setObjectAcl ($args);

#### 5.3.9 PUT Object - Copy
##### 5.3.9.1 基本方法
拷贝object  
参数格式: 

    $args = array(
        "Bucket"=>"<目标bucket>",
        "Key"=>"<目标key>",
        "CopySource"=>array(
            "Bucket"=>"<源bucket>",
            "Key"=>"<源key>"
            )
        );
        
使用示例:

    $client->copyObject ($args);

##### 5.3.9.2 被拷贝的Object是经过客户提供主密钥服务端加密的
在原有参数的基础上添加

    "SSECSource"=>array(
        "Algm"=>"AES256",
        "Key"=>"<主密钥>",//KS3服务端将使用该主密钥对数据进行解密
        "KeyBase64"=>"<主密钥的Base64>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

##### 5.3.9.3 Copy后的Object使用服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSE"=>array(
        "Algm"=>"<服务端加密算法>"//暂时支持AES256
    )

##### 5.3.9.4 Copy后的Object使用客户提供主密钥的服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSEC"=>array(
        "Algm"=>"AES256",
        "Key"=>"<主密钥>",//KS3服务端将使用该主密钥对数据进行加密
        "KeyBase64"=>"<主密钥的Base64>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

#### 5.3.10 PUT Adp
添加异步数据处理：  
参数格式:

    $args=array(
		"Bucket"=>"<数据所在bucket>",
		"Key"=>"<要处理的数据key>",
		"Adp"=>array(
			"NotifyURL"=>"<处理完成后KS3服务通知的地址>",
			"Adps"=>array(
				array(
					"Command"=>"tag=avop&f=mp4&res=1280x720&vbr=1000k&abr=128k",//处理命令。具体参考KS3 API文档数据处理，不需要在命令中写tag=saveas&..
					"Bucket"=>"<处理完成后存在该bucket>",//需要拥有对该bucket写的权限.不提供的话将为数据所在的bucket
					"Key"=>"<处理完成后存为该key>",//可以不提供，不提供的话将会是随机值。
				)，
				//......可以有多条命令
			)
		)
	);

使用示例:

    $client->putAdp($args);

返回结果格式:

    Array
	(
        [TaskID] => 00P7kNjRfJUv
	)



#### 5.3.11 GET Adp
查询数据处理任务  
参数格式:
    
    $args = array("TaskID"=>"<TaskID>");

使用示例:

    $client->getAdp($args);

#### 5.3.12 Initiate Multipart Upload
##### 5.3.12.1 基本方式
初始化分块上传  
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "UserMeta"=>array(//可以设置用户元数据,需要以x-kss-meta-开头
            "x-kss-meta-test"=>"example"
            ),
        "ObjectMeta"=>array(//可以设置用户元数据,合法值,"Cache-Control","Content-Disposition","Content-Encoding","Content-Type","Expires"
            "Content-Type"=>"text/plain"
            )
        );
使用示例:

    $client->initMultipartUpload ($args);
    
返回结果格式:

    Array
    (
        [Bucket] => aaphp
        [Key] => multi.zip
        [UploadId] => bbdb766a65ef43ebad2b2531739092d0
    )

##### 5.3.12.2 使用服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSE"=>array(
        "Algm"=>"<服务端加密算法>"//暂时支持AES256
    )

##### 5.3.12.3 使用客户提供主密钥的服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSEC"=>array(
        "Algm"=>"AES256",
        "Key"=>"<主密钥>",//KS3服务端将使用该主密钥对数据进行加密
        "KeyBase64"=>"<主密钥的Base64>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

#### 5.3.13 Upload Part
##### 5.3.13.1 基本方式
上传块  
参数格式:  
主要通过seek_position和Content-Length参数控制上传的内容范围

    $args=array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "LastPart"=>FALSE,//指定当前块是否为最后一块
        "Options"=>array(
            "partNumber"=><partNumber>,//当前上传块的序号，需要为连续的正整数，
            "uploadId"=><uploadId>//由Initiate Multipart Upload获得
            ),
        "ObjectMeta"=>array(
            "Content-Length"=><partsize>//这一块要上传的大小,必须准确指定，否则会出错。
            "Content-MD5"=>"<Content-MD5>"//可以提供该块的MD5值，将在服务端进行MD5校验
            ),
        "Content"=>array(
            "content"=><file>,//要上传的文件路径,可以为resource,如果文件大于2G，请提供文件路径
            "seek_position"=>//跳过文件开头?个字节
            )
        );
使用示例:

    $client->uploadPart ($args);
返回结果格式:

    Array
    (
        [ETag] => "9430d3a88773837eed6ce0f136770ea3"
    )

##### 5.3.13.2 使用客户提供主密钥的服务端加密
参数格式:  
在原有参数的基础上加上如下

    "SSEC"=>array(
        "Algm"=>"AES256",
        "Key"=>"<主密钥>",//KS3服务端将使用该主密钥对数据进行加密
        "KeyBase64"=>"<主密钥的Base64>",//Key和KeyBase64提供一个即可
        "KeyMD5"=>"<主密钥经Base64编码的MD5值>",//可以不指定，SDK将根据Key计算
        )

#### 5.3.14 List Parts
列出一个分块上传已经上传的块  
参数格式:

    $args = array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Options"=>array("uploadId"=><uploadId>)//由Initiate Multipart Upload获得
    )
    
使用示例:

    $client->listParts($args);

返回结果格式:

    Array
    (
        [Bucket] => aaphp
        [Key] => multi.zip
        [UploadId] => bbdb766a65ef43ebad2b2531739092d0
        [StorageClass] => 
        [PartNumberMarker] => 1
        [NextPartNumberMarker] => 
        [MaxParts] => 1000
        [IsTruncated] => false
        [Owner] => Array
        (
            [ID] => NzMzOTgzMzQ=
            [DisplayName] => NzMzOTgzMzQ=
        )
        [Initiator] => Array
        (
            [ID] => NzMzOTgzMzQ=
            [DisplayName] => NzMzOTgzMzQ=
        )

        [Parts] => Array
        (
            [0] => Array
                (
                    [PartNumber] => 1
                    [ETag] => 9430d3a88773837eed6ce0f136770ea3
                    [LastModified] => 2015-03-22T12:48:32.800Z
                    [Size] => 5242880
                )

            [1] => Array
                (
                    [PartNumber] => 2
                    [ETag] => cd18e9d26dba2121baf291693158b84b
                    [LastModified] => 2015-03-22T12:48:54.716Z
                    [Size] => 5242880
                )

            [2] => Array
                (
                    [PartNumber] => 3
                    [ETag] => bfd9044ef806a7408dd6ae803654f1a0
                    [LastModified] => 2015-03-22T12:49:17.163Z
                    [Size] => 5242880
                )

            [3] => Array
                (
                    [PartNumber] => 4
                    [ETag] => 36a2f4d8582cbd37a20c1541d0aff1cd
                    [LastModified] => 2015-03-22T12:49:17.390Z
                    [Size] => 37896
                )
        )
    )


#### 5.3.15 Complete Multipart Upload
##### 5.3.15.1 基本方式
完成分块上传  
参数格式:

    $args=array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Options"=>array("uploadId"=><uploadId>)//由Initiate Multipart Upload获得
        "Parts"=>array(//需要提供Upload Part时的PartNumber和ETag。可以直接使用List Parts的返回结果中的Parts
            array(
                "PartNumber"=>1,
                "ETag"=>"7778aef83f66abc1fa1e8477f296d394"
                ),
            array(
                "PartNumber"=>2,
                "ETag"=>"7778aef83f66abc1fa1e8477f296d394"
                ),
            array(
                "PartNumber"=>3,
                "ETag"=>"7778aef83f66abc1fa1e8477f296d394"
                ),
            array(
                "PartNumber"=>4,
                "ETag"=>"7778aef83f66abc1fa1e8477f296d394"
                ),
        )
    )
        
使用示例:

    $client->completeMultipartUpload($args);

##### 5.3.15.2 添加异步数据处理任务
参数格式:  
在原有参数的基础上加上如下

    "Adp"=>array(
		"NotifyURL"=>"<处理完成后KS3服务通知的地址>",
		"Adps"=>array(
			array(
				"Command"=>"tag=avop&f=mp4&res=1280x720&vbr=1000k&abr=128k",//处理命令。具体参考KS3 API文档数据处理，不需要在命令中写tag=saveas&..
				"Bucket"=>"<处理完成后存在该bucket>",//需要拥有对该bucket写的权限.不提供的话将为数据所在的bucket
				"Key"=>"<处理完成后存为该key>",//可以不提供，不提供的话将会是随机值。
			)，
			//......可以有多条命令
		)
	)

返回结果格式:

    Array
    (
		[TaskID] => "????"
    )

##### 5.3.15.3 添加回调
参数格式:  
在原有参数的基础上加上如下

    "CallBack"=>array(
		"Url"=>"<KS3通知的URL>",
		"BodyMagicVariables"=>array("bucket"=>"bucket","key"=>"key"),//魔法变量，key=>value中的value将被最后的实际值替换，比如"bucket"=>"bucket"替换为"bucket"=>"<上传的bucket>"。支持:"bucket","key","etag","objectSize","mimeType","createTime"
		"BodyVariables"=>array("name"=>"lijunwei")//自定义KS3回调时需要在body中带的参数
	)




#### 5.3.16 Abort Multipart Upload
取消分块上传  
参数格式:

    $args=array(
        "Bucket"=>"<您的bucket名称>",
        "Key"=>"<key>",
        "Options"=>array("uploadId"=><uploadId>)//由Initiate Multipart Upload获得
        );
使用示例:

    $client->abortMultipartUpload($args);

#### 5.3.17 Mutipart Upload(分块上传) Demo
分块上传示例

    function multipartUpload($client){
        //初始化分开上传，获取uploadid
        $args = array(
            "Bucket"=>"aaphp",
            "Key"=>"multi.zip",
            "UserMeta"=>array(
            "x-kss-meta-test"=>"example"
            ),
        "ObjectMeta"=>array(
            "Content-Type"=>"text/plain"
            )
        );
        $uploadid = $client->initMultipartUpload($args);
        print_r($uploadid);
        $uploadid = $uploadid["UploadId"];//获取到uploadid
        echo $uploadid."\r\n";
        //开始上传

        $file = "D://iToolsSetup_3.1.6.6.1419818705.exe";//要上传的文件
        $partsize = 1024*1024*5;
        $resource = fopen($file,"r");
        $stat = fstat($resource);
        $total = $stat["size"];//获取文件的总大小
        fclose($resource);
        $count = (int)(($total-1)/$partsize)+1;//计算文件需要分几块上传
        echo $count."\r\n";
        for($i = 0;$i < $count;$i++){
            //依次上传每一块
            echo "upload".$i."\r\n";
            $args=array(
                "Bucket"=>"aaphp",
                "Key"=>"multi.zip",
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
            $etag = $client->uploadPart($args);
            print_r($etag);
            $etag = $etag["ETag"];
        }
        $parts = $client->listParts(array("Bucket"=>"aaphp","Key"=>"multi.zip","Options"=>array("uploadId"=>$uploadid)));
        print_r($parts);//列出以及上传的块
        //结束上传
        $args=array(
            "Bucket"=>"aaphp",
            "Key"=>"multi.zip",
            "Options"=>array("uploadId"=>$uploadid),
            "Parts"=>$parts["Parts"]//使用之前列出的块完成分开上传
        );
        $result = $client->completeMultipartUpload($args);
        print_r($result);
    }

#### 5.3.17 使用外链操作
使用示例：
参数格式：

    $args=array(
        "Method"="GET",//http请求方法
        "Bucket"=>"<bucket>",
        "Key"=>"<key>",
        "Options"=>array(
            "Expires"=><过期时间,单位秒,即x秒后过期>
            //其他参数...
            ),
        "Headers"=>array(
            //"Content-Type"=>"...",
            //"Content-MD5"=>"...",
            //"x-kss-acl"=>"..."
            )
        );

使用示例：

    $client->generatePresignedUrl($args);


### 5.4 客户端加密

#### 5.4.1 环境准备
添加mcrypt与openssl拓展
#### 5.4.2 初始化客户端
1、使用256位AES对称主密钥  

    $client = new Ks3EncryptionClient("<AccessKeyId>","<AccessKeySecret>","<Secret>");  

2、使用1024位RSA非对称主秘钥(密钥对)  

    $client = new Ks3EncryptionClient("<AccessKeyId>","<AccessKeySecret>",array("<PublicKey>","<PrivateKey>"));
    
#### 5.4.3 注意事项
1、上传上去的文件是经过加密的。  
2、下载文件只能通过该客户端getObject方法下载，用其他方法下载下来的文件是经过加密的。    
3、分块上传时必须依次上传每一块。当上传最后一块时必须通过$args=array("LastPart"=>TRUE)指定最后一块。上传顺序不能错乱，不能使用多线程分块上传。  
4、请妥善保管自己的主密钥，如果主密钥丢失，将无法解密数据。    

