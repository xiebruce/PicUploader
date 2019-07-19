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


use Obs\Internal\Resource\Constants;
use Obs\Internal\Common\Model;
use Obs\Internal\Resource\V2Constants;

class DefaultSignature extends AbstractSignature
{
	const INTEREST_HEADER_KEY_LIST = array('content-type', 'content-md5', 'date');
	
	
	public function __construct($ak, $sk, $pathStyle, $endpoint, $methodName, $signature, $securityToken=false)
	{
	    
	    parent::__construct($ak, $sk, $pathStyle, $endpoint, $methodName, $signature, $securityToken);
	}
	
	public function doAuth(array &$requestConfig, array &$params, Model $model)
	{   
		$result = $this -> prepareAuth($requestConfig, $params, $model);
		
		$result['headers']['Date'] = gmdate('D, d M Y H:i:s \G\M\T');
		
		$canonicalstring = $this-> makeCanonicalstring($result['method'], $result['headers'], $result['pathArgs'], $result['dnsParam'], $result['uriParam']);
		
		$result['cannonicalRequest'] = $canonicalstring;
		
		$signature = base64_encode(hash_hmac('sha1', $canonicalstring, $this->sk, true));
		
		$constants = Constants::selectConstants($this -> signature);
		$signatureFlag = $constants::FLAG;
		
		$authorization = $signatureFlag . ' ' . $this->ak . ':' . $signature;
		
		$result['headers']['Authorization'] = $authorization;
		
		return $result;
	}	
	
	public function makeCanonicalstring($method, $headers, $pathArgs, $bucketName, $objectKey, $expires = null)
	{
		$buffer = [];
		$buffer[] = $method;
		$buffer[] = "\n";	
		$interestHeaders = [];
		$constants = Constants::selectConstants($this -> signature);
		
		foreach ($headers as $key => $value){
			$key = strtolower($key);
			if(in_array($key, self::INTEREST_HEADER_KEY_LIST) || strpos($key, $constants::HEADER_PREFIX) === 0){
				$interestHeaders[$key] = $value;
			}
		}
		
		if(array_key_exists($constants::ALTERNATIVE_DATE_HEADER, $interestHeaders)){
			$interestHeaders['date'] = '';
		} 
		
		if($expires !== null){
			$interestHeaders['date'] = strval($expires);
		}
		
		if(!array_key_exists('content-type', $interestHeaders)){
			$interestHeaders['content-type'] = '';
		}
		
		if(!array_key_exists('content-md5', $interestHeaders)){
			$interestHeaders['content-md5'] = '';
		}
		
		ksort($interestHeaders);
		
		foreach ($interestHeaders as $key => $value){
		    if(strpos($key, $constants::HEADER_PREFIX) === 0){
				$buffer[] = $key . ':' . $value;
			}else{
				$buffer[] = $value;
			}
			$buffer[] = "\n";
		}
		
		$uri = '';
		
		if($bucketName){
			$uri .= '/';
			$uri .= $bucketName;
			if(!$this->pathStyle){
				$uri .= '/';
			}
		}
		
		if($objectKey){
			if(!($pos=strripos($uri, '/')) || strlen($uri)-1 !== $pos){
				$uri .= '/';
			}
			$uri .= $objectKey;
		}
		
		$buffer[] = $uri === ''? '/' : $uri;
		
		if(!empty($pathArgs)){
			ksort($pathArgs);
			$_pathArgs = [];
			foreach ($pathArgs as $key => $value){
			    if(in_array(strtolower($key), $constants::ALLOWED_RESOURCE_PARAMTER_NAMES)){
					$_pathArgs[] = $value === null || $value === '' ? $key : $key . '=' . urldecode($value);
				}
			}
			if(!empty($_pathArgs)){
				$buffer[] = '?';
				$buffer[] = implode('&', $_pathArgs);
			}
		}
		
		return implode('', $buffer);
	}

}
