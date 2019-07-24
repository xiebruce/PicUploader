<?php
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Headers.php";

class Consts {
	// static $Ks3EndPoint = "kss.ksyun.com";
	static $SubResource = array("acl", "lifecycle", "location", "logging", "notification", "policy", "requestPayment", "torrent", "uploadId", "uploads", "versionId","versioning", "versions", "website", "delete", "thumbnail","cors","pfop","querypfop","adp","queryadp");	
	static $QueryParam = array("partNumber","response-content-type","response-content-language","response-expires", "response-cache-control","response-content-disposition", "response-content-encoding", );
	static $Acl = array("private","public-read","public-read-write");
	static $KS3HeaderPrefix = "x-kss-";
	static $CORSElements = array("AllowedMethod","AllowedOrigin","AllowedHeader","MaxAgeSeconds","ExposeHeader");
	static $BucketLoggingElements = array("TargetBucket","TargetPrefix");
	static $ObjectMeta = array("Cache-Control","Content-Disposition","Content-Encoding","Content-Length","Content-MD5","Content-Type","Expires");
	static $MultipartObjectMeta = array("Cache-Control","Content-Disposition","Content-Encoding","Content-Type","Expires");
	static $UserMetaPrefix = "x-kss-meta";
	static $ResponseObjectMeta = array(
		"cache-control"=>"Cache-Control",
		"content-disposition"=>"Content-Disposition",
		"content-encoding"=>"Content-Encoding",
		"etag"=>"ETag",
		"content-type"=>"Content-Type",
		"expires"=>"Expires",
		"last-modified"=>"Last-Modified",
		"content-range"=>"Content-Range",
		"content-length"=>"Content-Length",
		"x-kss-server-side-encryption"=>"SSEAlgm",
		"x-kss-server-side-encryption-kss-kms-key-id"=>"SSEKMSId",
		"x-kss-server-side-encryption-customer-algorithm"=>"SSECAlgm",
		"x-kss-server-side-encryption-customer-key-md5"=>"SSECKeyMD5"
		);
	static $PartsElement = array("PartNumber","ETag");
	static $UploadHandler = array(
		"etag"=>"ETag",
		"taskid"=>"TaskID",
		"x-kss-server-side-encryption"=>"SSEAlgm",
		"x-kss-server-side-encryption-kss-kms-key-id"=>"SSEKMSId",
		"x-kss-server-side-encryption-customer-algorithm"=>"SSECAlgm",
		"x-kss-server-side-encryption-customer-key-md5"=>"SSECKeyMD5"
		);
	static $SSEHandler = array(
		"x-kss-server-side-encryption"=>"SSEAlgm",
		"x-kss-server-side-encryption-kss-kms-key-id"=>"SSEKMSId",
		"x-kss-server-side-encryption-customer-algorithm"=>"SSECAlgm",
		"x-kss-server-side-encryption-customer-key-md5"=>"SSECKeyMD5"
		);
	static $Permission_Read = "READ";
	static $Permission_Write = "WRITE";
	static $Grantee_Group_All = "http://acs.ksyun.com/groups/global/AllUsers";
	static $ResponseOverrides = array("response-expires","response-content-encoding","response-content-disposition",
		"response-content-language","response-content-type","response-cache-control");
	static $CallBackMagics = array("bucket","key","etag","objectSize","mimeType","createTime");
	static $UserAgent = "ks3-kss-php-sdk";
	static $SSEDefaultAlgm = "AES256";
}
?>