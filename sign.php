<?php

/**
 * 给链接生成自动签名
 */
define('IN_HHS', true);
define('HHS_ADMIN', true);
require(dirname(__FILE__) . '/includes/init.php');
$url = trim($_REQUEST['url']);
if(!$url){
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."";
}
$timestamp = time();
$data['appid'] = $appid;
$data['timestamp'] = $timestamp;
$data['noncestr'] = $timestamp;
$class_weixin = new class_weixin($appid,$appsecret);
$signature = $class_weixin->getSignature($timestamp, $url);
$data['signature'] = $signature;
die(json_encode($data));