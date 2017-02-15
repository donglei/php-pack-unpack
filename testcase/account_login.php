<?php

function account_login()
{
	$userId = 1608015571;
	$req = new Proto\Account\AccountLoginRequest();

	$req->setOpenid($userId);
	$req->setSid(24);
	$req->setToken(md5(time()));
	$req->setClientType(1);

	$output = new Google\Protobuf\Internal\OutputStream(64);

	$req->serializeToStream($output);
	$msg = new Message();
	$msg->path = '/account/login';
	$msg->data = $output->getData();
	$msg->compress = 1;
	$msg->crypt = 111;
	$msg->userId = $userId;
	$msg->serviceId = 24;
	$msg->msgId = 8888;

	$package = $msg->getStream();

	$str = sendToServer($package);

	$rmsg = new Message();
	$rmsg->decodeMessage($str);
	//print_r($rmsg);
	if ($rmsg->errorCode != 0) {
		var_dump('error code is :'.$rmsg->errorCode);
		die;
	}

	if ($rmsg->bodylen !=0 ) {
		$res = new Proto\Account\AccountLoginResponse();
		$res->decode($rmsg->data);
		$roles = $res->getRoles();
		
		foreach ($roles as $key => $baseinfo) {
			var_dump('key:' . $key,$baseinfo->getPlayerId(),$baseinfo->getName());
		}
	}
}