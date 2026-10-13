<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsList.skin.php
+ Description	: product.bwtsList
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>giới thiệu kinh doanh</h3>
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
      <div class="conPd">
        <h5 class="titStyle5"><b>Hyundai Welding cung cấp hệ thống xử lý nước cân bằng tàu tốt nhất theo thỏa thuận quản lý nước cân bằng tàu để bảo vệ môi trường biển.</b></h5>
      </div>
      <div class="innerWrap">
        <ul class="c-bwtsProductList">
          <li class="bwtsProductList-hiballast">
            <a href="<?=$host_url?>/product/bwtsHiBallast">
              <img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" />
            </a>
          </li>
          <li class="bwtsProductList-ecoballast">
            <a href="<?=$host_url?>/product/bwtsEcoBallast">
              <img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" />
            </a>
          </li>
          <li class="bwtsProductList-hipowe">
            <a href="<?=$host_url?>/product/bwtsHiPower">
              <img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" />
            </a>
          </li>
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiSimul">
              <img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" />
            </a>
          </li>
          <li class="bwtsProductList-hicon">
            <a href="<?=$host_url?>/product/bwtsHiCon">
              <img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" />
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
  <!-- subWrap// -->