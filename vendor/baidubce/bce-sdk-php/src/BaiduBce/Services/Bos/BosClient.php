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

namespace BaiduBce\Services\Bos;

use BaiduBce\Auth\BceV1Signer;
use BaiduBce\Auth\SignOptions;
use BaiduBce\Bce;
use BaiduBce\BceClientConfigOptions;
use BaiduBce\BceBaseClient;
use BaiduBce\Exception\BceClientException;
use BaiduBce\Exception\BceServiceException;
use BaiduBce\Http\BceHttpClient;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Http\HttpContentTypes;
use BaiduBce\Http\HttpMethod;
use BaiduBce\Util\MimeTypes;
use BaiduBce\Util\HashUtils;
use BaiduBce\Util\HttpUtils;
use BaiduBce\Util\StringUtils;

class BosClient extends BceBaseClient
{
    const MIN_PART_SIZE = 5242880;                // 5M
    const MAX_PUT_OBJECT_LENGTH = 5368709120;     // 5G
    const MAX_USER_METADATA_SIZE = 2048;          // 2 * 1024
    const MIN_PART_NUMBER = 1;
    const MAX_PART_NUMBER = 10000;
    const BOS_URL_PREFIX = "/";

    /**
     * @var \BaiduBce\Auth\SignerInterface
     */
    private $signer;
    private $httpClient;

    /**
     * The BosClient constructor
     *
     * @param array $config The client configuration
     */
    function __construct(array $config)
    {
        parent::__construct($config, 'bos');
        $this->signer = new BceV1Signer();
        $this->httpClient = new BceHttpClient();
    }

    /**
     * Get an authorization url with expire time
     *
     * @param string $bucketName The bucket name.
     * @param string $object_name The object path.
     * @param number $timestamp
     * @param number $expiration_in_seconds The valid time in seconds.
     * @param mixed $options The extra Http request headers or params.
     *
     * @return string
     */
    public function generatePreSignedUrl($bucketName, $key, $options = array())
    {
        list(
            $config,
            $headers,
            $params,
            $signOptions
        ) = $this->parseOptions(
            $options,
            BosOptions::CONFIG,
            BosOptions::HEADERS,
            BosOptions::PARAMS,
            BosOptions::SIGN_OPTIONS
        );
        if(is_null($config)) {
            $config = $this->config;
        } else {
            $config = array_merge($this->config, $config);
        }
        if(is_null($params)) {
            $params = array();
        }
        if(is_null($headers)) {
            $headers = array();
        }

        $path = $this->getPath($bucketName, $key);

        list($hostUrl, $hostHeader) =
            HttpUtils::parseEndpointFromConfig($config);
        $headers[HttpHeaders::HOST] = $hostHeader;

        $auth = $this->signer->sign(
            $config[BceClientConfigOptions::CREDENTIALS],
            HttpMethod::GET,
            $path,
            $headers,
            $params,
            $signOptions
        );
        $params['authorization'] = $auth;

        $url = $hostUrl . HttpUtils::urlEncodeExceptSlash($path);
        $queryString = HttpUtils::getCanonicalQueryString($params, false);
        if ($queryString !== '') {
            $url .= "?$queryString";
        }
        return $url;
    }

    /**
     * List buckets of user.
     *
     * @param array $options Supported options:
     *      <ul>
     *          <li>config: The optional bce configuration, which will overwrite
     *          the default client configuration that was passed in constructor.
     *          </li>
     *      </ul>
     * @return object the server response.
     */
    public function listBuckets($options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config
            )
        );
    }

    /**
     * Create a new bucket.
     *
     * @param string $bucketName The bucket name.
     * @param array $options Supported options:
     *      <ul>
     *          <li>config: The optional bce configuration, which will overwrite
     *          the default client configuration that was passed in constructor.
     *          </li>
     *      </ul>
     * @return \stdClass
     */
    public function createBucket($bucketName, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName
            )
        );
    }

    /**
     * Get Object Information of bucket.
     *
     * @param string $bucketName The bucket name.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @property number $maxKeys The default value is 1000.
     * @property string $prefix The default value is null.
     * @property string $marker The default value is null.
     * @property string $delimiter The default value is null.
     * @property mixed $config The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function listObjects($bucketName, $options = array())
    {
        list($config, $maxKeys, $prefix, $marker, $delimiter) =
            $this->parseOptions(
                $options,
                BosOptions::CONFIG,
                BosOptions::MAX_KEYS,
                BosOptions::PREFIX,
                BosOptions::MARKER,
                BosOptions::DELIMITER
            );
        $params = array();
        if ($maxKeys !== null) {
            if (is_numeric($maxKeys)) {
                $maxKeys = number_format($maxKeys);
                $maxKeys = str_replace(',','',$maxKeys);
            }
            $params[BosOptions::MAX_KEYS] = $maxKeys;
        }
        if ($prefix !== null) {
            $params[BosOptions::PREFIX] = $prefix;
        }
        if ($marker !== null) {
            $params[BosOptions::MARKER] = $marker;
        }
        if ($delimiter !== null) {
            $params[BosOptions::DELIMITER] = $delimiter;
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'params' => $params
            )
        );
    }

    /**
     * Check whether there is some user access to this bucket.
     *
     * @param string $bucketName The bucket name.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return boolean true means the bucket does exists.
     */
    public function doesBucketExist($bucketName, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        try {
            $this->sendRequest(
                HttpMethod::HEAD,
                array(
                    BosOptions::CONFIG => $config,
                    'bucket_name' => $bucketName
                )
            );
            return true;
        } catch (BceServiceException $e) {
            if ($e->getStatusCode() === 403) {
                return true;
            }
            if ($e->getStatusCode() === 404) {
                return false;
            }
            throw $e;
        }
    }

    /**
     * Delete a Bucket
     * Must delete all the bbjects in this bucket before call this api
     *
     * @param string $bucketName The bucket name.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function deleteBucket($bucketName, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName
            )
        );
    }

    /**
     * Set Access Control Level of bucket
     *
     * @param string $bucketName The bucket name.
     * @param string $cannedAcl The grant list.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function setBucketCannedAcl(
        $bucketName,
        $cannedAcl,
        $options = array()
    ) {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'headers' => array(
                    HttpHeaders::BCE_ACL => $cannedAcl,
                ),
                'params' => array(
                    BosOptions::ACL => '',
                )
            )
        );
    }

    /**
     * Set Access Control Level of bucket
     *
     * @param string $bucketName The bucket name.
     * @param mixed $acl The grant list.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function setBucketAcl($bucketName, $acl, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'body' => json_encode(array('accessControlList' => $acl)),
                'params' => array(
                    BosOptions::ACL => '',
                )
            )
        );
    }

    /**
     * Get Access Control Level of bucket
     *
     * @param string $bucketName The bucket name.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function getBucketAcl($bucketName, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'params' => array(
                    BosOptions::ACL => '',
                )
            )
        );
    }

    /**
     * Get Region of bucket
     *
     * @param string $bucketName The bucket name.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function getBucketLocation($bucketName, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);
        $response = $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'params' => array(
                    BosOptions::LOCATION => '',
                ),
            )
        );
        return $response->locationConstraint;
    }

    /**
     * Create object and put content of string to the object
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $data The object content.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function putObjectFromString(
        $bucketName,
        $key,
        $data,
        $options = array()
    ) {
        return $this->putObject(
            $bucketName,
            $key,
            $data,
            strlen($data),
            base64_encode(md5($data, true)),
            $options
        );
    }

    /**
     * Put object and copy content of file to the object
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $filename The absolute file path.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function putObjectFromFile(
        $bucketName,
        $key,
        $filename,
        $options = array()
    ) {
        if (!isset($options[BosOptions::CONTENT_TYPE])) {
            $options[BosOptions::CONTENT_TYPE] = MimeTypes::guessMimeType(
                $filename
            );
        }

        list($contentLength, $contentMd5) = $this->parseOptionsIgnoreExtra(
            $options,
            BosOptions::CONTENT_LENGTH,
            BosOptions::CONTENT_MD5
        );

        if ($contentLength === null) {
            $contentLength = filesize($filename);
        } else {
            if (!is_int($contentLength) && !is_long($contentLength)) {
                throw new \InvalidArgumentException(
                    '$contentLength should be int or long.'
                );
            }
            unset($options[BosOptions::CONTENT_LENGTH]);
        }

        $fp = fopen($filename, 'rb');
        if ($contentMd5 === null) {
            $contentMd5 = base64_encode(HashUtils::md5FromStream($fp, 0, $contentLength));
        } else {
            unset($options[BosOptions::CONTENT_MD5]);
        }

        try {
            $response = $this->putObject(
                $bucketName,
                $key,
                $fp,
                $contentLength,
                $contentMd5,
                $options);
            //streams are close in the destructor of stream object in guzzle
            if (is_resource($fp)) {
                fclose($fp);
            }
            return $response;
        } catch (\Exception $e) {
            if (is_resource($fp)) {
                fclose($fp);
            }
            throw $e;
        }
    }

    /**
     * Upload a object to one bucket
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string|resource $data The object content, which can be a string or a resource.
     * @param int $contentLength
     * @param string $contentMd5
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function putObject(
        $bucketName,
        $key,
        $data,
        $contentLength,
        $contentMd5,
        $options = array()
    ) {
        if (empty($key)) {
            throw new \InvalidArgumentException('$key should not be empty or null.');
        }
        if (!is_int($contentLength) && !is_long($contentLength)) {
            throw new \InvalidArgumentException(
                '$contentLength should be int or long.'
            );
        }
        if ($contentLength < 0) {
            throw new \InvalidArgumentException(
                '$contentLength should not be negative.'
            );
        }
        if (empty($contentMd5)) {
            throw new \InvalidArgumentException(
                '$contentMd5 should not be empty or null.'
            );
        }
        $this->checkData($data);

        $headers = array();
        $headers[HttpHeaders::CONTENT_MD5] = $contentMd5;
        $headers[HttpHeaders::CONTENT_LENGTH] = $contentLength;
        $this->populateRequestHeadersWithOptions($headers, $options);
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'body' => $data,
                'headers' => $headers,
            )
        );
    }

    /**
     * Get the object from a bucket.
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param resource $outputStream
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function getObject(
        $bucketName,
        $key,
        $outputStream,
        $options = array()
    ) {
        list($config, $range) = $this->parseOptions(
            $options,
            BosOptions::CONFIG,
            BosOptions::RANGE
        );
        $headers = array();
        if ($range !== null) {
            switch(gettype($range)) {
                case 'array':
                    if (!isset($range[0]) || !(is_int($range[0]) || is_long($range[0]))) {
                        throw new \InvalidArgumentException(
                            'range[0] is not defined.'
                        );
                    }
                    if (!isset($range[1]) || !(is_int($range[1]) || is_long($range[1]))) {
                        throw new \InvalidArgumentException(
                            'range[1] is not defined.'
                        );
                    }
                    $range = sprintf('%d-%d', $range[0], $range[1]);
                    break;
                case 'string':
                    break;
                default:
                    throw new \InvalidArgumentException(
                        'Option "range" should be either an array of two '
                        . 'integers or a string'
                    );
            }
            $headers[HttpHeaders::RANGE] = sprintf('bytes=%s', $range);
        }

        $response = $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'headers' => $headers,
                'outputStream' => $outputStream,
                'parseUserMetadata' => true
            )
        );
        return $response;
    }

    /**
     * Get the object cotent as string
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $range If specified, only get the range part.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     * @return mixed
     */
    public function getObjectAsString(
        $bucketName,
        $key,
        $options = array()
    ) {
        $outputStream = fopen('php://memory', 'r+');
        try {
            $this->getObject($bucketName, $key, $outputStream, $options);
            rewind($outputStream);
            $result = stream_get_contents($outputStream);
            if (is_resource($outputStream)) {
                fclose($outputStream);
            }
            return $result;
        } catch (\Exception $e) {
            if (is_resource($outputStream)) {
                fclose($outputStream);
            }
            throw $e;
        }
    }

    /**
     * Get Content of Object and Put Content to File
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $filename The destination file name.
     * @param string $range The HTTP 'Range' header.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function getObjectToFile(
        $bucketName,
        $key,
        $filename,
        $options = array()
    )
    {
        $outputStream = fopen($filename, 'w+');
        try {
            $response = $this->getObject(
                $bucketName,
                $key,
                $outputStream,
                $options
            );
            if(is_resource($outputStream)) {
                fclose($outputStream);
            }
            return $response;
        } catch (\Exception $e) {
            if(is_resource($outputStream)) {
                fclose($outputStream);
            }
            throw $e;
        }
    }

    /**
     * Delete Object
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function deleteObject($bucketName, $key, $options = array())
    {
        list($config) = $this->parseOptions(
            $options,
            BosOptions::CONFIG
        );

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
            )
        );
    }

    /**
     * Get Object meta information
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function getObjectMetadata($bucketName, $key, $options = array())
    {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        $response = $this->sendRequest(
            HttpMethod::HEAD,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'parseUserMetadata' => true
            )
        );

        return $response->metadata;
    }

    /**
     * Copy one object to another.
     *
     * @param string $sourceBucketName The source bucket name.
     * @param string $sourceKey The source object path.
     * @param string $targetBucketName The target bucket name.
     * @param string $targetKey The target object path.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function copyObject(
        $sourceBucketName,
        $sourceKey,
        $targetBucketName,
        $targetKey,
        $options = array()
    ) {
        if (empty($sourceBucketName)) {
            throw new \InvalidArgumentException(
                '$sourceBucketName should not be empty or null.'
            );
        }
        if (empty($sourceKey)) {
            throw new \InvalidArgumentException(
                '$sourceKey should not be empty or null.'
            );
        }
        if (empty($targetBucketName)) {
            throw new \InvalidArgumentException(
                '$targetBucketName should not be empty or null.'
            );
        }
        if (empty($targetKey)) {
            throw new \InvalidArgumentException(
                '$targetKey should not be empty or null.'
            );
        }

        list($config, $userMetadata, $etag, $storageClass) = $this->parseOptions(
            $options,
            BosOptions::CONFIG,
            BosOptions::USER_METADATA,
            BosOptions::ETAG,
            BosOptions::STORAGE_CLASS
        );

        $headers = array();

        $headers[HttpHeaders::BCE_COPY_SOURCE] =
            HttpUtils::urlEncodeExceptSlash(
                sprintf("/%s/%s", $sourceBucketName, $sourceKey)
            );
        if ($etag !== null) {
            $etag = trim($etag, '"');
            $headers[HttpHeaders::BCE_COPY_SOURCE_IF_MATCH] = '"' . $etag . '"';
        }
        if ($userMetadata === null) {
            $headers[HttpHeaders::BCE_COPY_METADATA_DIRECTIVE] = 'copy';
        } else {
            $headers[HttpHeaders::BCE_COPY_METADATA_DIRECTIVE] = 'replace';
            $this->populateRequestHeadersWithUserMetadata(
                $headers,
                $userMetadata
            );
        }
        if ($storageClass !== null) {
            $headers[HttpHeaders::BCE_STORAGE_CLASS] = $storageClass;
        } else {
            $headers[HttpHeaders::BCE_STORAGE_CLASS] = StorageClass::STANDARD;
        }

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $targetBucketName,
                'key' => $targetKey,
                'headers' => $headers,
            )
        );
    }

    /**
     * Initialize multi_upload_file.
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function initiateMultipartUpload(
        $bucketName,
        $key,
        $options = array()
    ) {
        list($config, $storageClass) = $this->parseOptions(
            $options, 
            BosOptions::CONFIG,
            BosOptions::STORAGE_CLASS);

        $headers = array(
            HttpHeaders::CONTENT_TYPE => HttpContentTypes::OCTET_STREAM,
        );
        if ($storageClass !== null) {
            $headers[HttpHeaders::BCE_STORAGE_CLASS] = $storageClass;
        } else {
            $headers[HttpHeaders::BCE_STORAGE_CLASS] = StorageClass::STANDARD;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'headers' => $headers,
                'params' => array('uploads' => ''),
            )
        );
    }

    /**
     * Abort upload a part which is being uploading.
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $uploadId The uploadId returned by initiateMultipartUpload.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function abortMultipartUpload(
        $bucketName,
        $key,
        $uploadId,
        $options = array()
    ) {
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'params' => array('uploadId' => $uploadId),
            )
        );
    }

    /**
     * Upload a part from a file handle
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $uploadId The uploadId returned by initiateMultipartUpload.
     * @param int $partNumber The part index, 1-based.
     * @param int $contentLength The uploaded part size.
     * @param string $contentMd5 The part md5 check sum.
     * @param string $data The file pointer.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function uploadPart(
        $bucketName,
        $key,
        $uploadId,
        $partNumber,
        $contentLength,
        $contentMd5,
        $data,
        $options = array()
    ) {
        if (empty($bucketName)) {
            throw new \InvalidArgumentException(
                '$bucketName should not be empty or null.'
            );
        }
        if (empty($key)) {
            throw new \InvalidArgumentException(
                '$key should not be empty or null.'
            );
        }
        if (!is_int($contentLength) && !is_long($contentLength)) {
            throw new \InvalidArgumentException(
                '$contentLength should be int or long.'
            );
        }
        if ($partNumber < BosClient::MIN_PART_NUMBER
            || $partNumber > BosClient::MAX_PART_NUMBER
        ) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid $partNumber %d. The valid range is from %d to %d.',
                    $partNumber,
                    BosClient::MIN_PART_NUMBER,
                    BosClient::MAX_PART_NUMBER
                )
            );
        }

        if ($contentMd5 === null) {
            throw new \InvalidArgumentException(
                '$contentMd5 should not be null.'
            );
        }

        $this->checkData($data);

        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        $headers = array();
        $headers[HttpHeaders::CONTENT_MD5] = $contentMd5;
        $headers[HttpHeaders::CONTENT_LENGTH] = $contentLength;
        $headers[HttpHeaders::CONTENT_TYPE] = HttpContentTypes::OCTET_STREAM;

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'body' => $data,
                'params' => array(
                    'partNumber' => $partNumber,
                    'uploadId' => $uploadId
                ),
                'headers' => $headers,
            )
        );
    }

    /**
     * Upload a part from starting with offset.
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $uploadId The uploadId returned by initiateMultipartUpload.
     * @param number $partNumber The part index, 1-based.
     * @param number $length The uploaded part size.
     * @param string $filename The file name.
     * @param number $offset The file offset.
     * @param number $contentMd5 The part md5 check sum.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function uploadPartFromFile(
        $bucketName,
        $key,
        $uploadId,
        $partNumber,
        $filename,
        $offset = 0,
        $length = -1,
        $options = array()
    ) {
        if (!is_int($offset) && !is_long($offset)) {
            throw new \InvalidArgumentException(
                '$offset should be int or long.'
            );
        }
        if (!is_int($length) && !is_long($length)) {
            throw new \InvalidArgumentException(
                '$length should be int or long.'
            );
        }

        $fp = fopen($filename, 'rb');
        try {
            if ($length < 0) {
                fseek($fp, 0, SEEK_END);
                $length = ftell($fp) - $offset;
            }
            $contentMd5 = base64_encode(HashUtils::md5FromStream($fp, $offset, $length));
            fseek($fp, $offset, SEEK_SET);
            $response = $this->uploadPart(
                $bucketName,
                $key,
                $uploadId,
                $partNumber,
                $length,
                $contentMd5,
                $fp,
                $options
            );
            //guzzle will close fp
            if (is_resource($fp)) {
                fclose($fp);
            }
            return $response;
        } catch (\Exception $e) {
            if(is_resource($fp)) {
                fclose($fp);
            }
            throw $e;
        }
    }

    /**
     * List parts that have been upload success.
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $uploadId The uploadId returned by initiateMultipartUpload.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function listParts($bucketName, $key, $uploadId, $options = array())
    {
        if (empty($bucketName)) {
            throw new \InvalidArgumentException(
                '$bucketName should not be empty or null.'
            );
        }
        if (empty($key)) {
            throw new \InvalidArgumentException(
                '$key should not be empty or null.'
            );
        }
        if (empty($uploadId)) {
            throw new \InvalidArgumentException(
                '$uploadId should not be empty or null.'
            );
        }

        list($config, $maxParts, $partNumberMarker) = $this->parseOptions(
            $options,
            BosOptions::CONFIG,
            BosOptions::LIMIT,
            BosOptions::MARKER
        );
        $params = array();
        $params['uploadId'] = $uploadId;
        if ($maxParts !== null) {
            if (is_numeric($maxParts)) {
                $maxParts = number_format($maxParts);
                $maxParts = str_replace(',','',$maxParts);
            }
            $params['maxParts'] = $maxParts;
        }
        if ($partNumberMarker !== null) {
            $params['partNumberMarker'] = $partNumberMarker;
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'params' => $params,
            )
        );
    }

    /**
     * After finish all the task, complete multi_upload_file.
     * bucket, key, upload_id, part_list, options=None
     *
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     * @param string $uploadId The upload id.
     * @param array $partList (partnumber and etag) list
     * @param array $options
     *
     * @return mixed
     */
    public function completeMultipartUpload(
        $bucketName,
        $key,
        $uploadId,
        array $partList,
        $options = array()
    ) {
        if (empty($bucketName)) {
            throw new \InvalidArgumentException(
                '$bucketName should not be empty or null.'
            );
        }
        if (empty($key)) {
            throw new \InvalidArgumentException(
                '$key should not be empty or null.'
            );
        }
        if (empty($uploadId)) {
            throw new \InvalidArgumentException(
                '$uploadId should not be empty or null.'
            );
        }

        $headers = array();
        $this->populateRequestHeadersWithOptions($headers, $options);
        list($config) = $this->parseOptions($options, BosOptions::CONFIG);

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'key' => $key,
                'body' => json_encode(array('parts' => $partList)),
                'headers' => $headers,
                'params' => array('uploadId' => $uploadId),
            )
        );
    }

    /**
     * List Multipart upload task which haven't been ended.
     * call initiateMultipartUpload but not call completeMultipartUpload or abortMultipartUpload
     *
     * @param string $bucketName The bucket name.
     * @param mixed $options The optional bce configuration, which will overwrite the
     *   default configuration that was passed while creating BosClient instance.
     *
     * @return mixed
     */
    public function listMultipartUploads($bucketName, $options = array())
    {
        list(
            $config,
            $keyMarker,
            $maxUploads,
            $delimiter,
            $prefix
        ) = $this->parseOptions(
            $options,
            BosOptions::CONFIG,
            BosOptions::MARKER,
            BosOptions::LIMIT,
            BosOptions::DELIMITER,
            BosOptions::PREFIX
        );
        $params = array();
        $params['uploads'] = '';
        if ($keyMarker !== null) {
            $params['keyMarker'] = $keyMarker;
        }
        if ($maxUploads !== null) {
            if (is_numeric($maxUploads)) {
                $maxUploads = number_format($maxUploads);
                $maxUploads = str_replace(',','',$maxUploads);
            }
            $params['maxUploads'] = $maxUploads;
        }
        if ($delimiter !== null) {
            $params['delimiter'] = $delimiter;
        }
        if ($prefix !== null) {
            $params['prefix'] = $prefix;
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                BosOptions::CONFIG => $config,
                'bucket_name' => $bucketName,
                'params' => $params,
            )
        );
    }

    /**
     * Create HttpClient and send request
     * @param string $httpMethod The Http request method
     * @param array $varArgs The extra arguments
     * @return mixed The Http response and headers.
     */
    private function sendRequest($httpMethod, array $varArgs)
    {
        $defaultArgs = array(
            BosOptions::CONFIG => array(),
            'bucket_name' => null,
            'key' => null,
            'body' => null,
            'headers' => array(),
            'params' => array(),
            'outputStream' => null,
            'parseUserMetadata' => false
        );

        $args = array_merge($defaultArgs, $varArgs);
        if (empty($args[BosOptions::CONFIG])) {
            $config = $this->config;
        } else {
            $config = array_merge(
                array(),
                $this->config,
                $args[BosOptions::CONFIG]
            );
        }
        if (!isset($args['headers'][HttpHeaders::CONTENT_TYPE])) {
            $args['headers'][HttpHeaders::CONTENT_TYPE] =
                HttpContentTypes::JSON;
        }
        // prevent low version curl add a default pragma:no-cache
        if (!isset($args['headers'][HttpHeaders::PRAGMA])) {
            $args['headers'][HttpHeaders::PRAGMA] = '';
        }

        $path = $this->getPath($args['bucket_name'], $args['key']);
        $response = $this->httpClient->sendRequest(
            $config,
            $httpMethod,
            $path,
            $args['body'],
            $args['headers'],
            $args['params'],
            $this->signer,
            $args['outputStream']
        );

        if ($args['outputStream'] === null) {
            $result = $this->parseJsonResult($response['body']);
        } else {
            $result = new \stdClass();
        }
        $result->metadata =
            $this->convertHttpHeadersToMetadata($response['headers']);
        if ($args['parseUserMetadata']) {
            $userMetadata = array();
            foreach ($response['headers'] as $key => $value) {
                if (StringUtils::startsWith($key, HttpHeaders::BCE_USER_METADATA_PREFIX)) {
                    $key = substr($key, strlen(HttpHeaders::BCE_USER_METADATA_PREFIX));
                    $userMetadata[urldecode($key)] = urldecode($value);
                }
            }
            $result->metadata[BosOptions::USER_METADATA] = $userMetadata;
        }

        return $result;

    }

    /**
     * @param string $bucketName The bucket name.
     * @param string $key The object path.
     *
     * @return string
     */
    private function getPath($bucketName = null, $key = null)
    {
        return HttpUtils::appendUri(self::BOS_URL_PREFIX, $bucketName, $key);
    }

    /**
     * @param array $headers
     * @param array $options
     */
    private function populateRequestHeadersWithOptions(
        array &$headers,
        array &$options
    ) {
        list(
            $contentType,
            $contentSHA256,
            $storageClass,
            $userMetadata
        ) = $this->parseOptionsIgnoreExtra(
            $options,
            BosOptions::CONTENT_TYPE,
            BosOptions::CONTENT_SHA256,
            BosOptions::STORAGE_CLASS,
            BosOptions::USER_METADATA
        );
        if ($contentType !== null) {
            $headers[HttpHeaders::CONTENT_TYPE] = $contentType;
            unset($options[BosOptions::CONTENT_TYPE]);
        }
        if ($contentSHA256 !== null) {
            $headers[HttpHeaders::BCE_CONTENT_SHA256] = $contentSHA256;
            unset($options[BosOptions::CONTENT_SHA256]);
        }
        if ($storageClass !== null) {
            $headers[HttpHeaders::BCE_STORAGE_CLASS] = $storageClass;
            unset($options[BosOptions::STORAGE_CLASS]);
        } else {
            $headers[HttpHeaders::BCE_STORAGE_CLASS] = StorageClass::STANDARD;
        }
        if ($userMetadata !== null) {
            $this->populateRequestHeadersWithUserMetadata($headers, $userMetadata);
            unset($options[BosOptions::USER_METADATA]);
        }
        reset($options);
    }

    /**
     * @param array $headers
     * @param array $userMetadata
     */
    private function populateRequestHeadersWithUserMetadata(
        array &$headers,
        array $userMetadata
    ) {
        $metaSize = 0;
        foreach ($userMetadata as $key => $value) {
            $key = HttpHeaders::BCE_USER_METADATA_PREFIX
                . HttpUtils::urlEncode(trim($key));
            $value = HttpUtils::urlEncode($value);
            $metaSize += strlen($key) + strlen($value);
            if ($metaSize > BosClient::MAX_USER_METADATA_SIZE) {
                throw new BceClientException(
                    'User metadata size should not be greater than '
                    . BosClient::MAX_USER_METADATA_SIZE
                );
            }
            $headers[$key] = $value;
        }
    }

    /**
     * @param string|resource $data
     */
    private function checkData($data)
    {
        switch(gettype($data)) {
            case 'string':
                break;
            case 'resource':
                $streamMetadata = stream_get_meta_data($data);
                if (!$streamMetadata['seekable']) {
                    throw new \InvalidArgumentException(
                        '$data should be seekable.'
                    );
                }
                break;
            default:
                throw new \InvalidArgumentException(
                    'Invalid data type:' . gettype($data)
                    . ' Only string or resource is accepted.'
                );
        }
    }
}
