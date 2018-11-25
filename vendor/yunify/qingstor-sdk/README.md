# QingStor SDK for PHP
![https://travis-ci.org/yunify/qingstor-sdk-php](https://travis-ci.org/yunify/qingstor-sdk-php.svg?branch=master)
![http://docs.qingcloud.com/qingstor/](http://img.shields.io/badge/api-reference-green.svg)
![https://github.com/yunify/qingstor-sdk-php/blob/master/LICENSE](http://img.shields.io/badge/license-apache%20v2-blue.svg)

The official QingStor SDK for the PHP programming language.

## Getting Started

### Installation

Refer to the [Installation Guide](docs/installation.md), and have this SDK installed.


### Preparation

Before your start, please go to [QingCloud Console](https://console.qingcloud.com/access_keys/) to create a pair of QingCloud API AccessKey.

*API AccessKey Example:*

``` yaml
access_key_id: 'ACCESS_KEY_ID_EXAMPLE'
secret_access_key: 'SECRET_ACCESS_KEY_EXAMPLE'
```

### Usage

Now you are ready to code. You can read the detailed guides in the list below to have a clear understanding or just take the quick start code example.
Checkout our [releases](https://github.com/yunify/qingstor-sdk-php/releases) and [change logs](CHANGELOG.md) for information about the latest features, bug fixes and new ideas.

- [Configuration Guide](docs/configuration.md)
- [QingStor Service Usage Guide](docs/qingstor_service_usage.md)

*Quick Start Code Example:*

```php
use QingStor\SDK\Service\QingStor;
use QingStor\SDK\Config;

$config = new Config('ACCESS_KEY_ID_EXAMPLE','SECRET_ACCESS_KEY_EXAMPLE');
$service = new QingStor($config);
$bucket = $service->Bucket('test_bucket', 'pek3a');
$res = $bucket->listObjects();
var_dump($res->keys);
```

## Reference Documentations

- [QingStor Documentation](https://docs.qingcloud.com/qingstor/index.html)
- [QingStor Guide](https://docs.qingcloud.com/qingstor/guide/index.html)
- [QingStor APIs](https://docs.qingcloud.com/qingstor/api/index.html)

## Contributing

Please see [Contributing Guidelines](docs/contributing.md) of this project before submitting patches.

## LICENSE

The Apache License (Version 2.0, January 2004).
