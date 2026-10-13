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
<?php if( $tab == 'Approval Status / Product Catalog' ){?>
      <section class="productDownload01">
<?php }else if( $tab == '브로셔' ){?>
      <section class="productDownload02">
<?php }else if( $tab == 'MSDS' ){?>
      <section class="productDownload03">
<?php }else if( $tab == '인증현황' ){?>
      <section class="productDownload04">
<?php }?>
        <div class="innerWrap">
          <div class="tabSliderWrap">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide <?=($tab=='Approval Status / Product Catalog')?'on':''?>"><a href="<?=$host_url?>/product/download?tab=Approval Status / Product Catalog"><?=code_array('download_hdw1',1,'Approval Status / Product Catalog')?></a></div>
                <div class="swiper-slide <?=($tab=='브로셔')?'on':''?>"><a href="<?=$host_url?>/product/download?tab=브로셔"><?=code_array('download_hdw1',2,'브로셔')?></a></div>
                <div class="swiper-slide <?=($tab=='MSDS')?'on':''?>"><a href="<?=$host_url?>/product/download?tab=MSDS"><?=code_array('download_hdw1',2,'MSDS')?></a></div>
                <div class="swiper-slide <?=($tab=='인증현황')?'on':''?>"><a href="<?=$host_url?>/product/download?tab=인증현황"><?=code_array('download_hdw1',2,'인증현황')?></a></div>
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
<?php if( $tab == 'Approval Status / Product Catalog' ){?>
          <div class="productDownload01-list">
            <ul>
	<?php for( $i = 0; $i < count($download); $i++ ){?>
              <li>
                <div><b><?=$download[$i]['years']?></b></div>
                <div><a href="<?=stripslashes($download[$i]['fileApproval_url'])?>" target="_blank">Approval <span>Status</span><i class="ico ico-downloadBlue"></i></a></div>
                <div><a href="<?=stripslashes($download[$i]['fileProduct_url'])?>" target="_blank">Product <span>Catalog</span><i class="ico ico-downloadBlue"></i></a></div>
              </li>
	<?php }?>
            </ul>
          </div>
          <div class="pagerWrap">
            <ul>
              <?=get_paging(5,$page,$total_page,'?'.$qstr.'&amp;page=')?>
            </ul>
          </div>
<?php }?>
<?php if( $tab == '브로셔' ){?>
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
                    <th>门类</th>
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
                <div><span class="mTit"></span><?=stripslashes($download[$i]['title1'])?></div>
                <div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileBrochures_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a></div>
              </li>
	<?php }?>
            </ul>
          </div>

          <div class="pagerWrap">
            <ul>
              <?=get_paging(5,$page,$total_page,'?'.$qstr.'&amp;page=')?>
            </ul>
          </div>
<?php }?>
<?php if( $tab == 'MSDS' ){?>
          <div class="subSearchBox">
		  <form name="searchForm" id="searchForm" method="get">
            <input type="text" name="stx" value="<?=$stx?>" placeholder="请输入搜索词。">
			<input type="hidden" name="tab" value="<?=$tab?>">
            <button type="submit"><i class="ico ico-search"></i></button>
		  </form>
          </div>
          <div class="tableStyle1">
            <div class="tableHeader">
              <table class="thc">
                <colgroup>
                  <col width="7%">
                  <col width="15%">
                  <col width="21%">
                  <col width="15%">
                  <col width="21%">
                  <col width="7%">
                  <col width="7%">
                  <col width="7%">
                </colgroup>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Product</th>
                    <th>AWS</th>
                    <th>JIS</th>
                    <th>EN</th>
                    <th>CATALOG</th>
                    <th>MSDS</th>
                    <th>TTR</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
	<?php for( $i = 0; $i < count($materials); $i++ ){?>
              <li>
                <div><span class="mTit"></span><?=$materials[$i]['no']?></div>
                <div><span class="mTit"></span><b><?=stripslashes($materials[$i]['productName'])?></b></div>
                <div><span class="mTit">AWS</span><?=stripslashes($materials[$i]['aws'])?></div>
                <div><span class="mTit">JIS</span><?=stripslashes($materials[$i]['jis'])?></div>
                <div><span class="mTit">EN</span><?=stripslashes($materials[$i]['en'])?></div>
                <div><span class="mTit"></span>
					<?php if( $materials[$i]['fileCatalo'] ){?><a href="<?=stripslashes($materials[$i]['fileCatalo_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray icoOnly"><span>CATALOG</span> <i class="ico ico-downloadBlue"></i></a><?php }?>
                </div>
                <div><span class="mTit"></span>
                	<?php if( $materials[$i]['fileMsds1'] ){?><a href="<?=stripslashes($materials[$i]['fileMsds1_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray icoOnly"><span>MSDS</span> <i class="ico ico-downloadBlue"></i></a><?php }?>
                </div>
                <div><span class="mTit"></span>
                	<?php if( $materials[$i]['fileTtr'] ){?><a href="<?=stripslashes($materials[$i]['fileTtr_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray icoOnly"><span>TTR</span> <i class="ico ico-downloadBlue"></i></a><?php }?>
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
<?php }?>
<?php if( $tab == '인증현황' ){?>
		  <div class="tableStyle1">
            <div class="tableHeader">
              <table class="thc">
                <colgroup>
                  <col width="10%">
                  <col width="30%">
                  <col width="15%">
                  <col width="25%">
                  <col width="20%">
                </colgroup>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>门类</th>
                    <th>船级</th>
                    <th>备注</th>
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
                <div><span class="mTit"></span><b><?=stripslashes($download[$i]['title1'])?></b></div>
                <div><span class="mTit">船级</span><?=stripslashes($download[$i]['classification'])?></div>
                <div><span class="mTit">비고</span><?=stripslashes($download[$i]['content'])?></div>
                <div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileCertification_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a></div>
              </li>
	<?php }?>
            </ul>
          </div>
          <div class="pagerWrap">
            <ul>
              <?=get_paging(5,$page,$total_page,'?'.$qstr.'&amp;page=')?>
            </ul>
          </div>
<?php }?>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
  <!--<%@ include file="/WEB-INF/jsp/hdw/include/footer.jsp" %>-->
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