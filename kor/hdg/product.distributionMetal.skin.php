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
				<img class="img pc" src="<?=$skin_url?>/img/content/distributionMetal_img01.png" />
				<img class="img mo" src="<?=$skin_url?>/img/content/distributionMetal_img01_m.png" />
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">금속가공유</h1>
				<hr class="line" />
				<!-- <p class="conBox-txt">절삭유는 금속 가공유로  절삭가공 시 공구수명 향상, 정밀도 향상, 가공속도의 상승을 위해 공구와 소재 사이에 공급 하여 사용하는 윤활유입니다.<br><br>
				절삭유는 가공의 특성에 따른 다양한 제품이 제조 되고 있습니다. 절삭유에는 가공 조건 및 현장의 특성에 부합하도록 각종 첨가제를 포함하고 있으며이에 따라 절삭유의 종류와 특성이 결정 되게 됩니다.<br><br>
				절삭유는 크게 수용성 및 비 수용성 제품 으로 구분할 수 있습니다.  수용성 절삭유는 제품은 Emulsion type, Semi-synthetic type, Synthetic type으로 분류되고 있으며. 비수용성 절삭유는 극압 첨가제 함유 여부 및 사용 용도에 따라 구분할 수 있습니다.
				</p> -->
				<ul class="conBox-menu">
					<a href="<?=$ThisUrl?>?sub=1">
						<li>
							<p>절삭유</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=2">
						<li>
							<p>방청유</p>
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