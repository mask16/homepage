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
		<h3>事业介绍</h3>
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
        <h5 class="titStyle5"><b>通过提供钢铁流通经验和最佳服务，追求与顾客双赢。</b></h5>
      </div>
      <div class="steelSummaryImg"></div>
      <div class="conPd">
        <p class="text-style1">
			现代综合金属以汽车材料专业钢厂韩国现代制铁为首，与中国知名钢铁专业企业合作，销售厚板、热轧、冷轧、钢管、型钢、不锈钢等多种钢铁产品。
			特别是通过提供卓越人才的钢铁流通经验和最佳服务，追求与顾客双赢。
		</p>
      </div>
    </div>
  </div>
  <!-- subWrap// -->