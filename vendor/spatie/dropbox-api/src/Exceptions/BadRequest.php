<?php

namespace Spatie\Dropbox\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

class BadRequest extends Exception
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    public $response;

    /**
     * The dropbox error code supplied in the response.
     *
     * @var string|null
     */
    public $dropboxCode;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;

        $body = json_decode($response->getBody(), true);

        if (isset($body['error']['.tag'])) {
            $this->dropboxCode = $body['error']['.tag'];
        }

        parent::__construct($body['error_summary']);
    }
}
