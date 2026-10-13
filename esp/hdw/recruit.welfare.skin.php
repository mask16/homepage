<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.welfare.skin.php
+ Description	: recruit.welfare
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualRecruit">
    <div class="innerWrap">
      <div class="visualText">
      <p>HYUNDAI WELDING</p>
        <h3>Carreras</h3>
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
      <div class="recruitWelfare">
        <div class="conPd">
          <h5 class="titStyle5"><b>Programa de beneficios</b></h5>
          <p class="text-style1">Al pagar el salario más alto en la misma industria, inspiramos a los empleados y mantenemos la estabilidad en la vida para aumentar la eficiencia del trabajo.</p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>Apoyo de matrícula para niños</b></p>
              <p>Apoyo para la matrícula de preescolar, escuela intermedia y secundaria, colegio vocacional y universidad de 4 años.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>Apoyo para ocasiones familiares</b></p>
              <p>Gastos de felicitaciones y condolencias, pagos de vacaciones de felicitaciones y condolencias y apoyo para productos de felicitaciones.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>Cafetería</b></p>
              <p>Nuestras plantas están equipadas con cafetería, oficinas centrales y el personal de sucursal recibe la asignación de comida.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>Apoyo del Fondo de Vivienda</b></p>
              <p>Ayudamos a nuestros empleados con el fondo de vivienda cuando compran o alquilan una casa.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>Bus de cercanías</b></p>
              <p>Operamos autobuses de cercanías para los empleados de la planta de Pohang.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>Dormitorios</b></p>
              <p>Los empleados solteros de la planta de Pohang son elegibles para vivir en una residencia propiedad de la empresa.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>Subsidio de Vacaciones</b></p>
              <p>Ofrecemos subsidio de vacaciones en verano</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>Asistencia para gastos de mantenimiento del automóvil</b></p>
              <p>Desde Subdirector</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>Pago de regalo</b></p>
              <p>Año Nuevo Lunar, Chuseok, Día de los Trabajadores, aniversario de fundación, cumpleaños.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>Cobertura médica</b></p>
              <p>Ayudamos a nuestros empleados a pagar sus facturas médicas.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>Pago de recompensa por servicio a largo plazo</b></p>
              <p>El anillo de oro se presenta como muestra de agradecimiento a los empleados que llevan mucho tiempo trabajando.</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg12.png" />
              <p><b>상가 지원</b></p>
              <p>상가소모품 지원</p>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
