<?php
// Include Logic (db, etc)
@include "../_logic.php";

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

// 비회원 글쓰기 변수 체크
if($login <= 0)
{
	$message->Alert("로그인 세션이 만료되었습니다. 다시 로그인후 작성해 주세요.", false, "history.back(1);");
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
	$message->Alert("삭제되었거나 존재하지 않는 게시물입니다: {$bbsArticleDataIndex}", true, "history.back(1);");
	exit;
}

// 자기가 쓴 글이 아닐 경우
if($userInfo['type'] != "SYSADMIN" && $articleItem['memberIndex'] > 0 &&
   $userInfo['memberIndex'] != $articleItem['memberIndex'])
{
	$message->Alert("자신이 쓴 글만 수정할 수 있습니다.", false, "history.back(1);");
	exit;
}

// Content Setting
// Content setting은 DB에서 가져와야 합니다.
$subIndex = $tableConfig['mainmenuIndex'];
$subDepth1 = $tableConfig['submenuName'];
$subDepth2 = $tableConfig['name'];

// Include Layout (top)
@include "../layout/head.php";

// 글 수정 화면.
?>

<container id="container">
<div class="contents">
	<h1><?php echo $tableConfig['name']?> &gt; 글 수정</h1>

	<script type="text/javascript" src="/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="/tiny_mce/loader.js"></script>

	<script type="text/javascript">
	function ArticleModify()
	{
		var frmObj = document.frmArticleModifyForm;
		// ...
		frmObj.submit();
	}
	</script>

	<form name="frmArticleModifyForm" method="POST" action="modify_post.php" enctype="multipart/form-data">
	<input type="hidden" name="table" value="<?php echo $table?>" />
	<input type="hidden" name="bbsArticleDataIndex" value="<?php echo $bbsArticleDataIndex?>" />
	<input type="hidden" name="page" value="<?php echo $page?>" />
	<input type="hidden" name="searchType" value="<?php echo $searchType?>" />
	<input type="hidden" name="searchKeyword" value="<?php echo $searchKeyword?>" />

	<table width="100%" class="listTable" cellpadding="0" cellspacing="1" style="font-size:13px;">
	<tr>
	<th class="listtableheader" height="30" style="width:100px;">작성자</th>
	<td class="listtablebody">

<?php
if($articleItem['memberIndex'] > 0)
{
	// 작성자 개인정보 가져오기
	$articleUserInfo = $security->getUserInfo($articleItem['memberIndex']);
?>
	    <input type="text" class="flatinputtext" style="width:130px;" value="<?php echo $articleUserInfo['nickname']?>" disabled />
<?php
}
else
{
?>
		<input type="text" name="name" class="flatinputtext" style="width:130px;" value="<?php echo $articleItem['name']?>" /> * 게시판에서 보여질 이름
<?php
}
?>

	</td>
	</tr>

<?php
if($articleItem['memberIndex'] <= 0)
{
?>

	<tr>
	<th class="listtableheader" height="30" style="width:100px;">비밀번호</th>
	<td class="listtablebody">
		<input type="password" name="password" class="flatinputtext" style="width:100px;" /> * 글 작성시 입력한 비밀번호
	</td>
	</tr>

<?php
}
?>

	<tr>
	<th class="listtableheader" height="30" style="width:100px;">글 제목</th>
	<td class="listtablebody">
		<input type="text" name="subject" class="flatinputtext" style="width:600px;" value="<?php echo $articleItem['subject']?>" />
	</td>
	</tr>
	<tr>
	<th class="listtableheader" height="30" style="width:100px;">내 &nbsp; 용</th>
	<td class="listtablebody" style="line-height:1.2;">
		<script type="text/javascript">
		$(document).ready(function()
		{
			InitTinyMCE("content1", false);
		});
		</script>

		<textarea id="content1" name="content" style="width:100%; height:300px;"><?php echo $articleItem['content']?></textarea>
	</tr>
	</tr>
	</table>

	<br />

	<table width="100%" cellpadding="0" cellspacing="0" style="margin-top:5px;">
	<tr>
	<td style="text-align:center;">
		<button type="button" onclick="ArticleModify()">글 저장하기</button> &nbsp; 
		<button type="button" onclick="history.back(1)">취소하고 되돌아가기</button>
	</td>
	</table>

	<br />
</div>
</container>

<?php
// -- 어플리케이션 종료 --

@include "layout/layout_bottom_sub.php";

@include "layout/layout_bottom.php";

@include "layout/layout_footer.php";
?>