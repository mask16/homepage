<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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

    <div class="subContent">
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>现代综合金属在不断研究并发展的领域</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>焊接材料开发</b></h6>
          <div>
            <p class="text-blit">对低温钢、高强度钢、耐热钢等最适合的产品开发</p>
            <p class="text-blit">造船、海洋、建设、核能、发电设备用特殊功能性产品开发</p>
            <p class="text-blit">造船、钢构、建设、重装备、汽车等对常规产品的创新功能化产品开发</p>
            <p class="text-blit">为了适用新的钢种、新的焊接材料、新的焊接法，业界共同研究开发并提供Total solution技术</p>
            <p class="text-blit">提高焊接速度及效率，高韧性、耐裂纹、环保</p>
          </div>
          <h6 class="titStyle3"><b>焊接技术研究</b></h6>
          <div>
            <p class="text-blit">通过监测电弧，评价焊丝的送丝特性</p>
            <p class="text-blit">通过焊接材料的机械特性评价及分析，研究能提高性能的方法</p>
            <p class="text-blit">根据焊接参数，研究焊接部特性</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->