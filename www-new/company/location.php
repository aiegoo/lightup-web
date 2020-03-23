<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 1;
$subDepth1 = "회사소개";
$subDepth2 = "오시는 길";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>오시는 길</h1>
	
	<a href="http://dmaps.kr/5jwdp" target="_blank"><img class="image02" alt="map" src="/images/sub/con01_map.png" /></a>
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>