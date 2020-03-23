<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 4;
$subDepth1 = "스마트 센서";
$subDepth2 = "Crack Monitor";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>Crack Monitor</h1>
	<div class="con02"> 
		<h2>제품구성</h2>
		<div>
		<img class="pa_b_20" alt="product" src="/images/sub/con04_21.png"/>
		</div>
		<div class="">
		  <ul class="f_l w30 pa_b_30">
				<li class="f_l br_01">균열 센서 (자석포함)</li>
				<ol>
					<li class="f_l br_03">통신방식 : Blutooth Low Energy(BLE)</li>
					<li class="f_l br_03">통신거리 : 30M 이상</li>
					<li class="f_l br_03">동작온도 : -30도~+80도</li>
					<li class="f_l br_03">측정범위 : 0~5cm</li>
					<li class="f_l br_03">정밀도 : 1mm</li>
					<li class="f_l br_03">배터리 수명 : 1년 이상</li>
				</ol>

			</ul> 
			<ul class="f_l w20 pa_l_40">
				<li class="f_l br_01 pa_l_10">IoT Gateway</li>
				<ol>
					<li class="f_l br_03">BLE to WiFi/Ethernet Gateway</li>
				</ol>

			</ul> 
			<ul class="f_l w30 pa_l_100">
				<li class="f_l br_01 pa_l_10">서버 및 APP</li>

			</ul> 
		</div>
		<h2>시스템 구성도</h2>
		<div class="">
			<ul class="f_l w100">
				
				<li><img class="pa_t_30 pa_b_30" alt="product" src="/images/sub/con04_22.png"/></li>
			</ul>   
		 </div>
		<h2>제품사양</h2>
		<div class="">
		  <ul class="f_l pa_b_30">
				<li class="f_l w100 br_01 pa_b_15">신형 9축</li>
				<ol>
					<li class="f_l w100 br_03">Medium Type Mk.I</li>
					<li class="f_l w100 br_03">대용량 배터리 적용 (리튬이온 AAA배터리 사용)</li>
					<li class="f_l w100 br_03">BLE 4.0 저전력 통신 (~30m)</li>
					<li class="f_l w100 br_03">9축 건축물 균열감지, 공기질 모니터링 등 고급분야 적용 가능</li>
					<li class="f_l w100 br_03">Smartphone 및 자사 범용 BLE Gateway 호환 가능</li>
				</ol>

			</ul> 
		  <ul class="f_l pa_b_30">
				<li class="f_l w100 br_01 pa_b_15">IoT Gateway</li>
				<ol>
					<li class="f_l w100 br_03">BLE to WiFi, BLE to Ethernet 기본 지원</li>
					<li class="f_l w100 br_03">64비트 듀얼코어 또는 쿼드코어 프로세서 Embedded System</li>
					<li class="f_l w100 br_03">건축현장 등을 위한 보조 배터리 연결 가능</li>
					<li class="f_l w100 br_03">최대 16GB의 SD 스토리지를 통한 로그 기록 지원</li>
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