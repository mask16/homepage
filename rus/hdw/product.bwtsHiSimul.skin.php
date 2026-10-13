<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K - это тренажер для обучения операторов, который предоставляет пользователям опыт работы с системой, аналогичный бортовым условиям, за счет виртуального внедрения системы HiBallast и имеет следующие основные особенности.
			  <br /><br />

              <p class="bar-text">Обеспечить реальное рабочее состояние HiBallast с судовой системой</p>
              <p class="bar-text">Повышение способности пользователя справляться с любыми обстоятельствами за счет применения различных режимов сценария.</p>
              <p class="bar-text">Реалистичный мониторинг измеренных значений датчика за счет применения реалистичных условий и многомерной модели оценки</p>
              <p class="bar-text">Создавайте различные ситуации, регулируя настройки работы</p>
              <p class="bar-text">Поддержка онлайн образовани я</p>
              <p class="bar-text">Доступно дистанционное обучение</p>
			</div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->