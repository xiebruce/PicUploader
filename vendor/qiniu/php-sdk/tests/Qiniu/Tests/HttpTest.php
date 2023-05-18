<?php
namespace Qiniu\Tests;

use PHPUnit\Framework\TestCase;

use Qiniu\Http\Client;
use Qiniu\Http\RequestOptions;

class HttpTest extends TestCase
{
    public function testGet()
    {
        $response = Client::get('qiniu.com');
        $this->assertEquals(200, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNull($response->error);
    }

    public function testGetQiniu()
    {
        $response = Client::get('upload.qiniu.com');
        $this->assertEquals(405, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNotNull($response->xReqId());
        $this->assertNotNull($response->xLog());
        $this->assertNotNull($response->error);
    }

    public function testGetTimeout()
    {
        $reqOpt = new RequestOptions();
        $reqOpt->timeout = 1;
        $response = Client::get('localhost:9000/timeout.php', array(), $reqOpt);
        $this->assertEquals(-1, $response->statusCode);
    }

    public function testGetRedirect()
    {
        $response = Client::get('localhost:9000/redirect.php');
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals('application/json;charset=UTF-8', $response->normalizedHeaders['Content-Type']);
        $respData = $response->json();
        $this->assertEquals('ok', $respData['msg']);
    }

    public function testDelete()
    {
        $response = Client::delete('uc.qbox.me/bucketTagging', array());
        $this->assertEquals(401, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNotNull($response->error);
    }

    public function testDeleteQiniu()
    {
        $response = Client::delete('uc.qbox.me/bucketTagging', array());
        $this->assertEquals(401, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNotNull($response->xReqId());
        $this->assertNotNull($response->xLog());
        $this->assertNotNull($response->error);
    }

    public function testDeleteTimeout()
    {
        $reqOpt = new RequestOptions();
        $reqOpt->timeout = 1;
        $response = Client::delete('localhost:9000/timeout.php', array(), $reqOpt);
        $this->assertEquals(-1, $response->statusCode);
    }


    public function testPost()
    {
        $response = Client::post('qiniu.com', null);
        $this->assertEquals(200, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNull($response->error);
    }

    public function testPostQiniu()
    {
        $response = Client::post('upload.qiniu.com', null);
        $this->assertEquals(400, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNotNull($response->xReqId());
        $this->assertNotNull($response->xLog());
        $this->assertNotNull($response->error);
    }

    public function testPostTimeout()
    {
        $reqOpt = new RequestOptions();
        $reqOpt->timeout = 1;
        $response = Client::post('localhost:9000/timeout.php', null, array(), $reqOpt);
        $this->assertEquals(-1, $response->statusCode);
    }

    public function testPut()
    {
        $response = Client::PUT('uc.qbox.me/bucketTagging', null);
        $this->assertEquals(401, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNotNull($response->error);
    }

    public function testPutQiniu()
    {
        $response = Client::put('uc.qbox.me/bucketTagging', null);
        $this->assertEquals(401, $response->statusCode);
        $this->assertNotNull($response->body);
        $this->assertNotNull($response->xReqId());
        $this->assertNotNull($response->xLog());
        $this->assertNotNull($response->error);
    }


    public function testPutTimeout()
    {
        $reqOpt = new RequestOptions();
        $reqOpt->timeout = 1;
        $response = Client::put('localhost:9000/timeout.php', null, array(), $reqOpt);
        $this->assertEquals(-1, $response->statusCode);
    }
}
