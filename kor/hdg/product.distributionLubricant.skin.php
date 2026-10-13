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
		<h1 class="title">유통</h1>
			<!-- conBox -->
			<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<img class="img pc" src="<?=$skin_url?>/img/content/distributionLubricant_img01.png" />
				<img class="img mo" src="<?=$skin_url?>/img/content/distributionLubricant_img01_m.png" />
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">산업용 윤활유</h1>
				<hr class="line" />
				<p class="conBox-txt">유압작동유, 기계유, 기어유, , 습동면유, 압축기유, 터빈유 등 세계적 수준의 기술력으로 고도로 정제된 아주 높은 기유 및 원자재를 사용하여 제조한 제품으로 환경과 사람을 생각하고, 장비 안정화에도 기여한 윤활유 입니다.</p>
				<ul class="conBox-menu">
					<a href="<?=$ThisUrl?>?sub=1">
						<li>
							<p>유압작동유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=2">
						<li>
							<p>기어유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=3">
						<li>
							<p>습동면유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=4">
						<li>
							<p>스핀들유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=5">
						<li>
							<p>압축기유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=6">
						<li>
							<p>기계유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=7">
						<li>
							<p>터빈유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=8">
						<li>
							<p>그리스</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
				</ul>
			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->