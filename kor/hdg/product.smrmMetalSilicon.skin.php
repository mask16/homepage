<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.distribution ul.conBox-menu2 li {
    width: 24%;
</style>
  <section class="subVisual distributionVisual">
    <div class="innerWrap">
      <div class="visualText">
        <p>BUSINESS</p>
		<h3>사업소개</h3>
      </div>
    </div>
  </section>

<div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
<?php if( isset($SubNav[0]) ){?>
		<div class="subNav">
			<p><?=$SubNav[0]['title']?></p>
			<ul><?=$SubNav[0]['list']?></ul>
		</div>
<?php }?>
<?php if( isset($SubNav[1]) ){?>
		<div class="subNav">
			<p><?=$SubNav[1]['title']?></p>
			<ul><?=$SubNav[1]['list']?></ul>
		</div>
<?php }?>
	</section>

    
	<section class="distribution">
		<!-- conBox -->
		<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>소재/원료</h1>

			</div> 
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Department of Trading & SCM</h1>
				<ul class="conBox-menu2">
					<a href="/kor/hdg/product/smrmSmRm"><li t="1">제강원료 및 합금철</li></a>
					<a href="/kor/hdg/product/smrmMetalSilicon"><li t="2"class="on" >메탈실리콘</li></a>
					<a href="/kor/hdg/product/smrmNonFerrousMetal"><li t="3">비철금속</li></a>
					<a href="/kor/hdg/product/smrmGeneralTrading"><li t="4">일반무역</li></a>

				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<ul class="smrmCommonList ms_ul">
						<li class="full_li">
							<div class="txt_box">
								<h2>
									메탈실리콘
									<span>
										(Metal Silicon)
									</span>
								</h2>
								<p>
									반도체 및 태양광 소재의 핵심 원료인 폴리실리콘 제조의 주원료로 철강산업, 알루미늄합금, 유기실리콘(실리콘화합물), 이차전지, 화학제품 등에 광범위하게 사용되는 원료입니다.
								</p>
							</div>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/ms_img01.jpg" />
							</div>
						</li>
						<li>
							<h2>
								페로실콘
								<span>
									Fe-Si(Ferro Silicon)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/ms_img02.jpg" />
								<img src="<?=$skin_url?>/img/content/ms_img03.jpg" />
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>철강사업</b>
											주조철에 첨가되어 탄화철의 안정성을 확보하고, 흑연탄소의 형성을 촉진시키며, 또한 철을 연화 시켜 유동성과 절삭성을 향상시킵니다.
										</p>
									</li>
									<li>
										<p>
											<b>유기실리콘(실리콘 화합물)</b>
											- 반도체 : 전자 산업용 실리콘웨이퍼<br>
											- 섬유유연제, 제포제 및 항박테리아 처리제(항균제)<br>
											- 밀폐제, 윤활제, 도료 및 합성고무<br>
											- 화장품/가구 및 차량용 광택제
										</p>
									</li>
								</ol>
							</div>
						</li>
					</ul>
					<table class="ms_table">
						<colgroup>
							<col width="20%">
							<col width="20%">
							<col width="15%">
							<col width="15%">
							<col width="15%">
							<col width="15%">
						</colgroup>
						<thead>
							<tr>
								<th rowspan="3">Grade</th>
								<th colspan="5">Composition</th>
							</tr>
							<tr>
								<th rowspan="2">Si Content(%)</th>
								<th colspan="4">Impurities(%)</th>
							</tr>
							<tr>
								<th>Fe</th>
								<th>Al</th>
								<th>Ca</th>
								<th>P</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1501</td>
								<td>99.69</td>
								<td>0.15</td>
								<td>0.15</td>
								<td>0.01</td>
								<td>≤0.004%</td>
							</tr>
							<tr>
								<td>1502</td>
								<td>99.68</td>
								<td>0.15</td>
								<td>0.15</td>
								<td>0.02</td>
								<td>≤0.004%</td>
							</tr>
							<tr>
								<td>1101</td>
								<td>99.79</td>
								<td>0.1</td>
								<td>0.1</td>
								<td>0.01</td>
								<td>≤0.004%</td>
							</tr>
							<tr>
								<td>2202</td>
								<td>99.58</td>
								<td>0.2</td>
								<td>0.2</td>
								<td>0.02</td>
								<td>≤0.004%</td>
							</tr>
							<tr>
								<td>2502</td>
								<td>99.48</td>
								<td>0.25</td>
								<td>0.25</td>
								<td>0.02</td>
								<td>≤0.004%</td>
							</tr>
							<tr>
								<td>3303</td>
								<td>99.37</td>
								<td>0.3</td>
								<td>0.3</td>
								<td>0.03</td>
								<td>≤0.005%</td>
							</tr>
							<tr>
								<td>411</td>
								<td>99.4</td>
								<td>0.4</td>
								<td>0.1</td>
								<td>0.1</td>
								<td>≤0.005%</td>
							</tr>
							<tr>
								<td>421</td>
								<td>99.3</td>
								<td>0.4</td>
								<td>0.2</td>
								<td>0.1</td>
								<td>≤0.005%</td>
							</tr>
							<tr>
								<td>441</td>
								<td>99.1</td>
								<td>0.4</td>
								<td>0.4</td>
								<td>0.1</td>
								<td>-</td>
							</tr>
							<tr>
								<td>551</td>
								<td>98.9</td>
								<td>0.5</td>
								<td>0.5</td>
								<td>0.1</td>
								<td>-</td>
							</tr>
							<tr>
								<td>553</td>
								<td>98.7</td>
								<td>0.5</td>
								<td>0.5</td>
								<td>0.3</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--//conBox-in-1 -->
				

				
			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->

<script type="text/javascript">
	$(".conBox-menu2 li").click(function(){
		var t = $(this).attr('t');
		$(".conBox-menu2 li").attr('class','');
		$(this).attr('class','on');

		$(".conBox-in").hide();
		$(".conBox-in-"+t).show();
	});
</script>