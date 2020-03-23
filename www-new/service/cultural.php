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
		<!-- 2019.07.16 수정
		<h2>서비스 개요</h2>
		<div class="f_l br_01">기울기 및 균열, 진동/지진, 온/습도 센서를 바탕으로 문화재의 변위와 위험상황을 실시간 확인</div>
		<div class="f_l f_s_14 pa_b_50">
		  <ul class="f_l w_290 pa_r_30 pa_l_50">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_101.png"/></li>
				<li class="f_l ">첨단 정밀 측정센서<br/>(배터리 기반, 초소형/초경량)</li>
			</ul> 
			<ul class="f_l w_290 pa_r_30">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_102.png"/></li>
				<li class="f_l ">문화재 대상 설치 및 운영지원<br/>(LoRaWAN 통신망)</li>
			</ul> 
			<ul class="f_l w_290 pa_r_30">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_103.png"/></li>
				<li class="f_l ">모니터링 시스템을 통한 <br/>GIS 지도연동 및 분석 통계기능</li>
			</ul> 
		</div>
		
		<div class="f_l br_01">석조문화재, 목조문화재 및 각 문화재 특성에 맞는 외관/설치형태 구현</div>
		<div class="f_l f_s_14 pa_b_50">
		  <ul class="f_l w_290 pa_r_30 pa_l_50">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_104.png"/></li>
				<li class="f_l"><strong>석조물(탑) 기울기 측정</strong><br/>(다양한 형태에 따른 하드웨어 <br/>형상, 색상 및 설치방법 변경)</li>
			</ul> 
			<ul class="f_l w_290 pa_r_30">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_105.png"/></li>
				<li class="f_l"><strong>건축문화재 기울기 측정</strong><br/>(국가지정문화재의 각 기둥별  <br/>기울기 변위량 실시간 측정)</li>
			</ul> 
			<ul class="f_l w_290 pa_r_30">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_106.png"/></li>
				<li class="f_l"><strong>목재 부재간 간격변동량 측정</strong><br/>(지붕 보수공사 후 변위량 측정 <br/>및 계절/기상상황별 자료 수집)</li>
			</ul> 
		</div>
		
		
		<div class="f_l br_01">LoRaWAN 단독망 구축으로 통신료 절감 효과 (강원도내 18개 시/군 대상 설치운영 중)</div>
		<div class="f_l f_s_14 pa_b_70">
		  <ul class="f_l w_290 pa_r_30 pa_l_50">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_107.png"/></li>
				<li class="f_l"><strong>춘천시 (강원문화재연구소)</strong></li>
			</ul> 
			<ul class="f_l w_290 pa_r_30">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_108.png"/></li>
				<li class="f_l"><strong>고성군 (왕곡마을)</strong></li>
			</ul> 
			<ul class="f_l w_290 pa_r_30">
			  	<li><img class="pa_t_30 pa_b_10" src="/images/sub/con03_109.png"/></li>
				<li class="f_l"><strong>양양군 (양양군청)</strong></li>
			</ul> 
		</div>
		-->
		
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
		
		<h2>IoT기반 안전관리 모니터링 서비스의 장점</h2>
		<div class="con02">
			<ul class="f_l w100">

				<li class="pa_l_40"><img class=" pa_b_30" alt="" src="/images/sub/con04_07.png"/></li>
			</ul>
		</div>
		
		
		
		<!-- 2019.07.19 수정
		
		<h2>문화재 IoT 모니터링 서비스의 장점</h2>
		<div class="con02">
			<ul class="f_l w100 pa_b_50">
				<li class="br_01">유지보수 계획의 체계화 및 합리화</li><br clear="all" />
				<li class="f_l br_03">측정된 변위량 정보는 유지보수 계획을 세우는 기초자료로 사용 가능</li><br clear="all" />
				<li class="f_l br_03 w100">변위가 적은 문화재는 현상유지, 변위량이 큰 문화재는 복구 또는 복원을 위한 계획 산출 가능</li>
				<li class="f_l br_03">문화재 유지보수를 위한 과학적 근거자료 확보 가능</li>
			</ul>
		
			<ul class="f_l w100 pa_b_50">
				<li class="br_01">재난에 선제적으로 대응</li><br clear="all" />
				<li class="f_l br_03">변위량과 주변환경정보를 함께 측정하여 진동, 지진등이 문화재에 미치는 영향을 분석 가능</li><br clear="all" />
				<li class="f_l br_03">포항 지진(2017) 당시의 데이터 및 향후 발생할 각종 지진 및 주변환경 변화에 따른 문화재 변위량 데이터를 기반으로 재난상황 발생시 문화재별 파손이나 기타 구조적인 영향 예상이 가능하였음</li>
				<li class="f_l br_03">도난 및 침입감지 시스템의 조합으로 기존 문화재 화재/침입경보시스템 고도화 가능</li>
			</ul>
			
			<ul class="f_l w100 pa_b_50">
				<li class="br_01">인공지능 및 빅데이터를 결합한 변위량 예측시스템 개발</li><br clear="all" />
				<li class="f_l br_03">변위량과 주변환경정보 데이터를 장기적으로 축적하게 되므로 문화재 변위량 빅 데이터를 구축하게 됨</li><br clear="all" />
				<li class="f_l br_03">빅데이터 분석을 바탕으로 향후 문화재 이상발생 징후 포착 및 예보, 구체적으로는 필요한 유지보수를 자동으로 산출 가능</li>
				<li class="f_l br_03">인공지능 분석으로 특정 형태의 건축문화재에 대하여 어떤 환경변화나 변위종류에 취약한지를 판단, 유지보수 작업 방향의 제안이 가능</li>
			</ul>
		
		</div>
		-->
		
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