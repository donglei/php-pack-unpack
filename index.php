<?php
define('BASE_DIR', dirname(__FILE__) . '/');
require BASE_DIR .'vendor/autoload.php';
include BASE_DIR . './function.php';
include BASE_DIR . './message.php';
foreach (getGeneratedFiles(BASE_DIR . './pb-php/') as $filename)
{
    if (!is_dir($filename)) {
        include_once $filename;
    }
}
foreach (getGeneratedFiles(BASE_DIR . './testcase/') as $filename)
{
    if (!is_dir($filename)) {
        include_once $filename;
    }
}

//
//
$path = count($argv) > 1 ? $argv[1] : '';
switch ($path) {
	case '/create/player/role':
		create_player_role();
		break;
	case '/account/login':
		account_login();
		break;
	
	default:
		echo 'no support path';
		break;
}