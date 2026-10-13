<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
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
      <section class="susWrap susCharter">

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>Buscamos la honestidad, la justicia y la integridad.</b></p>
          <h3 class="text-style1"><b>Con la visión de implementar la mejor gestión y creación de valor (BESCOM: Best Company) que una empresa pueda llevar a cabo, Hyundai Welding creará una cultura corporativa moderna que busque la prosperidad conjunta entre los stakeholders y la comunidad.</b></h3>
        </div>

        <div class="susCharterContent">
          <div class="left">
            <div class="circle">BESCOM</div>
          </div>
          <div class="right">
            <div class="circle">
              <h6><span>Mejo</span>r <span>em</span>presa</h6>
              <p style="font-size:1.2em"> Crear el mejor rendimiento<br />y valor de gestión que<br />una empresa puede implementar</p>
            </div>
          </div>
        </div>

        <p class="text-style1">Por lo tanto, la Carta de Gestión Ética está establecida para que los empleados de Hyundai Welding la utilicen como un estándar para el comportamiento adecuado y el juicio de valor.</p>

        <div class="susCharterText">
          <p class="num-text"><span>1. </span>Buscamos establecer un crecimiento compartido con los clientes contribuyendo a la creación de valor de nuestros clientes y recopilando activamente sus quejas y comentarios.</p>
          <p class="num-text"><span>2. </span>Compensamos activamente a los empleados exitosos y creamos un ambiente de trabajo donde se fomentan los desafíos y las innovaciones.</p>
          <p class="num-text"><span>3. </span>Nos respetamos unos a otros y creamos un ambiente laboral sano y ético.</p>
          <p class="num-text"><span>4. </span>Creamos una cultura corporativa sólida mediante la competencia leal con los competidores y el comercio justo con nuestros proveedores.</p>
          <p class="num-text"><span>5. </span>Cumplimos con las obligaciones legales y practicamos una gestión racional y transparente.</p>
          <p class="num-text"><span>6. </span>Contribuimos a la comunidad local cumpliendo con nuestras responsabilidades y obligaciones sociales corporativas, cumpliendo con las regulaciones ambientales y ayudando a prevenir la contaminación ambiental.</p>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->