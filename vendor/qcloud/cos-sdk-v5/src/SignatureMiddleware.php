<?php

namespace Qcloud\Cos;

use Psr\Http\Message\RequestInterface;

class SignatureMiddleware {
    private $nextHandler;
    protected $signature;

    /**
     * @param callable $nextHandler Next handler to invoke.
     */
    public function __construct(callable $nextHandler, $accessKey, $secretKey, $options) {
        $this->nextHandler = $nextHandler;
        $this->signature = new Signature($accessKey, $secretKey, $options);
    }

    public function __invoke(RequestInterface $request, array $options) {
        $fn = $this->nextHandler;
        return $fn($this->signature->signRequest($request), $options);
	}
}
