<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
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
        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-CON - это интеллектуальный контроллер, разработанный для обеспечения стабильной работы даже в суровых условиях окружающей среды.
			  В частности, Hi-CON доказала свою стабильность и долговечность с помощью различных типов испытаний на окружающую среду, которые требуются классификационным обществом, включая вибрацию, холод / сухой нагрев, выдерживаемое напряжение и любые другие требуемые испытания.
			  <br /><br />
              Hi-CON обеспечивает различные промышленные приложения, такие как BWTS, FGSS, SCR, и имеет следующие особенности.
			  <br /><br />
              <p class="bar-text">Надежная работа</p>
              <p class="bar-text">Индивидуальные и удобные интерфейсы</p>
              <p class="bar-text">Поддержка различных протоколов</p>
			</div>
          </div>
          <div class="btImg">
            <div class="left"><img src="<?=$skin_url?>/img/content/hicon_btImg01.jpg" alt="" /></div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hicon_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->