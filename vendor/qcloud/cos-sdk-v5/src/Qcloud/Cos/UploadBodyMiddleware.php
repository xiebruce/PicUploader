<?php

namespace Qcloud\Cos;

use Qcloud\Cos\Exception\ServiceResponseException;
use Qcloud\Cos\Exception\NoSuchKeyException;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class SignatureMiddleware {
    private $nextHandler;
    protected $signature;

    /**
     * @param callable $nextHandler Next handler to invoke.
     */
    public function __construct(callable $nextHandler) {
        $this->nextHandler = $nextHandler;
        $this->bodyParameter = (string) $bodyParameter;
        $this->sourceParameter = (string) $sourceParameter;
    }

    public function __invoke(RequestInterface $request, array $options) {
        $fn = $this->nextHandler;
        return $fn($this->signature->signRequest($request), $options);
    }
    
    public function uploadBodyRequest() {
        $body = $command->get($this->bodyParameter);

        // If a file path is passed in then get the file handle
        if (is_string($source) && file_exists($source)) {
            $body = fopen($source, 'rb');
        }

        // Prepare the body parameter and remove the source file parameter
        if (null !== $body) {
            $command->set($this->bodyParameter, EntityBody::factory($body));
        } else {
            throw new InvalidArgumentException(
                    "You must specify a non-null value for the {$this->bodyParameter} or {$this->sourceParameter} parameters.");
        }
    }
}
