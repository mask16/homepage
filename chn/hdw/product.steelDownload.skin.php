<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.steelDownload.skin.php
+ Description	: product.steelDownload
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
      <section class="steelDownload">
        <div class="innerWrap">

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
                    <th>종류</th>
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
				<?php if( $download[$i]['fileImage'] ){?>
                	<a href="<?=stripslashes($download[$i]['fileImage_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a>
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
