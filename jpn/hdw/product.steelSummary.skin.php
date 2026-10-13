<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.steelSummary.skin.php
+ Description	: product.steelSummary
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
		<h3>事業紹介</h3>
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

	<div class="subContent steelSummary">
      <div class="conPd">
        <h5 class="titStyle5">
			<b>
				鉄鋼流通経験と最適なサービスの提供と通し、顧客とのWIN-WINを追求しています
			</b>
		</h5>
      </div>
      <div class="steelSummaryImg"></div>
      <div class="conPd">
        <p class="text-style1">
			現代綜合金属は自動車素材専門製鉄所である韓国の現代製鉄を含め、中国に所在する世界有数の鉄鋼専門企業と協業を行い、厚板、熱延、冷延、鋼管、H型鋼、ステンレスなど様々な鉄鋼品目を取り扱っています特に優秀な人材たちの鉄鋼流通経験と最適化されたサービスの提供を通して、顧客とのWIN-WINを追求しています
		</p>
      </div>
    </div>
  </div>
  <!-- subWrap// -->