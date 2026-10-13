<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.download.skin.php
+ Description	: product.download
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
        <h3>事业领域</h3>
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
      <section class="productDownload">
        <div class="innerWrap">

          <div class="tableStyle1">
            <div class="tableHeader">
              <table class="">
                <colgroup>
                  <col width="10%">
                  <col width="70%">
                  <col width="20%">
                </colgroup>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Type</th>
                    <th>下载</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
	<?php for( $i = 0; $i < count($ls); $i++ ){?>
              <li>
                <div><b><?=$ls[$i]['no']?></b></div>
				<div><?=stripslashes($ls[$i]['title'])?></div>
				<div><span class="mTit"></span><a href="<?=stripslashes($ls[$i]['fileImage_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">下载 <i class="ico ico-downloadBlue"></i></a></div>
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

    $('.toggleContent h4').click(function() {
      $(this).parents('.toggleContent').toggleClass('open');
      $(this).siblings('.toggleSlide').slideToggle();
      $(this).parents('.toggleContent').siblings('.toggleContent').removeClass('open');
      $(this).parents('.toggleContent').siblings('.toggleContent').children('.toggleSlide').slideUp();
    });
  </script>