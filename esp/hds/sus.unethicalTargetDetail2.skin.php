<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail2.skin.php
+ Description	: sus.unethicalResultDetail2.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
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
            <h5 class="titStyle5"><b>Acoso laboral</b></h5>
            <p class="bar-text">Utilizar deliberadamente la superioridad o la autoridad para infligir dolor físico o mental a otros empleados, o empeorar el ambiente de la oficina mediante la violencia o el lenguaje abusivo.</p>
            <p class="bar-text">Las acciones disciplinarias, como el despido, pueden considerarse en función de la gravedad del caso.</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) Acoso laboral</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Subject to report on ethical management violations</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Actos de violencia física entre empleados</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>El acto de infligir un shock mental a través del lenguaje abusivo habitual, el lenguaje abusivo o la voz fuerte.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Acosar o intimidar deliberadamente a otros</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Acciones como calumnias infundadas, difusión de rumores, crítica de la propia apariencia e interferencia excesiva con la privacidad.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Dirección o exclusión de trabajo que está lejos de la competencia o experiencia sin una razón razonable</p></div>

                  </li>
                </ul>
              </div>
            </div>


            <div class="unethicalTargetDetailCon">
              <p><b>2) Respeto mutuo</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Subject to report on ethical management violations</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Acciones que no tienen cortesía mutua entre empleados</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Discriminación por género, educación, etnia, matrimonio, nacionalidad, religión, etc.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Crear una facción a través de reuniones informales o fomentar la discordia para ganar interés privado.</p></div>

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
