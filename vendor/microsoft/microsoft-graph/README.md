# Get started with the Microsoft Graph SDK for PHP

[![Build Status](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## Get started with the PHP Connect Sample
If you want to play around with the PHP library, you can get up and running quickly with the [PHP Connect Sample](https://github.com/microsoftgraph/php-connect-sample). This sample will start you with a little Laravel project that helps you with registration, authentication, and making a simple call to the service.

## Install the SDK
You can install the PHP SDK with Composer, either run `composer require microsoft/microsoft-graph`, or edit your `composer.json` file:
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Get started with Microsoft Graph

### Register your application

Register your application to use the Microsoft Graph API by using one of the following
supported authentication portals:

* [Microsoft Application Registration Portal](https://apps.dev.microsoft.com) (**Recommended**):
  Register a new application that authenticates using the v2.0 authentication endpoint. This endpoint authenticates both personal (Microsoft) and work or school (Azure Active Directory) accounts.
* [Microsoft Azure Active Directory](https://manage.windowsazure.com): Register
  a new application in your tenant's Active Directory to support work or school
  users for your tenant, or multiple tenants.

### Authenticate with the Microsoft Graph service

The Microsoft Graph SDK for PHP does not include any default authentication implementations. The [`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) library will handle the OAuth2 flow for you and provide a usable token for querying the Graph.

To authenticate as an application you can use the [Guzzle HTTP client](http://docs.guzzlephp.org/en/stable/), which comes preinstalled with this library, for example like this:
```php
$guzzle = new \GuzzleHttp\Client();
$url = 'https://login.microsoftonline.com/' . $tenantId . '/oauth2/token?api-version=1.0';
$token = json_decode($guzzle->post($url, [
    'form_params' => [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'resource' => 'https://graph.microsoft.com/',
        'grant_type' => 'client_credentials',
    ],
])->getBody()->getContents());
$accessToken = $token->access_token;
```
For an integrated example on how to use Oauth2 in a Laravel application and use the Graph, see the [PHP Connect Sample](https://github.com/microsoftgraph/php-connect-sample).

### Call Microsoft Graph

The following is an example that shows how to call Microsoft Graph.

```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

class UsageExample
{
    public function run()
    {
        $accessToken = 'xxx';

        $graph = new Graph();
        $graph->setAccessToken($accessToken);

        $user = $graph->createRequest("GET", "/me")
                      ->setReturnType(Model\User::class)
                      ->execute();

        echo "Hello, I am $user->getGivenName() ";
    }
}
```

## Develop

### Debug
You can use the library with a proxy such as [Fiddler](http://www.telerik.com/fiddler) or [Charles Proxy](https://www.charlesproxy.com/) to debug requests and responses as they come across the wire. Set the proxy port on the Graph object like this:
```php
$graph->setProxyPort("localhost:8888");
```
Then, open your proxy client to view the requests & responses sent using the library. 

![Screenshot of Fiddler /me/sendmail request and response](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

This is especially helpful when the library does not return the results you expected to determine whether there are bugs in the API or this SDK. Therefore, you may be asked to provide this information when attempting to triage an issue you file.

### Run Tests

Run 
```php
vendor/bin/phpunit --exclude-group functional
``` 
from the base directory.

*The set of functional tests are meant to be run against a test account. Currently, the 
tests to do not restore state of the account.*


## Documentation and resources

* [Documentation](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Examples](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Microsoft Graph website](https://developer.microsoft.com/en-us/graph/)

## Issues

View or log issues on the [Issues](https://github.com/microsoftgraph/msgraph-sdk-php/issues) tab in the repo.

## Contribute

Please read our [Contributing](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md) guidelines carefully for advice on how to contribute to this repo.

## Copyright and license

Copyright (c) Microsoft Corporation. All Rights Reserved. Licensed under the MIT [license](LICENSE).

This project has adopted the [Microsoft Open Source Code of Conduct](https://opensource.microsoft.com/codeofconduct/). For more information see the [Code of Conduct FAQ](https://opensource.microsoft.com/codeofconduct/faq/) or contact [opencode@microsoft.com](mailto:opencode@microsoft.com) with any additional questions or comments.
