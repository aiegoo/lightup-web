<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 4;
$subDepth1 = "서비스";
$subDepth2 = "문화재 모니터링 시스템";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>문화재 모니터링 시스템</h1>
	<div class="con02"> 
		<h2>시스템 구성도</h2>
		<div class="">
			<ul class="f_l w100">

				<li><img class="pa_t_30 pa_b_30" alt="product" src="/images/sub/con04_02.png"/></li>
			</ul>   
		 </div>
		<h2>기울기 및 균열, 진동/지진, 온/습도 센서를 바탕으로 문화재의 변위와 위험상황을 실시간 확인</h2>
		<div class="">
		  <ul class="f_l  pa_r_30">
			  	<li><img class="pa_t_30 pa_b_30" src="/images/sub/con03_101.png"/></li>
				<li class="f_l br_01">첨단 정밀 측정센서</li>
				<ol>
					<li class="f_l ">(배터리 기반, 초소형/초경량)</li>
				</ol>

			</ul> 
			<ul class="f_l  pa_r_30">
			  	<li><img class="pa_t_30 pa_b_30" src="/images/sub/con03_102.png"/></li>
				<li class="f_l br_01">문화재 대상 설치 및 운영지원</li>
				<ol>
					<li class="f_l ">(LoRaWAN 통신망)</li>
				</ol>


			</ul> 
			<ul class="f_l">
			  	<li><img class="pa_t_30 pa_b_30" src="/images/sub/con03_103.png"/></li>
				<li class="f_l br_01">모니터링 시스템을 통한 GIS 지도연동 및 분석 통계기능</li>
			</ul> 
		</div>
		
	</div>
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>