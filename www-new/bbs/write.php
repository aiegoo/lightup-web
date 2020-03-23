<?php
// Include Logic (db, etc)
@include "../_logic.php";

// 변수 받기
$table = trim($_GET['table']);
$page = (int)($_GET['page']);
$searchType = trim($_GET['searchType']);
$searchKeyword = trim($_GET['searchKeyword']);

if(empty($table))
{
	$message->Alert("테이블명이 누락되었습니다.", true, "history.back(1);");
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
$tableConfig = $database->Fetch($database->Query($query));
if(empty($tableConfig['bbsTableConfigIndex']))
{
	$message->Alert("테이블이 존재하지 않습니다: {$table}", true, "history.back(1);");
	exit;
}

// Content Setting
// Content setting은 DB에서 가져와야 합니다.
$subIndex = $tableConfig['mainmenuIndex'];
$subDepth1 = $tableConfig['submenuName'];
$subDepth2 = $tableConfig['name'];

// Include Layout (top)
@include "../layout/head.php";

// 글쓰기 화면
?>

<container id="container">
<div class="contents">
	<h1><?php echo $tableConfig['name']?> &gt; 글쓰기</h1>
	<div class="list">

	<script type="text/javascript" src="/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="/tiny_mce/loader.js"></script>

	<script type="text/javascript">
	function ArticleWrite()
	{
		var frmObj = document.frmArticleWriteForm;
		// ...
		frmObj.submit();
	}
	</script>

	<form name="frmArticleWriteForm" method="POST" action="write_post.php" enctype="multipart/form-data">
	<input type="hidden" name="table" value="<?php echo $table?>" />
	<table width="99%" class="listTable" cellpadding="0" cellspacing="1">
	<tr>
	<th class="listtableheader" height="30" style="width:100px;">작성자</th>
	<td class="listtablebody">
		<input type="text" class="flatinputtext" style="width:130px;" value="<?php echo $userInfo['nickname']?>" disabled />
	</td>
	</tr>
	<tr>
	<th class="listtableheader" height="30" style="width:100px;">글 제목</th>
	<td class="listtablebody">
		<input type="text" name="subject" id="subject" class="flatinputtext" style="width:600px;" value="" />
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

		<textarea id="content1" name="content" style="width:100%; height:300px;"></textarea>

	</tr>
	</table>

	<br />

	<table width="99%" cellpadding="0" cellspacing="0" style="margin-top:5px;">
	<tr>
	<td style="text-align:center;">
		<button type="button" onclick="ArticleWrite()">글 저장하기</button> &nbsp; 
		<button type="button" onclick="history.back(1)">취소하고 되돌아가기</button>
	</td>
	</table>

	<br />
	<br />

</div>

<?php
// -- 어플리케이션 종료 --

@include "layout/layout_bottom_sub.php";

@include "layout/layout_bottom.php";

@include "layout/layout_footer.php";
?>