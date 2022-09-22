<?php
namespace Qiniu\Http;

final class Request
{
    public $url;
    public $headers;
    public $body;
    public $method;
    /**
     * @var RequestOptions
     */
    public $opt;

    public function __construct($method, $url, array $headers = array(), $body = null, $opt = null)
    {
        $this->method = strtoupper($method);
        $this->url = $url;
        $this->headers = $headers;
        $this->body = $body;
        if ($opt === null) {
            $opt = new RequestOptions();
        }
        $this->opt = $opt;
    }
}
