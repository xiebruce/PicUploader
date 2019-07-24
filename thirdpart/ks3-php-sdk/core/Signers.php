<?php

require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Headers.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Utils.class.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."Consts.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."exceptions".DIRECTORY_SEPARATOR."Exceptions.php";

interface Signer{
	public function sign( Ks3Request $request,$args=array());
}
class DefaultUserAgentSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$request->addHeader(Headers::$UserAgent,Consts::$UserAgent);
	}
}
class DefaultContentTypeSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$contentType = $request->getHeader(Headers::$ContentType);
		if(empty($contentType)){
			$request->addHeader(Headers::$ContentType,"application/xml");
		}
	}
}
class StreamContentTypeSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$contentType = $request->getHeader(Headers::$ContentType);
		if(empty($contentType)){
			$request->addHeader(Headers::$ContentType,"application/ocet-stream");
		}
	}
}
class SuffixContentTypeSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$key = $request->key;
		$objArr = explode('/', $key);
		$basename = array_pop($objArr);
		$extension = explode ( '.', $basename );
		$extension = array_pop ( $extension );
		$content_type = Utils::get_mimetype(strtolower($extension));
		$request->addHeader(Headers::$ContentType,$content_type);
	}
}
class HeaderAuthSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$log = "stringToSing->\r\n";
		$date = gmdate('D, d M Y H:i:s \G\M\T');
		$request->addHeader(Headers::$Date, $date);

		$ak = $args["accessKey"];
		$sk = $args["secretKey"];
		if(empty($ak)){
			throw new Ks3ClientException("you should provide accessKey");
		}
		if(empty($sk)){
			throw new Ks3ClientException("you should provide secretKey");
		}
		$authration = "KSS ";
		$signList = array(
			$request->method,
			$request->getHeader(Headers::$ContentMd5),
			$request->getHeader(Headers::$ContentType),
			$date
			);
		$headers = AuthUtils::canonicalizedKssHeaders($request);
		$resource = AuthUtils::canonicalizedResource($request);
		if(!empty($headers)){
			array_push($signList,$headers);
		}
		array_push($signList,$resource);
		$stringToSign = join("\n",$signList);
		$log.= $stringToSign;
		$signature = base64_encode(hash_hmac('sha1', $stringToSign, $sk, true));

		$authration.=$ak.":".$signature;
		$request->addHeader(Headers::$Authorization, $authration);
		return $log;
	}
}
class QueryAuthSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$log = "stringToSing->\r\n";
		$ak = $args["accessKey"];
		$sk = $args["secretKey"];
		$expires = $args["args"]["Options"]["Expires"];
		$expiresSencond = time()+$expires;

		$resource = AuthUtils::canonicalizedResource($request);
		$signList = array(
			$request->method,
			$request->getHeader(Headers::$ContentMd5),
			$request->getHeader(Headers::$ContentType),
			$expiresSencond
			);
		$headers = AuthUtils::canonicalizedKssHeaders($request);
		$resource = AuthUtils::canonicalizedResource($request);
		if(!empty($headers)){
			array_push($signList,$headers);
		}
		array_push($signList,$resource);

		$stringToSign = join("\n",$signList);
		$log.= $stringToSign;
		$signature = base64_encode(hash_hmac('sha1', $stringToSign, $sk, true));
		$request->addQueryParams("KSSAccessKeyId",$ak);
		$request->addQueryParams("Signature",$signature);
		$request->addQueryParams("Expires",$expiresSencond);
		return $log;
	}
}
class ACLSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["ACL"])){
			$acl = $args["ACL"];
			if(!in_array($acl, Consts::$Acl)){
				throw new Ks3ClientException("unsupport acl :".$acl);
			}else{
				$request->addHeader(Headers::$Acl,$acl);
			}
		}
		if(isset($args["ACP"])){

		}
	}
}
class ContentMD5Signer implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		$contentmd5 = "";
		if(isset($args["ObjectMeta"][Headers::$ContentMd5])){
			$contentmd5 = $args["ObjectMeta"][Headers::$ContentMd5];
		}
		if(empty($contentmd5)){
			$body = $request->body;
			if(!empty($body)){
				$length = $request->getHeader(Headers::$ContentLength);
				if(empty($length)){
					if(isset($args["ObjectMeta"][Headers::$ContentLength]))
						$length = $args["ObjectMeta"][Headers::$ContentLength];
				}
				if(!empty($length)){
					$body = substr($body,0,$length);
				}
				$contentmd5 = Utils::hex_to_base64(md5($body));
			}
		}
		if(!empty($contentmd5))
			$request->addHeader(Headers::$ContentMd5,$contentmd5);
	}
}
class ContentLengthSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		$contentlength = "";
		if(isset($args["ObjectMeta"][Headers::$ContentLength])){
			$contentlength = $args["ObjectMeta"][Headers::$ContentLength];
		}
		if(empty($contentlength)){
			$body = $request->body;
			if(!empty($body)){
				$contentlength = strlen($body);
			}
		}
		if(!empty($contentlength))
			$request->addHeader(Headers::$ContentLength,$contentlength);
	}
}
class ObjectMetaSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["ObjectMeta"])){
			$ObjectMeta = $args["ObjectMeta"];
			if(is_array($ObjectMeta)){
				foreach ($ObjectMeta as $key => $value) {
					if(in_array($key,Consts::$ObjectMeta)&&!empty($value)){
						$request->addHeader($key,$value);
					}
				}
			}
		}
	}
}
class MultipartObjectMetaSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["ObjectMeta"])){
			$ObjectMeta = $args["ObjectMeta"];
			if(is_array($ObjectMeta)){
				foreach ($ObjectMeta as $key => $value) {
					if(in_array($key,Consts::$MultipartObjectMeta)&&!empty($value)){
						$request->addHeader($key,$value);
					}
				}
			}
		}
	}
}
class UserMetaSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["UserMeta"])){
			$UserMeta = $args["UserMeta"];
			if(is_array($UserMeta)){
				foreach ($UserMeta as $key => $value) {
					if (substr(strtolower($key), 0, 10) === Consts::$UserMetaPrefix){
						$request->addHeader($key,$value);
					}
				}
			}
		}
	}
}
class CopySourceSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["CopySource"])){
			$CopySource = $args["CopySource"];
			if(is_array($CopySource)){
				if(!isset($CopySource["Bucket"]))
					throw new Ks3ClientException("you should provide copy source bucket");
				if(!isset($CopySource["Key"]))
					throw new Ks3ClientException("you should provide copy source key");
				$bucket = $CopySource["Bucket"];
				$key = Utils::encodeUrl($CopySource["Key"]);
				$request->addHeader(Headers::$CopySource,"/".$bucket."/".$key);
			}
		}
	}
}
class StreamUploadSigner implements Signer{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["Content"])&&is_array($args["Content"])&&isset($args["Content"]["content"])){
			$content = $args["Content"]["content"];
			$seek_position = 0;
			$resourceLength = 0;
			$length = -1;
			$isFile = FALSE;

			if (!is_resource($content)){
				$isFile = TRUE;
				//如果之前用户已经转化为GBK则不转换
				if(Utils::chk_chinese($content)&&!Utils::check_char($content)){
					$content = iconv('utf-8','gbk',$content);
				}
				if(!file_exists($content))
					throw new Ks3ClientException("the specified file does not exist ");
				$length = Utils::getFileSize($content);
				$content = fopen($content,"r");
			}else{
				$stats = fstat($content);
				if ($stats && $stats["size"] >= 0){
					$length = $stats["size"];	
				}
			}
			//之所以取resourceLength是为了防止Content-Length大于实际数据的大小，导致一直等待。
			$resourceLength = $length;
			//优先取用户设置seek_position，没有的话取ftell
			if(isset($args["Content"]["seek_position"])&&$args["Content"]["seek_position"]>0){
				$seek_position = $args["Content"]["seek_position"];
			}else if(!$isFile){
				$seek_position = ftell($content);
				if($seek_position<0)
					$seek_position = 0;
				fseek($content,0);
			}

			$lengthInMeta = -1;
			if(isset($args["ObjectMeta"]["Content-Length"])){
				$lengthInMeta = $args["ObjectMeta"]["Content-Length"];
			}
			if($lengthInMeta > 0){
				$length = $lengthInMeta;
			}else if($resourceLength > 0){
				//根据seek_position计算实际长度
				$length = $resourceLength - $seek_position;
			}
			if($length <= 0)
				throw new Ks3ClientException("calculate content length failed,unexpected contetn length ".$length);
			$request->read_stream = $content;
			$request->addHeader(Headers::$ContentLength,$length);
			$request->seek_position = $seek_position;
		}else{
			throw new Ks3ClientException("please specifie upload content in args");
		}
	}
}
class RangeSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["Range"])){
			$Range = $args["Range"];
			if(is_array($Range)){
				$start = $Range["start"];
				$end = $Range["end"];
				$range = "bytes=".$start."-".$end;
				$request->addHeader(Headers::$Range,$range);
			}else
				$request->addHeader(Headers::$Range,$Range);
		}
	}
}
class GetObjectSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["WriteTo"])){
			$WriteTo = $args["WriteTo"];
			if(is_resource($WriteTo)){
				$request->write_stream = $WriteTo;
			}else{
				//如果之前用户已经转化为GBK则不转换
				if(Utils::chk_chinese($WriteTo)&&!Utils::check_char($WriteTo)){
					$WriteTo = iconv('utf-8','gbk',$WriteTo);
				}
				$request->write_stream = fopen($WriteTo,"w");
			}
		}
	}
}
class AdpSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["Adp"])){
			$AdpConf = $args["Adp"];
			if(is_array($AdpConf)){
				if(isset($AdpConf["NotifyURL"])){
					$NotifyURL = $AdpConf["NotifyURL"];
				}else{
					throw new Ks3ClientException("adp should provide NotifyURL");
				}
				if(isset($AdpConf["Adps"])){
					$Adps = $AdpConf["Adps"];
				}else{
					throw new Ks3ClientException("adp should provide Adps");
				}
				$AdpString = "";
				foreach ($Adps as $Adp) {
					if(is_array($Adp)){
						if(!isset($Adp["Command"])){
							throw new Ks3ClientException("command is needed in adp");
						}
						$command = $Adp["Command"];
						$bucket = NULL;
						$key = NULL;
						if(isset($Adp["Bucket"])){
							$bucket = $Adp["Bucket"];
						}
						if(isset($Adp["Key"])){
							$key = $Adp["Key"];
						}
						$AdpString.=$command;
						if(!(empty($bucket)&&empty($key))){
							if(empty($bucket)){
								$AdpString.="|tag=saveas&object=".base64_encode($key);
							}elseif (empty($key)) {
								$AdpString.="|tag=saveas&bucket=".$bucket;
							}else{
								$AdpString.="|tag=saveas&bucket=".$bucket."&"."object=".base64_encode($key);
							}
						}
						$AdpString.=";";
					}
				}
				if(!empty($AdpString)&&!empty($NotifyURL)){
					$request->addHeader(Headers::$AsynchronousProcessingList,$AdpString);
					$request->addHeader(Headers::$NotifyURL,$NotifyURL);
				}
			}
		}
	}
}
class CallBackSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["CallBack"])&&is_array($args["CallBack"])){
			$CallBackConf = $args["CallBack"];
			$url = NULL;
			$body = NULL;
			if(isset($CallBackConf["Url"])){
				$url = $CallBackConf["Url"];
			}
			if(empty($url))
				throw new Ks3ClientException("Url is needed in CallBack");
			if(isset($CallBackConf["BodyMagicVariables"])){
				if(is_array($CallBackConf["BodyMagicVariables"])){
					$magics = $CallBackConf["BodyMagicVariables"];
					foreach ($magics as $key => $value) {
						if(in_array($value,Consts::$CallBackMagics))
							$body.=$key."=\${".$value."}&";
					}
				}
			}
			if(isset($CallBackConf["BodyVariables"])){
				if(is_array($CallBackConf["BodyVariables"])){
					$variables = $CallBackConf["BodyVariables"];
					foreach ($variables as $key => $value) {
						$body.=$key."=\${kss-".$key."}&";
						$request->addHeader("kss-".$key,$value);
					}
				}
			}
			if(!empty($body)){
				$body=substr($body,0,strlen($body)-1);
				$request->addHeader(Headers::$XKssCallbackBody,$body);
			}
			$request->addHeader(Headers::$XKssCallbackUrl,$url);
		}
	}
}
class SSESigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["SSE"])){
			if(isset($args["SSE"]["Algm"]))
				$algm = $args["SSE"]["Algm"];
			if(isset($args["SSE"]["KMSId"]))
				$id = $args["SSE"]["KMSId"];
			if(!empty($algm)){		
				$request->addHeader(Headers::$SSEAlgm,$algm);
				if(!empty($id))
					$request->addHeader(Headers::$SSEKMSId,$id);
			}
		}
	}
}
class SSECSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["SSEC"])){
			if(isset($args["SSEC"]["Algm"]))
				$algm = $args["SSEC"]["Algm"];
			if(isset($args["SSEC"]["Key"]))
				$key = $args["SSEC"]["Key"];
			if(isset($args["SSEC"]["KeyBase64"]))
				$keybase64 = $args["SSEC"]["KeyBase64"];
			if(isset($args["SSEC"]["KeyMD5"]))
				$md5 = $args["SSEC"]["KeyMD5"];
			if(!empty($key)||!empty($keybase64)){
				if(empty($key))
					$key = base64_decode($keybase64);
				if(empty($algm))
					$algm = Consts::$SSEDefaultAlgm;
				if(empty($md5))
					$md5 = Utils::hex_to_base64(md5($key));

				$request->addHeader(Headers::$SSECAlgm,$algm);
				$request->addHeader(Headers::$SSECKey,base64_encode($key));
				$request->addHeader(Headers::$SSECMD5,$md5);
			}
		}
	}	
}
class SSECSourceSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		if(isset($args["SSECSource"])){
			if(isset($args["SSECSource"]["Algm"]))
				$algm = $args["SSECSource"]["Algm"];
			if(isset($args["SSECSource"]["Key"]))
				$key = $args["SSECSource"]["Key"];
			if(isset($args["SSECSource"]["KeyBase64"]))
				$keybase64 = $args["SSECSource"]["KeyBase64"];
			if(isset($args["SSECSource"]["KeyMD5"]))
				$md5 = $args["SSECSource"]["KeyMD5"];
			if(!empty($key)||!empty($keybase64)){
				if(empty($key))
					$key = base64_decode($keybase64);
				if(empty($algm))
					$algm = Consts::$SSEDefaultAlgm;
				if(empty($md5))
					$md5 = Utils::hex_to_base64(md5($key));

				$request->addHeader(Headers::$SSECSourceAlgm,$algm);
				$request->addHeader(Headers::$SSECSourceKey,base64_encode($key));
				$request->addHeader(Headers::$SSECSourceMD5,$md5);
			}
		}
	}
}
class AllHeaderSigner{
	public function sign(Ks3Request $request,$args=array()){
		$args = $args["args"];
		$headers = isset($args["Headers"])?$args["Headers"]:"";
		if(!empty($headers)&&is_array($headers)){
			foreach ($headers as $key => $value) {
				$request->addHeader($key,$value);
			}
		}
	}
}
class AuthUtils{
	public static function canonicalizedKssHeaders(Ks3Request $request){
		$header = "";
		$headers = $request->headers;
		ksort($headers,SORT_STRING);
		foreach ( $headers as $header_key => $header_value ) {
			if (substr(strtolower($header_key), 0, 6) === Consts::$KS3HeaderPrefix){
				$header .= "\n".strtolower($header_key) . ':' .$header_value;
			}			
		}
		$header = substr($header, 1);
		return $header;
	}
	public static function canonicalizedResource(Ks3Request $request){
		$resource = "/";
		$bucket = $request->bucket;
		$key = $request->key;
		$subResource = $request->subResource;
		if(!empty($bucket)){
			$resource.=$request->bucket."/";
		}
		if(!empty($key)){
			$resource.=Utils::encodeUrl($request->key);
		}

		$encodeParams = "";
		$querys = $request->queryParams;
		if(!empty($subResource)){
			$querys[$subResource] = NULL;
		}
		ksort($querys,SORT_STRING);
		foreach ($querys as $key => $value) {
			if(in_array($key,Consts::$SubResource)||in_array($key,Consts::$QueryParam)){
				if(empty($value)){
					$encodeParams.="&".$key;
				}else{
					$encodeParams.="&".$key."=".$value;
				}
			}
		}
		$encodeParams = substr($encodeParams,1);

		$resource = str_replace("//","/%2F", $resource);

		if(!empty($encodeParams)){
			$resource.="?".$encodeParams;
		}
		return $resource;
	}
}
?>