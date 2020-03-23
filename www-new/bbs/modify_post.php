<?php
// Include Logic (db, etc)
@include "../_logic.php";

// 변수 받기
$bbsArticleDataIndex = (int)($_POST['bbsArticleDataIndex']);
$table = trim($_POST['table']);
$subject = $_POST['subject'];
$content = $_POST['content'];

// 변수 체크
if($bbsArticleDataIndex <= 0 || empty($table) || empty($subject) || empty($content))
{
	$message->Alert("테이블명이 누락되었습니다.", false, "history.back(1);");
	exit;
}

// 테이블 존재 여부 확인.
$query = "SELECT * FROM BBSTableConfig WHERE id='{$table}'";
$tableConfig = $database->fetch($database->query($query));
if(empty($tableConfig['bbsTableConfigIndex']))
{
	$message->Alert("테이블이 존재하지 않습니다: {$table}", true, "history.back(1);");
	exit;
}

// 글 가져오기.
$query = "SELECT * FROM BBSArticleData WHERE bbsArticleDataIndex='{$bbsArticleDataIndex}'";
$articleItem = $database->fetch($database->query($query));
if(empty($articleItem['bbsArticleDataIndex']))
{
	$message->Alert("게시물이 존재하지 않습니다: #{$bbsArticleDataIndex}", true, "history.back(1);");
	exit;
}

// 비회원 글쓰기 변수 체크
if($login <= 0)
{
	$message->Alert("로그인 세션이 만료되었습니다. 다시 로그인후 작성해 주세요.", false, "history.back(1);");
	exit;
}

if($userInfo['type'] != "SYSADMIN" && $articleItem['memberIndex'] > 0 && $userInfo['memberIndex'] != $articleItem['memberIndex'])
{
	$message->Alert("자신이 작성한 게시물만 수정 가능합니다.", true, "history.back(1);");
	exit;
}

// 현재 날짜/시간, 아이피주소
$date = date("Y-m-d H:i:s");
$ipAddr = $_SERVER['REMOTE_ADDR'];

// 수정 쿼리.
$query = "UPDATE BBSArticleData SET subject='{$subject}', name='{$userInfo['nickname']}', content='{$content}', modifyDate=NOW() WHERE bbsArticleDataIndex='{$bbsArticleDataIndex}'";

// 저장.
if($database->query($query))
{
	$message->Alert("글을 수정하였습니다.", false, "document.location.href = 'view.php?table={$table}&bbsArticleDataIndex={$bbsArticleDataIndex}';");
}
else
{
	$message->Alert("수정 도중 오류가 발생하였습니다.\\n항목을 다시 확인하시고, 문제가 해결되지 않으면 관리자에게 문의하세요",
	       		false, "history.back(1);");
}

// -- 어플리케이션 종료 --
?>