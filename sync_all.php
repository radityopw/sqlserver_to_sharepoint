<?php

require_once 'vendor/autoload.php';

if(count($argv) != 2){
	echo "Usage : php -f sync_all.php <conf>".PHP_EOL;
	exit;
}

$conf = $argv[1];

require_once $conf;

use Thybag\SharePointAPI;
$sp = new SharePointAPI($sharepoint_user, $sharepoint_pass, $sharepoint_wsdl, 'SPONLINE');

var_dump($sp->query('data1')->where('Title', '=', '5202100002')->limit(1)->get());