<?php
@include "_logic.php";

// -- 어플리케이션 시작 --

// 변수 전달받기
$id = $_POST['id'];
$password = $_POST['password'];
$url = $_POST['url'];

// ID/PASSWORD 변수가 입력되지 않았을 경우
if(empty($id) || empty($password))
{
	$message->Alert("아이디와 비밀번호를 입력하여 주십시오.", !$printHtmlBase, "history.back(1);");
	exit;
}

// URL 변수가 입력되지 않았을 경우
if(empty($url))
{
	$url = "/";
}

// 사용자 존재여부 확인
unset($userInfo);
$query = "SELECT * FROM Member WHERE id='{$id}'";
$fetch = $database->Query($query);
$userInfo = $database->FetchArray($fetch);

$database->FreeResult($fetch);

if(empty($userInfo['id']))
{
	$message->Alert("존재하지 않는 사용자 아이디입니다.", !$printHtmlBase, "history.back(1);");
	exit;
}

if($userInfo['status'] == "--------")
{
	$message->Alert("해당 계정은 잠긴 계정입니다.", !$printHtmlBase, "history.back(1);");
	exit;
}

// 비밀번호 비교
$password = md5($password);

if($password != $userInfo['password'])
{
	$message->Alert("비밀번호가 일치하지 않습니다.", !$printHtmlBase, "history.back(1);");
	exit;
}

// 세션 저장
$sessionKey = $security->GenerateSessionKey($password);

@setcookie("s3_sessionidx", $userInfo['memberIndex'], null, "/");
@setcookie("s3_sessionkey", $sessionKey, null, "/");

// 로그인 작업 완료
header("Location: {$url}");

// -- 어플리케이션 종료 --
?>