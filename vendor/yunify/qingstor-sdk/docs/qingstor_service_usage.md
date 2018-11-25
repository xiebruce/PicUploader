# QingStor Service Usage Guide

Import the QingStor and initialize service with a config, and you are ready to use the initialized service. Service only contains one API, and it is 'listBuckets'.
To use bucket related APIs, you need to initialize a bucket from service using 'Bucket' function.

``` php
use QingStor\SDK\Service\QingStor;
use QingStor\SDK\Config;
```

### Code Snippet

Initialize the QingStor service with a configuration

``` php
$config = new Config('ACCESS_KEY_ID_EXAMPLE', 'SECRET_ACCESS_KEY_EXAMPLE')
$service = new QingStor($config);
```

List buckets

``` php
$res = $service->listBuckets();

// Print the response statusCode.
echo $res->statusCode;

// Print the buckets number.
echo $res->count;

//Print the buckets data.
var_dump($res->buckets);
```

Initialize a QingStor bucket

``` php
$bucket = $service->Bucket('test-bucket', 'pek3a')
```

List objects in the bucket

``` php
$res = $bucket.listObjects()

// Print the response statusCode.
echo $res->statusCode;

// Print the objects keys.
var_dump($res->keys);
```

Set ACL of the bucket

``` php
$res = $bucket->putACL(
    array(
        'acl' => array(
            'grantee' => array(
                'type' => 'user',
                'ID' => 'usr-xxxxxxxx'
            ),
            'permission' => 'FULL_CONTROL'
        )
    )
);

// Print the response statusCode.
echo $res->statusCode;
```

Put object

``` php
// Put object
$res = $bucket->putObject(
    'object_key',
    array(
        'body' => file_get_contents('/tmp/sdk_bin'),
    )
);

// Print the response statusCode.
echo $res->statusCode;
```

Delete object

``` php
// Delete object
$res = $bucket->deleteObject(
    'object_key'
);

// Print the response statusCode.
echo $res->statusCode;
```

Initialize Multipart Upload

``` php
$res = $bucket->initiateMultipartUpload(
    'object_multipart'
);

// Print the response statusCode.
echo $res->statusCode;

// Set and print the upload ID.
echo $res->{'upload_id'};
```

Upload Multipart

``` php
$res = $bucket->uploadMultipart(
    'object_multipart',
    array(
        'upload_id' => $upload_id,
        'part_number' => 0,
        'body' => file_get_contents('/tmp/sdk_bin_part_0'),
    )
);

// Print the response statusCode.
echo $res->statusCode;

$res = $bucket->uploadMultipart(
    'object_multipart',
    array(
        'upload_id' => $upload_id,
        'part_number' => 1,
        'body' => file_get_contents('/tmp/sdk_bin_part_1'),
    )
);

// Print the response statusCode.
echo $res->statusCode;

$res = $bucket->uploadMultipart(
    'object_multipart',
    array(
        'upload_id' => $upload_id,
        'part_number' => 2,
        'body' => file_get_contents('/tmp/sdk_bin_part_2'),
    )
);

// Print the response statusCode.
echo $res->statusCode;
```

Complete Multipart Upload

``` php
$res = $bucket->listMultipart(
    'object_multipart',
    array(
        'upload_id' => $upload_id
    )
);

$object_parts = json_decode($res->getBody(), true)['object_parts'];

$res = $bucket->completeMultipartUpload(
    'object_multipart',
    array(
        'upload_id' => $upload_id,
        'etag' => '"4072783b8efb99a9e5817067d68f61c6"',
        'object_parts' => $object_parts
    )
);

// Print the response statusCode.
echo $res->statusCode;
```

Abort Multipart Upload

``` php
$res = $bucket->abortMultipartUpload(
    'object_multipart',
    array(
    'upload_id' => $upload_id,
    )
);

// Print the response statusCode.
echo $res->statusCode;
```