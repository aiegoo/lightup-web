<?php
// Include Logic (db, etc)
@include "../_logic.php";

// 변수 받기
$table = trim($_GET['table']);
$page = (int)($_GET['page']);
$bbsArticleDataIndex = (int)($_GET['bbsArticleDataIndex']);
$searchType = trim($_GET['searchType']);
$searchKeyword = trim($_GET['searchKeyword']);

if(empty($table) || $bbsArticleDataIndex <= 0)
{
	$message->Alert("테이블명/글 번호가 누락되었습니다.", !$printHtmlBase, "history.back(1);");
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
	$message->Alert("테이블이 존재하지 않습니다: {$table}", !$printHtmlBase, "history.back(1);");
	exit;
}

// 글 정보 가져오기.
$query = "SELECT * FROM BBSArticleData WHERE bbsArticleDataIndex='{$bbsArticleDataIndex}'";
$articleItem = $database->Fetch($database->Query($query));
if(empty($articleItem['bbsArticleDataIndex']))
{
	$message->Alert("삭제되었거나 존재하지 않는 글입니다: {$bbsArticleDataIndex}", !$printHtmlBase, "history.back(1);");
	exit;
}

// 글 제목
$subject = str_replace("<", "&lt;", $articleItem['subject']);

// 작성자명
$articleUserInfo = $security->getUserInfo($articleItem['memberIndex']);

if($articleUserInfo['memberIndex'] > 0)
{
	$articleItem['name'] = "<b>" .$articleUserInfo['name'] ."</b>";
}

// 글 내용
/*$content = str_replace("<", "&lt;", $articleItem['content']);
$content = str_replace("\n", "<br />\n", $content);*/
$content = $articleItem['content'];

// Content Setting
// Content setting은 DB에서 가져와야 합니다.
$subIndex = $tableConfig['mainmenuIndex'];
$subDepth1 = $tableConfig['submenuName'];
$subDepth2 = $tableConfig['name'];

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1><?php echo $tableConfig['name']?> &gt; 글 내용</h1>

	<div class="list">
		<table class="tbl_list">
			<colgroup>
				<col style="width:10%;"/>
				<col/>
				<col style="width:10%;"/>
				<col style="width:15%;"/>
				<col style="width:10%;"/>
				<col style="width:10%;"/>
			</colgroup>
			<thead>
				<tr>
					<td colspan="4" scope="col" class="tit_left"><?php echo $subject?></td>
					<th scope="col" class="tit_center">작성자</th>
					<td scope="col" class="tit_left"><?php echo $articleUserInfo['nickname']?></td>
				</tr>
				<tr>
					<th scope="col" class="tit_center2">첨부파일</th>
					<td scope="col" class="tit_left"><?php /* <img class="pa_t_6 pa_r_10" alt="첨부파일 아이콘"  src="/images/sub/icon_file.png"/>첨부파일.hwp */ ?></td>
					<th scope="col" class="tit_center">등록일</th>
					<td scope="col" class="tit_left"><?php echo substr($articleItem['regDate'], 0, 10)?></td>
					<th scope="col" class="tit_center">조회수</th>
					<td scope="col" class="tit_left"><?php echo number_format($articleItem['readCount']+1)?></td>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td colspan="6"  class="view" style="text-align:left;"><?php echo $content?></td></tr>
				  </tbody>
		</table>
		<div class="btn_view">
		<a href="list.php?table=<?php echo $table?>&amp;searchType=<?php echo $searchType?>&amp;searchKeyword=<?php echo $searchKeyword?>&amp;page=<?php echo $page?>"><img src="/images/sub/btn_list.png"/></a>
		</div>
		<div class="tbl_btm">
		<dt class="th_prev1">이전글</dt>
		<dd class="td_view1">게시물이 없습니다.</dd>
		<dt class="th_prev2">다음글</dt>
		<dd class="td_view2">게시물이 없습니다.</dd>
		</div>
	</div>

<?php
// 관리자 전용 게시판엔 관리자만 글을 수정하거나 삭제 가능.
if(substr($tableConfig['status'], 2, 1) == "w" || (substr($tableConfig['status'], 2, 1) != "w" && $userInfo['type'] == "SYSADMIN"))
{
?>

	<br clear="all" />
	<center>	
		<button type="button" onclick="document.location.href='modify.php?table=<?php echo $table?>&amp;bbsArticleDataIndex=<?php echo $bbsArticleDataIndex?>&amp;page=<?php echo $page?>&amp;searchType=<?php echo $searchType?>&amp;searchKeyword=<?php echo $searchKeyword?>'">글 수정</button>
		<button type="button" onclick="document.location.href='delete.php?table=<?php echo $table?>&amp;bbsArticleDataIndex=<?php echo $bbsArticleDataIndex?>&amp;page=<?php echo $page?>&amp;searchType=<?php echo $searchType?>&amp;searchKeyword=<?php echo $searchKeyword?>'">글 삭제</button>
		<br />
		<br />
	</center>

<?php
}
?>

</div>

</container>

<?php

// 조회수 증가.
$query = "UPDATE `BBSArticleData` SET readCount=readCount+1 WHERE bbsArticleDataIndex='{$bbsArticleDataIndex}'";
$database->Query($query);

// Include Layout (bottom)
@include "../layout/tail.php";
?>