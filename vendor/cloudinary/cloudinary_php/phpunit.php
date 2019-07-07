<?php

if (!is_file(__DIR__.'/vendor/autoload.php') || !is_readable(__DIR__.'/vendor/autoload.php')) {
    echo 'Unable to load classes. Please run composer first.';
    exit;
}

include __DIR__.'/vendor/autoload.php';
