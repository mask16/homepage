<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
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
          <h5 class="titStyle5"><b>Основная сфера деятельности Hyundai Gloville - импортные и экспортные грузовые и внутренние перевозки. В дополнение к этим услугам мы также предоставляем логистические услуги, такие как хранение грузов, экспортная упаковка, ведение бизнеса в аэропорту, транспортировка специальных грузов и многое другое.</b></h5>

          <div class="businessGlovilleWrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Импорт/Экспорт/Внутренние грузоперевозки</b></h6>
              <p class="text-blit">Импорт и  экспорт LCL/FCL грузов воздушным, морским транспортом</p>
              <p class="text-blit">Услуги внутренних грузоперевозок (корпоративная логистика)</p>
              <p class="text-blit">Специальные грузоперевозки: Крупные производственные предприятия, холодильные склады, экспонаты</p>
              <p class="text-blit">Проектный груз</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>3PL / складское хранение</b></h6>
              <p class="text-blit">Управление запасами, управление хранением, транспортировка, проверка, упаковка и т. Д.</p>
              <p class="text-blit">Услуги складского хранения для основных распределительных центров по всей стране</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>Аэропорт / портовая промышленность</b></h6>
              <p class="text-blit">Трансфер из аэропорта / транспорт ULD</p>
              <p class="text-blit">Управление складским хранением, приемкой и экспедированием</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>Упаковка для экспортных грузов</b></h6>
              <p class="text-blit">Современное упаковочное оборудование и рабочая среда (Герметичная упаковка, SKID, вакуумная упаковка и т. Д.) </p>
              <p class="text-blit">Снижение затрат клиентов на логистику за счет системной интеграции от упаковки до транспортировки</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville04.png" alt="" /></div>

            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->