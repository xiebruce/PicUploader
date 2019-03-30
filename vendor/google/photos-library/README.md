# Google Photos Library API PHP Client Library

This repository contains the PHP client library for the [Google Photos Library
API](https://developers.google.com/photos).

You can find [samples](#samples) for this library in the `samples` branch. See the samples section below.

## Requirements and preparation
This library depends on [Composer](https://getcomposer.org/). If you don't have Composer installed
on the command line as `composer`, follow the 
[Linux/unix/OS X](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) or 
[Windows](https://getcomposer.org/doc/00-intro.md#installation-windows) installation guides.

*   System requirements and dependencies can be found in [`composer.json`](/google/php-photoslibrary/blob/master/composer.json)
    of this library. If you are not familiar with Composer, see 
    [this page](https://getcomposer.org/doc/01-basic-usage.md) for more details.
*   Your PHP installation must include the [`bcmath` extension](http://php.net/manual/en/book.bc.php).
*   OAuth 2.0 credentials configured for your project as [described below](#set-up-your-oauth2-credentials-for-php).


## Download the client library

Firstly, download the library, then set up OAuth 2.0 credentials to access the API.
Next, you can follow the [samples](#samples) to see the client library in action.

Here are some ways to download this library:

| Method                                                                | Target Users                                                                                                                  |
|-----------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------|
| [Using `composer require`](#using-composer-require)                   | If you want to **use this library as a third-party library** for your projects and do not require example files.          |
| [Using `git clone`](#using-git-clone)                                 | If you want to **alter or contribute to this library** (for example, submitting a pull request) or want to **run example files**. |
| [Downloading a compressed tarball](#downloading-a-compressed-tarball) | If you only want to **run example files**.                                                                                 |

### Using composer require

Follow the below steps to download this library as a third-party library for your projects.
The library will be downloaded by [Composer](https://getcomposer.org/) and stored under the
`vendor/` directory.
Examples are not downloaded by this download method.


```
$ composer require google/photos-library
```



### Using git clone

Use this method if you want to alter or contribute to this library (for example, submitting pull
requests) or if you wish to try our samples. When you clone the repository, **all** files in this
repository will be downloaded.

1.  Run `git clone https://github.com/google/php-photoslibrary.git` at
    the command prompt.
1.  You'll get a **php-photoslibrary** directory. Navigate to it by running
    `cd php-photoslibrary`.
1.  Run `composer install` at the command prompt. This will install all
    dependencies needed for using the library.

### Downloading a compressed tarball

Use this method only if you want to try out the Google Photos Library API with this client library.
The extracted directory of the tarball will contain only the samples from the `samples` branch.

1.  On the [releases page](https://github.com/google/php-photoslibrary/releases),
    select a version you want to try. Then, under **Download**, select the tarball
    of your choice, for example, **php-photoslibrary-samples-vX.Y.Z.tar.gz**.
1.  Extract your downloaded file to any location on your computer.
1.  Navigate to the extracted directory (for example, **php-photoslibrary-samples-vX.Y.Z**).
1.  Run `composer install` at the command prompt. This will install all dependencies
    needed for using the library and running examples.


## Set up your OAuth2 credentials for PHP

The Google Photos Library API uses [OAuth2](https://oauth.net/2/) as the
authentication mechanism. Note that the Library API does not support service accounts.

To complete the “Enable the API” and “Configure OAuth2.0” steps in the below procedure, refer to
the [get started guide in the developer documentation](https://developers.google.com/photos/library/guides/get-started-php)

This client library works with the [Google Auth Library for PHP](https://github.com/google/google-auth-library-php).
Specify the client secret JSON file when initialising the library.
Use the authentication credentials returned by the auth library when setting up the
`PhotosLibraryClient`. See the file [sample/src/common/common.php](https://github.com/google/php-photoslibrary/tree/samples/src/common/common.php)
for an example on how to do this.

## Sample usage
The best way to learn how to use this library is to [review the samples](#samples).
The [developer documentation](https://developers.google.com/photos) also includes
code snippets for this client library in PHP.

Once you have set up the dependencies and OAuth 2 credentials, you can access
the API.
Here's a short example that shows how to create a new album:
```php
// [START sample_usage]
use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Photos\Library\V1\PhotosLibraryClient;
use Google\Photos\Library\V1\PhotosLibraryResourceFactory;

try {
    // Use the OAuth flow provided by the Google API Client Auth library
    // to authenticate users. See the file /src/common/common.php in the samples for a complete
    // authentication example.
    $authCredentials = new UserRefreshCredentials( /* Add your scope, client secret and refresh token here */ );

    // Set up the Photos Library Client that interacts with the API
    $photosLibraryClient = new PhotosLibraryClient(['credentials' => $authCredentials]);

    // Create a new Album object with at title
    $newAlbum = PhotosLibraryResourceFactory::album("My Album");

    // Make the call to the Library API to create the new album
    $createdAlbum = $photosLibraryClient->createAlbum($newAlbum);

    // The creation call returns the ID of the new album
    $albumId = $createdAlbum->getId();
} catch (\Google\ApiCore\ApiException $exception) {
    // Error during album creation
} catch (\Google\ApiCore\ValidationException $e) {
    // Error during client creation
    echo $exception;
}
// [END sample_usage]
```

## Samples
A few samples are included in the [`samples`](https://github.com/google/php-photoslibrary/tree/samples) directory.
They show how to access media items, filter media, share albums, and upload files.

## Reference Documentation

PHPDoc for this library can be found in the [gh-pages](https://github.com/google/photos-library-php-lib/tree/gh-pages) branch of this repository.
You can browse it online here: [https://google.github.io/php-photoslibrary/index.html](https://google.github.io/php-photoslibrary/index.html)

General Google Photos Library API documentation can be found on our Google Developers
site: https://developers.google.com/photos

## Coding Style

We use PSR-2 as a coding style standard. Assuming that you're at the root
directory of your project, to check for coding style violations,
run

```
vendor/bin/phpcs src --standard=phpcs_ruleset.xml -np
```

To automatically fix (fixable) coding style violations, run

```
vendor/bin/phpcbf src --standard=phpcs_ruleset.xml
```

## Getting support

For client library specific bug reports, feature requests, and patches,
create an issue on the [issue
tracker](https://github.com/google/php-photoslibrary/issues).

See the [support page](https://developers.google.com/photos/library/support/how-to-get-help)
for any other API questions, bug reports, or feature requests.

## Announcements and updates

For general Google Photos Library API and client library updates and news, follow:

*   [PHP client library release notes](https://github.com/google/php-photoslibrary/releases)
*   [Google Photos Library API release notes](https://developers.google.com/photos/library/support/release-notes)

## License

Copyright 2018 Google LLC

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    https://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
