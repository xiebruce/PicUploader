<?php

if (is_file(__DIR__ . '/../../vendor/autoload.php') && is_readable(__DIR__ . '/../../vendor/autoload.php')) {
    require_once __DIR__.'/../../vendor/autoload.php';
} else {
    // Fallback to legacy autoloader
    require_once __DIR__.'/../../autoload.php';
    require_once __DIR__.'/../../src/Helpers.php';
}
