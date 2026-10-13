<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.noticeDetail.skin.php
+ Description	: recruit.noticeDetail
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualCustomer">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
        <h3>招聘信息</h3>
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
      <section class="recruitDetailWrap">
        <div class="innerWrap">
          <div class="recruitDetail">
            <div class="detailHeader">
              <h3>
				<?=stripslashes($Info['title'])?>
				<?php if( days_return($Info['endDt']) > 0 ){?>
					<span class="recuritDue c-gray">종료</span>
				<?php }else if( days_return($Info['endDt']) < 0 && days_return($Info['endDt']) > -4 ){?>
					<span class="recuritDue ">D<?=days_return($Info['endDt'])?></span>
				<?php }else{?>
				<?php }?>
              </h3>
              <div>
                <span><?=code_array('site',2,$Info['site'])?></span>
                <span class="recruitCompany"><?=$Info['job']?></span>
                <span class="recruitCompany"><?=$Info['duty']?></span>
              </div>
              <div>
                <span><?=substr($Info['startDt'],0,16)?> ~ <?=substr($Info['endDt'],0,16)?></span>
              </div>
            </div>
			<?=nl2br(stripslashes($Info['content']))?>
            <div class="detailft tac">
              <a href="<?=$url?>" class="btn btn-lg btnLineBlue btn-round">목록</a>
              <a href="https://hyundaiweld.saramin.co.kr/main/index" class="btn btn-lg btnBlue btn-round" target="_blank">지원하기</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  <!-- subWrap// -->