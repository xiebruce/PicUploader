<?php
namespace NOS\Tests;

use NOS\Core\NosException;
use NOS\Http\RequestCore;
use NOS\Http\ResponseCore;
use NOS\NosClient;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestNosClientBase.php';

class NosClientSignatureTest extends TestNosClientBase
{
    function testGetSignedUrlForGettingObject()
    {
        $object = "a.file";
        $this->nosClient->putObject($this->bucket, $object, file_get_contents(__FILE__));
        $timeout = 3600;
        try {
            $signedUrl = $this->nosClient->signUrl($this->bucket, $object, $timeout);
        } catch (NosException $e) {
            $this->assertFalse(true);
        }

        $request = new RequestCore($signedUrl);
        $request->set_method('GET');
        $request->add_header('Content-Type', '');
        $request->send_request();
        $res = new ResponseCore($request->get_response_header(), $request->get_response_body(), $request->get_response_code());
        $this->assertEquals(file_get_contents(__FILE__), $res->body);
    }
}

