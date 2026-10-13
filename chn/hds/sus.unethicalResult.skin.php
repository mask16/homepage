<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResult.skin.php
+ Description	: sus.unethicalResult.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
        <h3>可持续经营</h3>
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

    <div class="subContent unethicalResult">
      <div class="innerWrap">
        <div class="box">
          <div class="cellWrap">
            <div class="cell">
              <p class="text-style1">STEP 1</p>
              <h4 class="titStyle7"><b>受理举报</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">STEP 2</p>
              <h4 class="titStyle7"><b>调查</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">STEP 3</p>
              <h4 class="titStyle7"><b>召开人事委员会</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">STEP 4</p>
              <h4 class="titStyle7"><b>惩戒及通报</b></h4>
            </div>
          </div>
          <p class="text-style1 c-gray">非伦理申报按以上顺序处理。</p>
        </div>

        <div class="unethicalResultForm">
        <form name="fm" id="fm" method="post" action="<?=$ActionUrl?>">
          <h5 class="titStyle5"><b>处理结果查询</b></h5>
          <ul>
            <li>
              <p class="label">受理编号</p>
              <input type="text" class="inputStyle1 required" name="reportNo" id="reportNo" placeholder="请输入受理编号" />
            </li>
            <li>
              <p class="label">密码</p>
              <input type="password" class="inputStyle1 required" name="password" id="password" placeholder="请输入密码" />
            </li>
          </ul>
          <div class="tac"><button type="button" class="btn btnBlue btn-round" onclick="fm_submit()">查询</button></div>
			<input type="hidden" name="mode" value="" />
			<input type="hidden" name="token" value="" />
			<input type="hidden" name="ReturnUrl" value="<?=$host_url?>/sus/unethicalResultDetail" />
			<input type="hidden" name="url" value="<?=$url?>" />
			<input type="hidden" name="site" value="<?=$shost?>" />
			<input type="hidden" name="lang" value="<?=$schar?>" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->

<script type="text/javaScript">
	//submit
	function fm_submit(){
		// token
		if( !token_check('fm') )	return false;

		//필수항목검수
		if( !fm_check('fm') )	return false;

		$("#fm [name=mode]").val('reportResultSubmit');
		$("#fm").submit();
	}
</script>