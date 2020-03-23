<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 3;
$subDepth1 = "스마트 가전";
$subDepth2 = "O-Lamp";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
	<div class="contents">
		<h1>O-LAMP Smart</h1>
		<div class="con02">
			<h2>제품구성</h2>
			<div>
				<ul class="f_l w100">
					<li class="br_01">캠핑용 스마트 랜턴 (블루투스 제어)</li>
					<li><img class="img-frame aligncenter" src="//o-lamp.com/wp-content/uploads/2015/05/main.jpg" style="margin-left:150px;" alt=""></li>
				</ul>   

				<br clear="all" />
				<br />

				<ul class="f_l">
					<li class="br_01 w_200">제품 외관 및 특장점</li>
                    <li class="f_l pa_t_20 pa_l_40"> <img alt="product" src="/images/sub/con03_11.jpg"/></li>
					<!--<li><br clear="all" /><img class="img-frame aligncenter" src="//o-lamp.com/wp-content/uploads/2015/05/Untitled-31.jpg" style="margin-left:100px;" alt=""></li>-->
				</ul>   
			</div>
		</div>

		<br clear="all" />
		<center>
		<div style="background-color:#f26522; padding:10px 50px; border-radius:3px; width:300px;"><a style="color:#fff; font-family:NanumGothic;" href="http://www.o-lamp.com/">O-LAMP 브랜드사이트 바로가기</a></div>
		<br />
		<br />
		</center>

	</div>

</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>