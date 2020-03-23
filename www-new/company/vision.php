<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 1;
$subDepth1 = "회사소개";
$subDepth2 = "비전";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
	<div class="contents">
		<h1>비전</h1>
		<div class="con01"> 
		<p>하이테크는 편의의 기능이 아닌, 사람을 살리는 <span style="color:#ef6800">가치있는 기술</span>을 지향합니다.</p>
		</div>
		
		<img class="image01" alt="VISION" src="/images/sub/con01_02.png"/>
		
	</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>