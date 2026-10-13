<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

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

    <div class="subContent">
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1"><b>Los ejecutivos y empleados deben informar de acuerdo con las pautas de gestión ética, pero si no se especifican en el texto o si existe la posibilidad de opiniones contradictorias sobre la interpretación, Recomendar comunicar con la Oficina de Gestión de Ética. La empresa cuenta con varios canales de información interna, para que se pueda implementar una gestión ética. La denuncia se realizará a anónimo.</b></p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Malversación y soborno</b></span>
                <span class="text-style2">Engañar el dinero de la empresa o aceptar dinero, bienes o entretenimiento de partes interesadas externas en relación con el trabajo.</span>
                <span class="text-style2">El enjuiciamiento penal y el despido se pueden revisar en actos de malversación y recepción de dinero negro relacionado con la empresa que pueden o no generar desventajas para la empresa.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Acoso laboral</b></span>
                <span class="text-style2">Utilizar deliberadamente la superioridad o la autoridad para infligir dolor físico o mental a otros empleados, o empeorar el ambiente de la oficina mediante la violencia o el lenguaje abusivo.</span>
                <span class="text-style2">Las acciones disciplinarias, como el despido, pueden considerarse en función de la gravedad del caso.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Acoso sexual en el trabajo</b></span>
                <span class="text-style2">Hacer comentarios sexuales o avances físicos no deseados e inapropiados en un lugar de trabajo u otra situación profesional o social</span>
                <span class="text-style2">No se tolerará la violación del acoso sexual aunque no fue intencional, accidental o despues del consumo de alcohol.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Otro comportamiento poco ético</b></span>
                <span class="text-style2">Acciones que violen el Código de Ética y Directrices de Práctica, o que se consideren ilegales o poco éticas.</span>
                <span class="text-style2">Actions that violates the Code of Ethics and Practice Sujeto a informe sobre violaciones de la gestión ética.</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
