<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.weldMaterialDetail.skin.php
+ Description	: product.weldMaterialDetail
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI PNS</p>
		<h3>Geschäftseinführung</h3>
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
      <section class="ProductWrap ProductWeldDesc">

        <div class="innerWrap">
          <a href="<?=$host_url?>/product/weldMaterialList" class="backBtn">ALL PRODUCT</a>
          <h3 class="titStyle5"><b><?=stripslashes($category1['mc_name'])?></b></h3>

          <div class="tabSliderWrap">
            <div class="swiper-container tabSlider">
              <div class="swiper-wrapper">
<?php for( $i = 0; $i < count($category2); $i++ ){?>
                <div class="swiper-slide <?=($category2[$i]['mc_no']==$cate2)?'on':''?>">
                	<a href="<?=$host_url?>/product/weldMaterialDetail?cate=<?=$cate?>&cate2=<?=$category2[$i]['mc_no']?>" style="cursor: pointer;"><?=stripslashes($category2[$i]['mc_name'])?></a>
                </div>
<?php }?>
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>

          <div class="toggleConWrap">
<?php for( $i = 0; $i < count($materials); $i++ ){?>
            <div id="toggleContent<?=$materials[$i]['seq']?>" class="toggleContent <?=($materials[$i]['seq']==$productSeq)?'open':''?>">
              <h4><?=stripslashes($materials[$i]['productName'])?></h4>
              <div class="toggleSlide" <?=($materials[$i]['seq']==$productSeq)?'style="display: block;"':''?>>
                <div class="productDesc01">
                  <div class="productImg">
				    <img src="<?=stripslashes($materials[$i]['fileImage_url'])?>" />
                  </div>
                  <div class="productInfo">
                    <p class="pTit"><b><?=stripslashes($materials[$i]['categoryL2Nm'])?></b> <span><?=stripslashes($materials[$i]['productName'])?></span></p>
					<div class="DwounbtnArea">
                      <?php if($materials[$i]['fileCatalo_url']){?><a href="<?=stripslashes($materials[$i]['fileCatalo_url'])?>" target="_blank">Catalog</a><?php }?>
					  <?php if($materials[$i]['fileMsds1_url']){?><a href="<?=stripslashes($materials[$i]['fileMsds1_url'])?>" target="_blank">User manual</a><?php }?>
                    </div>
                  </div>
                </div>
                <div class="productDesc02">
                  <ul>
                    <li>
                      <span>Features</span>
					  <?=nl2br(stripslashes($materials[$i]['caution']))?>
                    </li>
                    <li>
                      <span>Configuration<br>and Option</span>
					  <?=nl2br(stripslashes($materials[$i]['purpose']))?>
                    </li>
                    <li>
                      <span>Specifications</span>
					  <?=nl2br(stripslashes($materials[$i]['attribute']))?>
                    </li>
                  </ul>
                </div>
                <div class="productDesc03">
                  <img src="<?=stripslashes($materials[$i]['fileDiscription_url'])?>" />
                </div>
              </div>
            </div>
            <!-- toggleContent// -->
<?php }?>
          </div>
       	  <!-- toggleConWrap// -->
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

  <script>
    var swiper = new Swiper('.tabSlider', {
      slidesPerView: 'auto',
      spaceBetween: 0,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    $('.tabSlider .swiper-slide').click(function() {
      $(this).addClass('on');
      $(this).siblings('.swiper-slide').removeClass('on');
    });

    $('.toggleContent h4').click(function(){
      $(this).parents('.toggleContent').toggleClass('open');
      $(this).siblings('.toggleSlide').slideToggle();
      $(this).parents('.toggleContent').siblings('.toggleContent').removeClass('open');
      $(this).parents('.toggleContent').siblings('.toggleContent').children('.toggleSlide').slideUp();
    });
  </script>