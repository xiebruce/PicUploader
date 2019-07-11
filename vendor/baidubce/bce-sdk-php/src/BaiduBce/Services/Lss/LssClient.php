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

namespace BaiduBce\Services\Lss;

use BaiduBce\Auth\BceV1Signer;
use BaiduBce\BceBaseClient;
use BaiduBce\Exception\BceClientException;
use BaiduBce\Http\BceHttpClient;
use BaiduBce\Http\HttpContentTypes;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Http\HttpMethod;
use BaiduBce\Util\DateUtils;

class LssClient extends BceBaseClient
{

    private $signer;
    private $httpClient;
    private $prefix = '/v5';

    /**
     * The LssClient constructor
     *
     * @param array $config The client configuration
     */
    function __construct(array $config)
    {
        parent::__construct($config, 'LssClient');
        $this->signer = new BceV1Signer();
        $this->httpClient = new BceHttpClient();
    }

    /**
     * Create a session.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          description: string, session description
     *          preset: string, session preset name
     *          region: string, session region, valid values: bj/gz
     *          pullUrl: string, pulling session's live source url
     *          notification: string, session notification name
     *          securityPolicy: string, session security policy name
     *          imageWatermarks: array, image watermark list
     *          timestampWatermarks: array, timestamp watermark list
     *          thumbnail: string, session thumbnail name
     *      }
     * @return mixed created session detail
     */
    public function createSession($options = array())
    {
        list($config, $description, $preset, $presets, $recording, $region, $pullUrl, $notification,
            $securityPolicy, $imageWatermarks, $timestampWatermarks, $thumbnail) = $this->parseOptions(
            $options,
            'config',
            'description',
            'preset',
            'presets',
            'recording',
            'region',
            'pullUrl',
            'notification',
            'securityPolicy',
            'imageWatermarks',
            'timestampWatermarks',
            'thumbnail'
        );

        $body = array();

        if ($description !== null) {
            $body['description'] = $description;
        } else {
            $body['description'] = '';
        }
        if ($preset !== null) {
            $body['preset'] = $preset;
        }
        if ($presets !== null) {
            $presetMap = array();
            for ($i = 0; $i < count($presets); $i++) {
                $presetMap['L'.$i] = $presets[$i];
            }
            $body['presets'] = $presetMap;
        }
        if ($recording !== null) {
            $body['recording'] = $recording;
        }
        if ($notification !== null) {
            $body['notification'] = $notification;
        }
        if ($securityPolicy !== null) {
            $body['securityPolicy'] = $securityPolicy;
        }
        if ($thumbnail !== null) {
            $body['thumbnail'] = $thumbnail;
        }

        $publish = array();
        if ($region !== null) {
            $publish['region'] = $region;
        }
        if ($pullUrl !== null) {
            $publish['pullUrl'] = $pullUrl;
        }
        if (count($publish) > 0) {
            $body['publish'] = $publish;
        }

        $watermarks = array();
        if ($imageWatermarks !== null) {
            $watermarks['image'] = $imageWatermarks;
        }
        if ($timestampWatermarks !== null) {
            $watermarks['timestamp'] = $timestampWatermarks;
        }
        if (count($watermarks) > 0) {
            $body['watermarks'] = $watermarks;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            '/session'
        );
    }

    /**
     * Update pull url of session.
     *
     * @param $sessionId string, session id
     * @param $pullUrl string, pullUrl
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed session detail
     * @throws BceClientException
     */
    public function updatePullUrl($sessionId, $pullUrl, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array();

        if ($pullUrl !== null) {
            $params['pullUrl'] = $pullUrl;
        }

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Get a session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed session detail
     * @throws BceClientException
     */
    public function getSession($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Get a session with token in push/play url.
     *
     * More specifically, if the security policy used by this session enables push/play auth,
     * its push/play url need be updated with a token parameter computed from the session id,
     * the session stream, etc., and the security policy auth key. This function returns the
     * detailed session info with push/play url updated, if necessary.
     *
     * @param $sessionId string, session id
     * @param int $expireInMinute number, the push/play url expire time in minute
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getSessionWithToken($sessionId, $expireInMinute = 120, $options = array())
    {
        $session = $this->getSession($sessionId, $options);
        $securityPolicy = $this->getSecurityPolicy($session->securityPolicy);
        $currentTime = new \DateTime();
        $expireTime = $currentTime->add(new \DateInterval("PT{$expireInMinute}M"));
        $expireTime->setTimezone(DateUtils::$UTC_TIMEZONE);
        $expireString = DateUtils::formatAlternateIso8601Date($expireTime);
        if ($securityPolicy->auth->play) {
            if (isset($session->play->hlsUrl)) {
                $hlsUrl = $session->play->hlsUrl;
                $hlsTokenPlain = '/' . $sessionId . '/live.m3u8;' . $expireString;
                $hlsToken = hash_hmac('sha256', $hlsTokenPlain, $securityPolicy->auth->key);
                $session->play->hlsUrl = $hlsUrl . '?token=' . $hlsToken . '&expire=' . $expireString;
            } elseif (isset($session->play->hlsUrls)) {
                $hlsUrls = array();
                foreach ($session->play->hlsUrls as $line => $hlsUrl) {
                    if (isset($hlsUrl)) {
                        $hlsToken = '';
                        if ($line == 'L0') {
                            $hlsTokenPlain = '/' . $sessionId . '/live.m3u8;' . $expireString;
                            $hlsToken = hash_hmac('sha256', $hlsTokenPlain, $securityPolicy->auth->key);
                        } else {
                            $hlsTokenPlain = '/' . $sessionId . '-' . $line . '/live.m3u8;' . $expireString;
                            $hlsToken = hash_hmac('sha256', $hlsTokenPlain, $securityPolicy->auth->key);
                        }
                        $hlsUrls[$line] = $hlsUrl . '?token=' . $hlsToken . '&expire=' . $expireString;
                    }
                }
                $session->play->hlsUrls = $hlsUrls;
            }

            if (isset($session->play->rtmpUrl)) {
                $rtmpUrls = array();
                $rtmpUrl = $session->play->rtmpUrl;
                $rtmpTokenPlain = $sessionId . ';' . $expireString;
                $rtmpToken = hash_hmac('sha256', $rtmpTokenPlain, $securityPolicy->auth->key);
                $session->play->rtmpUrl = $rtmpUrl . '?token=' . $rtmpToken . '&expire=' . $expireString;
            } elseif (isset($session->play->rtmpUrls)) {
                foreach ($session->play->rtmpUrls as $line => $rtmpUrl) {
                    if (isset($rtmpUrl)) {
                        $rtmpTokenPlain = $sessionId . ';' . $expireString;
                        $rtmpToken = hash_hmac('sha256', $rtmpTokenPlain, $securityPolicy->auth->key);
                        $rtmpUrls[$line] = $rtmpUrl . '?token=' . $rtmpToken . '&expire=' . $expireString;
                    }
                }
                $session->play->rtmpUrls = $rtmpUrls;
            }

            if (isset($session->play->flvUrl)) {
                $flvUrl = $session->play->flvUrl;
                $flvTokenPlain = $sessionId . ';' . $expireString;
                $flvToken = hash_hmac('sha256', $flvTokenPlain, $securityPolicy->auth->key);
                $session->play->flvUrl = $flvUrl . '?token=' . $flvToken . '&expire=' . $expireString;
            } elseif (isset($session->play->flvUrls)) {
                $flvUrls = array();
                foreach ($session->play->flvUrls as $line => $flvUrl) {
                    if (isset($flvUrl)) {
                        $flvTokenPlain = $sessionId . ';' . $expireString;
                        $flvToken = hash_hmac('sha256', $flvTokenPlain, $securityPolicy->auth->key);
                        $flvUrls[$line] = $flvUrl . '?token=' . $flvToken . '&expire=' . $expireString;
                    }
                }
                $session->play->flvUrls = $flvUrls;
            }
        }

        if ($securityPolicy->auth->push) {
            if (isset($session->publish->pushUrl)) {
                $pushUrl = $session->publish->pushUrl;
                $pushTokenPlain = $session->publish->pushStream . ';' . $expireString;
                $pushToken = hash_hmac('sha256', $pushTokenPlain, $securityPolicy->auth->key);
                $session->publish->pushUrl = $pushUrl . '?token=' . $pushToken . '&expire=' . $expireString;
            }
        }

        return $session;
    }

    /**
     * List sessions.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          status: session status, READY / ONGOING / PAUSED
     *          marker: query marker.
     *          maxSize: max number of listed sessions.
     *      }
     * @return mixed session list
     */
    public function listSessions($options = array())
    {
        list($config, $status, $marker, $maxSize) = $this->parseOptions($options, 'config', 'status', 'marker', 'maxSize');

        $params = array();

        if ($status !== null) {
            $params['status'] = $status;
        }
        if ($marker !== null) {
            $params['marker'] = $marker;
        }
        if ($maxSize !== null) {
            $params['maxSize'] = $maxSize;
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            '/session'
        );
    }

    /**
     * List sessions with a status filter.
     *
     * @param $status string, session status as a filter,
     *                 valid values: READY / ONGOING / PAUSED
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed session list
     * @throws BceClientException
     */
    public function listSessionsByStatus($status, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($status)) {
            throw new BceClientException("The parameter status "
                . "should NOT be null or empty string");
        }

        $params = array(
            'status' => $status,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            '/session'
        );
    }

    /**
     * Begin a pulling session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function pullSession($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array(
            'pull' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }


    /**
     * Pause a session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function pauseSession($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array(
            'pause' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Resume a session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function resumeSession($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array(
            'resume' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Refresh a session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed refreshed session detail
     * @throws BceClientException
     */
    public function refreshSession($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array(
            'refresh' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Delete a session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function deleteSession($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Set cuepoint to session.
     *
     * @param $sessionId string, session id
     * @param $callback string, callback method name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          arguments: array, callback arguments
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function setCuepoint($sessionId, $callback, $options = array())
    {
        list($config, $arguments) = $this->parseOptions(
            $options,
            'config',
            'arguments'
        );

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }
        if (empty($callback)) {
            throw new BceClientException("The parameter callback "
                . "should NOT be null or empty string");
        }

        $body = array();

        $body['callback'] = $callback;

        if ($arguments !== null) {
            $body['arguments'] = $arguments;
        }

        $params = array(
            'cuepoint' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
                'body' => json_encode($body, JSON_FORCE_OBJECT),
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Start recording a session.
     *
     * @param $sessionId string, session id
     * @param $recording string, recording name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function startRecording($sessionId, $recording, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        if (empty($recording)) {
            throw new BceClientException("The parameter recording "
                . "should NOT be null or empty string");
        }

        $params = array(
            'recording' => $recording,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Stop recording a session.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function stopRecording($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array(
            'recording' => '',
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Get session real-time source info.
     *
     * @param $sessionId string, session id
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getSessionSourceInfo($sessionId, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($sessionId)) {
            throw new BceClientException("The parameter sessionId "
                . "should NOT be null or empty string");
        }

        $params = array(
            'sourceInfo' => null,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/session/$sessionId"
        );
    }

    /**
     * Create a preset.
     *
     * @param $name string, preset name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          description: string, preset description
     *          forwardOnly: boolean, whether the preset is forward-only.
     *                      when forwardOnly = true, should not set audio/video.
     *          audio: { audio output settings
     *              bitRateInBps: number, output audio bit rate
     *              sampleRateInHz: number, output audio sample rate
     *              channels: number, output audio
     *          },
     *          video: { video output settings
     *              codec: string, output video codec, valid values: h264
     *              codecOptions: {
     *                  profile: string, valid values: baseline/main/high
     *              }
     *              bitRateInBps: number, output video bit rate
     *              maxFrameRate: number, output video max frame rate
     *              maxWidthInPixel: number, output video max width
     *              maxHeightInPixel: number, output video max height
     *              sizingPolicy: string, output video sizing policy,
     *                            valid values: keep/stretch/shrinkToFit
     *          },
     *          hls: { hls output settings
     *              segmentTimeInSecond: number, each hls segment time length
     *              segmentListSize: number, length of segment list in the output m3u8
     *              adaptive: boolean, whether adaptive hls is enabled
     *          },
     *          rmtp: { rmtp output settings
     *              gopCache: boolean, whether or not cache 1 gop
     *          }
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createPreset($name, $options = array())
    {
        list($config, $description, $forwardOnly, $audio, $video, $hls, $rtmp) = $this->parseOptions(
            $options,
            'config',
            'description',
            'forwardOnly',
            'audio',
            'video',
            'hls',
            'rtmp'
        );

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        $body = array(
            'name' => $name,
        );

        if ($description !== null) {
            $body['description'] = $description;
        }
        if ($forwardOnly !== null) {
            $body['forwardOnly'] = $forwardOnly;
        }
        if ($audio !== null) {
            $body['audio'] = $audio;
        }
        if ($video !== null) {
            $body['video'] = $video;
        }
        if ($hls !== null) {
            $body['hls'] = $hls;
        }
        if ($rtmp !== null) {
            $body['rtmp'] = $rtmp;
        }

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
     * Get a preset.
     *
     * @param $name string, preset name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed preset detail
     * @throws BceClientException
     */
    public function getPreset($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/preset/$name"
        );
    }

    /**
     * List presets.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @param array $options
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
     * Delete a preset.
     *
     * @param $name string, preset name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function deletePreset($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/preset/$name"
        );
    }

    /**
     * Creates a notification.
     *
     * @param $name string, notification name
     * @param $endpoint string, notification endpoint
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createNotification($name, $endpoint, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }
        if (empty($endpoint)) {
            throw new BceClientException("The parameter endpoint "
                . "should NOT be null or empty string");
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
     * Gets a notification.
     *
     * @param $name string, notification name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed notification detail
     * @throws BceClientException
     */
    public function getNotification($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
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
     * List notifications.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed notification list
     */
    public function listNotifications($options = array())
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
     * Delete a notification.
     *
     * @param $name string notification name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function deleteNotification($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
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
     * Get a security policy.
     *
     * @param $name string, security policy name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed security policy detail
     * @throws BceClientException
     */
    public function getSecurityPolicy($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/securitypolicy/$name"
        );
    }

    /**
     * List security policies.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed security policy list
     */
    public function listSecurityPolicies($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/securitypolicy'
        );
    }

    /**
     * Get a recording.
     *
     * @param $name string, recording name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed security policy detail
     * @throws BceClientException
     */
    public function getRecording($name, $options = array()) {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/recording/$name"
        );
    }

    /**
     * List recordings.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed recording list
     */
    public function listRecordings($options = array()) {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/recording'
        );
    }

    /**
     * Create a image watermark.
     *
     * @param $name string, image watermark name
     * @param $content string, watermark image base64 encode
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          maxWidthInPixel: number, watermark maximum width in pixel
     *          maxHeightInPixel: number, watermark maximum Height in pixel
     *          sizingPolicy: string, watermark size retractable policy
     *          verticalAlignment: string, vertically aligned manner
     *          horizontalAlignment: string, horizontal aligned manner
     *          verticalOffsetInPixel: number, vertical offset in pixel
     *          horizontalOffsetInPixel: number, horizontal offset in pixel
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createImageWatermark($name, $content, $options = array())
    {
        list($config, $maxWidthInPixel, $maxHeightInPixel,
            $sizingPolicy, $verticalAlignment, $horizontalAlignment,
            $verticalOffsetInPixel, $horizontalOffsetInPixel) = $this->parseOptions(
            $options,
            'config',
            'maxWidthInPixel',
            'maxHeightInPixel',
            'sizingPolicy',
            'verticalAlignment',
            'horizontalAlignment',
            'verticalOffsetInPixel',
            'horizontalOffsetInPixel'
        );

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }
        if (empty($content)) {
            throw new BceClientException("The parameter content "
                . "should NOT be null or empty string");
        }

        $body = array(
            'name' => $name,
            'content' => $content,
        );

        $size = array();
        if ($maxWidthInPixel !== null) {
            $size['maxWidthInPixel'] = $maxWidthInPixel;
        }
        if ($maxHeightInPixel !== null) {
            $size['maxHeightInPixel'] = $maxHeightInPixel;
        }
        if ($sizingPolicy !== null) {
            $size['sizingPolicy'] = $sizingPolicy;
        }
        if (count($size) > 0) {
            $body['size'] = $size;
        }

        $position = array();
        if ($verticalAlignment !== null) {
            $position['verticalAlignment'] = $verticalAlignment;
        }
        if ($horizontalAlignment !== null) {
            $position['horizontalAlignment'] = $horizontalAlignment;
        }
        if ($verticalOffsetInPixel !== null) {
            $position['verticalOffsetInPixel'] = $verticalOffsetInPixel;
        }
        if ($horizontalOffsetInPixel !== null) {
            $position['horizontalOffsetInPixel'] = $horizontalOffsetInPixel;
        }
        if (count($position) > 0) {
            $body['position'] = $position;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body, JSON_FORCE_OBJECT),
            ),
            "/watermark/image"
        );
    }

    /**
     * Get a image watermark.
     *
     * @param $name string, image watermark name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed image watermark detail
     * @throws BceClientException
     */
    public function getImageWatermark($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/watermark/image/$name"
        );
    }

    /**
     * List image watermarks.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed image watermark list
     */
    public function listImageWatermarks($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/watermark/image'
        );
    }

    /**
     * Delete a image watermark.
     *
     * @param $name string, image watermark name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function deleteImageWatermark($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/watermark/image/$name"
        );
    }

    /**
     * Create a timestamp watermark.
     *
     * @param $name string, image watermark name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          timezone: string, timestamp time zone
     *          alpha: number, timestamp watermark transparency
     *          fontFamily: string, timestamp watermark fonts
     *          fontSizeInPoint: number, font size in point
     *          fontColor: string, timestamp watermark font color
     *          backgroundColor: string, background color
     *          verticalAlignment: string, vertically aligned manner
     *          horizontalAlignment: string, horizontal aligned manner
     *          verticalOffsetInPixel: number, vertical offset in pixel
     *          horizontalOffsetInPixel: number, horizontal offset in pixel
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function createTimestampWatermark($name, $options = array())
    {
        list($config, $timezone, $alpha, $fontFamily, $fontSizeInPoint,
            $fontColor, $backgroundColor, $verticalAlignment, $horizontalAlignment,
            $verticalOffsetInPixel, $horizontalOffsetInPixel) = $this->parseOptions(
            $options,
            'config',
            'timezone',
            'alpha',
            'fontFamily',
            'fontSizeInPoint',
            'fontColor',
            'backgroundColor',
            'verticalAlignment',
            'horizontalAlignment',
            'verticalOffsetInPixel',
            'horizontalOffsetInPixel'
        );

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        $body = array(
            'name' => $name,
        );

        if ($timezone !== null) {
            $body['timezone'] = $timezone;
        }
        if ($alpha !== null) {
            $body['alpha'] = $alpha;
        }

        $font = array();
        if ($fontFamily !== null) {
            $font['family'] = $fontFamily;
        }
        if ($fontSizeInPoint !== null) {
            $font['sizeInPoint'] = $fontSizeInPoint;
        }
        if ($fontColor !== null) {
            $font['color'] = $fontColor;
        }
        if (count($font) > 0) {
            $body['font'] = $font;
        }

        $background = array();
        if ($backgroundColor !== null) {
            $background['color'] = $backgroundColor;
            $body['background'] = $background;
        }

        $position = array();
        if ($verticalAlignment !== null) {
            $position['verticalAlignment'] = $verticalAlignment;
        }
        if ($horizontalAlignment !== null) {
            $position['horizontalAlignment'] = $horizontalAlignment;
        }
        if ($verticalOffsetInPixel !== null) {
            $position['verticalOffsetInPixel'] = $verticalOffsetInPixel;
        }
        if ($horizontalOffsetInPixel !== null) {
            $position['horizontalOffsetInPixel'] = $horizontalOffsetInPixel;
        }
        if (count($position) > 0) {
            $body['position'] = $position;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body, JSON_FORCE_OBJECT),
            ),
            "/watermark/timestamp"
        );
    }

    /**
     * Get a timestamp watermark.
     *
     * @param $name string, timestamp watermark name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed timestamp watermark detail
     * @throws BceClientException
     */
    public function getTimestampWatermark($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/watermark/timestamp/$name"
        );
    }

    /**
     * List timestamp watermarks.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed timestamp watermark list
     */
    public function listTimestampWatermarks($options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            '/watermark/timestamp'
        );
    }

    /**
     * Delete a timestamp watermark.
     *
     * @param $name string, timestamp watermark name
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function deleteTimestampWatermark($name, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($name)) {
            throw new BceClientException("The parameter name "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/watermark/timestamp/$name"
        );
    }

    /**
     * API for Lss 3.0.
     * Support push and play stream by customized domain.
     */

    /**
     * Get a stream info.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed session detail
     * @throws BceClientException
     */
    public function getStream($domain, $app, $stream, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/domain/$domain/app/$app/stream/$stream"
        );
    }

    /**
     * Create a stream.
     *
     * @param $domain string, name of play domain
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed session detail
     * @throws BceClientException
     */
    public function createStream($domain, $options = array())
    {
        list($config,
            $app,
            $publish,
            $scene,
            $recording,
            $notification,
            $thumbnail,
            $thumbnails,
            $watermarks,
            $destinationPushUrl
        ) = $this->parseOptions(
            $options,
            'config',
            'app',
            'publish',
            'scene',
            'recording',
            'notification',
            'thumbnail',
            'thumbnails',
            'watermarks',
            'destinationPushUrl');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }

        $body = array();

        if ($app !== null) {
            $body['app'] = $app;
        }
        if ($publish !== null) {
            $body['publish'] = $publish;
        }
        if ($scene !== null) {
            $body['scene'] = $scene;
        }
        if ($recording !== null) {
            $body['recording'] = $recording;
        }
        if ($notification !== null) {
            $body['notification'] = $notification;
        }
        if ($thumbnail !== null) {
            $body['thumbnail'] = $thumbnail;
        }
        if ($thumbnails !== null) {
            $body['thumbnails'] = $thumbnails;
        }
        if ($watermarks !== null) {
            $body['watermarks'] = $watermarks;
        }
        if ($destinationPushUrl !== null) {
            $body['destinationPushUrl'] = $destinationPushUrl;
        }

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'body' => json_encode($body),
            ),
            "/domain/$domain/stream"
        );
    }

    /**
     * Delete a stream.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed session detail
     * @throws BceClientException
     */
    public function deleteStream($domain, $app, $stream, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::DELETE,
            array(
                'config' => $config,
            ),
            "/domain/$domain/app/$app/stream/$stream"
        );
    }

    /**
     * List streams.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *          status: stream status, READY / ONGOING / PAUSED
     *          marker: query marker.
     *          maxSize: max number of listed sessions.
     *      }
     * @return mixed stream list
     */
    public function listStreams($domain, $options = array())
    {
        list($config, $status, $marker, $maxSize) = $this->parseOptions($options, 'config', 'status', 'marker', 'maxSize');

        $params = array();

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if ($status !== null) {
            $params['status'] = $status;
        }
        if ($marker !== null) {
            $params['marker'] = $marker;
        }
        if ($maxSize !== null) {
            $params['maxSize'] = $maxSize;
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/domain/$domain/stream"
        );
    }

    /**
     * Pause a stream.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function pauseStream($domain, $app, $stream, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }

        $params = array(
            'pause' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/domain/$domain/app/$app/stream/$stream"
        );
    }

    /**
     * Resume a stream.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function resumeStream($domain, $app, $stream, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }

        $params = array(
            'resume' => null,
        );

        return $this->sendRequest(
            HttpMethod::PUT,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/domain/$domain/app/$app/stream/$stream"
        );
    }

    /**
     * Get domain static info.
     *
     * @param $domain string, name of play domain
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getDomainStatistics($domain, $options = array())
    {
        list($config, $startDate, $endDate, $aggregate) = $this->parseOptions(
            $options,
            'config',
            'startDate',
            'endDate',
            'aggregate'
        );

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($startDate)) {
            throw new BceClientException("The query parameter startDate "
                . "should NOT be null or empty string");
        }
        if (empty($endDate)) {
            throw new BceClientException("The query parameter endDate "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startDate' => $startDate,
            'endDate' => $endDate,
            'aggregate' => $aggregate,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/$domain"
        );
    }

    /**
     * Get domain summary static info.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getDomainSummaryStatistics($options = array())
    {
        list($config, $startTime, $endTime) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime'
        );

        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/summary"
        );
    }

    /**
     * List domain static info.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function listDomainStatistics($options = array())
    {
        list($config, $startTime, $endTime, $keywordType, $keyword, $orderBy) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'keywordType',
            'keyword',
            'orderBy'
        );

        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'keywordType' => $keywordType,
            'keyword' => $keyword,
            'orderBy' => $orderBy,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/list"
        );
    }

    /**
     * Get stream static info.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getStreamStatistics($domain, $app, $stream, $options = array())
    {
        list($config, $startDate, $endDate, $aggregate) = $this->parseOptions(
            $options,
            'config',
            'startDate',
            'endDate',
            'aggregate'
        );

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }
        if (empty($startDate)) {
            throw new BceClientException("The query parameter startDate "
                . "should NOT be null or empty string");
        }
        if (empty($endDate)) {
            throw new BceClientException("The query parameter endDate "
                . "should NOT be null or empty string");
        }


        $params = array(
            'startDate' => $startDate,
            'endDate' => $endDate,
            'aggregate' => $aggregate,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/$domain/app/$app/stream/$stream"
        );
    }

    /**
     * List stream static info.
     *
     * @param $domain string, name of play domain
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function listStreamStatistics($domain, $options = array())
    {
        list($config, $app, $startTime, $endTime, $pageNo, $pageSize,
            $keywordType, $keyword, $orderBy) = $this->parseOptions(
            $options,
            'config',
            'app',
            'startTime',
            'endTime',
            'pageNo',
            'pageSize',
            'keywordType',
            'keyword',
            'orderBy'
        );

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }

        $params = array(
            'app' => $app,
            'startTime' => $startTime,
            'endTime' => $endTime,
            'pageNo' => $pageNo,
            'pageSize' => $pageSize,
            'keywordType' => $keywordType,
            'keyword' => $keyword,
            'orderBy' => $orderBy,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/$domain/stream"
        );
    }

    /**
     * Get all domain traffic static info.
     *
     * @param $domain string, name of play domain
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getAllDomainTrafficStatistics($options = array())
    {
        list($config, $startTime, $endTime, $timeInterval) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'timeInterval'
        );

        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }
        if (empty($timeInterval)) {
            throw new BceClientException(
                "The query parameter timeInterval should be set in [SHORT_TERM|MID_TERM|LONG_TERM] "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'timeInterval' => $timeInterval,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/traffic"
        );
    }

    /**
     * Get a specific domain traffic static info.
     *
     * @param $domain string, name of play domain
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getDomainTrafficStatistics($domain, $options = array())
    {
        list($config, $startTime, $endTime, $timeInterval) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'timeInterval'
        );

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }
        if (empty($timeInterval)) {
            throw new BceClientException(
                "The query parameter timeInterval should be set in [SHORT_TERM|MID_TERM|LONG_TERM] "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'timeInterval' => $timeInterval,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/$domain/traffic"
        );
    }

    /**
     * Get all domain bandwidth static info.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getAllDomainBandwidthStatistics($options = array())
    {
        list($config, $startTime, $endTime, $timeInterval) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'timeInterval'
        );

        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }
        if (empty($timeInterval)) {
            throw new BceClientException(
                "The query parameter timeInterval should be set in [SHORT_TERM|MID_TERM|LONG_TERM] "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'timeInterval' => $timeInterval,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/bandwidth"
        );
    }

    /**
     * Get a specific domain bandwidth static info.
     *
     * @param $domain string, name of play domain
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getDomainBandwidthStatistics($domain, $options = array())
    {
        list($config, $startTime, $endTime, $timeInterval) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'timeInterval'
        );

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }
        if (empty($timeInterval)) {
            throw new BceClientException(
                "The query parameter timeInterval should be set in [SHORT_TERM|MID_TERM|LONG_TERM] "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'timeInterval' => $timeInterval,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/$domain/bandwidth"
        );
    }

    /**
     * Get all domain play count static info.
     *
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getAllDomainPlayCountStatistics($options = array())
    {
        list($config, $startTime, $endTime, $timeInterval) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'timeInterval'
        );

        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }
        if (empty($timeInterval)) {
            throw new BceClientException(
                "The query parameter timeInterval should be set in [SHORT_TERM|MID_TERM|LONG_TERM] "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'timeInterval' => $timeInterval,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/playcount"
        );
    }

    /**
     * Get a specific domain play count static info.
     *
     * @param $domain string, name of play domain
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getDomainPlayCountStatistics($domain, $options = array())
    {
        list($config, $startTime, $endTime, $timeInterval) = $this->parseOptions(
            $options,
            'config',
            'startTime',
            'endTime',
            'timeInterval'
        );

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($startTime)) {
            throw new BceClientException("The query parameter startTime "
                . "should NOT be null or empty string");
        }
        if (empty($endTime)) {
            throw new BceClientException("The query parameter endTime "
                . "should NOT be null or empty string");
        }
        if (empty($timeInterval)) {
            throw new BceClientException(
                "The query parameter timeInterval should be set in [SHORT_TERM|MID_TERM|LONG_TERM] "
                . "should NOT be null or empty string");
        }

        $params = array(
            'startTime' => $startTime,
            'endTime' => $endTime,
            'timeInterval' => $timeInterval,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/statistics/domain/$domain/playcount"
        );
    }

    /**
     * Update watermark of the stream.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function updateWatermarksOfStream($domain, $app, $stream, $options = array())
    {
        list($config, $watermarks) = $this->parseOptions($options, 'config', 'watermarks');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }

        $body = array();

        if (count($watermarks) > 0) {
            $body['watermarks'] = $watermarks;
        }

        $params = array(
            'watermark' => null,
        );

        return $this->sendRequest(
            HttpMethod::POST,
            array(
                'config' => $config,
                'params' => $params,
                'body' => json_encode($body),
            ),
            "/domain/$domain/app/$app/stream/$stream"
        );
    }

    /**
     * List realtime stream static info.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function listRealtimeStreamStatistics($domain, $app, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The query parameter app "
                . "should NOT be null or empty string");
        }

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
            ),
            "/statistics/realtime/domain/$domain/app/$app"
        );
    }

    /**
     * Get realtime live source info of the stream.
     *
     * @param $domain string, name of play domain
     * @param $app string, name of app
     * @param $stream string, name of stream
     * @param array $options Supported options:
     *      {
     *          config: the optional bce configuration, which will overwrite the
     *                  default client configuration that was passed in constructor.
     *      }
     * @return mixed
     * @throws BceClientException
     */
    public function getRealtimeStreamSourceInfo($domain, $app, $stream, $options = array())
    {
        list($config) = $this->parseOptions($options, 'config');

        if (empty($domain)) {
            throw new BceClientException("The parameter domain "
                . "should NOT be null or empty string");
        }
        if (empty($app)) {
            throw new BceClientException("The parameter app "
                . "should NOT be null or empty string");
        }
        if (empty($stream)) {
            throw new BceClientException("The parameter stream "
                . "should NOT be null or empty string");
        }

        $params = array(
            'sourceInfo' => null,
        );

        return $this->sendRequest(
            HttpMethod::GET,
            array(
                'config' => $config,
                'params' => $params,
            ),
            "/domain/$domain/app/$app/stream/$stream"
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

        return $result;
    }
}
