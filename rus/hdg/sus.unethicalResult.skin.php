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
		<p>HYUNDAI GLOVILLE</p>
		<h3>Управление устройчивым развитием</h3>
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
              <p class="text-style1">Шаг №1</p>
              <h4 class="titStyle7"><b>приём заявления</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">Шаг №2</p>
              <h4 class="titStyle7"><b>Расследование</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">Шаг №3</p>
              <h4 class="titStyle7"><b>Заседание Кадрового комитета</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">Шаг №4</p>
              <h4 class="titStyle7"><b>Дисциплинарное взыскание и уведомление</b></h4>
            </div>
          </div>
          <p class="text-style1 c-gray">
			Сообщения о неэтичном поведении будут обрабатываться в указанном выше порядке.
		  </p>
        </div>

        <div class="unethicalResultForm">
        <form name="fm" id="fm" method="post" action="<?=$ActionUrl?>">
          <h5 class="titStyle5"><b>Проверка результатов обработки</b></h5>
          <ul>
            <li>
              <p class="label">Регистрационный номер</p>
              <input type="text" class="inputStyle1 required" name="reportNo" id="reportNo" placeholder="Пожалуйста, введите номер отчета." />
            </li>
            <li>
              <p class="label">Пароль</p>
              <input type="password" class="inputStyle1 required" name="password" id="password" placeholder="Пожалуйста, введите пароль." />
            </li>
          </ul>
          <div class="tac"><button type="button" class="btn btnBlue btn-round" onclick="fm_submit()">Проверка</button></div>
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