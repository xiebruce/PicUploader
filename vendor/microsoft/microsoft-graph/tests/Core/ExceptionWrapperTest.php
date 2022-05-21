<?php
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Microsoft\Graph\Core\ExceptionWrapper;
use PHPUnit\Framework\TestCase;

class ExceptionWrapperTest extends TestCase
{
    protected $responseBodies;
    protected $autoBadResponseExceptions;
    protected $manualBadResponseExceptions;

    public function setUp(): void
    {
        $this->responseBodies = array(
            'short' => json_encode(array('body' => 'content')), // not truncated by Guzzle
            'long' => json_encode(array('body' => base64_encode(random_bytes(120)) . '.')), // truncated by Guzzle
        );

        $this->autoBadResponseExceptions = array();
        $this->manualBadResponseExceptions = array();
        foreach ($this->responseBodies as $name => $responseBody) {
            $autoBadResponseException = GuzzleHttp\Exception\RequestException::create(new Request("GET", "/endpoint"), new Response(400, [], $responseBody));
            assert($autoBadResponseException instanceof BadResponseException);
            $this->autoBadResponseExceptions[$name] = $autoBadResponseException;

            $manualBadResponseException = new BadResponseException("Error: API returned 400", new Request("GET", "/endpoint"), new Response(400, [], $responseBody));
            $this->manualBadResponseExceptions[$name] = $manualBadResponseException;
        }
    }

    public function testWrapBadResponseExceptionReturnsInstanceOfSameClass()
    {
        $name = 'short';

        $ex = $this->autoBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertInstanceOf(get_class($ex), $wrappedException);

        $ex = $this->manualBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertInstanceOf(get_class($ex), $wrappedException);

        $name = 'long';

        $ex = $this->autoBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertInstanceOf(get_class($ex), $wrappedException);

        $ex = $this->manualBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertInstanceOf(get_class($ex), $wrappedException);
    }

    public function testWrapAutoBadResponseExceptionHasResponseBody()
    {
        $name = 'short';
        $responseBody = $this->responseBodies[$name];
        $ex = $this->autoBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertStringContainsString($responseBody, $wrappedException->getMessage());

        $name = 'long';
        $responseBody = $this->responseBodies[$name];
        $ex = $this->autoBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertStringContainsString($responseBody, $wrappedException->getMessage());
    }

    public function testWrapManualBadResponseExceptionHasNotResponseBody()
    {
        $name = 'short';
        $responseBody = $this->responseBodies[$name];
        $ex = $this->manualBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertStringNotContainsString($responseBody, $wrappedException->getMessage());

        $name = 'long';
        $responseBody = $this->responseBodies[$name];
        $ex = $this->manualBadResponseExceptions[$name];
        $wrappedException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertStringNotContainsString($responseBody, $wrappedException->getMessage());
    }

    public function testWrapBadResponseExceptionWithInvalidInput()
    {
        $this->expectException(TypeError::class);
        ExceptionWrapper::wrapGuzzleBadResponseException(null);
    }
}
