<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 2;
$subDepth1 = "IoT통신";
$subDepth2 = "BLE";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
	<div class="contents">
		<h1>BLE 기반 센서 및 모니터링 시스템</h1>
		<div class="con02">
			<ul class="f_l w100">
				<li class="br_01">블루투스 저전력 통신을 기반으로 스마트폰 및 전용 모니터링 게이트웨이를 통해 센서 원격 모니터링 가능</li><br clear="all" />
				<li class="f_l br_03">저전력 장수명, 코인 셀 배터리 기반 소형 센서 구성가능</li><br clear="all" />
				<li class="f_l br_03">범용 프로토콜 기반으로 높은 확장성 제공</li>
			</ul>

			<ul class="f_l w100" style="margin-top:50px;">
				<li class="br_01">시스템 구성도</li><br clear="all" />
				<li><img src="/images/sub/con02_ble.png" style="margin-left:40px;" /></li>
			</ul>   

			<br clear="all" />
			<br />

			<ul class="f_l w100">
				<li class="br_01">Sales Contact<br /></li>
				<li style="margin-left:55px;"><br clear="all" />Contact our sales manager: &lt;led@lightup.co.kr&gt;</li>
			</ul>   
		</div>
		<br />
	</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>