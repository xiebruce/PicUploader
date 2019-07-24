<?php
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."exceptions".DIRECTORY_SEPARATOR."Exceptions.php";
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."Consts.php";

class LocationBuilder{
	function build($args){
		if(isset($args["Location"])){
			$location = $args["Location"];
			$xml = new SimpleXmlElement('<CreateBucketConfiguration xmlns="http://s3.amazonaws.com/doc/2006-03-01/"></CreateBucketConfiguration>');
			$xml->addChild("LocationConstraint",$args["Location"]);
			return $xml->asXml();
		}
	}
}
class CORSBuilder{
	function build($args){
		if(isset($args["CORS"])){
			$cors = $args["CORS"];
			$xml = new SimpleXmlElement('<CORSConfiguration xmlns="http://s3.amazonaws.com/doc/2006-03-01/"></CORSConfiguration>');
			if(is_array($cors)){
				foreach ($cors as $key => $rule) {
					$ruleXml = $xml->addChild("CORSRule");
					if(is_array($rule)){
						foreach ($rule as $key => $value) {
							if(in_array($key,Consts::$CORSElements)){
								if(is_array($value)){
									foreach ($value as  $ele) {
										$ruleXml->addChild($key,$ele);
									}
								}else{
									$ruleXml->addChild($key,$value);
								}
								
							}
						}
					}
				}
			}
			return $xml->asXml();
		}
	}
}
class BucketLoggingBuilder{
	function build($args){
		if(isset($args["BucketLogging"])){
			$logging = $args["BucketLogging"];
			$xml = new SimpleXmlElement('<BucketLoggingStatus xmlns="http://s3.amazonaws.com/doc/2006-03-01/" />');
			if(is_array($logging)){

				if(!isset($logging["Enable"]))
					throw new Ks3ClientException("bucket logging must provide Enable argument");
				
				if($logging["Enable"]){
					if(!isset($logging["TargetBucket"]))
						throw new Ks3ClientException("bucket logging must provide TargetBucket argument");
					$loggingConfig = $xml->addChild("LoggingEnabled");
					foreach ($logging as $key => $value) {
						if(in_array($key,Consts::$BucketLoggingElements)){
							$loggingConfig->addChild($key,$value);
						}
					}
				}
			}
			return $xml->asXml();
		}
	}
}
class DeleteObjectsBuilder{
	function build($args){
		if(isset($args["DeleteKeys"])){
			$keys = $args["DeleteKeys"];
			$xml = new SimpleXmlElement('<Delete></Delete>');
			if(is_array($keys)){
				foreach ($keys as $key => $value) {
					$object = $xml->addChild("Object");
					$object->addChild("Key",$value);
				}
			}
			return $xml->asXml();
		}
	}
}
class CompleteMultipartUploadBuilder{
	function build($args){
		if(isset($args["Parts"])){
			$parts = $args["Parts"];
			$xml = new SimpleXmlElement('<CompleteMultipartUpload></CompleteMultipartUpload>');
			if(is_array($parts)){
				foreach ($parts as $part) {
					$partXml = $xml->addChild("Part");
					foreach ($part as $key => $value) {
						if(in_array($key,Consts::$PartsElement)){
							$partXml->addChild($key,$value);
						}
					}
				}
			}
			return $xml->asXml();
		}
	}
}
?>