<?php
// Hack to override the time returned from the S3SignatureV4
// @codingStandardsIgnoreStart
namespace Qiniu {
    function time()
    {
        return isset($_SERVER['override_qiniu_auth_time'])
            ? 1234567890
            : \time();
    }
}

namespace Qiniu\Tests {
    use Qiniu\Auth;
    use Qiniu\Http\Header;

    // @codingStandardsIgnoreEnd

    class AuthTest extends \PHPUnit_Framework_TestCase
    {

        public function testSign()
        {
            global $dummyAuth;
            $token = $dummyAuth->sign('test');
            $this->assertEquals('abcdefghklmnopq:mSNBTR7uS2crJsyFr2Amwv1LaYg=', $token);
        }

        public function testSignWithData()
        {
            global $dummyAuth;
            $token = $dummyAuth->signWithData('test');
            $this->assertEquals('abcdefghklmnopq:-jP8eEV9v48MkYiBGs81aDxl60E=:dGVzdA==', $token);
        }

        public function testSignRequest()
        {
            global $dummyAuth;
            $token = $dummyAuth->signRequest('http://www.qiniu.com?go=1', 'test', '');
            $this->assertEquals('abcdefghklmnopq:cFyRVoWrE3IugPIMP5YJFTO-O-Y=', $token);
            $ctype = 'application/x-www-form-urlencoded';
            $token = $dummyAuth->signRequest('http://www.qiniu.com?go=1', 'test', $ctype);
            $this->assertEquals($token, 'abcdefghklmnopq:svWRNcacOE-YMsc70nuIYdaa1e4=');
        }

        public function testPrivateDownloadUrl()
        {
            global $dummyAuth;
            $_SERVER['override_qiniu_auth_time'] = true;
            $url = $dummyAuth->privateDownloadUrl('http://www.qiniu.com?go=1');
            $expect = 'http://www.qiniu.com?go=1&e=1234571490&token=abcdefghklmnopq:8vzBeLZ9W3E4kbBLFLW0Xe0u7v4=';
            $this->assertEquals($expect, $url);
            unset($_SERVER['override_qiniu_auth_time']);
        }

        public function testUploadToken()
        {
            global $dummyAuth;
            $_SERVER['override_qiniu_auth_time'] = true;
            $token = $dummyAuth->uploadToken('1', '2', 3600, array('endUser' => 'y'));
            // @codingStandardsIgnoreStart
            $exp = 'abcdefghklmnopq:yyeexeUkPOROoTGvwBjJ0F0VLEo=:eyJlbmRVc2VyIjoieSIsInNjb3BlIjoiMToyIiwiZGVhZGxpbmUiOjEyMzQ1NzE0OTB9';
            // @codingStandardsIgnoreEnd
            $this->assertEquals($exp, $token);
            unset($_SERVER['override_qiniu_auth_time']);
        }

        public function testVerifyCallback()
        {
        }

        public function testSignQiniuAuthorization()
        {
            $auth = new Auth("ak", "sk");

            // ---
            $url = "";
            $method = "";
            $headers = new Header(array(
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
                "Content-Type" => array("application/x-www-form-urlencoded"),
            ));
            $body = "{\"name\": \"test\"}";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:0i1vKClRDWFyNkcTFzwcE7PzX74=", $sign);

            // ---
            $url = "";
            $method = "";
            $headers = new Header(array(
                "Content-Type" => array("application/json"),
            ));
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:K1DI0goT05yhGizDFE5FiPJxAj4=", $sign);

            // ---
            $url = "";
            $method = "GET";
            $headers = new Header(array(
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
                "Content-Type" => array("application/x-www-form-urlencoded"),
            ));
            $body = "{\"name\": \"test\"}";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:0i1vKClRDWFyNkcTFzwcE7PzX74=", $sign);

            // ---
            $url = "";
            $method = "POST";
            $headers = new Header(array(
                "Content-Type" => array("application/json"),
                "X-Qiniu" => array("b"),
            ));
            $body = "{\"name\": \"test\"}";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:0ujEjW_vLRZxebsveBgqa3JyQ-w=", $sign);

            // ---
            $url = "http://upload.qiniup.com";
            $method = "";
            $headers = new Header(array(
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
                "Content-Type" => array("application/x-www-form-urlencoded"),
            ));
            $body = "{\"name\": \"test\"}";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:GShw5NitGmd5TLoo38nDkGUofRw=", $sign);

            // ---
            $url = "http://upload.qiniup.com";
            $method = "";
            $headers = new Header(array(
                "Content-Type" => array("application/json"),
                "X-Qiniu-Bbb" => array("BBB", "AAA"),
                "X-Qiniu-Aaa" => array("DDD", "CCC"),
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
            ));
            $body = "{\"name\": \"test\"}";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:DhNA1UCaBqSHCsQjMOLRfVn63GQ=", $sign);

            // ---
            $url = "http://upload.qiniup.com";
            $method = "";
            $headers = new Header(array(
                "Content-Type" => array("application/x-www-form-urlencoded"),
                "X-Qiniu-Bbb" => array("BBB", "AAA"),
                "X-Qiniu-Aaa" => array("DDD", "CCC"),
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
            ));
            $body = "name=test&language=go";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:KUAhrYh32P9bv0COD8ugZjDCmII=", $sign);

            // ---
            $url = "http://upload.qiniup.com";
            $method = "";
            $headers = new Header(array(
                "Content-Type" => array("application/x-www"),
                "Content-Type" => array("application/x-www-form-urlencoded"),
                "X-Qiniu-Bbb" => array("BBB", "AAA"),
                "X-Qiniu-Aaa" => array("DDD", "CCC"),
            ));
            $body = "name=test&language=go";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:KUAhrYh32P9bv0COD8ugZjDCmII=", $sign);

            // ---
            $url = "http://upload.qiniup.com/mkfile/sdf.jpg";
            $method = "";
            $headers = new Header(array(
                "Content-Type" => array("application/x-www-form-urlencoded"),
                "X-Qiniu-Bbb" => array("BBB", "AAA"),
                "X-Qiniu-Aaa" => array("DDD", "CCC"),
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
            ));
            $body = "name=test&language=go";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:fkRck5_LeyfwdkyyLk-hyNwGKac=", $sign);

            $url = "http://upload.qiniup.com/mkfile/sdf.jpg?s=er3&df";
            $method = "";
            $headers = new Header(array(
                "Content-Type" => array("application/x-www-form-urlencoded"),
                "X-Qiniu-Bbb" => array("BBB", "AAA"),
                "X-Qiniu-Aaa" => array("DDD", "CCC"),
                "X-Qiniu-" => array("a"),
                "X-Qiniu" => array("b"),
            ));
            $body = "name=test&language=go";
            list($sign, $err) = $auth->signQiniuAuthorization($url, $method, $body, $headers);
            $this->assertNull($err);
            $this->assertEquals("ak:PUFPWsEUIpk_dzUvvxTTmwhp3p4=", $sign);
        }

        public function testDisableQiniuTimestampSignatureDefault()
        {
            $auth = new Auth("ak", "sk");
            $authedHeaders = $auth->authorizationV2("https://example.com", "GET");
            $this->assertArrayHasKey("X-Qiniu-Date", $authedHeaders);
        }

        public function testDisableQiniuTimestampSignature()
        {
            $auth = new Auth("ak", "sk", array(
                "disableQiniuTimestampSignature" => true
            ));
            $authedHeaders = $auth->authorizationV2("https://example.com", "GET");
            $this->assertArrayNotHasKey("X-Qiniu-Date", $authedHeaders);
        }
        public function testDisableQiniuTimestampSignatureEnv()
        {
            putenv("DISABLE_QINIU_TIMESTAMP_SIGNATURE=true");
            $auth = new Auth("ak", "sk");
            $authedHeaders = $auth->authorizationV2("https://example.com", "GET");
            $this->assertArrayNotHasKey("X-Qiniu-Date", $authedHeaders);
            putenv('DISABLE_QINIU_TIMESTAMP_SIGNATURE');
        }
        public function testDisableQiniuTimestampSignatureEnvBeIgnored()
        {
            putenv("DISABLE_QINIU_TIMESTAMP_SIGNATURE=true");
            $auth = new Auth("ak", "sk", array(
                "disableQiniuTimestampSignature" => false
            ));
            $authedHeaders = $auth->authorizationV2("https://example.com", "GET");
            $this->assertArrayHasKey("X-Qiniu-Date", $authedHeaders);
            putenv('DISABLE_QINIU_TIMESTAMP_SIGNATURE');
        }
    }
}
