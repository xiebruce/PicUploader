<?php

namespace Spatie\Dropbox;

interface TokenProvider
{
    public function getToken(): string;
}
