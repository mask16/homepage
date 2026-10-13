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
		<p>HYUNDAI PNS</p>
		<h3>客户支持</h3>
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
          <div class="supportDetail">
            <div class="detailHeader">
              <h3><?=stripslashes($Info['title'])?></h3>
              <p><?=$Info['newsDt']?></p>
            </div>
            <div class="detailBody">
              <?=nl2br(stripslashes($Info['content']))?>
            </div>
            <div class="detailft tac">
              <a href="<?=$url?>" class="btn btnLineBlue btn-round">目录</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
