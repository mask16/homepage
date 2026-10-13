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
			<p>HYUNDAI GLOVILLE</p>
			<h3>HWBC</h3>
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
          <h3 class="titStyle5">
			<b>
				Les damos una sincera bienvenida al sitio web de Hyundai Gloville.
			</b>
		</h3>
        </div>
        <div class="text-style1">
          Nuestra empresa continúa desafiando e innovando todo lo que conectamos bajo la misión de maximizar el valor del cliente mejorando la eficiencia logística y la capacidad de servicio.
		  <br /><br />
        Hoy en día, nuestros ejecutivos y empleados invierten y hacen todo lo posible para brindarles a los clientes la mejor satisfacción al sugerir soluciones logísticas personalizadas para estar a la altura de los cambios de la 4ta Revolución Industrial.
		  <br /><br />
          La cultura corporativa de nuestra empresa es "realizar el desempeño de la gestión y crear nuevos valores para que los clientes, socios comerciales y empleados busquen la prosperidad compartida y realicen apasionadamente su imaginación creativa para convertirse en la mejor empresa".
		  <br /><br />
          Continuaremos asegurando nuevos motores de crecimiento y gestionando las responsabilidades para ser una empresa de logística global.
		  <br /><br />
          Continuarán los desafíos para aumentar el valor para el cliente. Les ped su interés y aliento.
		  <br /><br />
          Gracias

          <p class="tar ceoName">CEO <span>Dae Hoan Oh</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->