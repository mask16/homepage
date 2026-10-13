<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI PNS</p>
			<h3>Introducción de empresa</h3>
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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>Les damos una sincera bienvenida al sitio web de Hyundai PNS.</b></h3>
        </div>
        <div class="text-style1">
			Hyundai PNS se estableció el 20 de marzo de 2020 al dividirse en Hyundai Welding Co., Ltd. para mejorar la eficiencia de la gestión al fortalecer aún más la experiencia del negocio de equipos de soldadura y preparar una base tecnológica para responder rápidamente a los rápidos cambios del mercado.
			<br><br>
			Hyundai PNS ha producido máquinas de soldadura SCR digitales en 2007 y máquinas de soldadura con inversor digital en 2013 mediante investigación y desarrollo continuos durante 25 años desde el establecimiento de la división de máquinas de soldadura en 1995. En 2019, desarrollamos la serie Hi, una máquina de soldadura premium y distribuimos a todas las áreas comerciales principales, inclyuendo la construcción naval y la planta.
			<br><br>
			Además, estamos liderando el desarrollo y la localización de nuevas tecnologías mediante la cooperación con los mejores institutos de investigación en cada campo para asegurar la mejor tecnología del mundo. Siempre operamos un centro de I + D para suministrar equipos de soldadura optimizados para las necesidades de los sitios industriales y nos esforzamos por desarrollar productos que satisfagan las necesidades del cliente.
			<br><br>
			Hyundai PNS continuará poniendo la satisfacción del cliente como nuestra máxima prioridad. Siempre haremos nuestro mejor esfuerzo para convertirnos en una empresa que valora y realiza sueños más grandes con nuestros clientes, enfocándonos en una gestión orientada al cliente y un espíritu de desafío para el futuro.
			<br><br>
			Agradecemos sinceramente a nuestros clientes y esperamos su interés y apoyo. 
          <!-- <p class="tar ceoName">CEO <span>Byungmook Bae</span></p> -->

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->