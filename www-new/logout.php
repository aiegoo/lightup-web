<?php
// 변수 전달받기
$url = $_GET['url'];

if(empty($url))
{
	$url = "/";
}

@setcookie("s3_sessionidx", "", null, "/");
@setcookie("s3_sessionkey", "", null, "/");

header("Location: {$url}");
?>