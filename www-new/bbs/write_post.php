<?php
// Include Logic (db, etc)
@include "../_logic.php";

// 변수 받기
$table = trim($_POST['table']);
$subject = $_POST['subject'];
$content = $_POST['content'];

// 변수 체크
if(empty($table) || empty($subject) || empty($content))
{
	$message->Alert("누락된 항목이 있습니다. 필수 입력 항목을 모두 채워주세요.", false, "history.back(1);");
	exit;
}

// 비회원 글쓰기 변수 체크
if($login <= 0)
{
	$message->Alert("로그인 세션이 만료되었습니다. 다시 로그인후 작성해 주세요.", false, "history.back(1);");
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

// 관리자 전용 게시판엔 관리자만 글을 쓸 수 있음.
if(substr($tableConfig['status'], 2, 1) != "w" && $userInfo['type'] != "SYSADMIN")
{
	exit;
}

// 현재 날짜/시간, 아이피주소
$date = date("Y-m-d H:i:s");
$ipAddr = $_SERVER['REMOTE_ADDR'];

// 작성 쿼리.
$query = "INSERT INTO BBSArticleData (bbsTableConfigIndex, memberIndex, name, subject, content, readCount, ipAddress, regDate) ";
$query .= "VALUES('{$tableConfig['bbsTableConfigIndex']}', '{$login}', '{$userInfo['nickname']}', '{$subject}', '{$content}', 0, '{$ipAddr}', '{$date}');";

// 저장.
if($database->query($query))
{
	// 작성 게시물 Index 되불러옴
	$query = "SELECT * FROM `BBSArticleData` WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND regDate='{$date}' AND memberIndex='{$login}' AND subject='{$subject}' AND ipAddress='{$ipAddr}' ORDER BY bbsArticleDataIndex DESC LIMIT 1";
	$articleInfo = $database->Fetch($database->Query($query));

	// 작성 완료.
	$message->Alert("글을 작성하였습니다.", false, "document.location.href = 'view.php?table={$table}&bbsArticleDataIndex={$articleInfo['bbsArticleDataIndex']}&page=1';");
}
else
{
	$message->Alert("작성 도중 오류가 발생하였습니다.\\n항목을 다시 확인하시고, 문제가 해결되지 않으면 관리자에게 문의하세요", false, "history.back(1);");
}

// -- 어플리케이션 종료 --
?>