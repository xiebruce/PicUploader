<?php

namespace Spatie\Dropbox;

class InMemoryTokenProvider implements TokenProvider
{
    /**
     * @var string
     */
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
