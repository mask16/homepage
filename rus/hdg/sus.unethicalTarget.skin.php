<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
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

    <div class="subContent">
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1">
				<b>
					Руководители и сотрудники должны отчитываться в соответствии с руководящими принципами этического менеджмента, но если они не указаны в тексте или если существует возможность противоречивых мнений по поводу толкования, обратитесь в Офис Управлению Этикой менеджмента. Компания управляет различными каналами внутренней отчетности, так что этическое управление может быть реализовано. Отчетность будет вестись на настоящее имя.
				</b>
			</p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Растрата и взяточничество</b></span>
                <span class="text-style2">Присвоение денег компании или получение денег, товаров или развлечений от внешних заинтересованных сторон в связи с работой.</span>
                <span class="text-style2">Уголовное преследование и увольнение могут быть пересмотрены в актах хищения и получения незаконных денег, связанных с компанией, которые могут привести или не привести к недостаткам компании</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Домогательства на рабочем месте</b></span>
                <span class="text-style2">Умышленное использование превосходства или авторитета для причинения физической или психической боли другим сотрудникам или ухудшение обстановки в офисе путем насилия или оскорбительных выражений.</span>
                <span class="text-style2">Дисциплинарные меры, такие как увольнение, могут быть рассмотрены в зависимости от тяжести дела</span>
			  </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Сексуальные домогательства на работе</b></span>
                <span class="text-style2">Совершение нежелательных и неуместных сексуальных замечаний или физических домогательств на рабочем месте или в другой профессиональной или социальной ситуации</span>
                <span class="text-style2">Нарушение сексуального домогательства не будет допускаться, независимо от того, было ли оно преднамеренным, случайным или во время употребления алкоголя</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Другое Неэтичное Поведение</b></span>
                <span class="text-style2">Подлежит сообщению о нарушениях этического управления</span>
                <span class="text-style2">Действия, которые нарушают Кодекс этики и Практические рекомендации, или которые считаются незаконными или неэтичными</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
