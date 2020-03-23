<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 4;
$subDepth1 = "스마트 센서";
$subDepth2 = "IoT Solution";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>IoT Solution - 문화재 모니터링 시스템</h1>
	<div class="con02"> 
	  <h2>제품특징</h2>
		<div>
		<img class="pa_b_20" alt="product" src="/images/sub/con04_01.png"/>
		</div>
		<div class="">
		  <ul class="f_l w40 pa_b_30 pa_t_20">
				<li class="f_l br_01"><span class="color_3">LoRa® 기술을 기반으로 최대</span> 15km의 데이터 전송거리 <span class="color_3">실현</span></li>
				<li class="f_l br_01"><span class="color_3">초전력 설계로</span> 긴 배터리 수명 달성</li>
				<li class="f_l br_01"><span class="color_3">자가망 구축으로</span> 통신료 Free!!</li>
				
			</ul> 
		</div>
		<h2>시스템 구성도</h2>
		<div class="">
			<ul class="f_l w100">
				
				<li><img class="pa_t_30 pa_b_30" alt="product" src="/images/sub/con04_02.png"/></li>
			</ul>   
		 </div>
		
		<h2>제품구성</h2>
		<div class="f_l">
		  <ul class="f_l pa_t_30 pa_b_30">
				<li><img  alt="product" src="/images/sub/con04_03.png"/></li>
			</ul> 
			<ul class="f_l w_480 pa_t_40">
				<li class="f_l br_01 pa_l_10">경사계 / 진동 및 지진 감지계</li>
				<ol>
					<li class="f_l br_03">Model: HT-S-INCL02 / HT-S-D7SH01</li>
					<li class="f_l br_03">보급형(x, 1축) 및 고급형(x,y 2축) 모델 지원</li>
					<li class="f_l br_03">진동 및 지진(Si 단위) 감지 가능</li>
					<li class="f_l br_03">현장에서 검증된 Omron社 D7S Seismic Sensor 사용</li>
				</ol>

			</ul> 
		</div>
        <div class="f_l">
		  <ul class="f_l  pa_b_30">
				<li><img  alt="product" src="/images/sub/con04_04.png"/></li>
			</ul> 
			<ul class="f_l w_300 pa_t_20">
				<li class="f_l br_01 pa_l_10">지자기 기반 이격거리 센서</li>
				<ol>
					<li class="f_l br_03">Model: HT-S-HALL02</li>
					<li class="f_l br_03">X,Y,Z축 자기장에 대한 검출 가능</li>
					<li class="f_l br_03">0.2mm 분해능</li>
				</ol>

			</ul> 
		</div>
        <div class="f_l">
		  <ul class="f_l pa_b_30">
				<li><img alt="product" src="/images/sub/con04_05.png"/></li>
			</ul> 
			<ul class="f_l w_300 pa_t_20">
				<li class="f_l br_01 pa_l_10">GPS 위치추적 센서</li>
				<ol>
					<li class="f_l br_03">Model: HT-S-LPWA01b</li>
					<li class="f_l br_03">9축 센서로 충격 및 이동감지</li>
					<li class="f_l br_03">GPS로 실시간 위치추적 가능</li>
				</ol>

			</ul> 
		</div>
        <div class="f_l">
		  <ul class="f_l pa_b_30">
				<li><img alt="product" src="/images/sub/con04_06.png"/></li>
			</ul> 
			<ul class="f_l w_350 pa_t_20">
				<li class="f_l br_01 pa_l_10">도난방지 Smart Seal</li>
				<ol>
					<li class="f_l br_03">Model: HT-S-LPWA01m</li>
					<li class="f_l br_03">감시대상에 직접 접착하는 센서</li>
					<li class="f_l br_03">나사풀림 감지, 보안스티커 등 다양한 활용 가능</li>
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