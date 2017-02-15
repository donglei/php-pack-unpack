<?php

/*
	ubyte 		compress;	// 	包体加密标志 3,1
	ubyte 		crypt;		//	包体压缩标志 4,1
	ubyte 		serviceId;	//	服务编号，用于消息转发使用 5,1
	uint 		msgId;		// 	消息ID 6,4
	ulong 		userId;		//	用户ID 10, 8
	int 		checkSum;	//  登录的验证信息 18, 4
	ushort		erroCode;	//	错误码 22, 2
	ubyte		pathlen;		//	请求标识的长度 24, 1
	uint 		bodylen;		//	包体长度 25, 4

*/
class Message
{
	public $serviceId = 0, $compress = 0, $crypt = 0;
	public $msgId = 0, $userId = 0, $errorCode = 0;
	public $pathlen = 0;
	public $bodylen = 0, $checkSum = 0;

	private $buff;
	public $path = '';
	public $data;

	private function buildHeader()
	{
		$this->pathlen = strlen($this->path);

		$this->bodylen = strlen($this->data);

		$this->buff = pack('c*', 0xF0, 0xFF,
				 $this->compress
				// $this->crypt, 
			);

		$this->buff .= pack('S', rand(0,65535));//请求编号
		$this->buff .= pack('c',$this->serviceId);
		$this->buff .= pack('L', $this->msgId);
		$this->buff .= pack('Q', $this->userId);
		$this->buff .= pack('L', $this->checkSum);
		$this->buff .= pack('S', $this->errorCode);
		$this->buff .= pack('c', $this->pathlen);
		$this->buff .= pack('L', $this->bodylen);
		$this->buff .= pack('c*', 0xFF,0x0F,0xFF);
	}

	public function getStream()
	{
		$this->buildHeader();
		$this->buff .= $this->path;
		$this->buff .= $this->data;
		return $this->buff;
	}

	public function decodeMessage($data)
	{
		$this->compress = unpack("c" , $data[2])[1];
		//$this->crypt = unpack("c" , $data[4])[1];
		$this->errorCode =  unpack("S", substr($data, 3,2))[1];
		$this->serviceId = unpack("c" , $data[5])[1];
		$this->msgId =  unpack("L", substr($data, 6,4))[1];//9
		$this->userId =  unpack("Q", substr($data, 10,8))[1];//
		$this->checkSum =  unpack("L", substr($data, 18,4))[1];
		$this->errorCode =  unpack("S", substr($data, 22,2))[1];
		$this->pathlen =  unpack("c", substr($data, 24,1))[1];
		$this->bodylen =  unpack("L", substr($data, 25,4))[1];
		if ($this->pathlen != 0) {
			$this->path = substr($data, 32, $this->pathlen);
		}
		if ($this->bodylen != 0) {
			$this->data = substr($data, 32+$this->pathlen, $this->bodylen);
		}
		return $this;
	}

}

function sendToServer($package)
{
	$socket = socket_create (AF_INET , SOCK_STREAM ,SOL_TCP);
	/* set socket receive timeout to 1 second */
	 socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array("sec" => 15, "usec" => 0));

	/* connect to socket */
	$v = socket_connect($socket, '127.0.0.1', 2048);
	socket_send($socket, $package, strlen($package), 0);
	$str = @socket_read($socket, 2048) ;
	socket_close($socket);
	return $str;
}
