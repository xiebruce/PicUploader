<?php
/*
* Copyright 2014 Baidu, Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

namespace BaiduBce\Http;

use BaiduBce\Auth\SignerInterface;
use BaiduBce\Bce;
use BaiduBce\BceClientConfigOptions;
use BaiduBce\Exception\BceClientException;
use BaiduBce\Exception\BceServiceException;
use BaiduBce\Log\LogFactory;
use BaiduBce\Util\HttpUtils;
use BaiduBce\Util\DateUtils;

use Guzzle\Http\Client;
use Guzzle\Log\MessageFormatter;
use Guzzle\Plugin\Log\LogPlugin;
use Guzzle\Http\EntityBody;
use Guzzle\Http\ReadLimitEntityBody;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Standard Http request of BCE.
 */
class BceHttpClient
{
    /**
     * @var Client
     */
    private $guzzleClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct()
    {
        $this->guzzleClient = new Client();
        $this->logger = LogFactory::getLogger(get_class($this));
        if (!($this->logger instanceof NullLogger)) {
            $logPlugin = new LogPlugin(
                new GuzzleLogAdapter(),
                MessageFormatter::DEFAULT_FORMAT
            );
            $this->guzzleClient->addSubscriber($logPlugin);
        }
    }

    /**
     * @param mixed $body The request body.
     * @return number
     */
    private function guessContentLength($body)
    {
        if (is_null($body)) {
            return 0;
        } else {
            if (is_string($body)) {
                return strlen($body);
            } else {
                if (is_resource($body)) {
                    $stat = fstat($body);
                    return $stat['size'];
                } else {
                    if (is_object($body) && method_exists($body, 'getSize')) {
                        return $body->getSize();
                    }
                }
            }
        }
        throw new \InvalidArgumentException(
            sprintf('No %s is specified.', HttpHeaders::CONTENT_LENGTH)
        );
    }


    /**
     * Send request to BCE.
     *
     * @param array $config
     * @param string $httpMethod The Http request method, uppercase.
     * @param string $path The resource path.
     * @param string|resource $body The Http request body.
     * @param array $headers The extra Http request headers.
     * @param array $params The extra Http url query strings.
     * @param SignerInterface $signer This function will generate authorization header.
     * @param resource|string $outputStream Write the Http response to this stream.
     *
     * @return \Guzzle\Http\Message\Response body and http_headers
     *
     * @throws BceClientException
     * @throws BceServiceException
     */
    public function sendRequest(
        array $config,
        $httpMethod,
        $path,
        $body,
        array $headers,
        array $params,
        SignerInterface $signer,
        $outputStream = null,
        $options = array()
    ) {
        $headers[HttpHeaders::USER_AGENT] =
            sprintf(
                'bce-sdk-php/%s/%s/%s',
                Bce::SDK_VERSION,
                php_uname(),
                phpversion()
            );
        if (!isset($headers[HttpHeaders::BCE_DATE])) {
            $now = new \DateTime();
            $now->setTimezone(DateUtils::$UTC_TIMEZONE);
            $headers[HttpHeaders::BCE_DATE] =
                DateUtils::formatAlternateIso8601Date($now);
        }
        list($hostUrl, $hostHeader) =
            HttpUtils::parseEndpointFromConfig($config);
        $headers[HttpHeaders::HOST] = $hostHeader;
        $url = $hostUrl . HttpUtils::urlEncodeExceptSlash($path);
        $queryString = HttpUtils::getCanonicalQueryString($params, false);
        if ($queryString !== '') {
            $url .= "?$queryString";
        }

        if (!isset($headers[HttpHeaders::CONTENT_LENGTH])) {
            $headers[HttpHeaders::CONTENT_LENGTH] =
                $this->guessContentLength($body);
        }
        $entityBody = null;
        if ($headers[HttpHeaders::CONTENT_LENGTH] == 0) {
            //if passing a stream and content length is 0, guzzle will remove
            //"Content-Length:0" from header, to work around this, we have to 
            //set body to a empty string
            $entityBody = "";
        } else if (is_resource($body)) {
            $offset = ftell($body);
            $original = EntityBody::factory($body);
            $entityBody = new ReadLimitEntityBody($original, $headers[HttpHeaders::CONTENT_LENGTH], $offset);
        } else {
            $entityBody = $body;
        }

        $credentials = $config[BceClientConfigOptions::CREDENTIALS];
        // if the request is send through the STS certification
        if(array_key_exists(BceClientConfigOptions::SESSION_TOKEN, $credentials)) {
            $headers[HttpHeaders::BCE_SESSION_TOKEN] = $credentials[BceClientConfigOptions::SESSION_TOKEN];
        }
        $headers[HttpHeaders::AUTHORIZATION] = $signer->sign(
            $credentials,
            $httpMethod,
            $path,
            $headers,
            $params,
            $options
        );

        if (LogFactory::isDebugEnabled()) {
            $this->logger->debug('HTTP method: ' . $httpMethod);
            $this->logger->debug('HTTP url: ' . $url);
            $this->logger->debug('HTTP headers: ' . print_r($headers, true));
        }

        $guzzleRequestOptions = array('exceptions' => false);
        if (isset(
            $config[BceClientConfigOptions::CONNECTION_TIMEOUT_IN_MILLIS])
        ) {
            $guzzleRequestOptions['connect_timeout'] =
                $config[BceClientConfigOptions::CONNECTION_TIMEOUT_IN_MILLIS]
                    / 1000.0;
        }
        if (isset(
            $config[BceClientConfigOptions::SOCKET_TIMEOUT_IN_MILLIS])
        ) {
            $guzzleRequestOptions['timeout'] =
                $config[BceClientConfigOptions::SOCKET_TIMEOUT_IN_MILLIS]
                    / 1000.0;
        }
        $guzzleRequest =
            $this->guzzleClient->createRequest(
                $httpMethod,
                $url,
                $headers,
                $entityBody,
                $guzzleRequestOptions
            );
        if ($outputStream !== null) {
            $guzzleRequest->setResponseBody($outputStream);
        }

        // Send request
        try {
            $guzzleResponse = $this->guzzleClient->send($guzzleRequest);
        } catch (\Exception $e) {
            throw new BceClientException($e->getMessage());
        }

        //statusCode < 200
        if ($guzzleResponse->isInformational()) {
            throw new BceClientException('Can not handle 1xx Http status code');
        }
        //for chunked http response, http status code can not be trust
        //error code in http body also mean a failed http response
        if ($guzzleResponse->getTransferEncoding() === 'chunked') {
            if ($guzzleResponse->isContentType('json')) {
                $responseBody = $guzzleResponse->json();
                if (isset($responseBody['code'])) {
                  $guzzleResponse->setStatus(500);
                }
            }
        }
        //Successful means 2XX or 304
        if (!$guzzleResponse->isSuccessful()) {
            $requestId = $guzzleResponse->getHeader(HttpHeaders::BCE_REQUEST_ID);
            $message = $guzzleResponse->getReasonPhrase();
            $code = null;
            if ($guzzleResponse->isContentType('json')) {
                try {
                    $responseBody = $guzzleResponse->json();
                    if (isset($responseBody['message'])) {
                        $message = $responseBody['message'];
                    }
                    if (isset($responseBody['code'])) {
                        $code = $responseBody['code'];
                    }
                } catch (\Exception $e) {
                    // ignore this error
                    $this->logger->warning(
                        'Fail to parse error response body: '
                        . $e->getMessage()
                    );
                }
            }
            throw new BceServiceException(
                $requestId,
                $code,
                $message,
                $guzzleResponse->getStatusCode()
            );
        }
        if ($outputStream === null) {
            $body = $guzzleResponse->getBody(true);
        } else {
            $body = null;
            // detach the stream so that it will not be closed when the response
            // is garbage collected.
            $guzzleResponse->getBody()->detachStream();
        }
        return array(
            'headers' => $this->parseHeaders($guzzleResponse),
            'body' => $body
        );
    }

    /**
     * @param \Guzzle\Http\Message\Response $guzzleResponse
     * @return array
     */
    private function parseHeaders($guzzleResponse)
    {
        $responseHeaders = array();
        foreach ($guzzleResponse->getHeaders() as $header) {
            $value = $header->toArray();
            $responseHeaders[$header->getName()] = $value[0];
        }
        return $responseHeaders;
    }
}
