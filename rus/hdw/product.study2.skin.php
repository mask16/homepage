<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
				Производство сварочных материалов – область, которая постоянно исследуется и развивается в Hyundai Welding.
			</b>
		  </h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Разработка сварочных материалов</b></h6>
          <div>
            <p class="text-blit">Разработка оптимизированной продукции для сталей, работающих при низких температурах, высокопрочной стали и жаропрочной стали.</p>
            <p class="text-blit">Разработка продуктов специального назначения для судостроения, шельфового строительства, строительства, атомной энергетики и электростанций.</p>
            <p class="text-blit">Разработка инновационных и функциональных продуктов общего назначения, таких как судостроение, стальные конструкции, строительство, тяжелое оборудование и автомобили.</p>
            <p class="text-blit">Отраслевые совместные НИОКР по применению новых марок стали, новых сварочных материалов и новых методов сварки, чтобы предоставить комплексные технологии решения.</p>
            <p class="text-blit">Повышение скорости и эффективности сварки, повышение вязкости, трещиностойкости и экологичности</p>
		  </div>
          <h6 class="titStyle3"><b>Исследование сварочных технологий</b></h6>
          <div>
            <p class="text-blit">Оценка характеристик подачи сварочной проволоки с помощью мониторинга дуги</p>
            <p class="text-blit">Исследование методов повышения производительности путем оценки и анализа механических свойств сварочных материалов.</p>
            <p class="text-blit">Исследование характеристик сварных деталей по параметрам сварки.</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->