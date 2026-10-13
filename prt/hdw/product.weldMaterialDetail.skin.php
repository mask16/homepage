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
			<p>HYUNDAI WELDING</p>
			<h3>Introdução de Negócios</h3>
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
      <section class="ProductWrap ProductWeldDesc">

        <div class="innerWrap">
          <a href="<?=$host_url?>/product/weldMaterialList" class="backBtn">TODOS OS PRODUTOS</a>
          <h3 class="titStyle5"><b><?=stripslashes($category1['mc_name'])?></b></h3>

          <div class="tabSliderWrap materialTabWrap">
            <div class="swiper-container tabSlider">
              <div class="swiper-wrapper">
<?php for( $i = 0; $i < count($category2); $i++ ){?>
                <div class="swiper-slide <?=($category2[$i]['mc_no']==$cate2)?'on':''?>">
                	<a <?php if($category2[$i]['mc_name_add']){?>class="cate_on"<?php }?> href="<?=$host_url?>/product/weldMaterialDetail?cate=<?=$cate?>&cate2=<?=$category2[$i]['mc_no']?>" style="cursor: pointer;">
						<p>
							<?=stripslashes($category2[$i]['mc_name'])?>
							<?php if($category2[$i]['mc_name_add']){?>
							<br>
							<span class="t<?= $category2[$i]['mc_name_color']; ?>">
							<?=stripslashes($category2[$i]['mc_name_add'])?>
							</span>
							<?php }?>
						</p>
					</a>
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
                    <table class="productTable">
                      <tbody>
                        <tr>
                          <th scope="row">Type</th>
                          <td><?=stripslashes($materials[$i]['textType'])?></td>
                        </tr>
                        <tr>
                          <th scope="row">Industry</th>
                          <td><?=stripslashes($materials[$i]['textIndustry'])?></td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="productTable">
                      <tbody>
                        <tr>
                          <th scope="row">JIS</th>
                          <td><?=stripslashes($materials[$i]['jis'])?></td>
                        </tr>
                        <tr>
                          <th scope="row">EN</th>
                          <td><?=stripslashes($materials[$i]['en'])?></td>
                        </tr>
                        <tr>
                          <th scope="row">KS</th>
                          <td><?=stripslashes($materials[$i]['ks'])?></td>
                        </tr>
                        <tr>
                          <th scope="row">AWS</th>
                          <td><?=stripslashes($materials[$i]['aws'])?></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="DwounbtnArea">
					<?php if( $materials[$i]['fileCatalo_url'] ){?><a href="<?=stripslashes($materials[$i]['fileCatalo_url'])?>" target="_blank">Catalog</a><?php }?>
					<?php if( $materials[$i]['fileMsds1_url'] ){?><a href="<?=stripslashes($materials[$i]['fileMsds1_url'])?>" target="_blank">MSDS</a><?php }?>
					<?php if( $materials[$i]['fileTtr_url'] ){?><a href="<?=stripslashes($materials[$i]['fileTtr_url'])?>" target="_blank">TTR</a><?php }?>
                    </div>
                  </div>
                </div>
                <div class="productDesc02">
                  <ul>
                    <li>
                      <span>Caution</span>
					  <?=nl2br(stripslashes($materials[$i]['caution']))?>
                    </li>
                    <li>
                      <span>Purpose</span>
					  <?=nl2br(stripslashes($materials[$i]['purpose']))?>
                    </li>
                    <li>
                      <span>Attribute</span>
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