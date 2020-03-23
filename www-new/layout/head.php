<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HIGH TECH</title>

	<link type="text/css" rel="stylesheet" href="/css/common.css"/></link>
	<link type="text/css" rel="stylesheet" href="/css/reset.css"/></link>
	<!-- jquery & jquery-ui -->
	<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script> 

	<script type="text/javascript">
	  WebFontConfig = {
		custom: {
			families: ['Nanum Gothic'],
			urls: ['http://fonts.googleapis.com/earlyaccess/nanumgothic.css']
		}
	  };
	  (function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1.4.10/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	  })(); 
	 </script>

	 <style>
	 * {
		font-family: "Nanum Gothic";
	 }
	 </style>

	<!-- common script block -->
	<script type="text/javascript" src="/js/common.js"></script>
</head>

<body>
<!-- wrap -->
<div id="w100 h100 po_r">

	<!-- header -->
		<header id="header">
			
			<p class="topmenu">
				<span class="h_5">
					<a class="" href="#"></a>
					<a href="javascript:alert('Sorry for your inconvenience, Our global website is under construction.');"></a>
				</span>
			</p>
		
			<div class="gnb_bg">
			
			<!-- gnb menu -->
			<div class="gnb">
			 <a class="logo" href="/"><img src="/images/common/logo.png" alt="HIGH TECH" /></a>
				<ul class="gnbmenu">
					<li><a href="/company/"><img src="/images/common/gnb01_off.png"  alt="회사소개 " /></a>
						<ul class="submenu w_124 ">
							<li class="line h_31 pa_b_5 font_n"><a href="/company/history.php">연혁</a></li>
							<li class="h_31 pa_b_5"><a href="/company/location.php">오시는 길</a></li>
						</ul>
					</li>
					<li><a href="/iot/lora.php"><img src="/images/common/gnb02_off.png" alt="안전관리 모니터링 시스템 " /></a>
					</li>
					<li><a href="/patents/patents.php"><img src="/images/common/gnb03_off.png"  alt="특허 및 인증 " /></a>
					</li>
					<li><a href="/company/installation.php"><img src="/images/common/gnb04_off.png"  alt="설치사례 " /></a>
					</li>
					<!-- 2019.07.16 수정
					<li><a href="/smartsensor/"><img src="/images/common/gnb04_off.png"  alt="스마트 센서 " /></a>
						<ul class="submenu w_130">
                        	<li class="line2 h_31 pa_b_5"><a href="/smartsensor/iot.php">IoT Solution</a></li>
							<li class="line2 h_31 pa_b_5"><a href="/smartsensor/spt.php">SPT Analyzer</a></li>
							<li class="line2 h_31 pa_b_5"><a href="/smartsensor/crack.php">Crack Monitor</a></li>
							<li class="h_31 pa_b_5"><a href="/smartsensor/label.php">Smart Label</a></li>
						</ul>
					</li>
					<li><a href="/bbs/list.php?table=press"><img src="/images/common/gnb05_off.png"  alt="고객지원 " /></a>
						<ul class="submenu w_120">
							<li class="line h_31 pa_b_5"><a href="/bbs/list.php?table=press">공지사항</a></li>
							<li class="line h_31 pa_b_5"><a href="/support/faq.php">FAQ</a></li>
							<li class="h_31 pa_b_5"><a href="/bbs/list.php?table=pds">자료실</a></li>
						</ul>
					</li>
					<li><a href="javascript:openOlampStore()"><img src="/images/common/gnb06_off.png"  alt="Store " /></a>

					<script>
					function openOlampStore()
					{
						if(confirm("오램프(O-Lamp) 온라인 스토어로 이동합니다."))
						{
							document.location.href = "http://www.o-lamp.com/shop/";
						}
					}
					</script>
					</li>-->
				</ul>
				<div class="support-text">high techology, HIGH TECH!</div>
			</div>
			<!-- //gnb menu -->
			</div>
<?php
if($subDepth1 && $subDepth2)
{
?>
			<!-- navi -->
			<div class="nav_bg">
				<div class="navi">
				 	<ul class="home"><a herf="http://www.lightup.co.kr/"><img alt="home" src="/images/sub/icon_home.png"/></a></ul>
					<ul class="nav_t">
						<li class="nav_act01"><a href="#"><?php echo $subDepth1?></a>
							<ul class="nav_menu01">
								<li><a herf="/company/history.php">회사소개</a></li>
								<li><a herf="/iot/lora.php">안전관리 모니터링 시스템</a></li>
								<li><a herf="/patents/patents.php">특허 및 인증</a></li>
								<li><a herf="/company/installation.php">설치사례 </a></li>
							</ul>
						</li>
					 </ul>
				  <ul class="nav_t">
						<li class="nav_act02"><a href="#"><?php echo $subDepth2?></a>
							<ul class="nav_menu02">
<?php
	@include "../layout/submenu_{$subIndex}.php";
?>
							</ul>
					  </li>
					 </ul>
					 
				</div>
			</div>
			<!-- //navi -->
<?php
}
?>

		</header>
		<!-- //header -->
