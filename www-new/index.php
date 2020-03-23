<?php
// Include Logic (db, etc)
@include "_logic.php";

// Content Setting
$subIndex = 0; // 메인: 0

// Include Layout (top)
@include "layout/head.php";
?>
		<!-- container -->
		<container id="container">
			<div class="slider">
				<!--<a href="#"><img class="ma_t_238 pa_l_15" alt="btn_prev" src="images/main/btn_prev.png"></img></a>
				<a href="#"><img class="f_r ma_t_238 pa_r_15" alt="btn_next" src="images/main/btn_next.png"></img></a> -->
			</div>
			<!-- <div class="slider_control">
				<div class="con_box">
					<a href="#"><img class="f_l" alt="btn_on" src="images/main/btn_on.png"></img></a>
					<a href="#"><img class="f_r" alt="btn_off" src="images/main/btn_off.png"></img></a>
				</div>
			</div> -->
			<div class="icon_text pa_l_100 pa_t_40 h_230 bg_white">
				<ul class="con_1 m-auto ma_r_40 ">
					<li>
						<img class="f_l" alt="icon1" src="images/main/banner02.png"></img>
					</li>
					<li class="t_1">
						<span>제품 기획/개발</span>
					</li>
					<li class="t_2">
						<span>하이테크는 오랜 기간 준비해 온 독자적인 기술로 초저전력 무선센서를 직접 기획, 개발하고 있습니다. 꾸준한 제품 업데이트를 통해 최상의 제품을 출시합니다.</span>
					</li>
				</ul>
				<ul class="con_1 m-auto ma_r_30">
					<li>
						<img class="f_l" alt="icon2" src="images/main/banner01.png"></img>
					</li>
					<li class="t_1">
						<span>제품 생산</span>
					</li>
					<li class="t_2">
						<span>하이테크는 고퀄리티 제품 생산을 위해 직접생산 방식을 지향하고 있으며, 최상의 제품을 위하여 품질관리에도 힘쓰고 있습니다.</span>
					</li>
				</ul>
				<ul class="con_1 m-auto ma_r_30">
					<li>
						<img class="f_l" alt="icon3" src="images/main/banner04.png"></img>
					</li>
					<li class="t_1">
						<span>현장 구축</span>
					</li>
					<li class="t_2">
						<span>하이테크는 부착 구조물(문화재, 건축물, 교량, 터널 등)과 센서 특성에 따른 맞춤형 구축기술을 보유하고있습니다.</span>
					</li>
				</ul>
				<ul class="con_1 m-auto ma_r_30">
					<li>
						<img class="f_l" alt="icon4" src="images/main/banner03.png"></img>
					</li>
					<li class="t_1">
						<span>서비스 운영</span>
					</li>
					<li class="t_2">
						<span>더 나은 품질관리 서비스를 위해 다향한 방식의 UI를 제공, 보다 편리한 서비스 품질을 위해 노력하고있습니다.</span>
					</li>
				</ul>
			</div>
<!-- 2019.07.16 수정
			<div class="banner">
				<div class="text_banner">
					<ul class="t_1">
						<span>HIGH TECH materializes IoT.</span>
					</ul>
					<ul class="t_2">
						<span>The Internet of Things (IoT) is not the Internet of tomorrow, it’s the Internet of today.</span>
					</ul>
				</div>
				<div class="btn_banner1">
					<ul>
						<li class="text1"><a href="/bbs/view.php?table=press&bbsArticleDataIndex=2">O-Lamp <br/> SBS &quot;생활경제&quot; 방영</a></li>
					</ul>
				</div>
				<div class="btn_banner2">
					<ul>
						<li class="text1"><a href="/bbs/view.php?table=press&bbsArticleDataIndex=1">하이테크의 기술<br/> 
						SKT공모전 최우수상 수상</a></li>
					</ul>
				</div>

			</div>-->
	</container>
		<!-- //container -->
<?php
// Include Layout (bottom)
@include "layout/tail.php";
?>