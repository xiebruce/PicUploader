cos-php-sdk-v5 Upgrade Guide
====================

1.3 to 2.0
----------
cos-php-sdk-v5 now uses [GuzzleHttp] for HTTP message.
Due to fact, it depending on PHP >= 5.6.

- Use the `Qcloud\Cos\Client\getPresignetUrl()` method instead of the `Qcloud\Cos\Command\createPresignedUrl()`

v2:
```php
$signedUrl = $cosClient->getPresignetUrl($method='putObject',
                                         $args=['Bucket'=>'examplebucket-1250000000', 'Key'=>'exampleobject', 'Body'=>''],
                                         $expires='+30 minutes');
```

v1:
```php
$command = $cosClient->getCommand('putObject', array(
    'Bucket' => "examplebucket-1250000000",
    'Key' => "exampleobject",
    'Body' => '', 
));
$signedUrl = $command->createPresignedUrl('+30 minutes');
```

- `$copSource` parameters of the `Qcloud\Cos\Client\Copy` interface are no longer compatible with older versions.

v2:

```php
$result = $cosClient->copy( 
    $bucket = '<srcBucket>', 
    $Key = '<srcKey>', 
    $copySorce = array(
        'Region' => '<sourceRegion>', 
        'Bucket' => '<sourceBucket>', 
        'Key' => '<sourceKey>', 
    )
);
```

v1:
```php
$result = $cosClient->Copy(
    $bucket = '<srcBucket>',
    $key = '<srcKey>', 
    $copysource = '<sourceBucket>.cos.<sourceRegion>.myqcloud.com/<sourceKey>'
);
```
- Now when uploading files with using `open()` to upload stream, if the local file does not exist, a 0 byte file will be uploaded without throwing an exception, only a warning.

