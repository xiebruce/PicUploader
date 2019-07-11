<?php
/*
* Copyright 2015 Baidu, Inc.
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

namespace BaiduBce\Services\Vod;

use BaiduBce\Auth\BceV1Signer;
use BaiduBce\BceBaseClient;
use BaiduBce\BceClientConfigOptions;
use BaiduBce\Exception\BceClientException;
use BaiduBce\Http\BceHttpClient;
use BaiduBce\Http\HttpContentTypes;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Http\HttpMethod;
use BaiduBce\Services\Bos\BosClient;

class VodClient extends BceBaseClient
{
    private $signer;
    private $httpClient;
    private $bosClient;
    private $prefix = '/v1';

    /**
     * @param array $config The client configuration to connect VOD Server
     * @param array $bosConfig The client configuration to connect BOS server
     */
    function __construct(array $config, $bosConfig = array())
    {
        parent::__construct($config, 'VodClient', false);
        $this->signer = new BceV1Signer();
        $this->httpClient = new BceHttpClient();
        if (count($bosConfig) == 0) {
            $bosConfig = $config;
            if (isset($bosConfig[BceClientConfigOptions::ENDPOINT])) {
                unset($bosConfig[BceClientConfigOptions::ENDPOINT]);
            }
        }
        $bosConfig[BceClientConfigOptions::REGION] = 'bj';
        $this->bosClient = new BosClient($bosConfig);
    }

    /**
     * apply a vod media
     * Apply a new vod media, get mediaId, sourceBucket, sourceKey.
     * You account have the access to write the sourceBucket and sourceKey.
     * You need upload video to sourceBucket and sourceKey via BosClient,
     * Then call processMedia method to get a VOD media.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed created vod media info
     * @throws BceClientException
     */
    public function applyMedia($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        $params = array(
            'apply' => null,
        );
        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'params' => $params,
            ),
            '/media'
        );
    }

    /**
     * process a vod media
     * After applying media, uploading original video to bosClient,
     * you MUST call processMedia method to get a VOD media.
     *
     * @param $mediaId
     * @param $title string, the title of the media
     * @param $description string, the description of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *          sourceExtension: extension of the media source.
     *          transcodingPresetGroupName: preset group to be used for the media
     *      }
     * @return mixed created vod media info
     * @throws BceClientException
     */
    public function processMedia($mediaId, $title, $description, $options = array())
    {
        list($config, $extension, $presetGroup) =
            $this->parseOptions($options, 'config', 'sourceExtension', 'transcodingPresetGroupName');
        $params = array(
            'process' => null,
        );
        $body = array(
            'title' => $title,
            'description' => $description,
            'sourceExtension' => $extension,
            'transcodingPresetGroupName' => $presetGroup,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
                'body' => json_encode($body),
            ),
            "/media/$mediaId"
        );
    }


    /**
     * rerun a vod media
     * you can call rerunMedia method to re-process a VOD media.
     *
     * @param $mediaId
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed created vod media info
     * @throws BceClientException
     */
    public function rerunMedia($mediaId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        $params = array(
            'rerun' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/media/$mediaId"
        );
    }


    /**
     * merge vod media(s)
     * You can merge media(s) to one media
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed merged vod media info
     * @throws BceClientException
     */
    public function mergeMedia($mediaClips, $title, $description, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        $params = array(
            'merge' => null,
        );

        $attributes = array(
            'title' => $title,
            'description' => $description,
        );
        $body = array(
            'attributes' => $attributes,
            'mediaClips' => $mediaClips,
        );

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'params' => $params,
                'body' => json_encode($body),
            ),
            "/media"
        );
    }

    /**
     * Create a vod media via local file.
     *
     * @param $fileName string, path of local file
     * @param $title string, the title of the media
     * @param $description string, the description of the media, optional
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed created vod media info
     * @throws BceClientException
     */
    public function createMediaFromFile($fileName, $title, $description = '', $options = array())
    {
        if (empty($fileName)) {
            throw new BceClientException("The parameter fileName should NOT be null or empty string");
        }

        if (empty($title)) {
            throw new BceClientException("The parameter title should NOT be null or empty string");
        }
        // apply media
        $uploadInfo = $this->applyMedia($options);
        // upload file to bos
        $this->uploadMedia($fileName, $uploadInfo->sourceBucket, $uploadInfo->sourceKey);
        // process media
        // try to cal the extension of the file
        $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!preg_match("/^[a-z0-9]{0,10}$/", $extension)) {
            $extension = '';
        }
        $options['extension'] = $extension;
        return $this->processMedia($uploadInfo->mediaId, $title, $description, $options);
    }


    /**
     * Create a vod media via bos object.
     *
     * @param $bucket string, bos bucket name
     * @param $key    string, bos object key
     * @param $title  string, the title of the media
     * @param $description string, the description of the media, optional
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed created vod media info
     * @throws BceClientException
     */
    public function createMediaFromBosObject($bucket, $key, $title, $description = '', $options = array())
    {
        if (empty($bucket)) {
            throw new BceClientException("The parameter fileName should NOT be null or empty string");
        }
        if (empty($key)) {
            throw new BceClientException("The parameter fileName should NOT be null or empty string");
        }
        if (empty($title)) {
            throw new BceClientException("The parameter title should NOT be null or empty string");
        }
        // apply media
        $uploadInfo = $this->applyMedia($options);
        // copy bos object
        $this->bosClient->copyObject($bucket, $key, $uploadInfo->sourceBucket, $uploadInfo->sourceKey);
        // process media
        // try to cal the extension of the file
        $extension = strtolower(pathinfo($key, PATHINFO_EXTENSION));
        if (!preg_match("/^[a-z0-9]{0,10}$/", $extension)) {
            $extension = '';
        }
        $options['extension'] = $extension;
        return $this->processMedia($uploadInfo->mediaId, $title, $description, $options);
    }

    /**
     * get the info of a vod media by mediaId
     *
     * @param $mediaId string, mediaId of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed media info
     * @throws BceClientException
     */
    public function getMedia($mediaId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/media/$mediaId"
        );
    }

    /**
     * get the info of current user's all vod media by marker
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *          marker: string, marker of current query
     *          maxSize: int, max size of media(s) of current query
     *          title: string, title prefix of the media(s)
     *          status: string, status of the media(s)
     *          begin: string, the low limit of the createTime of the media(s)
     *          end: string, the upper limit of the createTime of the media(s)
     *      }
     * @return mixed the info of user's all media
     * @throws BceClientException
     */
    public function listMediaByMarker($options = array())
    {
        list($config, $marker, $maxSize, $title, $status, $begin, $end) =
            $this->parseOptions($options, 'config', 'marker', 'maxSize', 'title', 'status', 'begin', 'end');

        $params = array(
            'marker' => $marker,
            'maxSize' => $maxSize,
            'title' => $title,
            'status' => $status,
            'begin' => $begin,
            'end' => $end,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            '/media'
        );
    }

    /**
     * get the info of current user's all vod media by page
     *
     * @param $pageNo integer, pageNo of the resultSet
     * @param $pageSize integer, pageSize of the resultSet
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *          title: string, title prefix of the media(s)
     *          status: string, status of the media(s)
     *          begin: string, the low limit of the createTime of the media(s)
     *          end: string, the upper limit of the createTime of the media(s)
     *      }
     * @return mixed the info of user's all media
     * @throws BceClientException
     */
    public function listMediaByPage($pageNo,
                                    $pageSize,
                                    $options = array())
    {
        list($config, $title, $status, $begin, $end) =
            $this->parseOptions($options, 'config', 'title', 'status', 'begin', 'end');

        $params = array(
            'pageNo' => $pageNo,
            'pageSize' => $pageSize,
            'title' => $title,
            'status' => $status,
            'begin' => $begin,
            'end' => $end,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            '/media'
        );
    }

    /**
     * update the attributes of a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param $title string, new title of the media
     * @param $description string, new description of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of updating
     * @throws BceClientException
     */
    public function updateMedia($mediaId, $title, $description, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        if (empty($title)) {
            throw new BceClientException("The parameter title should NOT be null or empty string");
        }

        $body = array(
            'title' => $title,
            'description' => $description,
        );

        $params = array(
            'attributes' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'body' => json_encode($body),
                'params' => $params,
            ),
            "/media/$mediaId"
        );
    }

    /**
     * update the attributes of a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param $title string, new title of the media
     * @param $description string, new description of the media
     * @param $sourceExtension string, new sourceExtension of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of updating
     * @throws BceClientException
     */
    public function updateMediaAttributes($mediaId, $title, $description, $sourceExtension, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        if (empty($title)) {
            throw new BceClientException("The parameter title should NOT be null or empty string");
        }

        $body = array(
            'title' => $title,
            'description' => $description,
            'sourceExtension' => $sourceExtension,
        );

        $params = array(
            'attributes' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'body' => json_encode($body),
                'params' => $params,
            ),
            "/media/$mediaId"
        );
    }
    /**
     * disable a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of disabling
     * @throws BceClientException
     */
    public function disableMedia($mediaId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        $params = array(
            'disable' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/media/$mediaId"
        );
    }

    /**
     * publish a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of publishing
     * @throws BceClientException
     */
    public function publishMedia($mediaId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        $params = array(
            'publish' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/media/$mediaId"
        );
    }


    /**
     * get the statistic of a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param $startTime string
     * @param $endTime string
     * @param $aggregate string, 'true' or 'false'
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of publishing
     * @throws BceClientException
     */
    public function getMediaStatistic($mediaId,
                                      $startTime,
                                      $endTime,
                                      $aggregate,
                                      $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');
        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }
        $params = array();
        if (!empty($startTime)) {
            $params['startTime'] = $startTime;
        }
        if (!empty($endTime)) {
            $params['endTime'] = $endTime;
        }
        if (!empty($aggregate)) {
            $params['aggregate'] = $aggregate;
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistic/media/$mediaId"
        );
    }

    /**
     * delete a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of deleting
     * @throws BceClientException
     */
    public function deleteMedia($mediaId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/media/$mediaId"
        );
    }

    /**
     * get the delivery info of a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the vod media's playable source file and cover page
     * @throws BceClientException
     */
    public function getMediaDelivery($mediaId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/media/$mediaId/delivery"
        );
    }


    /**
     * get the source code for a vod media.
     * vod offer html code and file/cover.
     * html can be simply embed in your html code,
     * while file/cover can be fill in android/ios player or else.
     *
     * @param $mediaId string, mediaId of the media
     * @param $width : integer, the width of the player size
     * @param $height : integer, the height of the player size
     * @param $autoStart : string, whether the player start to play the media automatically
     * @param $ak : string, player code need ak to be filled, if not applied, vod will use ak in config automatically.
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the vod media's playable source file and cover page
     * @throws BceClientException
     */
    public function getMediaCode($mediaId,
                                 $width,
                                 $height,
                                 $autoStart,
                                 $ak,
                                 $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }
        if ($ak == '') {
            $ak = $this->config["credentials"]["ak"];
        }
        $params = array(
            'width' => $width,
            'height' => $height,
            'autostart' => $autoStart,
            'ak' => $ak,
        );

        $response = $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/media/$mediaId/code"
        );
        return $response;
    }


    /**
     * create a new vod notification
     *
     * @param $name string, name of vod notification
     * @param $endpoint string, endpoint of vod notification
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function createNotification($name, $endpoint, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name should NOT be null or empty string");
        }

        if (empty($endpoint)) {
            throw new BceClientException("The parameter endpoint should NOT be null or empty string");
        }

        $body = array(
            'name' => $name,
            'endpoint' => $endpoint,
        );

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            '/notification'
        );
    }

    /**
     * get a vod notification by name
     *
     * @param $name string, name of vod notification
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function getNotification($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/notification/$name"
        );
    }

    /**
     * delete a vod notification by name
     *
     * @param $name string, name of vod notification
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function deleteNotification($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/notification/$name"
        );
    }

    /**
     * list all vod notifications
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function listNotification($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/notification'
        );
    }


    /**
     * get a vod strategy group by name
     *
     * @param $name string, name of vod strategy group
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function getStrategyGroup($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/strategygroup/$name"
        );
    }

    /**
     * list all vod strategy groups
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function listStrategyGroup($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/strategygroup'
        );
    }

    /**
     * get a vod preset group by name
     *
     * @param $name string, name of vod preset group
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function getPresetGroup($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/presetgroup/$name"
        );
    }

    /**
     * list all vod preset groups
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the result of creating
     * @throws BceClientException
     */
    public function listPresetGroup($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/presetgroup'
        );
    }

    /**
     * get the source download info of a vod media
     *
     * @param $mediaId string, mediaId of the media
     * @param $expiredInSeconds integer, expire time of the url
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default vod client configuration that was passed in constructor.
     *      }
     * @return mixed the vod media's playable source file and cover page
     * @throws BceClientException
     */
    public function getMediaSource($mediaId, $expiredInSeconds, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($mediaId)) {
            throw new BceClientException("The parameter mediaId should NOT be null or empty string");
        }
        if (empty($expiredInSeconds)) {
            $expiredInSeconds = -1;
        }

        $params = array(
            'sourcedownload' => null,
            'expiredInSeconds' => $expiredInSeconds,
        );
        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/media/$mediaId"
        );
    }





    /**
     * Upload the media source to bos.
     *
     * @param $fileName
     * @param $bucket
     * @param $key
     * @throws \Exception
     */
    private function uploadMedia($fileName, $bucket, $key)
    {
        // init multi-part upload
        $initUploadResponse = $this->bosClient->initiateMultipartUpload($bucket, $key);
        $uploadId = $initUploadResponse->uploadId;

        // do upload part
        try {
            $offset = 0;
            $partNumber = 1;
            $partSize = BosClient::MIN_PART_SIZE;
            $length = $partSize;
            $partList = array();
            $bytesLeft = filesize($fileName);

            while ($bytesLeft > 0) {
                $length = ($length > $bytesLeft) ? $bytesLeft : $length;
                $uploadResponse = $this->bosClient->uploadPartFromFile(
                    $bucket,
                    $key,
                    $uploadId,
                    $partNumber,
                    $fileName,
                    $offset,
                    $length);
                array_push($partList, array(
                    'partNumber' => $partNumber,
                    'eTag' => $uploadResponse->metadata['etag'],
                ));
                $offset += $length;
                $partNumber++;
                $bytesLeft -= $length;
            }

            // complete upload
            $this->bosClient->completeMultipartUpload($bucket, $key, $uploadId, $partList);
        } catch (\Exception $e) {
            $this->bosClient->abortMultipartUpload($bucket, $key, $uploadId);
            throw $e;
        }
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
