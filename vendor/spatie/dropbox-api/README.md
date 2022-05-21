
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# A minimal implementation of Dropbox API v2

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/dropbox-api.svg?style=flat-square)](https://packagist.org/packages/spatie/dropbox-api)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/dropbox-api/run-tests?label=tests)](https://github.com/spatie/dropbox-api/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/spatie/dropbox-api/Check%20&%20fix%20styling?label=code%20style)](https://github.com/spatie/dropbox-api/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/dropbox-api.svg?style=flat-square)](https://packagist.org/packages/spatie/dropbox-api)


This is a minimal PHP implementation of the [Dropbox API v2](https://www.dropbox.com/developers/documentation/http/overview). It contains only the methods needed for [our flysystem-dropbox adapter](https://github.com/spatie/flysystem-dropbox). We are open however to PRs that add extra methods to the client. 

Here are a few examples on how you can use the package:

```php
$client = new Spatie\Dropbox\Client($authorizationToken);

//create a folder
$client->createFolder($path);

//list a folder
$client->listFolder($path);

//get a temporary link
$client->getTemporaryLink($path);
```

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/dropbox-api.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/dropbox-api)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

``` bash
composer require spatie/dropbox-api
```

## Usage

The first thing you need to do is get an authorization token at Dropbox. Unlike [other companies](https://google.com) Dropbox has made this very easy. You can just generate a token in the [App Console](https://www.dropbox.com/developers/apps) for any Dropbox API app. You'll find more info at [the Dropbox Developer Blog](https://blogs.dropbox.com/developers/2014/05/generate-an-access-token-for-your-own-account/).

With an authorization token you can instantiate a `Spatie\Dropbox\Client`.

```php
$client = new Spatie\Dropbox\Client($authorizationToken);
```

or alternatively you can implement `Spatie\Dropbox\TokenProvider` 
which will provide the access-token from its 
`TokenProvider->getToken(): string` method.

If you use oauth2 to authenticate and to acquire refresh-tokens and access-tokens,
(like [thephpleague/oauth2-client](https://github.com/thephpleague/oauth2-client)),
you can create an adapter that internally takes care of token-expiration and refreshing tokens, 
and at runtime will supply the access-token via the `TokenProvider->getToken(): string` method.

*(Dropbox announced they will be moving to short-lived access_tokens mid 2021).*


```php
// implements Spatie\Dropbox\TokenProvider
$tokenProvider = new AutoRefreshingDropBoxTokenService($refreshToken);
$client = new Spatie\Dropbox\Client($tokenProvider);
```



or alternatively you can authenticate as an App using your App Key & Secret.

```php
$client = new Spatie\Dropbox\Client([$appKey, $appSecret]);
```

If you only need to access the public endpoints you can instantiate `Spatie\Dropbox\Client` without any arguments.

```php
$client = new Spatie\Dropbox\Client();
```

## Dropbox Endpoints

Look in [the source code of `Spatie\Dropbox\Client`](https://github.com/spatie/dropbox-api/blob/master/src/Client.php) to discover the methods you can use.

Here's an example:

```php
$content = 'hello, world';
$client->upload('/dropboxpath/filename.txt', $content, $mode='add');

$from = '/dropboxpath/somefile.txt';
$to = '/dropboxpath/archive/somefile.txt';
$client->move($from, $to);
```

If the destination filename already exists, dropbox will throw an Exception with 'to/conflict/file/..'

The ``upload()`` and ``move()`` methods have an optional extra 'autorename' argument 
to try and let dropbox automatically rename the file if there is such a conflict.

Here's an example:

```php
$from = '/dropboxpath/somefile.txt';
$to = '/dropboxpath/archive/somefile.txt';
$client->move($from, $to, $autorename=true);
// with autorename results in 'somefile (1).txt'
```


If you do not find your favorite method, you can directly use the `contentEndpointRequest` and `rpcEndpointRequest` functions.

```php
public function contentEndpointRequest(string $endpoint, array $arguments, $body): ResponseInterface

public function rpcEndpointRequest(string $endpoint, array $parameters): array
```

Here's an example:

```php
$client->rpcEndpointRequest('search', ['path' => '', 'query' => 'bat cave']);
```

If you need to change the subdomain of the endpoint URL used in the API request, you can prefix the endpoint path with `subdomain::`.

Here's an example:

```php
$client->rpcEndpointRequest('content::files/get_thumbnail_batch', $parameters);
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security

If you've found a bug regarding security please mail [security@spatie.be](mailto:security@spatie.be) instead of using the issue tracker.

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Kruikstraat 22, 2018 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Alex Vanderbist](https://github.com/AlexVanderbist)
- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
