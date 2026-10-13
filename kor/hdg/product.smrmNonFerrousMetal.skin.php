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
					<a href="/kor/hdg/product/smrmMetalSilicon"><li t="2">메탈실리콘</li></a>
					<a href="/kor/hdg/product/smrmNonFerrousMetal"><li class="on"  t="3">비철금속</li></a>
					<a href="/kor/hdg/product/smrmGeneralTrading"><li t="4">일반무역</li></a>
				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<ul class="smrmCommonList nfm_ul">
						<li class="full_li">
							<div class="txt_box">
								<h2>
									비철금속
									<span>
										(Non Ferrous Metal/ Base Metal & Minor Metal)
									</span>
								</h2>
								<p>
									금속을 구분하는 방법 중 하나로서 철 금속 이외의 모든 금속을 총칭하며, 합금의 재료나 다양한 공업적 특성 때문에, 비철 금속의 중요성은 날로 커지고 있습니다.
								</p>
							</div>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/nfm_img01.jpg"/>
							</div>
						</li>
						<li>
							<h2>
								Base Metal
							</h2>
							<ol>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img02.jpg">
									<p>
										<b>알루미늄</b><br>
										[Aluminum]
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img03.jpg">
									<p>
										<b>구리</b><br>
										[Copper]
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img04.jpg">
									<p>
										<b>납</b><br>
										[Lead]
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img05.jpg">
									<p>
										<b>니켈</b><br>
										[Nickel]
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img06.jpg">
									<p>
										<b>주석</b><br>
										[Tin]
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img07.jpg">
									<p>
										<b>아연</b><br>
										[Zinc]
									</p>
								</li>
							</ol>
						</li>
						<li>
							<h2>
								Minor Metal
							</h2>
							<ol>
								<li>
									<p>안티모니<br>[Antimony]</p>
								</li>
								<li>
									<p>비소<br>[Arsenic]</p>
								</li>
								<li>
									<p>베릴륨<br>[Beryllium]</p>
								</li>
								<li>
									<p>비스무트<br>[Bismuth]</p>
								</li>
								<li>
									<p>카드뮴<br>[cadmium]</p>
								</li>
								<li>
									<p>칼슘<br>[Calcium</p>
								</li>
								<li>
									<p>크롬<br>[Chromium]</p>
								</li>
								<li>
									<p>코발트<br>[Cobalt]</p>
								</li>
								<li>
									<p>갈륨<br>[Gallium</p>
								</li>
								<li>
									<p>게르마늄<br>[Germanium]</p>
								</li>
								<li>
									<p>인듐<br>[Indium]</p>
								</li>
								<li>
									<p>리튬<br>[lithium] </p>
								</li>
								<li>
									<p>마그네슘<br>[Magnesium] </p>
								</li>
								<li>
									<p>망간<br>[Manganese] </p>
								</li>
								<li>
									<p>수은<br>[Mercury] </p>
								</li>
								<li>
									<p>몰리브덴<br>[Molybdenum] </p>
								</li>
								<li>
									<p>니오븀<br>[Niobium] </p>
								</li>
								<li>
									<p>레늄<br>[Rhenium] </p>
								</li>
								<li>
									<p>셀레늄<br>[Selenium] </p>
								</li>
								<li>
									<p>실리콘<br>[Silicon]</p>
								</li>
								<li>
									<p>스트론튬<br>[Strontium]</p>
								</li>
								<li>
									<p>탄탈럼<br>[Tantalum] </p>
								</li>
								<li>
									<p>텔루륨<br>[Tellurium</p>
								</li>
								<li>
									<p>티타늄<br>[Titanium] </p>
								</li>
								<li>
									<p>텅스텐<br>[Tungsten]</p>
								</li>
								<li>
									<p>바나듐<br>[Vanadium] </p>
								</li>
								<li>
									<p>지르코늄<br>[Zirconium] </p>
								</li>
								<li>
									<p>기타</p>
								</li>
							</ol>
						</li>
						<li>
							<h2>
								Al Ingot, Copper Cathode, Si Metal
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/nfm_img08.jpg" />
								<span>
									Al Ingot
								</span>
							</div>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/nfm_img09.jpg" />
								<span>
									Copper Cathode
								</span>
							</div>
						</li>
					</ul>
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