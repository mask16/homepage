<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.noticeList.skin.php
+ Description	: recruit.noticeList
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualRecruit">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
        <h3>Careers</h3>
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
      <section class="recruitList">
        <div class="conPd">
          <h5 class="titStyle5"><b>Join us, and practice your creative imaginations with passion at Hyundai Welding.</b></h5>
        </div>
        <div class="innerWrap">
          <div class="searchTab02Wrap">
            <div class="swiper-container searchTab02">
              <div class="swiper-wrapper">
				<div class="swiper-slide">
					<label class="checkBtn" onclick="fm_search('site','')"><input type="checkbox" <?=($site=='')?'checked':''?>><span>View All</span></label>
				</div>
<?php for( $i = 0; $i < count($siteList); $i++ ){?>
				<div class="swiper-slide">
					<label class="checkBtn"><input type="checkbox" <?=($site==$siteList[$i]['code_key'])?'checked':''?> onclick="fm_search('site','<?=$siteList[$i]['code_key']?>')" /><span><?=$siteList[$i]['code_name']?></span></label>
				</div>
<?php }?>
              </div>
            </div>
          </div>

          <div class="searchTab02Wrap">
            <div class="swiper-container searchTab03">
              <div class="swiper-wrapper">
				<div class="swiper-slide">
					<label class="checkBtn" onclick="fm_search('job','')"><input type="checkbox" <?=($job=='')?'checked':''?>><span>View All</span></label>
				</div>
<?php for( $i = 0; $i < count($jobList); $i++ ){?>
				<div class="swiper-slide">
					<label class="checkBtn"><input type="checkbox" <?=($job==$jobList[$i]['code_key'])?'checked':''?> onclick="fm_search('job','<?=$jobList[$i]['code_key']?>')" /><span><?=$jobList[$i]['code_name']?></span></label>
				</div>
<?php }?>
              </div>
            </div>
          </div>

          <div class="searchTab02Wrap">
            <div class="swiper-container searchTab04 swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
				<div class="swiper-slide">
					<label class="checkBtn" onclick="fm_search('duty','')"><input type="checkbox" <?=($duty=='')?'checked':''?>><span>View All</span></label>
				</div>
<?php for( $i = 0; $i < count($dutyList); $i++ ){?>
				<div class="swiper-slide">
					<label class="checkBtn"><input type="checkbox" <?=($duty==$dutyList[$i]['code_key'])?'checked':''?> onclick="fm_search('duty','<?=$dutyList[$i]['code_key']?>')" /><span><?=$dutyList[$i]['code_name']?></span></label>
				</div>
<?php }?>
              </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="tableStyle1">
            <div class="tableHeader">
              <table class="tc">
                <colgroup>
                  <col width="15%">
                  <col width="10%">
                  <col width="15%">
                  <col width="30%">
                  <col width="20%">
                  <col width="10%">
                </colgroup>
                <thead>
                  <tr>
					<th>Company</th>
					<th>Category</th>
					<th>Duty</th>
					<th>Recruitment field</th>
					<th>Application deadline</th>
					<th class="tac">Deadline</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
<?php for( $i = 0; $i < count($ls); $i++ ){?>
				<li class="<?=($ls[$i]['endDt'] < date("Y-m-d H:i:s"))?'recruit-end':''?>">
					<div><span class="mTit"></span><?=code_array('site',2,$ls[$i]['site'])?></div>
					<div><span class="mTit"></span><?=code_array('job',1,$ls[$i]['job'])?></div>
					<div><span class="mTit"></span><?=code_array('duty',1,$ls[$i]['duty'])?></div>
					<div>
						<span class="mTit"></span>
						<a href="<?=$host_url?>/recruit/noticeDetail?seq=<?=$ls[$i]['seq']?>&url=<?=urlencode(REQUEST_URI)?>" class="oneline">
							<b><?=stripslashes($ls[$i]['title'])?></b>
						</a>
					</div>
					<div>
						<span class="mTit"></span>
						<?=str_replace('-','.',substr($ls[$i]['startDt'],0,10))?>
						<span>~</span>
						<?=str_replace('-','.',substr($ls[$i]['endDt'],0,10))?>
					</div>
					<div>
						<span class="mTit"></span>
						<span style="<?=(days_return($ls[$i]['endDt'])<0 && days_return($ls[$i]['endDt'])>-4)?'color:red;':''?>">
							<?=(days_return($ls[$i]['endDt'])>0)?'End':'D'.days_return($ls[$i]['endDt'])?>
						</span>
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

<form name="searchForm" id="searchForm" method="get">
	<input type="hidden" name="site" value="<?=$site?>" />
	<input type="hidden" name="job" value="<?=$job?>" />
	<input type="hidden" name="duty" value="<?=$duty?>" />
</form>

<script type="text/javascript">
	function fm_search(name,value){
		$("#searchForm [name="+name+"]").val(value);
		$("#searchForm").submit();
	}
</script>
