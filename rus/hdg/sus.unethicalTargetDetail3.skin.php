<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail3.skin.php
+ Description	: sus.unethicalResultDetail3.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI SUPERTECK</p>
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

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">Перейти на страницу отчета для неэтичного поведения</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>Сексуальные домогательства на работе</b></h5>
            <p class="bar-text">Совершение нежелательных и неуместных сексуальных замечаний или физических домогательств на рабочем месте или в другой профессиональной или социальной ситуации</p>
            <p class="bar-text">Нарушение сексуального домогательства не будет допускаться, независимо от того, было ли оно преднамеренным, случайным или во время употребления алкоголя</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Подлежать сообщению о нарушениях этического менеджмента</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Физический контакт, прикосновение к определенным частям тела и т. д.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Сексуальные метафоры и шутки, оценки внешнего вида и т. д.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Умышленное распространение информации сексуального содержания</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Принуждение или примирение сексуальных отношений, телефонные звонки непристойного содержания и т. д.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Показ порнографических изображений, таких как картинки, граффити и т. д.</p></div>

                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
