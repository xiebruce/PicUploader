<?php

namespace Qiniu\Http;

final class RequestOptions
{

    /**
     * @var int|null
     * http 请求的超时时间，单位：秒，默认：0，不超时
     */
    public $connection_timeout;

    /**
     * @var int|null
     * http 请求的超时时间，单位：毫秒，默认：0，不超时
     */
    public $connection_timeout_ms;

    /**
     * @var int|null
     * http 请求的超时时间，单位：秒，默认：0，不超时
     */
    public $timeout;


    /**
     * @var int|null
     * http 请求的超时时间，单位：毫秒，默认：0，不超时
     */
    public $timeout_ms;

    public function __construct(
        $connection_timeout = null,
        $connection_timeout_ms = null,
        $timeout = null,
        $timeout_ms = null
    ) {
        $this->connection_timeout = $connection_timeout;
        $this->connection_timeout_ms = $connection_timeout_ms;
        $this->timeout = $timeout;
        $this->timeout_ms = $timeout_ms;
    }

    public function getCurlOpt()
    {
        $result = array();
        if ($this->connection_timeout != null) {
            $result[CURLOPT_CONNECTTIMEOUT] = $this->connection_timeout;
        }
        if ($this->connection_timeout_ms != null) {
            $result[CURLOPT_CONNECTTIMEOUT_MS] = $this->connection_timeout_ms;
        }
        if ($this->timeout != null) {
            $result[CURLOPT_TIMEOUT] = $this->timeout;
        }
        if ($this->timeout_ms != null) {
            $result[CURLOPT_TIMEOUT_MS] = $this->timeout_ms;
        }
        return $result;
    }
}
