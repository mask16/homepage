<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
             Hi-Simul K是以HiBallast系统实现为假想，为用户提供与船上类似条件的系统驾驶经验的教育用simulation设备，具有以下主要特征。
			 <br /><br />

              <p class="bar-text">提供与船上相似的条件的系统运行环境;</p>
              <p class="bar-text">通过演绎非正常驾驶情况，提高用户应付情况能力（剧本模式）</p>
              <p class="bar-text">通过与实际相同的条件和高层次推测模型，实现现实的传感器计测值监测</p>
              <p class="bar-text">手动操作运行数据，可演绎出用户想要的各种情况</p>
              <p class="bar-text">可在线训练</p>
              <p class="bar-text">可提供远程教育</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->