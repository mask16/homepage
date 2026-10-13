<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
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
        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-CON是一款smart控制器，在严酷的环境条件下也能稳定运转。 特别是通过包括船级要求的振动/温度、湿度/耐电压测试等环境试验验证了安全性及耐久性的控制器。
			  <br /><br />
              可应用于BWTS、FGSS、SCR等多种自动控制系统，具有以下特点。
			  <br /><br />
              <p class="bar-text">稳定的驾驶环境</p>
              <p class="bar-text">亲和、优化用户的 interface</p>
              <p class="bar-text">提供多种方式的通信连接。</p>
            </div>
          </div>
          <div class="btImg">
            <div class="left"><img src="<?=$skin_url?>/img/content/hicon_btImg01.jpg" alt="" /></div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hicon_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->