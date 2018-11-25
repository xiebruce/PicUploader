<?php
// +-------------------------------------------------------------------------
// | Copyright (C) 2016 Yunify, Inc.
// +-------------------------------------------------------------------------
// | Licensed under the Apache License, Version 2.0 (the "License");
// | you may not use this work except in compliance with the License.
// | You may obtain a copy of the License in the LICENSE file, or at:
// |
// | http://www.apache.org/licenses/LICENSE-2.0
// |
// | Unless required by applicable law or agreed to in writing, software
// | distributed under the License is distributed on an "AS IS" BASIS,
// | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// | See the License for the specific language governing permissions and
// | limitations under the License.
// +-------------------------------------------------------------------------

namespace QingStor\SDK;

use GuzzleHttp\Psr7\Request as Psr7Request;

class Builder
{
    public $config = null;
    public $operation = null;

    public function __construct($config, $operation)
    {
        $this->config = $config;
        $this->operation = $operation;
    }

    public function parse()
    {
        $GLOBALS['logger']->debug('RequestURL'.': '.$this->parseRequestURL());
        $request = new Psr7Request(
            $this->operation['Method'],
            $this->parseRequestURL(),
            $this->parseRequestHeaders(),
            $this->parseRequestBody()
        );

        return $request;
    }

    public function parseRequestParams()
    {
        $parsedParams = [];
        foreach ($this->operation['Params'] as $key => $value) {
            if ($value !== '' && $value !== array() && $value !== null) {
                $parsedParams[$key] = $value;
                $GLOBALS['logger']->debug($key.': '.$value);
            }
        }

        return $parsedParams;
    }

    public function parseRequestHeaders()
    {
        $parsedHeaders = null;
        foreach ($this->operation['Headers'] as $key => $value) {
            if ($value !== '' && $value !== array() && $value !== null) {
                $parsedHeaders[$key] = $value;
                $GLOBALS['logger']->debug($key.': '.$value);
            }
        }
        $parsedHeaders['Date'] = isset($this->operation['Headers']['Date']) ? $this->operation['Headers']['Date'] : gmdate('D, d M Y H:i:s T');
        $GLOBALS['logger']->debug('Date'.': '.$parsedHeaders['Date']);
        $parsedHeaders['User-Agent'] = sprintf(
            'qingstor-sdk-php/%s  (PHP v%s; %s)',
            $GLOBALS['version'],
            phpversion(),
            php_uname('s')
        );
        $GLOBALS['logger']->debug('User-Agent'.': '.$parsedHeaders['User-Agent']);
        $filename = explode('?', $this->parseRequestURL())[0];
        $parsedHeaders['Content-Type'] = isset($this->operation['Headers']['Content-Type']) ? $this->operation['Headers']['Content-Type'] : \GuzzleHttp\Psr7\mimetype_from_filename($filename);
        if ($parsedHeaders['Content-Type'] === null) {
            $parsedHeaders['Content-Type'] = 'application/octet-stream';
        }
        $GLOBALS['logger']->debug('Content-Type'.': '.$parsedHeaders['Content-Type']);
        if ($this->operation['API'] === 'DeleteMultipleObjects') {
            $parsedHeaders['Content-MD5'] = base64_encode(md5($this->parseRequestBody(), true));
            $GLOBALS['logger']->debug('Content-MD5'.': '.$parsedHeaders['Content-MD5']);
        }

        return $parsedHeaders;
    }

    public function parseRequestBody()
    {
        $parsedBody = null;
        if (!empty($this->operation['Body'])) {
            $parsedBody = $this->operation['Body'];
        } elseif (!empty($this->operation['Elements'])) {
            $parsedBody = json_encode($this->operation['Elements']);
        }

        return $parsedBody;
    }

    public function parseRequestProperties()
    {
        $parsedProperties = [];
        foreach ($this->operation['Properties'] as $key => $value) {
            if ($value !== '' && $value !== null) {
                $parsedProperties[$key] = $value;
                $GLOBALS['logger']->debug($key.': '.$value);
            }
        }

        return $parsedProperties;
    }

    public function parseRequestURL()
    {
        $properties = $this->parseRequestProperties();
        if (isset($properties['zone'])) {
            $zone = $properties['zone'];
        } else {
            $zone = '';
        }
        $port = strval($this->config->port);
        $endpoint = $this->config->protocol.'://'.$this->config->host.':'.$port;
        if ($zone !== '') {
            $endpoint = $this->config->protocol.'://'.$zone.'.'.$this->config->host.':'.$port;
        }
        $requestURI = $this->operation['Uri'];
        if (count($properties)) {
            foreach ($properties as $key => $value) {
                $endpoint = str_replace('<'.$key.'>', rawurlencode($value), $endpoint);
                $requestURI = str_replace('<'.$key.'>', rawurlencode($value), $requestURI);
            }
        }
        $parsedURL = $endpoint.$requestURI;
        $params = $this->parseRequestParams();
        if (count($params)) {
            $paramsParts = array();
            foreach ($params as $key => $value) {
                $paramsParts[] = $key.'='.rawurlencode($value);
            }
            $joined = implode('&', $paramsParts);
            if ($joined) {
                $parsedURL = $parsedURL.'?'.$joined;
            }
        }

        return $parsedURL;
    }
}
