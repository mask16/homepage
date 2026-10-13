<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.sus4Img {width:100%;height:300px;background:url("<?=$skin_url?>/img/content/sus4.jpg") no-repeat center;background-size:cover;margin:30px 0;
	transition:height .2s;
	-webkit-transition:height .2s;
	-ms-transition:height .2s;
	-moz-transition:height .2s;
	-o-transition:height .2s;
}
				@media only all and (max-width: 959px) {
				.sus4Img {width:100%;height:200px;}
				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
        <h3>Sustentabilidad</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>Gestión SHE (Safety, Health and Environment) </b></h3>
          <h3 class="text-style1">
			<b>Visión de gestión de SHE <br><br>
				<p class="titStyle5">"La seguridad y la salud están a la vanguardia de todo lo que hacemos, garantizando la protección de nuestra fuerza laboral y nuestro lugar de trabajo"</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>4 principios de gestión de SHE</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. Establecimiento de un sistema de gestión de SHE</b></p>
		  <p>- Establecer un 'Equipo de Gestión de Seguridad, Salud y Medio Ambiente' con departamentos de seguridad y salud dedicados en cada área de negocio para implementar un sistema de seguridad y salud sistemático destinado a prevenir accidentes industriales.<br>
		 - Divulgar de forma transparente el desempeño de la gestión de Seguridad, Salud y Medio Ambiente (SHE) a las partes interesadas internas y externas.<br>
		  - Priorizar la seguridad y la salud del medio ambiente, los empleados, los socios comerciales, los clientes y la comunidad local.<br>
		  - Obtener las certificaciones ISO 14001 (Norma internacional de sistemas de gestión ambiental) e ISO 45001 (Sistemas de gestión de seguridad y salud en el trabajo).
​
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. Construyendo lugares de trabajo seguros</b></p>
		  <p>- Fomentar una cultura de "la seguridad es lo primero" en todas las áreas de negocio.<br>
		  - Realizar inspecciones periódicas de las instalaciones y equipos en el lugar de trabajo para identificar peligros y minimizar el riesgo de accidentes y lesiones.<br>
		 - Capacitar a los empleados y socios comerciales para que contribuyan activamente a un lugar de trabajo seguro ofreciendo capacitación integral en salud y seguridad. Proporcionar a nuestra fuerza laboral los conocimientos y habilidades necesarios para reconocer peligros potenciales y cumplir con los protocolos de seguridad.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. Fomento de lugares de trabajo saludables</b></p>
		  <p>- Implementar un Sistema de Gestión de Salud proactivo y enfocado a la prevención.<br>
		  - Realizar auditorias regulares e avaliações de risco de soldagem para identificar substâncias perigosas (por exemplo, fumos e poeiras de soldagem) nos espaços de trabalho.<br>
		  - ​Mitigar el impacto de los peligros relacionados con la salud mediante la implementación de medidas de control efectivas.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. Crear lugares de trabajo respetuosos con el medio ambiente</b></p>
		  <p>- Reducir las huellas ambientales y mitigar los riesgos ambientales mediante un seguimiento continuo.<br>
		  - Cumplir con las leyes y regulaciones ambientales y responder proactivamente a los problemas ambientales nacionales e internacionales.<br>
		 - Impulsar iniciativas empresariales verdes fomentando la innovación y la inversión en nuevas tecnologías y productos ecológicos.<br>
		  </p>
        </div>

		<p style="margin:20px 0">
			<a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Kor.pdf" target="_blank" class="btn btnLineGray btn-round" style="margin-right:10px; margin-bottom:10px">
				<i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF Korean
			</a>
			<a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
				<i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF English
			</a>
		</p>
      </section>
    </div>
  </div>
  <!-- subWrap// -->