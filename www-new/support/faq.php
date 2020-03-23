<?php
// Include Logic (db, etc)
@include "../_logic.php";

// Content Setting
$subIndex = 5;
$subDepth1 = "공지사항";
$subDepth2 = "FAQ";
$subDepth3 = "자료실";

// Include Layout (top)
@include "../layout/head.php";
?>

<container id="container">
<div class="contents">
	<h1>FAQ</h1>
	<div class="list">
		<div class="search"> 
	  <select name="select_con" title="제목" class="select_con">
		<option value="">제목</option>
	   </select>
	   <input class="input_txt" type="text">
	   <a href=""><img class="pa_l_10" alt="검색" src="/images/sub/btn_search.png"/></a>
		</div>
		<table class="faq_list">
			<caption>FAQ 목록</caption>
			<colgroup>
				<col style="width:7%;"/>
				<col />
			</colgroup>
			<tbody>
				<tr class="faq_q">
					<th><img class="pa_t_8 pa_l_10" alt="질문"  src="/images/sub/icon_Q.png"/></th>
					<th class="t_a_l"><a href="#">하이테크로 찾아가기 위해서는 어떻게 해야 하나요?</a></th>
				</tr>
				<tr class="faq_a">
					<td><img class="pa_l_28" alt="답변"  src="/images/sub/icon_A.png"/></td>
					<td class="pa_t_20 pa_b_20">하이테크의 본사의 주소는 강원도 강릉시 경강로2326번길 4, 113호 입니다.<br />공식 업무시간은 오전 10시 ~ 오후 5시이며, 법정공휴일 및 대체휴일, 토요일/일요일은 휴무입니다.<br />
					<br />
					※ 저희 회사는 직원별 유연근무제를 도입하고 있으므로, 각 직원별로 근무시간 및 근무위치가 상이할 수 있습니다.<br />미팅을 위해 방문하실 경우, 시간은 개별 조율 부탁드립니다.</td>
				</tr>
			</tbody>
		</table>
		<div class="wrap_pager">
			<a href=""><img alt="처음페이지"  src="/images/sub/btn_first.png"/></a>
			<a href=""><img alt="이전페이지"  src="/images/sub/btn_prev.png"/></a>
			<a href="">1</a>
			<!--a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<a href="">6</a>
			<a href="">7</a>
			<a href="">8</a>
			<a href="">9</a>
			<a href="">10</a-->
			<a href=""><img alt="다음페이지"  src="/images/sub/btn_next.png"/></a>
			<a href=""><img alt="마지막페이지"  src="/images/sub/btn_back.png"/></a>
		</div>
	</div>
	
</div>
</container>

<?php
// Include Layout (bottom)
@include "../layout/tail.php";
?>