<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsAbout.skin.php
+ Description	: sus.ethicsAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
        <h3>Sustentabilidad</h3>
      </div>
    </div>
  </section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

    <div class="subContent conPd">
      <section class="susWrap susAbout">

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>Buscamos la honestidad, la justicia y la integridad.</b></p>
          <h3 class="titStyle5"><b>Propósito y necesidad de la gestión ética</b></h3>
        </div>

        <div class="text-style1">
          En consonancia con la nueva era, Hyundai Welding introducirá una "gestión ética" que busca un desempeño de los empleados transparente, justo y razonable.
La gestión de la ética se basa en la noción de que los beneficios a corto plazo no pueden conducir a un crecimiento sostenible. También corrige prácticas irracionales en la empresa, establece los valores de los empleados en el desempeño de sus funciones y cumple con las responsabilidades sociales corporativas. Actualmente, organizaciones internacionales como la OMC, la OCDE y la CPI están presionando por la prevención de la corrupción. UNEF e ISO también están impulsando la estandarización de la gestión ética para aplicar regulaciones de competencia justas y transparentes al comercio internacional. A través de esta nueva estrategia, nos esforzaremos por lograr un desarrollo continuo satisfaciendo la ideología ética de todos los grupos de interés y estableciendo una nueva cultura corporativa. Hyundai Welding finalmente sentará las bases para convertirse en una empresa global de primer nivel del siglo XXI a través de una gestión ética.
        </div>

        <div class="susAboutContent">
            <div class="left">
              <div class="circieBlue circieBlue1">Valores<br />transparentes</div>
              <div class="circieBlue circieBlue2">Desempeño<br />justo</div>
            </div>
            <div class="bar"></div>
            <div class="right">
              <div class="circleBlueLine">Confianza social en<br />la ética corporativa</div>
            </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->