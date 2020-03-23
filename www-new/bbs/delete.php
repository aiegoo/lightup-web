<?php
// Include Logic (db, etc)
@include "../_logic.php";

// -- 어플리케이션 시작 --

// 변수 받기
$table = trim($_GET['table']);
$bbsArticleDataIndex = (int)($_GET['bbsArticleDataIndex']);
$page = (int)($_GET['page']);
$searchtype = trim($_GET['searchType']);
$searchKeyword = trim($_GET['searchKeyword']);

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

// 자기가 쓴 글이 아닐 경우
if($userInfo['type'] != "SYSADMIN" && $articleItem['memberIndex'] > 0 &&
   $userInfo['memberIndex'] != $articleItem['memberIndex'])
{
	$message->Alert("자신이 쓴 글만 삭제할 수 있습니다.", false, "history.back(1);");
	exit;
}

// Content Setting
// Content setting은 DB에서 가져와야 합니다.
$subIndex = $tableConfig['mainmenuIndex'];
$subDepth1 = $tableConfig['submenuName'];
$subDepth2 = $tableConfig['name'];

// Include Layout (top)
@include "../layout/head.php";

// 글 삭제 화면.
?>

<container id="container">
<div class="contents">
	<h1><?php echo $tableConfig['name']?> &gt; 글 삭제</h1>
	
	<script type="text/javascript">
	function ArticleDelete()
	{
		var frmObj = document.frmArticleDeleteForm;
		// ...
		frmObj.submit();
	}
	</script>

	<form name="frmArticleDeleteForm" method="POST" action="delete_post.php">
	<input type="hidden" name="table" value="<?php echo $table?>" />
	<input type="hidden" name="bbsArticleDataIndex" value="<?php echo $bbsArticleDataIndex?>" />
	<input type="hidden" name="page" value="<?php echo $page?>" />
	<input type="hidden" name="searchType" value="<?php echo $searchType?>" />
	<input type="hidden" name="searchKeyword" value="<?php echo $searchKeyword?>" />

	<center>

	<br />

	<table width="50%" class="listTable" cellpadding="0" cellspacing="1">
	<tr>
	<td class="listtablebody">
		<center>
		<br />
		<strong>게시물을 삭제하시겠습니까?<br />
		삭제하시려면 아래 "삭제" 버튼을 눌러주세요.</strong>
		</center>
		<br />
	</td>
	</tr>
	</table>

	<table width="100%" cellpadding="0" cellspacing="0" style="margin-top:5px;">
	<tr>
	<td style="text-align:center;">
		<button type="button" onclick="ArticleDelete()">삭제하기</button> &nbsp; 
		<button type="button" onclick="history.back(1);">취소하고 되돌아가기</button>
	</td>
	</table>

	</center>

	<br />
	<br />
	<br />

</div>

</container>

<?php
// -- 어플리케이션 종료 --

@include "../layout/tail.php";
?>