<?php
class Headers{
	static $Date = "Date";
	static $Authorization = "Authorization";
	static $ContentMd5 = "Content-MD5";
	static $ContentType = "Content-Type";
	static $ContentLength="Content-Length";
	static $Acl = "x-kss-acl";
	static $CopySource = "x-kss-copy-source";
	static $ETag = "ETag";
	static $TaskID = "TaskID";
	static $Range = "Range";
	static $AsynchronousProcessingList = "kss-async-process";
	static $NotifyURL = "kss-notifyurl";
	static $XKssCallbackUrl = "x-kss-callbackurl";
	static $XKssCallbackBody = "x-kss-callbackbody";
	static $UserAgent = "User-Agent";
	static $SSEAlgm = "x-kss-server-side-encryption";
	static $SSEKMSId = "x-kss-server-side-encryption-kss-kms-key-id";
	static $SSECAlgm = "x-kss-server-side-encryption-customer-algorithm";
	static $SSECKey = "x-kss-server-side-encryption-customer-key";
	static $SSECMD5 = "x-kss-server-side-encryption-customer-key-MD5";

	static $SSECSourceAlgm = "x-kss-copy-source-server-side-encryption-customer-algorithm";
	static $SSECSourceKey = "x-kss-copy-source-server-side-encryption-customer-key";
	static $SSECSourceMD5 = "x-kss-copy-source-server-side-encryption-customer-key-MD5";

}
?>