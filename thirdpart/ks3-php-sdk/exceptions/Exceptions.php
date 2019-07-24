<?php
class Ks3ClientException extends RuntimeException{
	
}
class Ks3ServiceException extends Ks3ClientException{
	private $requestId;
	private $errorCode;
	private $errorMessage;
	private $resource;
	private $statusCode;
	public function __set($property_name, $value){
		$this->$property_name=$value;
	}
	public function __get($property_name){
		if(isset($this->$property_name))
		{
			return($this->$property_name);
		}else
		{
			return(NULL);
		}
	}
	public function __toString()
  	{
      		$message = get_class($this) . ': '
      			."(errorCode:".$this->errorCode.";"
      			."errorMessage:".$this->errorMessage.";"
      			."resource:".$this->resource.";"
      			."requestId:".$this->requestId.";"
      			."statusCode:".$this->statusCode.")";
		return $message;
      	}
}
?>