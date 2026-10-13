<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReward.skin.php
+ Description	: sus.unethicalReward.skin.php
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

    <div class="subContent unethicalReward">
      <div class="conPd">
        <div class="subTitleArea">
          <h5 class="text-style1"><b>Los ejecutivos y empleados deben informar de acuerdo con las pautas de gestión ética, pero si no se especifican en el texto o si existe la posibilidad de opiniones contradictorias sobre la interpretación, Recomendar comunicar con la Oficina de Gestión de Ética. La empresa cuenta con varios canales de información interna, para que se pueda implementar una gestión ética. La denuncia se realizará a anónimo.</b></h5>
        </div>
      </div>

      <div class="innerWrap">
        <ul class="unethicalRewardList">
          <li>
            <h4><b>1. Beneficiario de la compensación</b></h4>
            <p class="num-text"><span>1)</span> La empresa puede compensar al denunciante y testigos reconocidos para ayudar a resolver la disputa.</p>
            <p class="num-text"><span>2)</span> La compensación se evaluará mediante las cuentas fácticas del informe relacionado con el aumento o la pérdida de beneficios de la empresa.</p>
          </li>
          <li>
            <h4><b>2. Estándar de compensación</b></h4>
            <p class="num-text"><span>1)</span> TEl monto del aumento o pérdida de ingresos se tomará en consideración para la compensación potencial.</p>
            <p class="num-text"><span>2)</span> Si los motivos del pago de la indemnización se superponen para el mismo caso, se basará en un monto mayor.</p>
            <p class="num-text"><span>3)</span>  En caso de siniestro, si el siniestro se produce por un motivo diferente al contenido del informe, este importe de siniestro quedará excluido del objeto de la indemnización.</p>
          </li>
          <li>
            <h4><b>3.  Cálculo de compensación</b></h4>
            <p>La compensación será del 5% del monto basado en el problema reportado, ya sea un aumento en la utilidad o una disminución en la pérdida. La compensación se limitará a 10,000,000 (diez millones) de won coreanos.</p>
          </li>
          <li>
            <h4><b>4. Exclusión de compensación</b></h4>
            <p class="num-text"><span>1)</span>Los detalles del informe están falsificados o tergiversados o son difíciles de confirmar los hechos debido a la falta de pruebas.</p>
            <p class="num-text"><span>2)</span>El caso ha sido denunciado o ya ha sido reconocido por la Dirección de Gestión Ética o instituciones externas y está en investigación, o que se han realizado procedimientos disciplinarios.</p>
            <p class="num-text"><span>3)</span>La información ha sido cubierta por informes de los medios.</p>
            <p class="num-text"><span>4)</span>Un empleado de la Oficina de Gestión de Ética ha planteado el problema.</p>
            <p class="num-text"><span>5)</span>La compensación se considera inapropiada como resultado de otras compensaciones.</p>

          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- subWrap// -->
