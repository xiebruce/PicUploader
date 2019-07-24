<?php
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."encryption".DIRECTORY_SEPARATOR."EncryptionUtil.php";
//下载
class AESCBCStreamWriteCallBack{
	private $iv;
	private $cek;
	private $contentLength;
	//数组，分别为上限和下限
	private $expectedRange;
	//经过调整后的range
	private $adjustedRange;
	//当前指针位置
	private $currentIndex;
	private $buffer;//上一次调用streaming_write_callback后，未解码的数据
	private $firstWrite = TRUE;
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
	//最后的数据大小肯定是blocksize的倍数，所以最后buffer中不会有未解密的内容。否则可以认为该文件是错误的
	public function streaming_write_callback($curl_handle,$data,$write_stream){
		$data = $this->buffer.$data;

		$length = strlen($data);
		//不能把上次的没读完的长度算在这次里,应该算在上次
		$written_total = 0-strlen($this->buffer);
		$blocksize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_CBC);
		if($length<$blocksize)
			$this->buffer = $data;
		else{
			//如果期望的范围之后还有数据，则认为数据已经接收完毕。不做任何处理
			if($this->expectedRange["end"] < $this->expectedRange["start"]){
				return $written_total+strlen($data);
			}
			$this->buffer = substr($data,$length - $length%$blocksize);
			$data = substr($data,0,$length - $length%$blocksize);
		
			$ivoffset = 0;
			//range get时，如果不是从刚开始，则应该取加密后数据的前16个字节作为之后解密的iv
			if($this->firstWrite){
				$this->firstWrite = FALSE;
				if(!$this->isBegin()){
					$this->iv = substr($data,0,$blocksize);
					$data = substr($data,$blocksize);
					$ivoffset = $blocksize;
				}
				//初始化当前位置
				if(isset($this->adjustedRange))
					$this->currentIndex = $ivoffset+$this->adjustedRange["start"];
				else
					$this->currentIndex = $ivoffset;
			}
			$written_total+=$ivoffset;
			if(strlen($data) == 0){
				$decoded = "";
				return $written_total;
			}else{
				$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_CBC,'');
				mcrypt_generic_init($td,$this->cek,$this->iv);
				$decoded = mdecrypt_generic($td,$data);
				mcrypt_generic_deinit($td);
				mcrypt_module_close($td);
			}

			$this->iv = substr($data,strlen($data)-$blocksize);
			//判断是否需要删除最后填充的字符,以及获取填充的字符
			$needRemovePad = FALSE;
			$pad = NULL;

			if($this->currentIndex+strlen($decoded) >=$this->contentLength){
				$needRemovePad = TRUE;
				$pad = ord(substr($decoded,strlen($decoded)-1,1));
				if($pad<=0||$pad>$blocksize)
				{
					//invalid pad
					$needRemovePad = FALSE;
				}
			}

			//将解密后的数据截取到期望的长度
			$startOffset = 0;
			$endOffset = 0;
			if(isset($this->expectedRange)){
				$trueEnd = $expectedEnd = $this->expectedRange["end"];

				if($this->currentIndex+strlen($decoded)>$expectedEnd){
					$preLength = strlen($decoded);
					$decoded = substr($decoded, 0,$expectedEnd-$this->currentIndex+1);
					$endOffset = $preLength-strlen($decoded);
				}else{
					//因为range是开始结束都计算的，range=1-2。currentIndex=1,长度是2，end=currentIndex+2-1
					$trueEnd = $this->currentIndex+strlen($decoded)-1; 
				}
				$expectedStart = $this->expectedRange["start"];
				if($this->currentIndex<$expectedStart){
					$decoded = substr($decoded,$expectedStart - $this->currentIndex);
					$startOffset = $expectedStart - $this->currentIndex;
				}
				//调整下次期望的开始
				$this->expectedRange["start"] = $trueEnd+1;
			}

			$padOffset = 0;
			//再次根据截取的长度判断是否需要删除最后填充的字符
			if($needRemovePad&&$endOffset > $pad){
				$needRemovePad = FALSE;
			}
			$actualWriteCount = 0;
			if($needRemovePad){
				$padOffset = $pad-$endOffset;
				$actualWriteCount = strlen($decoded)-$padOffset;
				if($actualWriteCount <= 0)//负数的情况就是用户期望的range里全是填充的
					$decoded = "";
				else
					$decoded = substr($decoded,0,strlen($decoded)-$padOffset);
			}
			$count = fwrite($write_stream, $decoded);
			if($count == 0)
				$count = $actualWriteCount;
			$count += $padOffset;
			$count += $startOffset;
			$count += $endOffset;
			$this->currentIndex += $count;
			$written_total+=$count;
		}
		//否则curl框架会报错
		$written_total+=strlen($this->buffer);
		return $written_total;
	}
	//是的话则使用初始化IV
	private function isBegin(){
		$beginIndex = 0;
		if(isset($this->adjustedRange["start"]))
			$beginIndex = $this->adjustedRange["start"];
		if($beginIndex == 0)
			return TRUE;
		else 
			return FALSE;
	}
}
//上传
class AESCBCStreamReadCallBack{
	private $iv;
	private $cek;
	private $contentLength;
	private $buffer;
	private $hasread = 0;
	private $mutipartUpload =FALSE;
	private $isLastPart = FALSE;
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
	public function streaming_read_callback($curl_handle,$file_handle,$length,$read_stream,$seek_position){
		// Once we've sent as much as we're supposed to send...
		if ($this->hasread >= $this->contentLength)
		{
			// Send EOF
			return '';
		}
		// If we're at the beginning of an upload and need to seek...
		if ($this->hasread == 0 && $seek_position>0 && $seek_position !== ftell($read_stream))
		{
			if (fseek($read_stream, $seek_position) !== 0)
			{
				throw new RequestCore_Exception('The stream does not support seeking and is either not at the requested position or the position is unknown.');
			}
		}


		$blocksize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_ECB);
		$needRead = min($this->contentLength - $this->hasread,$length);
		$read = fread($read_stream,$needRead);
		$this->hasread += strlen($read);
		$isLast = FALSE;
		if($this->hasread >= $this->contentLength){
			$isLast = TRUE;
		}
		$data = $this->buffer.$read;

		$dataLength = strlen($data);

		if(!$isLast){
			$this->buffer = substr($data,$dataLength-$dataLength%$blocksize);
			$data = substr($data, 0,$dataLength-$dataLength%$blocksize);
		}else{
			//分块上传除最后一块外肯定是blocksize大小的倍数，所以不需要填充。
			if($this->mutipartUpload){
				if($this->isLastPart){
					$this->buffer = NULL;
					$data = EncryptionUtil::PKCS5Padding($data,$blocksize);
				}else{
					//donothing
				}
			}else{
				$this->buffer = NULL;
				$data = EncryptionUtil::PKCS5Padding($data,$blocksize);
			}
		}
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_CBC,'');
		mcrypt_generic_init($td,$this->cek,$this->iv);
		$encrypted = mcrypt_generic($td,$data);
		mcrypt_generic_deinit($td);
		//去除自动填充的16个字节//php的当恰好为16的倍数时竟然不填充？
		//$encrypted = substr($encrypted,0,strlen($encrypted)-$blocksize);
		//取最后一个block作为下一次的iv
		$this->iv = substr($encrypted, strlen($encrypted)-$blocksize);
		return $encrypted;
	}
}
?>