<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/support.newsDetail.skin.php
+ Description	: support.newsDetail
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualCustomer">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
        <h3>Service client</h3>
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
      <section class="customerSupport">
        <div class="innerWrap">
          <div class="supportList">
            <ul>
<?php for( $i = 0; $i < count($ls); $i++ ){?>
              <li>
                <a href="<?=$host_url?>/support/newsDetail?seq=<?=$ls[$i]['seq']?>&url=<?=urlencode(REQUEST_URI)?>">
                  <span class="noticeBg" style="background-image:url(<?=stripslashes($ls[$i]['fileImage_url'])?>)"></span>
                  <span class="noticeText">
                    <span class="noticeTit"><?=stripslashes($ls[$i]['title'])?></span>
                    <span class="noticeDate"><?=stripslashes($ls[$i]['newsDt'])?></span>
                    <span class="moreBtn icoMotion">Plus d'info <i class="ico ico-arrow"></i></span>
                  </span>
                </a>
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
