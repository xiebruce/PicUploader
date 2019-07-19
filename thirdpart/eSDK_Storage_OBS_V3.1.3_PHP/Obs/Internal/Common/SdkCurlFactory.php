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

namespace Obs\Internal\Common;

use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\LazyOpenStream;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Handler\CurlFactoryInterface;
use GuzzleHttp\Handler\EasyHandle;

class SdkCurlFactory implements CurlFactoryInterface
{
    private $handles = [];

    private $maxHandles;

    public function __construct($maxHandles)
    {
        $this->maxHandles = $maxHandles;
    }

    public function create(RequestInterface $request, array $options)
    {
        if (isset($options['curl']['body_as_string'])) {
            $options['_body_as_string'] = $options['curl']['body_as_string'];
            unset($options['curl']['body_as_string']);
        }
        
        $easy = new EasyHandle;
        $easy->request = $request;
        $easy->options = $options;
        $conf = $this->getDefaultConf($easy);
        $this->applyMethod($easy, $conf);
        $this->applyHandlerOptions($easy, $conf);
        $this->applyHeaders($easy, $conf);
        
        
        unset($conf['_headers']);

        if (isset($options['curl'])) {
            $conf = array_replace($conf, $options['curl']);
        }

        $conf[CURLOPT_HEADERFUNCTION] = $this->createHeaderFn($easy);
        if($this->handles){
           $easy->handle = array_pop($this->handles);
        }else{
           $easy->handle = curl_init();
        }
        curl_setopt_array($easy->handle, $conf);

        return $easy;
    }
    
    public function close()
    {
    	if($this->handles){
    		foreach ($this->handles as $handle){
    			curl_close($handle);
    		}
 			unset($this->handles);
 			$this->handles = [];
    	}
    }

    public function release(EasyHandle $easy)
    {
        $resource = $easy->handle;
        unset($easy->handle);

        if (count($this->handles) >= $this->maxHandles) {
            curl_close($resource);
        } else {
            curl_setopt($resource, CURLOPT_HEADERFUNCTION, null);
            curl_setopt($resource, CURLOPT_READFUNCTION, null);
            curl_setopt($resource, CURLOPT_WRITEFUNCTION, null);
            curl_setopt($resource, CURLOPT_PROGRESSFUNCTION, null);
            curl_reset($resource);
            $this->handles[] = $resource;
        }
    }

    private function getDefaultConf(EasyHandle $easy)
    {
        $conf = [
            '_headers'             => $easy->request->getHeaders(),
            CURLOPT_CUSTOMREQUEST  => $easy->request->getMethod(),
            CURLOPT_URL            => (string) $easy->request->getUri()->withFragment(''),
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_HEADER         => false,
            CURLOPT_CONNECTTIMEOUT => 150,
        ];

        if (defined('CURLOPT_PROTOCOLS')) {
            $conf[CURLOPT_PROTOCOLS] = CURLPROTO_HTTP | CURLPROTO_HTTPS;
        }

        $version = $easy->request->getProtocolVersion();
        if ($version == 1.1) {
            $conf[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_1_1;
        } elseif ($version == 2.0) {
            $conf[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_2_0;
        } else {
            $conf[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_1_0;
        }

        return $conf;
    }

    private function applyMethod(EasyHandle $easy, array &$conf)
    {
        $body = $easy->request->getBody();
        $size = $body->getSize();
        
        if ($size === null || $size > 0) {
            $this->applyBody($easy->request, $easy->options, $conf);
            return;
        }

        $method = $easy->request->getMethod();
        if ($method === 'PUT' || $method === 'POST') {
            if (!$easy->request->hasHeader('Content-Length')) {
                $conf[CURLOPT_HTTPHEADER][] = 'Content-Length: 0';
            }
        } elseif ($method === 'HEAD') {
            $conf[CURLOPT_NOBODY] = true;
            unset(
                $conf[CURLOPT_WRITEFUNCTION],
                $conf[CURLOPT_READFUNCTION],
                $conf[CURLOPT_FILE],
                $conf[CURLOPT_INFILE]
            );
        }
    }

    private function applyBody(RequestInterface $request, array $options, array &$conf)
    {
        $size = $request->hasHeader('Content-Length')
            ? (int) $request->getHeaderLine('Content-Length')
            : $request->getBody()->getSize();
		            
        if($request->getBody()->getSize() === $size && $request -> getBody() ->tell() <= 0){
	        if (($size !== null && $size < 1000000) ||
	            !empty($options['_body_as_string'])
	        ) {
	            $conf[CURLOPT_POSTFIELDS] = (string) $request->getBody();
	            $this->removeHeader('Content-Length', $conf);
	            $this->removeHeader('Transfer-Encoding', $conf);
	        } else {
	            $conf[CURLOPT_UPLOAD] = true;
	            if ($size !== null) {
	                $conf[CURLOPT_INFILESIZE] = $size;
	                $this->removeHeader('Content-Length', $conf);
	            }
	            $body = $request->getBody();
	            if ($body->isSeekable()) {
	                $body->rewind();
	            }
	            $conf[CURLOPT_READFUNCTION] = function ($ch, $fd, $length) use ($body) {
	                return $body->read($length);
	            };
	        }
        }else{
        	$body = $request->getBody();
        	$conf[CURLOPT_UPLOAD] = true;
        	$conf[CURLOPT_INFILESIZE] = $size;
        	$readCount = 0;
        	$conf[CURLOPT_READFUNCTION] = function ($ch, $fd, $length) use ($body, $readCount, $size) {
        		if($readCount >= $size){
        			$body -> close();
        			return '';
        		}
        		$readCountOnce = $length <= $size ? $length : $size;
        		$readCount += $readCountOnce;
        		return $body->read($readCountOnce);
        	};
        }
            
            

        if (!$request->hasHeader('Expect')) {
            $conf[CURLOPT_HTTPHEADER][] = 'Expect:';
        }

        if (!$request->hasHeader('Content-Type')) {
            $conf[CURLOPT_HTTPHEADER][] = 'Content-Type:';
        }
    }

    private function applyHeaders(EasyHandle $easy, array &$conf)
    {
        foreach ($conf['_headers'] as $name => $values) {
            foreach ($values as $value) {
                $conf[CURLOPT_HTTPHEADER][] = "$name: $value";
            }
        }

        // Remove the Accept header if one was not set
        if (!$easy->request->hasHeader('Accept')) {
            $conf[CURLOPT_HTTPHEADER][] = 'Accept:';
        }
    }

    private function removeHeader($name, array &$options)
    {
        foreach (array_keys($options['_headers']) as $key) {
            if (!strcasecmp($key, $name)) {
                unset($options['_headers'][$key]);
                return;
            }
        }
    }

    private function applyHandlerOptions(EasyHandle $easy, array &$conf)
    {
        $options = $easy->options;
        if (isset($options['verify'])) {
        	$conf[CURLOPT_SSL_VERIFYHOST] = 0;
            if ($options['verify'] === false) {
                unset($conf[CURLOPT_CAINFO]);
                $conf[CURLOPT_SSL_VERIFYPEER] = false;
            } else {
                $conf[CURLOPT_SSL_VERIFYPEER] = true;
                if (is_string($options['verify'])) {
                    if (!file_exists($options['verify'])) {
                        throw new \InvalidArgumentException(
                            "SSL CA bundle not found: {$options['verify']}"
                        );
                    }
                    if (is_dir($options['verify']) ||
                        (is_link($options['verify']) && is_dir(readlink($options['verify'])))) {
                        $conf[CURLOPT_CAPATH] = $options['verify'];
                    } else {
                        $conf[CURLOPT_CAINFO] = $options['verify'];
                    }
                }
            }
        }

        if (!empty($options['decode_content'])) {
            $accept = $easy->request->getHeaderLine('Accept-Encoding');
            if ($accept) {
                $conf[CURLOPT_ENCODING] = $accept;
            } else {
                $conf[CURLOPT_ENCODING] = '';
                $conf[CURLOPT_HTTPHEADER][] = 'Accept-Encoding:';
            }
        }

        if (isset($options['sink'])) {
            $sink = $options['sink'];
            if (!is_string($sink)) {
                $sink = \GuzzleHttp\Psr7\stream_for($sink);
            } elseif (!is_dir(dirname($sink))) {
                throw new \RuntimeException(sprintf(
                    'Directory %s does not exist for sink value of %s',
                    dirname($sink),
                    $sink
                ));
            } else {
                $sink = new LazyOpenStream($sink, 'w+');
            }
            $easy->sink = $sink;
            $conf[CURLOPT_WRITEFUNCTION] = function ($ch, $write) use ($sink) {
                return $sink->write($write);
            };
        } else {
            $conf[CURLOPT_FILE] = fopen('php://temp', 'w+');
            $easy->sink = Psr7\stream_for($conf[CURLOPT_FILE]);
        }
        $timeoutRequiresNoSignal = false;
        if (isset($options['timeout'])) {
            $timeoutRequiresNoSignal |= $options['timeout'] < 1;
            $conf[CURLOPT_TIMEOUT_MS] = $options['timeout'] * 1000;
        }

        if (isset($options['force_ip_resolve'])) {
            if ('v4' === $options['force_ip_resolve']) {
                $conf[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
            } else if ('v6' === $options['force_ip_resolve']) {
                $conf[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V6;
            }
        }

        if (isset($options['connect_timeout'])) {
            $timeoutRequiresNoSignal |= $options['connect_timeout'] < 1;
            $conf[CURLOPT_CONNECTTIMEOUT_MS] = $options['connect_timeout'] * 1000;
        }

        if ($timeoutRequiresNoSignal && strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
            $conf[CURLOPT_NOSIGNAL] = true;
        }

        if (isset($options['proxy'])) {
            if (!is_array($options['proxy'])) {
                $conf[CURLOPT_PROXY] = $options['proxy'];
            } else {
                $scheme = $easy->request->getUri()->getScheme();
                if (isset($options['proxy'][$scheme])) {
                    $host = $easy->request->getUri()->getHost();
                    if (!isset($options['proxy']['no']) ||
                        !\GuzzleHttp\is_host_in_noproxy($host, $options['proxy']['no'])
                    ) {
                        $conf[CURLOPT_PROXY] = $options['proxy'][$scheme];
                    }
                }
            }
        }

        if (isset($options['cert'])) {
            $cert = $options['cert'];
            if (is_array($cert)) {
                $conf[CURLOPT_SSLCERTPASSWD] = $cert[1];
                $cert = $cert[0];
            }
            if (!file_exists($cert)) {
                throw new \InvalidArgumentException(
                    "SSL certificate not found: {$cert}"
                );
            }
            $conf[CURLOPT_SSLCERT] = $cert;
        }

        if (isset($options['ssl_key'])) {
            $sslKey = $options['ssl_key'];
            if (is_array($sslKey)) {
                $conf[CURLOPT_SSLKEYPASSWD] = $sslKey[1];
                $sslKey = $sslKey[0];
            }
            if (!file_exists($sslKey)) {
                throw new \InvalidArgumentException(
                    "SSL private key not found: {$sslKey}"
                );
            }
            $conf[CURLOPT_SSLKEY] = $sslKey;
        }

        if (isset($options['progress'])) {
            $progress = $options['progress'];
            if (!is_callable($progress)) {
                throw new \InvalidArgumentException(
                    'progress client option must be callable'
                );
            }
            $conf[CURLOPT_NOPROGRESS] = false;
            $conf[CURLOPT_PROGRESSFUNCTION] = function () use ($progress) {
                $args = func_get_args();
                if (is_resource($args[0])) {
                    array_shift($args);
                }
                call_user_func_array($progress, $args);
            };
        }

        if (!empty($options['debug'])) {
            $conf[CURLOPT_STDERR] = \GuzzleHttp\debug_resource($options['debug']);
            $conf[CURLOPT_VERBOSE] = true;
        }
    }


    private function createHeaderFn(EasyHandle $easy)
    {
        if (isset($easy->options['on_headers'])) {
            $onHeaders = $easy->options['on_headers'];

            if (!is_callable($onHeaders)) {
                throw new \InvalidArgumentException('on_headers must be callable');
            }
        } else {
            $onHeaders = null;
        }

        return function ($ch, $h) use (
            $onHeaders,
            $easy,
            &$startingResponse
        ) {
            $value = trim($h);
            if ($value === '') {
                $startingResponse = true;
                $easy->createResponse();
                if ($onHeaders !== null) {
                    try {
                        $onHeaders($easy->response);
                    } catch (\Exception $e) {
                        $easy->onHeadersException = $e;
                        return -1;
                    }
                }
            } elseif ($startingResponse) {
                $startingResponse = false;
                $easy->headers = [$value];
            } else {
                $easy->headers[] = $value;
            }
            return strlen($h);
        };
    }
}
