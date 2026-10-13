<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiPower.skin.php
+ Description	: product.bwtsHiPower
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
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Power V использует только электрическую энергию с автономным гидравлическим приводом.
			  <br /><br />
              Использование электрогидравлического привода дает следующие преимущества.<br /><br />

              <p class="bar-text">Стабильное управление клапаном с помощью высокого крутящего момента </p>
              <p class="bar-text">Низкое энергопотребление</p>
              <p class="bar-text">Применимо к различным типам клапанов</p>
              <p class="bar-text">Простота установки, эксплуатации и регулировки</p>
              <p class="bar-text">Доступны взрывозащищенные и невзрывозащищенные модели.</p>
			  <br /><br />
              Hi-Power V может применяться в различных промышленных приложениях, таких как BWTS, береговые / морские установки и водоочистные сооружения. Кроме того, он может заменить существующий электрический, пневматический и гидравлический привод.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hipower_topImg.jpg" alt="" /></div>
          </div>

          <div class="btImg">
            <div class="left">
              <!--<h6>Valve</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg01.jpg" alt="" />
            </div>
            <div class="right">
              <!--<h6>Actuator, Power Pack 등</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg02.jpg" alt="" />
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->