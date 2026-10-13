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
			<p>HYUNDAI PNS</p>
			<h3>giới thiệu kinh doanh</h3>
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
      <section class="productDownload04">
        <div class="innerWrap">

          <div class="tableStyle1">
            <div class="tableHeader">
              <table class="thc">
                <colgroup>
                  <col width="10%">
                  <col width="20%">
                  <col width="30%">
                  <col width="20%">
                  <col width="20%">
                </colgroup>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Category</th>
                    <th>Product</th>
                    <th>Catalog</th>
                    <th>User manual</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
<?php for( $i = 0; $i < count($ls); $i++ ){?>
              <li>
                <div><span class="mTit"></span><?=$ls[$i]['no']?></div>
                <div><span class="mTit"></span><b><?=$ls[$i]['tab']?></b></div>
                <div><span class="mTit"></span><?=stripslashes($ls[$i]['title1'])?></div>
                <div><span class="mTit"></span>
                <?php if( $ls[$i]['fileProduct'] ){?>
                	<a href="<?=stripslashes($ls[$i]['fileProduct_url'])?>" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a>
              	<?php }?>
              	</div>
              	<div><span class="mTit"></span>
                <?php if( $ls[$i]['fileBrochures'] ){?>
                	<a href="<?=stripslashes($ls[$i]['fileBrochures_url'])?>" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a>
              	<?php }?>
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
	},
	initialSlide: 4
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