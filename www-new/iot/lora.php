<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 2;
$subDepth1 = "안전관리 모니터링 시스템";
$subDepth2 = "안전관리 모니터링 시스템";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>문화재 모니터링 시스템</h1>
	<div class="con02"> 
		<h2>제품 특징</h2>
		<div class="">
			<ul class="f_l w100">

				<li><img  alt="product" src="/images/sub/con04_011.png"/></li>
			</ul>   
			
			<ul class="f_l w100">

				<li class="pa_l_40"><img class=" pa_b_30" alt="" src="/images/sub/con04_07.png"/></li>
			</ul>
		 </div>
		
		
		<h2>제품 구성</h2>
		<div class="">
		  <ul class="f_l w_290 pa_r_15 pa_l_50 pa_b_30">
			  	<li><img class=" pa_b_10" src="/images/sub/con04_012.png"/></li>
				<li class="t_a_c"><strong>균열센서</strong></li>
			</ul>
		  <ul class="f_l w_290 pa_r_15">
			  	<li><img class=" pa_b_10" src="/images/sub/con04_013.png"/></li>
				<li class="t_a_c"><strong>기울기센서</strong></li>
			</ul>
		  <ul class="f_l w_290">
			  	<li><img class=" pa_b_10" src="/images/sub/con04_014.png"/></li>
				<li class="t_a_c"><strong>배터리&통신모듈</strong></li>
			</ul>
		 </div>
		
		<h2>시스템 구성도</h2>
		<div class="">
			<ul class="f_l w100">

				<li><img class=" pa_b_30" alt="product" src="/images/sub/con04_02.png"/></li>
			</ul>   
		 </div>
		
		
		<h2>구축 사례</h2>
		<div class="con02">
			<ul class="f_l w100 pa_b_50">
				<li class="br_01">경기장 시설물 안전관리 모니터링 시스템 구축</li><br clear="all" />
				<li class="f_l br_03">강원도 강릉시 00경기장</li><br clear="all" />
				<li class="f_l br_03 w100">균열/기울기/진동/온습도 모니터링</li>
			</ul>
		
			<ul class="f_l w100 pa_b_50">
				<li class="br_01">노후 건축물 안전관리 모니터링 시스템 구축</li><br clear="all" />
				<li class="f_l br_03">강원도 강릉시 J상가</li><br clear="all" />
				<li class="f_l br_03">균열/기울기/진동/온습도 모니터링</li>
			</ul>
			
			<ul class="f_l w100 pa_b_50">
				<li class="br_01">IoT기반 문화재 안전관리 모니터링 시스템 구축</li><br clear="all" />
				<li class="f_l br_03">강원도 14개 시군 무선 통신망 구축</li><br clear="all" />
				<li class="f_l br_03">44개 문화재 안전관리 모니터링 시스템 구축</li>
				<li class="f_l br_03">변위/화재/도난/환경 모니터링</li>
			</ul>
		
		</div>
		
		
		<h2>문화재 안전관리 모니터링 시스템 UI</h2>
		<div class="">
			<ul class="f_l w100 pa_b_50 pa_l_50">
				<li><img class=" "  src="/images/sub/con03_110.png"/></li>
				<li class="f_l"><strong>강원도 문화재 안전관리 시스템 UI 구축운영 중</strong></li>
			</ul>   
		 </div>
		
		<h2>통합관제센터 구축 및 운영</h2>
		<div class="f_l f_s_14 pa_b_50">
		  <ul class="f_l w_623 pa_r_10 pa_l_50">
			  	<li><img class=" pa_b_10" src="/images/sub/con03_111.png"/></li>
				<li class="f_l"><strong>강원문화재단 산하 강원문화재연구소 (춘천) 내 별실 구축사례</strong></li>
			</ul> 
			<ul class="f_l w_400">
				<li class="f_l br_03">문화재 상시 모니터링 및 위험상황 파악</li>
				<li class="f_l br_03">누적데이터 분석 및 모델링작업</li>
				<li class="f_l br_03">네트워크 상태 및 중계기/센서 동작상태 상시 모니터링</li>
				<li class="f_l br_03">유지보수 진행 (고장 발생 시)</li>
			</ul> 
		</div>
		
		
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>