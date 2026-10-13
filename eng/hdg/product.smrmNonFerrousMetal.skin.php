<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual distributionVisual">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
		<h3>BUSINESS</h3>
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
				<h1>Steel Making<br>Raw Materials</h1>

			</div> 
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Department of Trading & SCM</h1>
				<ul class="conBox-menu2">
					<a href="/eng/hdg/product/smrmSmRm"><li t="1" style="font-size:1.3em">Steel Making Raw Materials</li></a>
					<a href="/eng/hdg/product/smrmMetalSilicon"><li t="2">Metal Silicon</li></a>
					<a href="/eng/hdg/product/smrmNonFerrousMetal"><li class="on"  t="3">Non Ferrous Metal</li></a>
					<a href="/eng/hdg/product/smrmGeneralTrading"><li t="4">General Trading</li></a>
				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<ul class="smrmCommonList nfm_ul">
						<li class="full_li">
							<div class="txt_box">
								<h2>
									Non Ferrous Metal/ Base metal & Minor metal
								</h2>
								<p>
									As one of the ways to distinguish metals, it refers to metals other than ferrous metals, Because of the materials and various industrial properties, the importance of nonferrous metals is increasing day by day.
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
										Aluminum
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img03.jpg">
									<p>
										copper
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img04.jpg">
									<p>
										Lead
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img05.jpg">
									<p>
										Nickel
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img06.jpg">
									<p>
										Tin
									</p>
								</li>
								<li>
									<img src="<?=$skin_url?>/img/content/nfm_img07.jpg">
									<p>
										Zinc
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
									<p>Antimony</p>
								</li>
								<li>
									<p>Arsenic</p>
								</li>
								<li>
									<p>Beryllium</p>
								</li>
								<li>
									<p>Bismuth</p>
								</li>
								<li>
									<p>cadmium</p>
								</li>
								<li>
									<p>Calcium</p>
								</li>
								<li>
									<p>Chromium</p>
								</li>
								<li>
									<p>Cobalt</p>
								</li>
								<li>
									<p>Gallium</p>
								</li>
								<li>
									<p>Germanium</p>
								</li>
								<li>
									<p>Indium</p>
								</li>
								<li>
									<p>lithium </p>
								</li>
								<li>
									<p>Magnesium</p>
								</li>
								<li>
									<p>Manganese</p>
								</li>
								<li>
									<p>Mercury </p>
								</li>
								<li>
									<p>Molybdenum </p>
								</li>
								<li>
									<p>Niobium </p>
								</li>
								<li>
									<p>Rhenium</p>
								</li>
								<li>
									<p>Selenium</p>
								</li>
								<li>
									<p>Silicon</p>
								</li>
								<li>
									<p>Strontium</p>
								</li>
								<li>
									<p>Tantalum </p>
								</li>
								<li>
									<p>Tellurium</p>
								</li>
								<li>
									<p>Titanium</p>
								</li>
								<li>
									<p>Tungsten</p>
								</li>
								<li>
									<p>Vanadium </p>
								</li>
								<li>
									<p>Zirconium </p>
								</li>
								<li>
									<p>etc</p>
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