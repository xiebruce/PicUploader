# Configuration Guide

## Summary

This SDK uses a structure called "Config" to store and manage configuration, read comments of public functions in ["Config.php"](https://github.com/yunify/qingstor-sdk-php/blob/master/src/Config.php) for details.

Except for Access Key, you can also configure the API endpoint for private cloud usage scenario. All available configurable items are listed in the default configuration file.

___Default Configuration File:___

``` yaml
# QingStor services configuration

access_key_id: ''
secret_access_key: ''

host: 'qingstor.com'
port: 443
protocol: 'https'
connection_retries: 3

# Valid log levels are "debug", "info", "warn", "error", and "fatal".
log_level: 'warn'

```

## Usage

Just create a config structure instance with your API Access Key, and initialize services you need with Init() function of the target service.

### Code Snippet

Create default configuration

``` php
$defaultConfig = new Config();
```

Create configuration from Access Key

``` php
$configuration = new Config("ACCESS_KEY_ID", "SECRET_ACCESS_KEY");

$anotherConfiguration = new Config();
$anotherConfiguration->access_key_id = "ACCESS_KEY_ID";
$anotherConfiguration->secret_access_key = "SECRET_ACCESS_KEY";
```

Load user configuration

``` php
$userConfig = new Config();
$userConfig->loadUserConfig();
```

Load configuration from config file

``` php
$configFromFile = new Config();
$configFromFile->loadConfigFromFilepath("PATH/TO/FILE");
```

Change API endpoint

``` php
$moreConfiguration = new Config();

$moreConfiguration->protocol = "https";
$moreConfiguration->host = "api.private.com";
$moreConfiguration->port = 4433;
```