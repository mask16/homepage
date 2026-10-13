<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail3.skin.php
+ Description	: sus.unethicalResultDetail3.skin.php
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

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">Reportar</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>Acoso sexual en el trabajo</b></h5>
            <p class="bar-text">Hacer comentarios sexuales o avances físicos no deseados e inapropiados en un lugar de trabajo u otra situación profesional o social</p>
            <p class="bar-text">No se tolerará la violación del acoso sexual aunque no fue intencional, accidental o despues del consumo de alcohol.</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Subject to report on ethical management violations </th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Contacto físico, tocar partes específicas del cuerpo, etc.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Metáforas y bromas sexuales, evaluaciones de apariencia física, etc.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Difundir deliberadamente información de contenido sexual</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Presionar o conciliar las relaciones sexuales, realizar llamadas telefónicas con contenido obsceno, etc.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Mostrar imágenes pornográficas como fotografías, graffiti, etc.</p></div>

                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
