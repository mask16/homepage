<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
				Центр исследований и разработок (Технологический научно-исследовательский институт) машинного отделения Hyundai Welding специализируется на разработке и исследованиях морского оборудования для сохранения морской среды на основе экологически чистой технологии обработки.
			</b>
		  </h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            Мы разрабатываем материалы нерастворимых электродов (DSA) посредством практических электрохимических исследований, высокоэффективного электролизера, электрогидравлического клапана и интеллектуальной системы управления.
			<br>
			Мы стремимся получить оптимальные результаты, используя различные методы компьютерного моделирования и проектирования, такие как анализ потока одно- и многофазной жидкости с использованием моделирования вычислительной гидродинамики (CFD), теплового потока и анализа производительности, а также проектирования трубопроводов (3D-моделирование). На основе этих технологий мы проводим исследования, чтобы оптимизировать конструкцию и повысить эффективность системы.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->