<?php

namespace Spatie\Dropbox;

use GuzzleHttp\Exception\ClientException;

interface RefreshableTokenProvider extends TokenProvider
{
    /**
     * @return bool Whether the token was refreshed.
     */
    public function refresh(ClientException $exception): bool;
}
