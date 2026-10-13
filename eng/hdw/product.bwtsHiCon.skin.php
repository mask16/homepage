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
			<h3>Business Introduction</h3>
		</div>
	</div>
</section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">
      <div class="innerWrap">

      <!-- Hi-CON - ENG -->
      <!-- URL: https://www.hyundaiwelding.com/eng/hdw/product/bwtsHiCon -->
      <div class="sr-only">
        <h1>Providing customized control cabinet for any system</h1>
        <h2>Stable and compatible with various Modbus field networks</h2>
        <h3>Compact and flexible configuration with Remote IO</h3>
      </div>


        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              It provides various industrial field applications for such as BWTS,  FGSS, SCR, and any other plant or factory automation systems.   <br />
              In addition, it can replace the existing control system with the  flexible configuration, as an optimized and efficient solution.
              <br /><br />
              <b style="color:#12357d; font-weight:900;">This smart controller provides</b>
              <p class="bar-text">Reliable operation</p>
              <p class="bar-text">Customized and user-friendly interfaces</p>
              <p class="bar-text">Connections with various field bus</p>
              <p class="bar-text">Full support of IEC 61131-3</p>
              <p class="bar-text">Support various protocols</p>
              <p class="bar-text">Compact and flexible configuration  with remote I/O</p>
            </div>
          </div>
          <div class="btImg">
            <div style="text-align: center;"><img src="<?=$skin_url?>/img/content/hicon_btImg_n.png" alt="" style="width: 60%; height: auto;"/></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->