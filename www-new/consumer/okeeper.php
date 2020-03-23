<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 3;
$subDepth1 = "스마트 가전";
$subDepth2 = "O-Keeper";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>O-Keeper </h1>
	<div class="con02"> 
		<h2>제품구성</h2>
		<div>
        
		  <ul class="f_l pa_b_30 pa_t_20">
				<li><img alt="product" src="/images/sub/con03_21.png"/></li>
			</ul> 
			<ul class="f_l w_300 pa_t_20 pa_b_30">
				<li class="f_l br_01 pa_l_10">GPS 위치추적 센서</li>
				<ol>
					<li class="f_l br_03">Model: HT-S-LPWA01b</li>
					<li class="f_l br_03">9축 센서로 충격 및 이동감지</li>
					<li class="f_l br_03">GPS로 실시간 위치추적 가능</li>
				</ol>

			</ul> 
		</div>

	  
	</div>
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>