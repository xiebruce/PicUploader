<?php

/**
 * Copyright 2019 Huawei Technologies Co.,Ltd.
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use
 * this file except in compliance with the License.  You may obtain a copy of the
 * License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed
 * under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations under the License.
 *
 */

namespace Obs\Internal\Signature;

use Obs\Internal\Common\Model;

class V4Signature extends AbstractSignature
{
	const CONTENT_SHA256 = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855';
	
	protected $region;
	
	protected $utcTimeZone;
	
	public function __construct($ak, $sk, $pathStyle, $endpoint, $region, $methodName, $signature, $securityToken=false)
	{
	    parent::__construct($ak, $sk, $pathStyle, $endpoint, $methodName, $signature, $securityToken);
		$this->region = $region;
		$this->utcTimeZone = new \DateTimeZone ('UTC');
	}
	
	public function doAuth(array &$requestConfig, array &$params, Model $model)
	{
		$result = $this -> prepareAuth($requestConfig, $params, $model);
		
		$result['headers']['x-amz-content-sha256'] = self::CONTENT_SHA256;
		
		$bucketName = $result['dnsParam'];
		
		$result['headers']['Host'] = $result['host'];
		
		$time = null;
		if(array_key_exists('x-amz-date', $result['headers'])){
			$time = $result['headers']['x-amz-date'];
		}else if(array_key_exists('X-Amz-Date', $result['headers'])){
			$time = $result['headers']['X-Amz-Date'];
		}
		$timestamp = $time ? date_create_from_format('Ymd\THis\Z', $time, $this->utcTimeZone) -> getTimestamp()
				:time();
		
		$result['headers']['Date'] = gmdate('D, d M Y H:i:s \G\M\T', $timestamp);
				
		$longDate = gmdate('Ymd\THis\Z', $timestamp);
		$shortDate = substr($longDate, 0, 8);
		
		$credential = $this-> getCredential($shortDate);
		
		$signedHeaders = $this->getSignedHeaders($result['headers']);
		
		$canonicalstring = $this-> makeCanonicalstring($result['method'], $result['headers'], $result['pathArgs'], $bucketName, $result['uriParam'], $signedHeaders);
		
		$result['cannonicalRequest'] = $canonicalstring;
		
		$signature = $this -> getSignature($canonicalstring, $longDate, $shortDate);
		
		$authorization = 'AWS4-HMAC-SHA256 ' . 'Credential=' . $credential. ',' . 'SignedHeaders=' . $signedHeaders . ',' . 'Signature=' . $signature;
		
		$result['headers']['Authorization'] = $authorization;
		
		return $result;
	}
	
	public function getSignature($canonicalstring, $longDate, $shortDate)
	{
		$stringToSign = [];
		$stringToSign[] = 'AWS4-HMAC-SHA256';
		
		$stringToSign[] = "\n";
		
		$stringToSign[] = $longDate;
		
		$stringToSign[] = "\n";
		$stringToSign[] = $this -> getScope($shortDate);
		$stringToSign[] = "\n";
		
		$stringToSign[] = hash('sha256', $canonicalstring);
		
		$dateKey = hash_hmac('sha256', $shortDate, 'AWS4' . $this -> sk, true);
		$regionKey = hash_hmac('sha256', $this->region, $dateKey, true);
		$serviceKey = hash_hmac('sha256', 's3', $regionKey, true);
		$signingKey = hash_hmac('sha256', 'aws4_request', $serviceKey, true);
		$signature = hash_hmac('sha256', implode('', $stringToSign), $signingKey);
		return $signature;
	}
	
	public function getCanonicalQueryString($pathArgs)
	{
		$queryStr = '';
		
		ksort($pathArgs);
		$index = 0;
		foreach ($pathArgs as $key => $value){
			$queryStr .=  $key . '=' . $value;
			if($index++ !== count($pathArgs) - 1){
				$queryStr .= '&';
			}
		}
		return $queryStr;
	}
	
	public function getCanonicalHeaders($headers)
	{
		$_headers = [];
		foreach ($headers as $key => $value) {
			$_headers[strtolower($key)] = $value;
		}
		ksort($_headers);
		
		$canonicalHeaderStr = '';
		
		foreach ($_headers as $key => $value){
			$value = is_array($value) ? implode(',', $value) : $value; 
			$canonicalHeaderStr .= $key . ':' . $value;
			$canonicalHeaderStr .= "\n";
		}
		return $canonicalHeaderStr;
	}
	
	public function getCanonicalURI($bucketName, $objectKey)
	{
		$uri = '';
		if($this -> pathStyle && $bucketName){
			$uri .= '/' . $bucketName;
		}
		
		if($objectKey){
			$uri .= '/' . $objectKey;
		}
		
		if($uri === ''){
			$uri = '/';
		}
		return $uri;
	}
	
	public function makeCanonicalstring($method, $headers, $pathArgs, $bucketName, $objectKey, $signedHeaders=null, $payload=null)
	{
		$buffer = [];
		$buffer[] = $method;
		$buffer[] = "\n";
		$buffer[] = $this->getCanonicalURI($bucketName, $objectKey);
		$buffer[] = "\n";
		$buffer[] = $this->getCanonicalQueryString($pathArgs);
		$buffer[] = "\n";
		$buffer[] = $this->getCanonicalHeaders($headers);
		$buffer[] = "\n";
		$buffer[] = $signedHeaders ? $signedHeaders : $this->getSignedHeaders($headers);
		$buffer[] = "\n";
		$buffer[] = $payload ? strval($payload) : self::CONTENT_SHA256;
		
		return implode('', $buffer);
	}
	
	public function getSignedHeaders($headers)
	{
		$_headers = [];
		
		foreach ($headers as $key => $value) {
			$_headers[] = strtolower($key);
		}
		
		sort($_headers);
		
		$signedHeaders = '';
		
		foreach ($_headers as $key => $value){
			$signedHeaders .= $value;
			if($key !== count($_headers) - 1){
				$signedHeaders .= ';';
			}
		}
		return $signedHeaders;
	}
	
	public function getScope($shortDate)
	{
		return $shortDate . '/' . $this->region . '/s3/aws4_request';
	}
	
	public function getCredential($shortDate)
	{
		return $this->ak . '/' . $this->getScope($shortDate);
	}
}
