<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 4;
$subDepth1 = "스마트 센서";
$subDepth2 = "SPT Analyzer";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>SPT Analyzer</h1>
	<div class="con02"> 
		<h2>제품구성</h2>
		<div>
		<img class="pa_b_20" alt="product" src="/images/sub/con04_11.png"/>
		</div>
	   
	</div>
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>