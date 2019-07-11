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

namespace BaiduBce\Services\Media;

use BaiduBce\Auth\BceV1Signer;
use BaiduBce\BceBaseClient;
use BaiduBce\Exception\BceClientException;
use BaiduBce\Http\BceHttpClient;
use BaiduBce\Http\HttpContentTypes;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Http\HttpMethod;

class MediaClient extends BceBaseClient
{

    private $signer;
    private $httpClient;
    private $prefix = '/v3';

    /**
     * The MediaClient constructor
     *
     * @param array $config The client configuration
     */
    function __construct(array $config)
    {
        parent::__construct($config, 'MediaClient');
        $this->signer = new BceV1Signer();
        $this->httpClient = new BceHttpClient();
    }

    /**
     * Get the specific pipeline information
     *
     * @param string $pipelineName The pipeline name
     * @param string $jobStatus The jobStatus of the job, not filter if null
     * @param string $begin The createTime should be later than or equals with begin, not check if null
     * @param string $end The createTime should be earlier than or equals with end, not check if null
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function listJobs($pipelineName, $jobStatus = null, $begin = null, $end = null, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');
        $params = array();

        if (!empty($pipelineName)) {
            $params['pipelineName'] = $pipelineName;
        } else {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }
        if (!empty($jobStatus)) {
            $params['jobStatus'] = $jobStatus;
        }
        if (!empty($begin)) {
            $params['begin'] = $begin;
        }
        if (!empty($end)) {
            $params['end'] = $end;
        }
        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            '/job'
        );
    }

    /**
     * Create a job, a simpler api
     * @param string $pipelineName The pipeline name
     * @param string $sourceKey The source media object's key
     * @param string $targetKey The target media object's key
     *        which will be generated
     * @param string $presetName The preset name this job use
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createSimpleJob(
        $pipelineName,
        $sourceKey,
        $targetKey,
        $presetName,
        $options = array()
    ) {

        if (empty($pipelineName)) {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }

        if (empty($sourceKey)) {
            throw new BceClientException("The parameter sourceKey " 
                ."should NOT be null or empty string");
        }

        if (empty($targetKey)) {
            throw new BceClientException("The parameter targetKey " 
                ."should NOT be null or empty string");
        }

        if (empty($presetName)) {
            throw new BceClientException("The parameter presetName " 
                ."should NOT be null or empty string");
        }

        return $this->createJob(
            $pipelineName,
            array(
                'sourceKey' => $sourceKey,
            ),
            array(
                'targetKey' => $targetKey,
                'presetName' => $presetName,
            ),
            $options
        );
    }

    /**
     * Create a job
     * @param string $pipelineName The pipeline name
     * @param array $source
     *      {
     *          sourceKey: The source media object's key
     *      }
     * @param array $target
     *      {
     *          targetKey: The target media object's key
     *          presetName: Name of the preset used in the job
     *      }
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createJob(
        $pipelineName,
        array $source,
        array $target,
        $options = array()
    ) {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($pipelineName)) {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }

        if (empty($source)) {
            throw new BceClientException("The parameter source " 
                ."should NOT be null or empty string");
        }

        if (empty($target)) {
            throw new BceClientException("The parameter target " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode(array(
                    'pipelineName' => $pipelineName,
                    'source' => $source,
                    'target' => $target,
                )),
            ),
            '/job'
        );
    }

    /**
     * Get the specific job information
     *
     * @param string $jobId The job's id
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getJob($jobId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($jobId)) {
            throw new BceClientException("The parameter jobId " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/job/$jobId"
        );
    }

    /**
     * Get the information of a media object in BOS
     *
     * @param string $bucket The bucket's name in BOS
     * @param string $key The object's key in bucket
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      } 
     * @return mixed
     * @throws BceClientException
     */
    public function getMediaInfoOfFile($bucket, $key, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($bucket)) {
            throw new BceClientException("The parameter bucket " 
                ."should NOT be null or empty string");
        }

        if (empty($key)) {
            throw new BceClientException("The parameter key " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => array(
                    'bucket' => $bucket,
                    'key' => rawurlencode($key),
                ),
            ),
            '/mediainfo'
        );
    }

    /**
     * List all pipelines' information
     *
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     */
    public function listPipelines($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/pipeline'
        );
    }

    /**
     * Create a pipeline
     *
     * @param string $pipelineName The pipeline name
     * @param string $sourceBucket The input source bucket's name in BOS
     * @param string $targetBucket The output target bucket's name in BOS
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          pipelineConfig: {
     *              capacity: The capacity of pipeline
     *          }
     *          description: The description of pipeline
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createPipeline(
        $pipelineName,
        $sourceBucket,
        $targetBucket,
        $options = array()
    ) {
        list($config, $description, $pipelineConfig) = $this->parseOptions(
            $options,
            'config',
            'description',
            'pipelineConfig'
        );

        if (empty($pipelineName)) {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }

        if (empty($sourceBucket)) {
            throw new BceClientException("The parameter sourceBucket " 
                ."should NOT be null or empty string");
        }

        if (empty($targetBucket)) {
            throw new BceClientException("The parameter targetBucket " 
                ."should NOT be null or empty string");
        }

        $body = array(
            'pipelineName' => $pipelineName,
            'sourceBucket' => $sourceBucket,
            'targetBucket' => $targetBucket,
        );
        if ($description !== null) {
            $body['description'] = $description;
        } else {
            $body['description'] = '';
        }
        if ($pipelineConfig !== null) {
            $body['config'] = $pipelineConfig;
        } else {
            $body['config'] = array('capacity' => 20);
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            '/pipeline'
        );
    }

    /**
     * Get the specific pipeline information
     *
     * @param string $pipelineName The pipeline name
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getPipeline($pipelineName, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($pipelineName)) {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/pipeline/$pipelineName"
        );
    }

    /**
     * Delete the specific pipeline
     *
     * @param string $pipelineName The pipeline name
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function deletePipeline($pipelineName, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($pipelineName)) {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/pipeline/$pipelineName"
        );
    }

    /**
     * Create a preset
     *
     * @param string $presetName The preset's name
     * @param string $container enum(MP4, FLV, HLS, MP3, M4A)
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          description: The preset's description
     *          transmux(boolean): whether only preceed format transformation
     *          clip: {   cut the video or audio
     *              startTimeInSecond: The start time from video
     *              durationInSecond: The duration time from video in seconds
     *          }
     *          audio: {  audio preceeding set, default to be video preceeding only
     *              bitRateInBps: The target audio bit rate
     *              sampleRateInHz:
     *              channels: The number of audio's channels
     *          }
     *          video: {  video proceeding set, default to be audio preceeding only
     *              codec: H.264
     *              codecOptions: {
     *                  profile: enum(baseline, main, high)
     *              }
     *              bitRateInBps: The target video bit rate
     *              maxFrameRate: The max frame rate, enum(10,15, 23.97, 24, 25, 29.97, 30, 50, 60)
     *              maxWidthInPixel: The target video's max width in pixel, range(128, 4096)
     *              maxHeightInPixel: The target video's max height in pixel, range(96, 3072)
     *              sizingPolicy: enum(Keep, ShrinkToFit, Stretch)
     *          }
     *          encryption: {
     *              strategy: enum(Fixed)
     *              aesKey: The aes 128-bit secret key
     *          }
     *          watermarkId: watermarkId
     *      }    
     * @return mixed
     * @throws BceClientException
     */

    public function createPreset($presetName, $container, $options = array())
    {
        list($config) = $this->parseOptionsIgnoreExtra(
            $options,
            'config'
        );

        if (empty($presetName)) {
            throw new BceClientException("The parameter presetName " 
                ."should NOT be null or empty string");
        }

        if (empty($container)) {
            throw new BceClientException("The parameter container " 
                ."should NOT be null or empty string");
        }

        if (!empty($config)) {
            unset($options['config']);
        }
        $body = $options;
        $body['presetName'] = $presetName;
        $body['container'] = $container;

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            '/preset'
        );
    }

    /**
     * Get the specific preset information
     *
     * @param string $presetName The preset's name
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getPreset($presetName, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($presetName)) {
            throw new BceClientException("The parameter presetName " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/preset/$presetName"
        );
    }

    /**
     * List information of all presets
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     */
    public function listPresets($options = array())
    {

        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/preset'
        );
    }

    /**
     * Delete the specific preset
     *
     * @param string $presetName The preset's name
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */

    public function deletePreset($presetName, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($presetName)) {
            throw new BceClientException("The parameter presetName "
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/preset/$presetName"
        );
    }

    /**
     * Create a job of generating thumbnail
     * 
     * @param string $pipelineName the pipeline name
     * @param array $source
     *      {
     *          key: The source media object's key
     *      }
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          target: { The target thumbnail info set
     *              keyPrefix: Prefix of the target thumbnail
     *              format: Target thumbnail file format, enum(jpg, png), only jpg is supported now
     *              sizingPolicy: enum(keep, shrinkToFit, stretch)
     *              widthInPixel: The target thumbnail width in pixel
     *              heightInPixel: The target thumbnail height in pixel
     *          }
     *          capture: { The rules to generate the thumbnail
     *              mode: enum(auto, manual)
     *              startTimeInSecond: The start time
     *              endTimeInSecond: The end time
     *              intervalInSecond: The time interval
     *          }
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createThumbnailJob($pipelineName, array $source, $options = array()) {
        list($config, $target, $capture) = $this->parseOptions(
            $options,
            'config',
            'target',
            'capture'
        );

        if (empty($pipelineName)) {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }

        if (empty($source)) {
            throw new BceClientException("The parameter source " 
                ."should NOT be null or empty string");
        }
        
        $body = array(
            'pipelineName' => $pipelineName,
            'source' => $source,
        );

        if ($target !== null) {
            $body['target'] = $target;
        }
        if ($capture !== null) {
            $body['capture'] = $capture;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            '/job/thumbnail'
        );
    }


    /**
     * Get a thumbnail
     * 
     * @param string $jobId The thumbnail job id
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getThumbnailJob($jobId, $options = array()) {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($jobId)) {
            throw new BceClientException("The parameter jobId " 
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/job/thumbnail/$jobId"
        );
    }

    /**
     * Get thumbnail jobs
     * 
     * @param string $pipelineName The pipeline name
     * @param string $jobStatus The jobStatus of the thumbnail job, not filter if null
     * @param string $begin The createTime should be later than or equals with begin, not check if null
     * @param string $end The createTime should be earlier than or equals with end, not check if null
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function listThumbnailJobsByPipelineName(
        $pipelineName,
        $jobStatus = null,
        $begin = null,
        $end = null,
        $options = array()
    ) {
        list($config) = $this->parseOptions($options, 'config');

        $params = array();
        if (!empty($pipelineName)) {
            $params['pipelineName'] = $pipelineName;
        } else {
            throw new BceClientException("The parameter pipelineName " 
                ."should NOT be null or empty string");
        }
        if (!empty($jobStatus)) {
            $params['jobStatus'] = $jobStatus;
        }
        if (!empty($begin)) {
            $params['begin'] = $begin;
        }
        if (!empty($end)) {
            $params['end'] = $end;
        }
        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/job/thumbnail"
        );
    }

    /**
     * Create a watermark
     *
     * @param string $bucket The source media BOS bucket
     * @param string $key the source media object key
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          verticalAlignment: watermark vertical alignment, enum(top, center, bottom)
     *          horizontalAlignment: watermark vertical alignment, enum(left, center, right)
     *          verticalOffsetInPixel: numeric vertical offset, 0~3072
     *          horizontalOffsetInPixel: numeric vertical offset, 0~4096
     *      }
     * @return mixed
     * @throws BceClientException
     * @since 0.8.4
     */
    public function createWatermark(
        $bucket, 
        $key,
        $options = array()
    ) {
        list(
            $config,
            $verticalAlignment,
            $horizontalAlignment,
            $verticalOffsetInPixel,
            $horizontalOffsetInPixel
        ) = $this->parseOptions(
            $options,
            'config',
            'verticalAlignment',
            'horizontalAlignment',
            'verticalOffsetInPixel',
            'horizontalOffsetInPixel'
        );

        if (empty($bucket)) {
            throw new BceClientException("The parameter bucket "
                ."should NOT be null or empty string");
        }

        if (empty($key)) {
            throw new BceClientException("The parameter key "
                ."should NOT be null or empty string");
        }

        $body = array(
            'bucket' => $bucket,
            'key' => $key,
        );
        if ($verticalAlignment !== null) {
            $body['verticalAlignment'] = $verticalAlignment;
        }
        if ($horizontalAlignment !== null) {
            $body['horizontalAlignment'] = $horizontalAlignment;
        }
        if ($verticalOffsetInPixel !== null) {
            $body['verticalOffsetInPixel'] = $verticalOffsetInPixel;
        }
        if ($horizontalOffsetInPixel !== null) {
            $body['horizontalOffsetInPixel'] = $horizontalOffsetInPixel;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            '/watermark'
        );
    }

    /**
     * Get a watermark
     * 
     * @param string $watermarkId The watermark id
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getWatermark($watermarkId, $options = array()) {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($watermarkId)) {
            throw new BceClientException("The parameter watermarkId "
                ."should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/watermark/$watermarkId"
        );
    }

    /**
     * Get watermarks
     *
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     */
    public function listWatermarks($options = array()) {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/watermark"
        );
    }


    /**
     * Delete the specific watermark
     *
     * @param string $watermarkId The watermark Id
     * @param array $options Supported options:
     *      {
     *          config: The optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */

    public function deleteWatermark($watermarkId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');
        if (empty($watermarkId)) {
            throw new BceClientException("The parameter watermarkId "
                ."should NOT be null or empty string");
        }
        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/watermark/$watermarkId"
        );
    }

    /**
     * Create HttpClient and send request
     * @param string $httpMethod The Http request method
     * @param array $varArgs The extra arguments
     * @param string $requestPath The Http request uri
     * @return mixed The Http response and headers.
     */
    private function sendRequest($httpMethod, array $varArgs, $requestPath = '/')
    {
        $defaultArgs = array(
            'config' => array(),
            'body' => null,
            'headers' => array(),
            'params' => array(),
        );

        $args = array_merge($defaultArgs, $varArgs);
        if (empty($args['config'])) {
            $config = $this->config;
        } else {
            $config = array_merge(
                array(),
                $this->config,
                $args['config']
            );
        }
        if (!isset($args['headers'][HttpHeaders::CONTENT_TYPE])) {
            $args['headers'][HttpHeaders::CONTENT_TYPE] = HttpContentTypes::JSON;
        }
        $path = $this->prefix . $requestPath;
        $response = $this->httpClient->sendRequest(
            $config,
            $httpMethod,
            $path,
            $args['body'],
            $args['headers'],
            $args['params'],
            $this->signer
        );

        $result = $this->parseJsonResult($response['body']);
        $result->metadata = $this->convertHttpHeadersToMetadata($response['headers']);
        return $result;
    }
}
