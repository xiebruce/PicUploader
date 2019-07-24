<?php
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."exceptions".DIRECTORY_SEPARATOR."Exceptions.php";

interface Handler{
	public function handle(ResponseCore $response);
}
class ErrorResponseHandler implements Handler{
	public function handle(ResponseCore $response){
		$code = $response->status;
		if($code >= 400){
			$exception = new Ks3ServiceException();
			$exception->statusCode=$code;
			if(!empty($response->body)){
				$xml = new SimpleXMLElement($response->body);
				$exception ->requestId = $xml->RequestId->__toString();
				$exception->errorCode = $xml->Code->__toString();
				$exception->errorMessage=$xml->Message->__toString();
				$exception->resource=$xml->Resource->__toString();
			}
			throw $exception;
		}else{
			return $response;
		}
	}
}
class ListBucketsHandler implements Handler{

	public function handle(ResponseCore $response){
		$result = array();
		$xml = new SimpleXMLElement($response->body);
		foreach ($xml->Buckets->Bucket as $bucketXml) {
			$bucket = array();
			foreach ($bucketXml->children() as $key => $value) {
				$bucket[$key]=$value->__toString();
			}
			array_push($result, $bucket);
		}
		return $result;
	}
}
class ListObjectsHandler implements Handler{
	public function handle(ResponseCore $response){
		$result = array();
		$xml = new SimpleXMLElement($response->body);
		$result["Name"]=$xml->Name->__toString();
		$result["Prefix"]=$xml->Prefix->__toString();
		$result["Marker"]=$xml->Marker->__toString();
		$result["Delimiter"]=$xml->Delimiter->__toString();
		$result["MaxKeys"]=$xml->MaxKeys->__toString();
		$result["IsTruncated"]=$xml->IsTruncated->__toString();
		$result["NextMarker"]=$xml->NextMarker->__toString();
		$contents = array();
		foreach ($xml->Contents as $contentXml) {
			$content = array();
			foreach ($contentXml->children() as $key => $value) {
				$owner = array();
				if($key === "Owner"){
					foreach ($value->children() as $ownerkey => $ownervalue) {
						$owner[$ownerkey]=$ownervalue->__toString();
					}
					$content["Owner"] = $owner;
				}else{
					$content[$key]=$value->__toString();
				}
			}
			array_push($contents, $content);
		}
		$result["Contents"] = $contents;

		$commonprefix = array();
		foreach ($xml->CommonPrefixes as $commonprefixXml) {
			foreach ($commonprefixXml->children() as $key => $value) {
				array_push($commonprefix, $value->__toString());
			}
		}
		$result["CommonPrefixes"] = $commonprefix;
		return $result;
	}
}
class GetBucketCORSHandler implements Handler{
	public function handle(ResponseCore $response){
		$xml = new SimpleXMLElement($response->body);
		$cors = array();
		foreach ($xml->CORSRule as $rule) {
			$acors = array();
			foreach ($rule as $key => $value) {
				if($key === "MaxAgeSeconds")
				{
					$acors[$key] = $value->__toString();
				}else{
					if(!isset($acors[$key])){
						$acors[$key] = array();
					}
					array_push($acors[$key],$value->__toString());
				}
			}
			array_push($cors,$acors);
		}
		return $cors;
	}
}
class GetBucketLocationHandler implements Handler{
	public function handle(ResponseCore $response){
		$xml = new SimpleXMLElement($response->body);
		$location = $xml->__toString();

		return $location;
	}
}
class GetBucketLoggingHandler implements Handler{
	public function handle(ResponseCore $response){
		$logging = array();
		$xml = new SimpleXMLElement($response->body);
		$loggingXml = $xml->LoggingEnabled;
		if($loggingXml&&$loggingXml!==NULL)
		{
			foreach ($loggingXml->children() as $key => $value) {
				$logging["Enable"] = TRUE;
				$logging[$key] = $value->__toString();
			}
		}else{
			$logging["Enable"] = FALSE;
		}
		return $logging;
	}
}
class ObjectMetaHandler implements Handler{
	public function handle(ResponseCore $response){
		$ObjectMeta = array();
		$UserMeta = array();
		foreach ($response->header as $key => $value) {
			if (substr(strtolower($key), 0, 10) === Consts::$UserMetaPrefix){
				$UserMeta[$key]=$value;
			}else if(isset(Consts::$ResponseObjectMeta[strtolower($key)])){
				$ObjectMeta[Consts::$ResponseObjectMeta[strtolower($key)]]=$value;
			}
		}
		$Meta = array(
			"ObjectMeta"=>$ObjectMeta,
			"UserMeta"=>$UserMeta
			);
		return $Meta;
	}
}
class getObjectHandler implements Handler{
	public function handle(ResponseCore $response){
		$ObjectMeta = array();
		$UserMeta = array();
		foreach ($response->header as $key => $value) {
			if (substr(strtolower($key), 0, 10) === Consts::$UserMetaPrefix){
				$UserMeta[$key]=$value;
			}else if(isset(Consts::$ResponseObjectMeta[strtolower($key)])){
				$ObjectMeta[Consts::$ResponseObjectMeta[strtolower($key)]]=$value;
			}
		}
		$Meta = array(
			"ObjectMeta"=>$ObjectMeta,
			"UserMeta"=>$UserMeta
			);
		$ks3Object = array(
			"Content"=>$response->body,
			"Meta"=>$Meta
			);
		return $ks3Object;
	}
}
class CopyHandler implements Handler{
	public function handle(ResponseCore $response){
		$headers = array();

		foreach ($response->header as $key => $value) {
			if(isset(Consts::$SSEHandler[strtolower($key)])&&!empty($value)){
				$headers[Consts::$SSEHandler[strtolower($key)]]=$value;
			}
		}

		return $headers;
	}	
}
class InitMultipartUploadHandler implements Handler{
	public function handle(ResponseCore $response){
		$upload = array();
		$xml = new SimpleXMLElement($response->body);
		foreach ($xml->children() as $key => $value) {
			$upload[$key] = $value->__toString();
		}

		foreach ($response->header as $key => $value) {
			if(isset(Consts::$SSEHandler[strtolower($key)])&&!empty($value)){
				$upload[Consts::$SSEHandler[strtolower($key)]]=$value;
			}
		}

		return $upload;
	}
}
class ListPartsHandler implements Handler{
	public function handle(ResponseCore $response){
		$listParts = array();
		$xml = new SimpleXMLElement($response->body);

		$listParts["Bucket"]=$xml->Bucket->__toString();
		$listParts["Key"]=$xml->Key->__toString();
		$listParts["UploadId"]=$xml->UploadId->__toString();
		$listParts["StorageClass"]=$xml->StorageClass->__toString();
		$listParts["PartNumberMarker"]=$xml->PartNumberMarker->__toString();
		$listParts["NextPartNumberMarker"]=$xml->NextPartNumberMarker->__toString();
		$listParts["MaxParts"]=$xml->MaxParts->__toString();
		$listParts["IsTruncated"]=$xml->IsTruncated->__toString();

		$initer = array();
		$owner = array();

		foreach ($xml->Initiator->children() as $key => $value) {
			$initer[$key] = $value->__toString();
		}
		foreach ($xml->Owner->children() as $key => $value) {
			$owner[$key] = $value->__toString();
		}
		$listParts["Owner"] = $owner;
		$listParts["Initiator"]=$initer;

		$parts = array();
		foreach ($xml->Part as $partxml) {
			$part = array();
			foreach ($partxml->children() as $key => $value) {
				$part[$key] = $value->__toString();
			}
			array_push($parts,$part);
		}
		$listParts["Parts"] = $parts;
		return $listParts;
	}
}
class UploadHandler implements Handler{
	public function handle(ResponseCore $response){
		$Headers = array();
		foreach ($response->header as $key => $value) {
			if(isset(Consts::$UploadHandler[strtolower($key)])&&!empty($value)){
				$Headers[Consts::$UploadHandler[strtolower($key)]]=$value;
			}
		}
		return $Headers;
	}
}
class GetAclHandler implements Handler{
	public function handle(ResponseCore $response){
		$hasread = FALSE;
		$haswrite = FALSE;
		$xml = new SimpleXMLElement($response->body);
		$acl = $xml->AccessControlList;
		foreach ($acl->children() as $grant) {
			$permission = $grant->Permission->__toString();
			$hasURI = FALSE;
			$grantee = $grant->Grantee;
			foreach ($grantee->children() as $key => $value) {
				if($key === "URI"&&$value->__toString() === Consts::$Grantee_Group_All){
					$hasURI = TRUE;
				}
			}
			if($hasURI){
				if($permission===Consts::$Permission_Read){
					$hasread = TRUE;
				}elseif($permission===Consts::$Permission_Write){
					$haswrite = TRUE;
				}
			}
		}
		if($hasread&&$haswrite){
			return "public-read-write";
		}else{
			if($hasread)
				return "public-read";
			else
				return "private";
		}
	}
}
class ListMutipartUploadsHandler implements Handler{
	public function handle(ResponseCore $response){
		$mutiUploads = array();
		$xml = new SimpleXMLElement($response->body);

		$mutiUploads["Bucket"]=$xml->Bucket->__toString();
		$mutiUploads["KeyMarker"]=$xml->KeyMarker->__toString();
		$mutiUploads["UploadIdMarker"]=$xml->UploadIdMarker->__toString();
		$mutiUploads["NextKeyMarker"]=$xml->NextKeyMarker->__toString();
		$mutiUploads["NextUploadIdMarker"]=$xml->NextUploadIdMarker->__toString();
		$mutiUploads["MaxUploads"]=$xml->MaxUploads->__toString();
		$mutiUploads["IsTruncated"]=$xml->IsTruncated->__toString();


		$uploads = array();
		foreach ($xml->Upload as $uploadxml) {
			$upload = array();
			foreach ($uploadxml->children() as $key => $value) {
				if($key === "Initiator"){
					$initer = array();
					foreach ($value->children() as $key1 => $value1) {
						$initer[$key1] = $value1->__toString();
					}
					$upload["Initiator"] = $initer;
				}elseif($key === "Owner"){
					$owner = array();
					foreach ($value->children() as $key1 => $value1) {
						$owner[$key1] = $value1->__toString();
					}
					$upload["Owner"] = $owner;
				}else{
					$upload[$key] = $value->__toString();
				}
			}
			array_push($uploads,$upload);
		}
		$mutiUploads["Uploads"] = $uploads;
		return $mutiUploads;
	}
}
class AdpHandler implements Handler{
	public function handle(ResponseCore $response){
		return $response->body;
	}
}
class BooleanHandler implements Handler{
	public function handle(ResponseCore $response){
		if($response->isOk()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
class ExistsHandler implements Handler{
	public function handle(ResponseCore $response){
		$status = $response->status;
		if($status === 404){
			return FALSE;
		}else{
			return TRUE;
		}
	}
}
?>