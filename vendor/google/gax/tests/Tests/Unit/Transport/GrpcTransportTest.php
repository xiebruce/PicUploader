<?php
/*
 * Copyright 2018 Google LLC
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *     * Neither the name of Google Inc. nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Google\ApiCore\Tests\Unit\Transport;

use Google\ApiCore\Call;
use Google\ApiCore\Tests\Unit\TestTrait;
use Google\ApiCore\Testing\MockGrpcTransport;
use Google\ApiCore\Transport\GrpcTransport;
use Google\ApiCore\Transport\Grpc\UnaryInterceptorInterface;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBType;
use Google\Rpc\Code;
use Google\Rpc\Status;
use Grpc\ClientStreamingCall;
use PHPUnit\Framework\TestCase;
use stdClass;

class GrpcTransportTest extends TestCase
{
    use TestTrait;

    public function setUp()
    {
        $this->requiresGrpcExtension();
    }

    private function callCredentialsCallback(MockGrpcTransport $transport)
    {
        $mockCall = new Call('method', '', null);
        $options = [];

        $response = $transport->startUnaryCall($mockCall, $options)->wait();
        $args = $transport->getRequestArguments();
        return call_user_func($args['options']['call_credentials_callback']);
    }

    public function testClientStreamingSuccessObject()
    {
        $response = new Status();
        $response->setCode(Code::OK);
        $response->setMessage('response');

        $status = new stdClass;
        $status->code = Code::OK;

        $clientStreamingCall = $this->getMockBuilder(ClientStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $clientStreamingCall->method('write');
        $clientStreamingCall->method('wait')
            ->will($this->returnValue([$response, $status]));

        $transport = new MockGrpcTransport($clientStreamingCall);

        $stream = $transport->startClientStreamingCall(
            new Call('method', null),
            []
        );

        /* @var $stream \Google\ApiCore\ClientStream */
        $actualResponse = $stream->writeAllAndReadResponse([]);
        $this->assertEquals($response, $actualResponse);
    }

    /**
     * @expectedException \Google\ApiCore\ApiException
     * @expectedExceptionMessage client streaming failure
     */
    public function testClientStreamingFailure()
    {
        $request = "request";
        $response = "response";

        $status = new stdClass;
        $status->code = Code::INTERNAL;
        $status->details = 'client streaming failure';

        $clientStreamingCall = $this->getMockBuilder(ClientStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $clientStreamingCall->method('wait')
            ->will($this->returnValue([$response, $status]));

        $transport = new MockGrpcTransport($clientStreamingCall);

        $stream = $transport->startClientStreamingCall(
            new Call('takeAction', null),
            []
        );

        $stream->readResponse();
    }

    public function testServerStreamingSuccess()
    {
        $response = "response";

        $status = new stdClass;
        $status->code = Code::OK;

        $message = $this->createMockRequest();

        $serverStreamingCall = $this->getMockBuilder(\Grpc\ServerStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $serverStreamingCall->method('responses')
            ->will($this->returnValue([$response]));
        $serverStreamingCall->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($serverStreamingCall);

        /* @var $stream \Google\ApiCore\ServerStream */
        $stream = $transport->startServerStreamingCall(
            new Call('takeAction', null, $message),
            []
        );

        $actualResponsesArray = [];
        foreach ($stream->readAll() as $actualResponse) {
            $actualResponsesArray[] = $actualResponse;
        }

        $this->assertEquals([$response], $actualResponsesArray);
    }

    public function testServerStreamingSuccessResources()
    {
        $responses = ['resource1', 'resource2'];
        $repeatedField = new RepeatedField(GPBType::STRING);
        foreach ($responses as $response) {
            $repeatedField[] = $response;
        }

        $response = $this->createMockResponse('nextPageToken', $repeatedField);

        $status = new stdClass;
        $status->code = Code::OK;

        $message = $this->createMockRequest();

        $call = $this->getMockBuilder(\Grpc\ServerStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $call->method('responses')
            ->will($this->returnValue([$response]));
        $call->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($call);

        $call = new Call('takeAction',
            null,
            $message,
            ['resourcesGetMethod' => 'getResourcesList']
        );
        $options = [];

        /* @var $stream \Google\ApiCore\ServerStream */
        $stream = $transport->startServerStreamingCall(
            $call,
            $options
        );

        $actualResponsesArray = [];
        foreach ($stream->readAll() as $actualResponse) {
            $actualResponsesArray[] = $actualResponse;
        }
        $this->assertEquals($responses, $actualResponsesArray);
    }

    /**
     * @expectedException \Google\ApiCore\ApiException
     * @expectedExceptionMessage server streaming failure
     */
    public function testServerStreamingFailure()
    {
        $status = new stdClass;
        $status->code = Code::INTERNAL;
        $status->details = 'server streaming failure';

        $message = $this->createMockRequest();

        $serverStreamingCall = $this->getMockBuilder(\Grpc\ServerStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $serverStreamingCall->method('responses')
            ->will($this->returnValue(['response1']));
        $serverStreamingCall->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($serverStreamingCall);

        /* @var $stream \Google\ApiCore\ServerStream */
        $stream = $transport->startServerStreamingCall(
            new Call('takeAction', null, $message),
            []
        );

        foreach ($stream->readAll() as $actualResponse) {
            // for loop to trigger generator and API exception
        }
    }

    public function testBidiStreamingSuccessSimple()
    {
        $response = "response";
        $status = new stdClass;
        $status->code = Code::OK;

        $bidiStreamingCall = $this->getMockBuilder(\Grpc\BidiStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $bidiStreamingCall->method('read')
            ->will($this->onConsecutiveCalls($response, null));
        $bidiStreamingCall->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($bidiStreamingCall);

        /* @var $stream \Google\ApiCore\BidiStream */
        $stream = $transport->startBidiStreamingCall(
            new Call('takeAction', null),
            []
        );

        $actualResponsesArray = [];
        foreach ($stream->closeWriteAndReadAll() as $actualResponse) {
            $actualResponsesArray[] = $actualResponse;
        }
        $this->assertEquals([$response], $actualResponsesArray);
    }

    public function testBidiStreamingSuccessObject()
    {
        $response = new Status();
        $response->setCode(Code::OK);
        $response->setMessage('response');

        $status = new stdClass;
        $status->code = Code::OK;

        $bidiStreamingCall = $this->getMockBuilder(\Grpc\BidiStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $bidiStreamingCall->method('read')
            ->will($this->onConsecutiveCalls($response, null));
        $bidiStreamingCall->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($bidiStreamingCall);

        /* @var $stream \Google\ApiCore\BidiStream */
        $stream = $transport->startBidiStreamingCall(
            new Call('takeAction', null),
            []
        );

        $actualResponsesArray = [];
        foreach ($stream->closeWriteAndReadAll() as $actualResponse) {
            $actualResponsesArray[] = $actualResponse;
        }
        $this->assertEquals([$response], $actualResponsesArray);
    }

    public function testBidiStreamingSuccessResources()
    {
        $responses = ['resource1', 'resource2'];
        $repeatedField = new RepeatedField(GPBType::STRING);
        foreach ($responses as $response) {
            $repeatedField[] = $response;
        }

        $response = $this->createMockResponse('nextPageToken', $repeatedField);

        $status = new stdClass;
        $status->code = Code::OK;

        $bidiStreamingCall = $this->getMockBuilder(\Grpc\BidiStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $bidiStreamingCall->method('read')
            ->will($this->onConsecutiveCalls($response, null));
        $bidiStreamingCall->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($bidiStreamingCall);

        $call = new Call(
            'takeAction',
            null,
            null,
            ['resourcesGetMethod' => 'getResourcesList']
        );

        /* @var $stream \Google\ApiCore\BidiStream */
        $stream = $transport->startBidiStreamingCall(
            $call,
            []
        );

        $actualResponsesArray = [];
        foreach ($stream->closeWriteAndReadAll() as $actualResponse) {
            $actualResponsesArray[] = $actualResponse;
        }
        $this->assertEquals($responses, $actualResponsesArray);
    }

    /**
     * @expectedException \Google\ApiCore\ApiException
     * @expectedExceptionMessage bidi failure
     */
    public function testBidiStreamingFailure()
    {
        $response = "response";
        $status = new stdClass;
        $status->code = Code::INTERNAL;
        $status->details = 'bidi failure';

        $bidiStreamingCall = $this->getMockBuilder(\Grpc\BidiStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $bidiStreamingCall->method('read')
            ->will($this->onConsecutiveCalls($response, null));
        $bidiStreamingCall->method('getStatus')
            ->will($this->returnValue($status));

        $transport = new MockGrpcTransport($bidiStreamingCall);

        /* @var $stream \Google\ApiCore\BidiStream */
        $stream = $transport->startBidiStreamingCall(
            new Call('takeAction', null),
            []
        );

        foreach ($stream->closeWriteAndReadAll() as $actualResponse) {
            // for loop to trigger generator and API exception
        }
    }

    /**
     * @dataProvider buildDataGrpc
     */
    public function testBuildGrpc($apiEndpoint, $config, $expectedTransportProvider)
    {
        $expectedTransport = $expectedTransportProvider();
        $actualTransport = GrpcTransport::build($apiEndpoint, $config);
        $this->assertEquals($expectedTransport, $actualTransport);
    }

    public function buildDataGrpc()
    {
        $uri = "address.com";
        $apiEndpoint = "$uri:447";
        $apiEndpointDefaultPort = "$uri:443";
        return [
            [
                $apiEndpoint,
                [],
                function () use ($apiEndpoint) {
                    return new GrpcTransport(
                        $apiEndpoint,
                        [
                            'credentials' => null,
                        ],
                        null
                    );
                },
            ],
            [
                $uri,
                [],
                function () use ($apiEndpointDefaultPort) {
                    return new GrpcTransport(
                        $apiEndpointDefaultPort,
                        [
                            'credentials' => null,
                        ],
                        null
                    );
                },
            ],
        ];
    }

    /**
     * @dataProvider buildInvalidData
     * @expectedException \Google\ApiCore\ValidationException
     */
    public function testBuildInvalid($apiEndpoint, $args)
    {
        GrpcTransport::build($apiEndpoint, $args);
    }

    public function buildInvalidData()
    {
        return [
            [
                "addresswithtoo:many:segments",
                [],
            ],
            [
                'example.com',
                [
                    'channel' => 'not a channel',
                ]
            ]
        ];
    }

    public function testExperimentalInterceptors()
    {
        $mockUnaryCall = $this->getMockBuilder(\Grpc\UnaryCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $mockChannel = $this->getMockBuilder(\Grpc\Channel::class)
            ->disableOriginalConstructor()
            ->getMock();
        $mockCallInvoker = $this->getMockBuilder(\Grpc\CallInvoker::class)
            ->disableOriginalConstructor()
            ->getMock();
        $mockCallInvoker->method('createChannelFactory')
            ->will($this->returnValue($mockChannel));
        $mockCallInvoker->method('UnaryCall')
            ->will($this->returnCallback(function ($channel, $method, $deserialize, $options) use ($mockUnaryCall) {
                $this->assertEquals('/method1', $method);
                $expectedOptions = [
                    'test-interceptor-insert' => 'inserted-value',
                    'call-option' => 'call-option-value',
                ];
                $this->assertEquals($expectedOptions, $options);
                return $mockUnaryCall;
            }));

        $transport = GrpcTransport::build('example.com', [
            'stubOpts' => ['grpc_call_invoker' => $mockCallInvoker],
            'interceptors' => [ new TestUnaryInterceptor() ]
        ]);
        $call = new Call('method1', '', null);
        $promise = $transport->startUnaryCall($call, [
            'transportOptions' => [
                'grpcOptions' => [
                    'call-option' => 'call-option-value'
                ]
            ]
        ]);
    }
}

class TestUnaryInterceptor implements UnaryInterceptorInterface
{
    public function interceptUnaryUnary(
        $method,
        $argument,
        $deserialize,
        array $metadata,
        array $options,
        callable $continuation
    ) {
        $options['test-interceptor-insert'] = 'inserted-value';
        return $continuation($method, $argument, $deserialize, $metadata, $options);
    }
}

