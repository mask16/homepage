<?php
/***************************************************************
+ Page Name		: 
+ Description	: 
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
			<p>HYUNDAI GLOVILLE</p>
        <h3>Направление бизнеса</h3>
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
      <section class="businessGloville innerWrap">
        <div class="conPd">

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Обработка и контроль</b></h6>
              <p class="titStyle5">HYUNDAI<br/>Visibility</p>
            </div>
            <div>
              <p class="">Отслеживание грузов в режиме реального времени за счет систематического обмена информацией с лайнерами и авиакомпаниями</p>
              <p class="">Точное управление расписанием порта отправления и прибытия</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Выделенные Услуги</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SQM</p>
              <b class="c-gray">service quality management</b>
            </div>
            <div>
              <p class="">Работа целевой группы для каждого клиента</p>
              <p class="">Еженедельный обзор обслуживания и качества для каждого клиента (SQI, KPI Report)</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Безопасность логистики</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SSM</p>
              <b class="c-gray">security & safety management</b>
            </div>
            <div>
              <p class="">Работа руководства по безопасности и оперативной группы</p>
              <p class="">Управление регулярным обучением в области безопасности</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>После службы</b></h6>
              <p class="titStyle5">HYUNDAI<br/>CCM</p>
              <b class="c-gray">claim & complaint management</b>
            </div>
            <div>
              <p class="">Управление процессом аварийной аварии / обслуживание на месте / служба посещения грузоотправителя</p>
              <p class="">Опрос удовлетворенности клиентов, анализ жалоб / улучшение</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->