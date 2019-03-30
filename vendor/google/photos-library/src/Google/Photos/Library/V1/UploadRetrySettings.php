<?php
/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Photos\Library\V1;


/**
 * Stores properties for retrying uploads.
 *
 * Consistency is maintained with {@link RetrySettings} as much as possible. There are some notable
 * differences:
 * <ul>
 *   <li>Retries are not attempted after a maximum number of attempts, rather than after a
 *       a total timeout.
 *   <li>Timeout for each call is constant, rather than over a range.
 *   <li>In addition to the retryable codes, there are retryable exceptions.
 * @package Google\Photos\Library\V1
 */
class UploadRetrySettings
{
    public $retriesEnabled;
    public $maxNumRetries;
    public $initialRetryDelayMillis;
    public $retryDelayMultiplier;
    public $maxRetryDelayMillis;
    public $retryableCodes;
    public $retryableExceptions;
    public $singleTimeoutMillis;

    /**
     * Constructs an instance.
     *
     * @param array $settings {
     *     Required. Settings for configuring the retry behavior. All parameters are required except
     *     $retriesEnabled which is optional and it defaults based on the other settings provided.
     *
     *     @type bool    $retriesEnabled Optional. Enables retries. If not specified, the value is
     *                   determined using the $retryableCodes setting. If $retryableCodes is empty,
     *                   then $retriesEnabled is set to false; otherwise, it is set to true.
     *     @type int     $maxNumRetries The maximum number of retries to attempt.
     *     @type array   $retryableCodes The Status codes that are retryable. Each status should be
     *                   either one of the string constants defined on {@see \Google\ApiCore\ApiStatus}
     *     @type array   $retryableExceptions The exceptions that are retryable. Each exception
     *                   should be a class in {@see GuzzleHttp\Exception}
     *     @type int     $initialRetryDelayMillis The initial delay of retry in milliseconds.
     *     @type int     $retryDelayMultiplier The exponential multiplier of retry delay.
     *     @type int     $maxRetryDelayMillis The max delay of retry in milliseconds.
     *     @type int     $singleTimeoutMillis The timeout for a single attempt in milliseconds.
     * }
     */
    public function __construct(array $settings = [])
    {
        $this->retriesEnabled = array_key_exists('retriesEnabled', $settings)
            ? $settings['retriesEnabled']
            : (count($this->retryableCodes) > 0);

        if ($this->retriesEnabled) {
            $this->maxNumRetries = $settings['maxNumRetries'];
            $this->initialRetryDelayMillis = $settings['initialRetryDelayMillis'];
            $this->retryDelayMultiplier = $settings['retryDelayMultiplier'];
            $this->maxRetryDelayMillis = $settings['maxRetryDelayMillis'];
            $this->retryableCodes = $settings['retryableCodes'];
            $this->retryableExceptions = $settings['retryableExceptions'];
            $this->singleTimeoutMillis = $settings['singleTimeoutMillis'];
        }
    }
}
