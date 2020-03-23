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
?>

<container id="container">
<div class="contents">
	<h1><?php echo $tableConfig['name']?></h1>
	<div class="list">

	<form name="frmSearchForm" method="GET" action="list.php">
	<input type="hidden" name="table" value="<?php echo $table?>" />
		<div class="search">
	  <select name="searchType" title="제목" class="select_con">
		<option value="subject" selected="selected">제목</option>
		<option value="body">내용</option>
		<option value="writer">작성자</option>
		<option value="all">전체</option>
	  </select>
	  <input class="input_txt" type="text" name="searchKeyword" value="<?php echo $searchKeyword?>">
	  <a href="#" onclick="document.frmSearchForm.submit()"><img class="pa_l_10" alt="검색" src="/images/sub/btn_search.png"/></a>
		</div>
	</form>

		<table class="tbl_list">
			<caption><?php echo $tableConfig['name']?> 목록</caption>

<!-- board type definition 시작 -->
<?php
if($tableConfig['type'] == "Notice")
{
?>
			<colgroup>
				<col style="width:10%;"/>
				<col />
				<col style="width:15%;"/>
			</colgroup>
			<thead>
				<tr>
					<th scope="col">번호</th>
					<th scope="col">제목</th>
					<th scope="col">등록일</th>
				</tr>
			</thead>
<?php
}
else
{
?>
			<colgroup>
				<col style="width:7%;"/>
				<col />
				<col style="width:10%;"/>
				<col style="width:7%;"/>
				<col style="width:15%;"/>
				<col style="width:7%;"/>
			</colgroup>
			<thead>
				<tr>
					<th scope="col">번호</th>
					<th scope="col">제목</th>
					<th scope="col">첨부파일</th>
					<th scope="col">작성자</th>
					<th scope="col">등록일</th>
					<th scope="col">조회</th>
				</tr>
			</thead>
<?php
}
?>
<!-- board type definition 끝 -->

<?php
// Article Per Page (APP) 결정
$articlePerPage = 20;

// 게시물 리스트 루프
if($searchType == "all")
{
	$query = "SELECT count(*) FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND (`subject` LIKE '%{$searchKeyword}%' OR `content` LIKE '%{$searchKeyword}%')";
	$totalArticle = $database->Fetch($database->Query($query));
	$totalArticle = (int)($totalArticle[0]);

	$currentPageFirst = ($page-1) * $articlePerPage;

	$query = "SELECT * FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND (`subject` LIKE '%{$searchKeyword}%' OR `content` LIKE '%{$searchKeyword}%') ORDER BY bbsArticleDataIndex DESC LIMIT {$currentPageFirst},{$articlePerPage}";
}
else if($searchType == "subject")
{
	$query = "SELECT count(*) FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND subject LIKE '%{$searchKeyword}%'";
	$totalArticle = $database->Fetch($database->Query($query));
	$totalArticle = (int)($totalArticle[0]);

	$currentPageFirst = ($page-1) * $articlePerPage;
	
	$query = "SELECT * FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND (subject LIKE '%{$searchKeyword}%') ORDER BY bbsArticleDataIndex DESC LIMIT {$currentPageFirst},{$articlePerPage}";
}
else if($searchType == "content")
{
	$query = "SELECT count(*) FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND `content` LIKE '%{$searchKeyword}%'";
	$totalArticle = $database->Fetch($database->Query($query));
	$totalArticle = (int)($totalArticle[0]);

	$currentPageFirst = ($page-1) * $articlePerPage;
	
	$query = "SELECT * FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' AND (`content` LIKE '%{$searchKeyword}%') ORDER BY bbsArticleDataIndex DESC LIMIT {$currentPageFirst},{$articlePerPage}";
}
else
{
	$query = "SELECT count(*) FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}'";
	$totalArticle = $database->Fetch($database->Query($query));
	$totalArticle = (int)($totalArticle[0]);

	$currentPageFirst = ($page-1) * $articlePerPage;
	
	$query = "SELECT * FROM BBSArticleData WHERE bbsTableConfigIndex='{$tableConfig['bbsTableConfigIndex']}' ORDER BY bbsArticleDataIndex DESC LIMIT {$currentPageFirst},{$articlePerPage}";
}

$fetch = $database->Query($query);

$i = 0;
while($articleItem[$i] = $database->Fetch($fetch))
{
	$i++;
}

// Virtual IDX
$vidx = $totalArticle-($articlePerPage*($page-1));

if($vidx <= 0)
{
	$vidx = $totalArticle;
}

for($i=0; $i<sizeof($articleItem)-1; $i++)
{
	// 글 제목
	$subject = str_replace("<", "&lt;", $articleItem[$i]['subject']);
	$subject = $strings->cut($subject, 80);

	// 작성자
	$writer = $security->GetUserInfo($articleItem[$i]['memberIndex']);

	// 글 내용
	$content = str_replace("<", "&lt;", $articleItem[$i]['content']);
	$content = str_replace("\n", "<br />\n", $content);

	// 댓글 갯수
	$query = "SELECT count(*) FROM BBSCommentData WHERE bbsArticleDataIndex='{$articleItem[$i]['bbsArticleDataIndex']}'";
	$replyCount = $database->Fetch($database->Query($query));
	$replyCount = (int)($replyCount[0]);

	// 게시판 종류별로 칼럼 다름.
	if($tableConfig['type'] == "Notice")
	{
?>

	<tbody>
		<td><?php echo $vidx?></td>
		<th class="tit_left"><a href="view.php?table=<?php echo $table?>&bbsArticleDataIndex=<?php echo $articleItem[$i]['bbsArticleDataIndex']?>&page=<?php echo $page?>&searchType=<?php echo $searchType?>&searchKeyword=<?php echo $searchKeyword?>" style="color:#000; text-decoration:none;"><?php echo $subject?><!--span style="font-size:11px;"> [<?php echo $replyCount?>]</span></a--></th>
		<td><?php echo substr($articleItem[$i]['regDate'], 0, 10)?></td>
	</tbody>

<?php
	}
	else
	{
?>

	<tbody>
		<td><?php echo $vidx?></td>
		<th class="tit_left"><a href="view.php?table=<?php echo $table?>&bbsArticleDataIndex=<?php echo $articleItem[$i]['bbsArticleDataIndex']?>&page=<?php echo $page?>&searchType=<?php echo $searchType?>&searchKeyword=<?php echo $searchKeyword?>" style="color:#000; text-decoration:none;"><?php echo $subject?><!--span style="font-size:11px;"> [<?php echo $replyCount?>]</span></a--></th>
		<td><!--img class="pa_t_6" alt="첨부파일 아이콘"  src="images/sub/icon_file.png"/--></td>
		<td><?php echo $writer['nickname']?></td>
		<td><?php echo substr($articleItem[$i]['regDate'], 0, 10)?></td>
		<td><?php echo number_format($articleItem[$i]['readCount'])?></td>
	</tbody>

<?php
	}
	// 게시판 종류별로 다르게 출력 끝.

	// Virtual IDX decrease
	$vidx--;
}
?>

	<!-- 게시판 테이블 끝 -->

	</table>
	<div class="wrap_pager">
		<a href="list.php?table=<?php echo $table?>&page=1&searchType=<?php echo $searchType?>&searchKeyword=<?php echo $searchKeyword?>"><img alt="처음페이지" src="/images/sub/btn_first.png"/></a>
<?php
if($totalArticle <= $articlePerPage)
{
	$totalPage = 1;
}
else
{
	$totalPage = number_format(ceil($totalArticle/$articlePerPage));
}

echo $paging->generateTag($page, $totalPage, "list.php?table={$table}&searchType={$searchType}&searchKeyword={$searchKeyword}");
?>

		<a href="#"><img alt="마지막페이지" src="/images/sub/btn_back.png"/></a>
	</div>

<?php
// 관리자 전용 게시판엔 관리자만 글을 쓸 수 있음.
if(substr($tableConfig['status'], 2, 1) == "w" || (substr($tableConfig['status'], 2, 1) != "w" && $userInfo['type'] == "SYSADMIN"))
{
?>

	<br clear="all" />
	<center>
	    <button type="button" onclick="document.location.href='write.php?table=<?php echo $table?>'">글쓰기</button>
	    <button type="button" onclick="document.location.href='/logout.php'">로그아웃</button>
	</center>

<?php
}
?>

  </div>

</div>

</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>