<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 1;
$subDepth1 = "회사소개";
$subDepth2 = "연혁";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
<h1>연혁</h1>
	<div class="section">
		<div class="sec_inner">
			<dl>
				<dt><span>2019</span></dt>
			  <dd class="month">
				  <ul>
						<li>정보통신공사업 등록</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2018</span></dt>
				<dd>
					<ul>
						<li>기술혁신형 중소기업(Inno-Biz) 인증</li>
						<li>강원도 유망중소기업 인증 획득</li>
						<li>소프트웨어사업자 신고</li>
						<li>강원도지사 표창장 수상</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2017</span></dt>
				<dd>
					<ul>
						<li>기업부설연구소 설립</li>
						<li>일본 “라이프인터페이스” 사와 비밀유지각서 및 MOU 체결</li>
						<li>㈜텔라움 사와 기밀유지 약정서 체결, 네이버랩스(주) 사와 기밀유지 약정서 체결</li>
						<li>(재)경기대진테크노파크 와 IoT 산업 발전을 위한 양해각서 체결</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2016</span></dt>
				<dd>
					<ul>
						<li>CE 인증 획득</li>
						<li>SK텔레콤 “비즈 아이디어 페스티벌” 최우수상 수상</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2014</span></dt>
				<dd>
					<ul>
						<li>강원도립대학교 산학협력 협약 체결</li>
						<li>강릉원주대학교 산학협력단과 기술이전협약</li>
						<li>가톨릭관동대학교 산학협력 협약 체결</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2013</span></dt>
				<dd>
					<ul>
						<li>벤처인증 및 공장등록</li>
						<li>강릉원주대학교 산학협력단과 기술이전협약</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2012</span></dt>
				<dd>
					<ul>
						<li>회사이전(강릉과학산업 진흥원 정보문화사업단 입주)</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><span>2009</span></dt>
				<dd class="last">
					<ul>
						<li>창업 (1월)</li>
					</ul>
				</dd>
			</dl>
		</div>
	</div>
<!-- 
<div class="con02"> 
	<h2>국내특허 등록</h2>
	<div class="">
		<ul class="f_l w100">
			<li class="br_01">2012</li>
			<li class="br_n">이미지표출장치(10-1206437), 적설량 측정장치 및 방법(10-1117310), 해충접근 방지 및 살균 장치(10-1200363) </li>
		</ul>   
		<ul class="f_l w100">
			<li class="br_01">2013</li>
			<li class="br_n">해충접근방지 기능을 갖는 발광유닛(10-1300620) </li>
		</ul>  
		<ul class="f_l w100">
			<li class="br_01">2015</li>
			<li class="br_n">이더넷 장애복구 장치(10-1538119), 체결부재의 풀림 감지 장치(10-1548490) </li>
		</ul>  
		<ul class="f_l w100">
			<li class="br_01">2017</li>
			<li class="br_n">스마트 보안 스티커 시스템(10-1697104)</li>
		</ul>  
	 </div>
	<h2>국내특허 출원</h2>
	<div class="">
		<ul class="f_l w100">
			<li class="br_01">2014</li>
			<li class="br_n">- 원격제어 램프 시스템 및 그 제어 방법 (2014-0158093), 해충접근방지용 발광유닛 및 이의 제조방법(2014-0148621)
			<br>- 저전력 블루투스 단말기의 측위 측정을 위한 공간설정 방법 및 이를 이용하는 무선 네트워크 시스템(2014-0167462)</li>
		</ul>   
		<ul class="f_l w100">
			<li class="br_01">2016</li>
			<li class="br_n">- 스마트 안전관리 모니터링 시스템(2016-0108146) 
            <br>- 저전력 열림감지 센서를 이용한 전력제어 시스템(2016-0172427)</li>
		</ul>     
		<ul class="f_l w100">
			<li class="br_01">2017</li>
			<li class="br_n">- 대상체의 상태 변동 감지 시스템(2017-0027575) 
            <br>- 수중 인명 구조용 스마트 에어백(2017-0161736)
            <br>- 도난방지 시스템(2017-0173069)
            <br>- 문화재에 대한 부착물 고정 장치(2017-0184333)</li>
		</ul>     
		<ul class="f_l w100">
			<li class="br_01">2018</li>
			<li class="br_n">IoT 기반의 문화재 변위 모니터링 시스템(2018-0041686)</li>
		</ul>  
	 </div>
	<h2>국제 특허 출원</h2>
	<div class="">
		<ul class="f_l w100">
			<li class="br_01">2014</li>
			<li class="br_n">해충접근방지용 발광유닛 및 이의 제조방법(PCT/KR2014/010435)</li>
		</ul>   
	 </div>
	<h2>디자인특허 등록</h2>
	<div class="">
		<ul class="f_l w100">
			<li class="br_01">2013</li>
			<li class="br_n">캠핑램프(3007379600000) </li>
		</ul> 
		<ul class="f_l w100">
			<li class="br_01">2014</li>
			<li class="br_n">캠핑램턴(3007670330000)</li>
		</ul>     
	 </div>
	<h2>디자인특허 출원</h2>
	<div class="">
		<ul class="f_l w100">
			<li class="br_01">2017</li>
			<li class="br_n">랜턴 포장박스(2017-0033365) </li>
		</ul>  
	 </div>
	<h2>인증</h2>
	<div>
		<ul class="f_l w100">
			<li class="br_01">2013</li>
			<li class="br_02 w_60">KC인증</li>
			<li class="br_n">- 전기용품안전인증(JI11023-13001) (LED 7W 전구)<br>- 자율안전확인신고증명서(XI120001-13001A) (휴대용 LED랜턴 배터리 인증)</li>
		</ul> 
		<ul class="f_l w100 ma_l_93">
			<li class="br_02 w_60">통신인증</li>
			<li class="br_n">- 방송통신기자재등의 적합등록 필증(KCC-REM-ht1-ZeroLamp-Ver1) (휴대용 LED랜턴 무선 통신 인증)</li>
		</ul> 
		<ul class="f_l w100">
			<li class="br_01">2015</li>
			<li class="br_02 w_60">KC인증</li>
			<li class="br_n">- 자율안전확인신고증명서(XI100001-15001A) (O-LAMP SMART 랜턴 배터리 인증)</li>
		</ul> 
		<ul class="f_l w100 ma_l_93">
			<li class="br_02 w_60">통신인증</li>
			<li class="br_n">- 방송통신기자재등의 적합등록증(MSIP-CMM-ht1-O-Lamp-Smart) (O-LAMP SMART 랜턴 무선 통신 인증)<br>
							- 방송통신기자재등의 적합등록증(MSIP-CRM-ht1-O- SmartSensor) (O- SmartSensor  무선 통신 인증)
			</li>
		</ul>   
        <ul class="f_l w100">
			<li class="br_01">2016</li>
			<li class="br_02 w_60">CE인증</li>
			<li class="br_n">- CE인증(KR-KTR-0501) (캠핑등 배터리 인증)</li>
		</ul> 
        <ul class="f_l w100">
			<li class="br_01">2017</li>
			<li class="br_02 w_60">통신인증</li>
			<li class="br_n">- 방송통신기자재등의 적합인증서(MSIP-CRM-ht1-CrackSensor) (O-Crack 무선인증)<br>
							- 방송통신기자재등의 적합등록 필증(MSIP-REM-th1-HIGHTECHUPS-1) (UPS 적합 인증)</li>
		</ul>   
        <ul class="f_l w100 ma_b_60">
			<li class="br_01">2018</li>
			<li class="br_02 w_60">KC인증</li>
			<li class="br_n">- 안전확인신고증명서(XU100818-17003A-1) (위치추적 배터리 인증)</li>
		</ul>     
	 </div>
	</div>-->
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>