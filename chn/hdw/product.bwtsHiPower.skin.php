<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiPower.skin.php
+ Description	: product.bwtsHiPower
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-PowerV是由电动液压发动机驱动的阀门。
			  <br /><br />
              通过使用电液压器，提供以下优点。
			  <br /><br />
              <p class="bar-text">使用高扭矩的稳定阀门控制。</p>
              <p class="bar-text">耗电量少</p>
              <p class="bar-text">可应用于多种阀门</p>
              <p class="bar-text">简单的安装、运转及调节方式</p>
              <p class="bar-text">提供防爆/非防爆模型</p><br /><br />
              Hi-Power V可应用于BWTS、各种陆上Plant、水处理设备等多个领域，可替代现有的电气式、空压式及液压式阀门。
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hipower_topImg.jpg" alt="" /></div>
          </div>

          <div class="btImg">
            <div class="left">
              <!--<h6>Valve</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg01.jpg" alt="" />
            </div>
            <div class="right">
              <!--<h6>Actuator, Power Pack 등</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg02.jpg" alt="" />
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->