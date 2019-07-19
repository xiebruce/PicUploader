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

use Obs\Log\ObsLog;
use Obs\Internal\Resource\Constants;
use Obs\ObsException;
use Obs\Internal\Common\SchemaFormatter;
use GuzzleHttp\Psr7\Stream;
use Obs\Internal\Common\Model;
use Psr\Http\Message\StreamInterface;
use Obs\Internal\Common\ObsTransform;
use Obs\Internal\Common\V2Transform;

abstract class AbstractSignature implements SignatureInterface
{
	
	protected $ak;
	
	protected $sk;
	
	protected $pathStyle;
	
	protected $endpoint;
	
	protected $methodName;
	
	protected $securityToken;
	
	protected $signature;
	
	public static function urlencodeWithSafe($val, $safe='/'){
		if(($len = strlen($val)) === 0){
			return '';
		}
		$buffer = [];
		for ($index=0;$index<$len;$index++){
			$str = $val[$index];		
			$buffer[] = !($pos = strpos($safe, $str)) && $pos !== 0 ? rawurlencode($str) : $str;
		}
		return implode('', $buffer);
	}
	
	protected function __construct($ak, $sk, $pathStyle, $endpoint, $methodName, $signature, $securityToken=false)
	{
		$this -> ak = $ak;
		$this -> sk = $sk;
		$this -> pathStyle = $pathStyle;
		$this -> endpoint = $endpoint;
		$this -> methodName = $methodName;
		$this -> signature = $signature;
		$this -> securityToken = $securityToken;
	}
	
	protected function transXmlByType($key, &$value, &$subParams, $transHolder)
	{
		$xml = [];
		$treatAsString = false;
		if(isset($value['type'])){
			$type = $value['type'];
			if($type === 'array'){
				$name = isset($value['sentAs']) ? $value['sentAs'] : $key;
				$subXml = [];
				foreach($subParams as $item){
				    $temp = $this->transXmlByType($key, $value['items'], $item, $transHolder);
					if($temp !== ''){
						$subXml[] = $temp;
					}
				}
				if(!empty($subXml)){
				    if(!isset($value['data']['xmlFlattened'])){
						$xml[] = '<' . $name . '>';
						$xml[] = implode('', $subXml);
						$xml[] = '</' . $name . '>';
					}else{
						$xml[] = implode('', $subXml);
					}
				}
			}else if($type === 'object'){
				$name = isset($value['sentAs']) ? $value['sentAs'] : (isset($value['name']) ? $value['name'] : $key);
				$properties = $value['properties'];
				$subXml = [];
				$attr = [];
				foreach ($properties as $pkey => $pvalue){
					if(isset($pvalue['required']) && $pvalue['required'] && !isset($subParams[$pkey])){
						$obsException= new ObsException('param:' .$pkey. ' is required');
						$obsException-> setExceptionType('client');
						throw $obsException;
					}
					if(isset($subParams[$pkey])){
						if(isset($pvalue['data']) && isset($pvalue['data']['xmlAttribute']) && $pvalue['data']['xmlAttribute']){
						    $attrValue = $this->xml_tansfer(trim(strval($subParams[$pkey])));
						    $attr[$pvalue['sentAs']] = '"' . $attrValue . '"';
							if(isset($pvalue['data']['xmlNamespace'])){
								$ns = substr($pvalue['sentAs'], 0, strpos($pvalue['sentAs'], ':'));
								$attr['xmlns:' . $ns] = '"' . $pvalue['data']['xmlNamespace'] . '"';
							}
						}else{
						    $subXml[] = $this -> transXmlByType($pkey, $pvalue, $subParams[$pkey], $transHolder);
						}
					}
				}
				$val = implode('', $subXml);
				if($val !== ''){
					$_name = $name;
					if(!empty($attr)){
						foreach ($attr as $akey => $avalue){
							$_name .= ' ' . $akey . '=' . $avalue;
						}
					}
					if(!isset($value['data']['xmlFlattened'])){ 
					    $xml[] = '<' . $_name . '>';
					    $xml[] = $val;
					    $xml[] = '</' . $name . '>';
					} else {
					    $xml[] = $val;
					}
				}
			}else{
				$treatAsString = true;
			}
		}else{
			$treatAsString = true;
			$type = null;
		}
		
		if($treatAsString){
			if($type === 'boolean'){
				if(!is_bool($subParams) && strval($subParams) !== 'false' && strval($subParams) !== 'true'){
					$obsException= new ObsException('param:' .$key. ' is not a boolean value');
					$obsException-> setExceptionType('client');
					throw $obsException;
				}
			}else if($type === 'numeric'){
				if(!is_numeric($subParams)){
					$obsException= new ObsException('param:' .$key. ' is not a numeric value');
					$obsException-> setExceptionType('client');
					throw $obsException;
				}
			}else if($type === 'float'){
				if(!is_float($subParams)){
					$obsException= new ObsException('param:' .$key. ' is not a float value');
					$obsException-> setExceptionType('client');
					throw $obsException;
				}
			}else if($type === 'int' || $type === 'integer'){
				if(!is_int($subParams)){
					$obsException= new ObsException('param:' .$key. ' is not a int value');
					$obsException-> setExceptionType('client');
					throw $obsException;
				}
			}
			
			$name = isset($value['sentAs']) ? $value['sentAs'] : $key;
			if(is_bool($subParams)){
				$val = 	$subParams ? 'true' : 'false';
			}else{
				$val = strval($subParams);
			}
			if(isset($value['format'])){
				$val = SchemaFormatter::format($value['format'], $val);
			}
			if (isset($value['transform'])) {
			    $val = $transHolder->transform($value['transform'], $val);
			}			
			if(isset($val) && $val !== ''){
			    $val = $this->xml_tansfer($val);
			    if(!isset($value['data']['xmlFlattened'])){
			        $xml[] = '<' . $name . '>';
			        $xml[] = $val;
			        $xml[] = '</' . $name . '>';
			    } else {
			        $xml[] = $val;
			    }			    
			}else if(isset($value['canEmpty']) && $value['canEmpty']){
			    $xml[] = '<' . $name . '>';
			    $xml[] = $val;
			    $xml[] = '</' . $name . '>';
			}
		}
		$ret = implode('', $xml);
		
		if(isset($value['wrapper'])){
		    $ret = '<'. $value['wrapper'] . '>' . $ret . '</'. $value['wrapper'] . '>';
		}
		
		return $ret;
	}
	
	private function xml_tansfer($tag) {
	    $search = array('&', '<', '>', '\'', '"');
	    $repalce = array('&amp;', '&lt;', '&gt;', '&apos;', '&quot;');
	    $transferXml = str_replace($search, $repalce, $tag);
	    return $transferXml;
	}
	
	protected function prepareAuth(array &$requestConfig, array &$params, Model $model)
	{
	    $transHolder = strcasecmp($this-> signature, 'obs') === 0 ? ObsTransform::getInstance() : V2Transform::getInstance();
		$method = $requestConfig['httpMethod'];
		$requestUrl = $this->endpoint;
		$headers = [];
		$pathArgs = [];
		$dnsParam = null;
		$uriParam = null;
		$body = [];
		$xml = [];
		
		if(isset($requestConfig['specialParam'])){
			$pathArgs[$requestConfig['specialParam']] = '';
		}
		
		$result = ['body' => null];
		$url = parse_url($requestUrl);
		$host = $url['host'];
		
		$fileFlag = false;
		
		if(isset($requestConfig['requestParameters'])){
			$paramsMetadata = $requestConfig['requestParameters'];
			foreach ($paramsMetadata as $key => $value){
				if(isset($value['required']) && $value['required'] && !isset($params[$key])){
					$obsException= new ObsException('param:' .$key. ' is required');
					$obsException-> setExceptionType('client');
					throw $obsException;
				}
				if(isset($params[$key]) && isset($value['location'])){
					$location = $value['location'];
					$val = $params[$key];
					$type = 'string';
					if($val !== '' && isset($value['type'])){
						$type = $value['type'];
						if($type === 'boolean'){
							if(!is_bool($val) && strval($val) !== 'false' && strval($val) !== 'true'){
								$obsException= new ObsException('param:' .$key. ' is not a boolean value');
								$obsException-> setExceptionType('client');
								throw $obsException;
							}
						}else if($type === 'numeric'){
							if(!is_numeric($val)){
								$obsException= new ObsException('param:' .$key. ' is not a numeric value');
								$obsException-> setExceptionType('client');
								throw $obsException;
							}
						}else if($type === 'float'){
							if(!is_float($val)){
								$obsException= new ObsException('param:' .$key. ' is not a float value');
								$obsException-> setExceptionType('client');
								throw $obsException;
							}
						}else if($type === 'int' || $type === 'integer'){
							if(!is_int($val)){
								$obsException= new ObsException('param:' .$key. ' is not a int value');
								$obsException-> setExceptionType('client');
								throw $obsException;
							}
						}
					}
					
					if($location === 'header'){
						if($type === 'object'){
							if(is_array($val)){
								$sentAs = strtolower($value['sentAs']);
								foreach ($val as $k => $v){
									$k = strtolower($k);
									$name = strpos($k, $sentAs) === 0 ? $k : $sentAs . $k;
									$headers[$name] = self::urlencodeWithSafe($v);
								}
							}
						}else if($type === 'array'){
							if(is_array($val)){
								$name = isset($value['sentAs']) ? $value['sentAs'] : (isset($value['items']['sentAs']) ? $value['items']['sentAs'] : $key);
								$temp = [];
								foreach ($val as $v){
									if(($v = strval($v)) !== ''){
										$temp[] =  self::urlencodeWithSafe($v);
									}
								}
								$headers[$name] = $temp;
							}
						}else if($type === 'password'){
							if(($val = strval($val)) !== ''){
								$name = isset($value['sentAs']) ? $value['sentAs'] : $key;
								$pwdName = isset($value['pwdSentAs']) ? $value['pwdSentAs'] : $name . '-MD5';
								$val1 = base64_encode($val);
								$val2 = base64_encode(md5($val, true));
								$headers[$name] = $val1;
								$headers[$pwdName] = $val2;
							}
						}else{
						    if (isset($value['transform'])) {
						        $val = $transHolder->transform($value['transform'], strval($val));
						    }
							if(isset($val)){ 
							    if(is_bool($val)){
							        $val = $val ? 'true' : 'false';
							    }else{
							        $val = strval($val);
							    }
							    if($val !== ''){
    								$name = isset($value['sentAs']) ? $value['sentAs'] : $key;
    								if(isset($value['format'])){
    									$val = SchemaFormatter::format($value['format'], $val);
    								}
    								$headers[$name] = self::urlencodeWithSafe($val);
							    }
							}
						}
					}else if($location === 'uri' && $uriParam === null){
						$uriParam = self::urlencodeWithSafe($val);
					}else if($location === 'dns' && $dnsParam === null){
						$dnsParam = $val;
					}else if($location === 'query'){
						$name = isset($value['sentAs']) ? $value['sentAs'] : $key;
						if(strval($val) !== ''){
						    if (strcasecmp ( $this->signature, 'v4' ) === 0) {
						        $pathArgs[rawurlencode($name)] = rawurlencode(strval($val));
						    } else {
						        $pathArgs[self::urlencodeWithSafe($name)] = self::urlencodeWithSafe(strval($val));
						    }
						}
					}else if($location === 'xml'){
					    $val = $this->transXmlByType($key, $value, $val, $transHolder);
						if($val !== ''){
							$xml[] = $val;
						}
					}else if($location === 'body'){
						
						if(isset($result['body'])){
							$obsException= new ObsException('duplicated body provided');
							$obsException-> setExceptionType('client');
							throw $obsException;
						}
						
						if($type === 'file'){
							if(!file_exists($val)){
								$obsException= new ObsException('file[' .$val. '] does not exist');
								$obsException-> setExceptionType('client');
								throw $obsException;
							}
							$result['body'] = new Stream(fopen($val, 'r'));
							$fileFlag = true;
						}else if($type === 'stream'){
							$result['body'] = $val;
						}else{
							$result['body'] = strval($val);
						}
					}else if($location === 'response'){
						$model[$key] = ['value' => $val, 'type' => $type];
					}
				}
			}
			
			
			if($dnsParam){
				if($this -> pathStyle){
					$requestUrl = $requestUrl . '/' .  $dnsParam;
				}else{
					$defaultPort = strtolower($url['scheme']) === 'https' ? '443' : '80';
					$host = $dnsParam. '.' . $host;
					$requestUrl = $url['scheme'] . '://' . $host . ':' . (isset($url['port']) ? $url['port'] : $defaultPort);
				}
			}
			if($uriParam){
				$requestUrl = $requestUrl . '/' . $uriParam;
			}
			
			if(!empty($pathArgs)){
				$requestUrl .= '?';
				$_pathArgs = [];
				foreach ($pathArgs as $key => $value){
					$_pathArgs[] = $value === null || $value === '' ? $key : $key . '=' . $value;
				}
				$requestUrl .= implode('&', $_pathArgs);
			}
		}
		
		if($xml || (isset($requestConfig['data']['xmlAllowEmpty']) && $requestConfig['data']['xmlAllowEmpty'])){
			$body[] = '<';
			$xmlRoot = $requestConfig['data']['xmlRoot']['name'];
			
			$body[] = $xmlRoot;
			$body[] = '>';
			$body[] = implode('', $xml);
			$body[] = '</';
			$body[] = $xmlRoot;
			$body[] = '>';
			$headers['Content-Type'] = 'application/xml';
			$result['body'] = implode('', $body);
			
			ObsLog::commonLog(DEBUG, 'request content ' . $result['body']);
			
			if(isset($requestConfig['data']['contentMd5']) && $requestConfig['data']['contentMd5']){
				$headers['Content-MD5'] = base64_encode(md5($result['body'],true));
			}
		}
		
		if($fileFlag && ($result['body'] instanceof StreamInterface)){
			if($this->methodName === 'uploadPart' && (isset($model['Offset']) || isset($model['PartSize']))){
				$bodySize = $result['body'] ->getSize();
				if(isset($model['Offset'])){
					$offset = intval($model['Offset']['value']);
					$offset = $offset >= 0 && $offset < $bodySize ? $offset : 0;
				}else{
					$offset = 0;
				}
				
				if(isset($model['PartSize'])){
					$partSize = intval($model['PartSize']['value']);
					$partSize = $partSize > 0 && $partSize  <= ($bodySize - $offset) ? $partSize : $bodySize - $offset;
				}else{
					$partSize = $bodySize - $offset;
				}
				$result['body'] -> rewind();
				$result['body'] -> seek($offset);
				$headers['Content-Length'] = $partSize;
			}else if(isset($headers['Content-Length'])){
				$bodySize = $result['body'] -> getSize();
				if(intval($headers['Content-Length']) > $bodySize){
					$headers['Content-Length'] =  $bodySize;
				}
			}
		}
		
		$constants = Constants::selectConstants($this -> signature);
		
		if($this->securityToken){
		    $headers[$constants::SECURITY_TOKEN_HEAD] = $this->securityToken; 
		}
		
		$result['host'] = $host;
		$result['method'] = $method;
		$result['headers'] = $headers;
		$result['pathArgs'] = $pathArgs;
		$result['dnsParam'] = $dnsParam;
		$result['uriParam'] = $uriParam;
		$result['requestUrl'] = $requestUrl;
		
		return $result;
	}
}