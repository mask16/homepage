<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study3.skin.php
+ Description	: product.study3
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
			<p>HYUNDAI PNS</p>
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>В этом направлении в исследовательском центре Hyundai PNS разрабатывается сварочный аппарат.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Направление развития</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Стабильность продукта</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Разработка системы, независимой от изменений внешней среды, таких как высокая температура, высокая влажность и пыль.</p>
              <p class="text-blit">Отличная долговечность и удержание ( Долговечность и износостойкость)</p>
              <p class="text-blit">Принять функцию множественной защиты (Разработка функций защиты оборудование от влаги, пыли, внешних воздействий)</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Высокая функциональность</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Разработка технологии сварки цветных металлов с использованием различных методов импульсного управления, таких как SAC и SPC. SAC (контроль поверхностной дуги), SPC (контроль поверхностных импульсов)</p>
              <p class="text-blit">Разработка и стабилизация сверхточной инверторной сварочной системы SAW</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Высокая эффективность</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Высокоскоростное переключение и плавное переключение Инверторная система с полным мостовым управлением обеспечивает КПД более 90%</p>
              <p class="text-blit">Оптимизация эффективности использования электроэнергии за счет минимизации резервной мощности</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Индивидуальная разработка</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Разработка Self Shield EGW для резервуаров для хранения растений</p>
              <p class="text-blit">Разработка высокопрочных FCW</p>
              <p class="text-blit">Разработка сварочного материала для стали S500, S550, S690 для морских сооружений.</p>
              <p class="text-blit">Разработка сварочных материалов для новых сварочных процессов, таких как автоматизация, высокая эффективность, высокая скорость и малый вес.</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->