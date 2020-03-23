<?php
// Include Logic (db, etc)
@include "_logic.php";

// Content Setting
$subIndex = 1;
$subDepth1 = "회사소개";
$subDepth2 = "Login";

// Include Layout (top)
@include "layout/head.php";

// -- 어플리케이션 시작 --

// 변수 전달받기
$url = $_GET['url'];

if(empty($url))
{
	$url = "/";
}
?>

<container id="container">
<div class="contents">
	<h1>Lightup.co.kr 관리자 로그인</h1>

	<center>
	<div style="width:570px; height:340px; align:center; padding-top:10px;">

	<!-- 로그인폼 -->
	<form name="frmLoginForm" method="POST" action="login_post.php" class="comment" style="margin:20px 0 20px 0;">
	<input type="hidden" name="url" value="<?php echo $url?>" />
	<p style="line-height:1.4;">사용자명: <input type="text" name="id" value="" /></p>
	<p style="line-height:1.4;">비밀번호: <input type="password" name="password" value="" /></p>
	<br />
	<p style="line-height:1.4;">
		<button>로그인</button>&nbsp;
		<button type="button" onclick="document.location.href='/'">취소/되돌아가기</button>
	</p>
	</form>
	<!-- 로그인폼 끝 -->
	</div>
</div>
</container>

<?php
// -- 어플리케이션 종료 --
@include "layout/tail.php";
?>