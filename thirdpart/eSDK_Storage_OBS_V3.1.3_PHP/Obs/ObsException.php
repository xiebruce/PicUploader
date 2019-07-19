<?php

/**
 * Copyright 2019 Huawei Technologies Co.,Ltd.
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use
 * this file except in compliance with the License.  You may obtain a copy of the
 * License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed
 * under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations under the License.
 *
 */

namespace Obs;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Obs\Log\ObsLog;

class ObsException extends \RuntimeException
{
	const CLIENT = 'client';
	
	const SERVER = 'server';
	
    /**
     * @var Response
     */
    protected $response;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var string Request ID
     */
    protected $requestId;

    /**
     * @var string Exception type (client / server)
     */
    protected $exceptionType;
        
    /**
     * @var string Exception code
     */
    protected $exceptionCode;
    
    /**
     * @var string Exception message
     */
    protected $exceptionMessage;
    
    /**
     * @var string Host ID
     */
    protected $hostId;
	
    public function __construct ($message = null, $code = null, $previous = null) 
    {
    	parent::__construct($message, $code, $previous);
    }
    
    /**
     * Set the exception code
     *
     * @param string $code Exception code
     */
    public function setExceptionCode($code)
    {
        $this->exceptionCode = $code;
    }
    /**
     * Get the exception code
     *
     * @return string|null
     */
    public function getExceptionCode()
    {
        return $this->exceptionCode;
    }
    
    public function setExceptionMessage($message)
    {
    	$this->exceptionMessage = $message;
    }
    
    public function getExceptionMessage()
    {
    	return $this->exceptionMessage ? $this->exceptionMessage : $this->message;
    }

    /**
     * Set the exception type
     *
     * @param string $type Exception type
     */
    public function setExceptionType($type)
    {
        $this->exceptionType = $type;
    }

    /**
     * Get the exception type (one of client or server)
     *
     * @return string|null
     */
    public function getExceptionType()
    {
        return $this->exceptionType;
    }

    /**
     * Set the request ID
     *
     * @param string $id Request ID
     */
    public function setRequestId($id)
    {
        $this->requestId = $id;
    }

    /**
     * Get the Request ID
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Set the associated response
     *
     * @param Response $response Response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Get the associated response object
     *
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set the associated request
     *
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get the associated request object
     *
     * @return RequestInterface|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Get the status code of the response
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->response ? $this->response->getStatusCode() : -1;
    }
    
    public function setHostId($hostId){
    	$this->hostId = $hostId;
    }
    
    public function getHostId(){
    	return $this->hostId;
    }

    /**
     * Cast to a string
     *
     * @return string
     */
    public function __toString()
    {
        $message = get_class($this) . ': '
            . 'OBS Error Code: ' . $this->getExceptionCode() . ', '
            . 'Status Code: ' . $this->getStatusCode() . ', '
            . 'OBS Error Type: ' . $this->getExceptionType() . ', '
            . 'OBS Error Message: ' . ($this->getExceptionMessage() ? $this->getExceptionMessage():$this->getMessage());

        // Add the User-Agent if available
        if ($this->request) {
            $message .= ', ' . 'User-Agent: ' . $this->request->getHeaderLine('User-Agent');
        }
        $message .= "\n";
        
        ObsLog::commonLog(INFO, "http request:status:%d, %s",$this->getStatusCode(),"code:".$this->getExceptionCode().", message:".$this->getMessage());
        return $message;
    }
    
}
