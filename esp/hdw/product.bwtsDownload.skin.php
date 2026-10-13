<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsDownload.skin.php
+ Description	: product.bwtsDownload
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Negocio</h3>
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
      <section class="BWTSDownload02">
        <div class="innerWrap">
          <div class="tabSliderWrap">
            <div class="swiper-container tabSlider">
              <div class="swiper-wrapper">
                <div class="swiper-slide <?=($tab=="브로셔")?'on':''?>"><a href="<?=$host_url?>/product/bwtsDownload?tab=브로셔">El folleto</a></div>
                <div class="swiper-slide <?=($tab=="인증현황")?'on':''?>"><a href="<?=$host_url?>/product/bwtsDownload?tab=인증현황">El estado de la autenticación </a></div>
                <div class="swiper-slide <?=($tab=="기타")?'on':''?>"><a href="<?=$host_url?>/product/bwtsDownload?tab=기타">Etcétera</a></div>
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>


          <div class="tableStyle1">
            <div class="tableHeader">
              <table class="thc">
                <colgroup>
                  <col width="10%">
                  <col width="70%">
                  <col width="20%">
                </colgroup>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>TYPE</th>
                    <th>DOWNLOAD</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
<?php for( $i = 0; $i < count($download); $i++ ){?>
              <li>
                <div><span class="mTit"></span><?=$download[$i]['no']?></div>
                <div><span class="mTit"></span><?=stripslashes($download[$i]['title'])?></div>
                <div><span class="mTit"></span>
                	<a href="<?=stripslashes($download[$i]['fileExcel_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a>
              	</div>
              </li>
<?php }?>
            </ul>
          </div>

          <div class="pagerWrap">
            <ul>
              <?=get_paging(5,$page,$total_page,'?'.$qstr.'&amp;page=')?>
            </ul>
          </div>

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
        }
      });


      $('.tabSlider .swiper-slide').click(function() {
        $(this).addClass('on');
        $(this).siblings('.swiper-slide').removeClass('on');
      });
    </script>