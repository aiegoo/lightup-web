<?php
@include "../_logic.php";

// -- 어플리케이션 시작 --

// 변수 받기
$table = trim($_POST['table']);
$bbsArticleDataIndex = (int)($_POST['bbsArticleDataIndex']);
$page = (int)($_POST['page']);
$searchtype = trim($_POST['searchType']);
$searchKeyword = trim($_POST['searchKeyword']);

if(empty($table) || $bbsArticleDataIndex <= 0)
{
	$message->Alert("테이블명/게시물 번호가 누락되었습니다.", false, "history.back(1);");
	exit;
}

if($page <= 0)
{
	$page = 1;
}

// 테이블 존재 여부 확인.
$query = "SELECT * FROM BBSTableConfig WHERE id='{$table}'";
$tableConfig = $database->fetch($database->query($query));
if(empty($tableConfig['bbsTableConfigIndex']))
{
	$message->alert("테이블이 존재하지 않습니다: {$table}", false, "history.back(1);");
	exit;
}

// 게시물 정보 가져오기
$query = "SELECT * FROM BBSArticleData WHERE bbsArticleDataIndex='{$bbsArticleDataIndex}'";
$articleItem = $database->fetch($database->query($query));
if(empty($articleItem['bbsArticleDataIndex']))
{
	$message->Alert("이미 삭제되었거나 존재하지 않는 게시물입니다: {$bbsArticleDataIndex}", true, "history.back(1);");
	exit;
}

// 비회원 삭제 변수 체크
if($login <= 0)
{
	if(empty($password))
	{
		$message->Alert("비밀번호를 입력해 주세요.", false, "history.back(1);");
		exit;
	}

	else if(md5($password) != $articleItem['password'])
	{
		$message->Alert("비밀번호가 맞지 않습니다.", false, "history.back(1);");
		exit;
	}
}
else
{
	if($userInfo['type'] != "SYSADMIN" && $articleItem['memberIndex'] > 0 &&
	   $userInfo['memberIndex'] != $articleItem['memberIndex'])
	{
		$message->Alert("자신이 작성한 게시물만 삭제 가능합니다.", true, "history.back(1);");
		exit;
	}

}

$query = "DELETE FROM BBSArticleData WHERE bbsArticleDataIndex='{$bbsArticleDataIndex}'";
if($database->query($query))
{
	$message->Alert("글을 삭제하였습니다.", false, "document.location.href = 'list.php?table={$table}&page={$page}&searchType={$searchType}&searchKeyword={$searchKeyword}';");
}
else
{
	$message->Alert("삭제 도중 오류가 발생하였습니다.\\n항목을 다시 확인하시고, 문제가 해결되지 않으면 관리자에게 문의하세요",
	       		false, "history.back(1);");
}

// -- 어플리케이션 종료 --
?>