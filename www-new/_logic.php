<?php
// Set Application Root (must be end with slash(/))
$appPath = "/home/lightup/www-new/";

require $appPath ."classes/Message.php";
require $appPath ."classes/Database.php";
require $appPath ."classes/Security.php";
require $appPath ."classes/Strings.php";
require $appPath ."classes/Paging.php";

// extended function: multiple database connection
// get database configurations from file.
require_once $appPath ."config/Database.php";

// must declare $message object first
$message = new Message();
$database = Database::Create($dbConfig['default']);
$security = new Security($database);
$strings = new Strings();
$paging = new Paging();

// Variable that indicates current page location on the host: $url
$url = $_SERVER['REQUEST_URI'];
$urlEncoded = urlencode($url);

// Variable that stores current user index (userIndex): $login
$login = $security->CheckLogin();

// Navigate to the login page if authorization is required && user is not logged in
if($loginRequired == true && empty($login))
{
	header("Location: /login.php?url={$urlEncoded}");
	exit;
}

// Variable that stores current user information in array: $userInfo
if(!empty($login))
{
    $userInfo = $security->GetUserInfo($login);
}

// i18n support
$language = $_COOKIE['language'];
if(empty($language))
{
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang){
		case "ko":
			$language = "ko_KR";
			break;
		case "ko-kr":
			$language = "ko_KR";
			break;
		case "zh":
			$language = "zh_CN";
			break;
		case "zh-cn":
			$language = "zh_CN";
			break;
		case "ja":
			$language = "ja_JP";
			break;        
		default:
			$language = "en_US";
			break;
	}
}

// if no encoding is set, send utf-8 encoding header.
if(!isset($encoding))
{
	header('Content-Type: text/html; charset=utf-8');
}
?>