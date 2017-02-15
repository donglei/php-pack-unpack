<?php
function create_player_role()
{
	$req = new Proto\Playerinfo\CreatePlayerRequest();
	$req->setName("dl". time());
	$req->setGender(1);
	$req->setProfession(rand(8,11));
	$req->setIndex(rand(1,5));

	$output = new Google\Protobuf\Internal\OutputStream(32);

	$req->serializeToStream($output);
	$msg = new Message();
	$msg->path = '/create/player/role';
	$msg->data = $output->getData();
	$msg->checkSum = 11;
	$msg->compress = 1;
	$msg->crypt = 111;
	$msg->userId = rand();
	$msg->serviceId = 24;
	$msg->msgId = 8888;
	$msg->errorCode = 255;

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
		$res = new Proto\Playerinfo\CreatePlayerResponse();
		$res->decode($rmsg->data);
		$baseinfo = $res->getPlayer()->getBaseinfo();
		$baseattr = $res->getPlayer()->getBaseAttribute();
		var_dump($baseinfo->getPlayerId()
			,$baseinfo->getName(),$baseattr->getGender());
	}
}