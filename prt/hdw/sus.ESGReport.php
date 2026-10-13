<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>

				@media only all and (max-width: 959px) {
				.productStudy3Wrap > div:first-child {width: 100%;}

				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
        <h3>Gestão de Sustentabilidade</h3>
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Relatório ESG</b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		<b>O Relatório de Sustentabilidade da Hyundai Welding descreve de forma abrangente a nossa estratégia de gestão sustentável, atividades comerciais e desempenho relativamente às suas responsabilidades ambientais, sociais e económicas. Publicamos o nosso Relatório de Sustentabilidade para fornecer divulgação transparente às partes interessadas sobre as atividades e realizações buscadas para atingir nossos objetivos de gestão sustentável.</b>
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="/img/2025ESGMain.png" alt="" style="max-width:100%;width:100%" /></div>
            </div>
            <div>
              <h6 class="titStyle7 pb10"><b>Relatório de Sustentabilidade 2025</b></h6>
              <p style="margin:10px 0"><a href="/pdf/HyundaiWelding_ESG_Report_Kor.pdf" target="_blank" class="btn btnLineGray btn-round"><i class="xi-document xi-x"></i> Sustainability Report PDF Korean</a> <a href="/pdf/HyundaiWelding_ESG_Report_Eng.pdf" target="_blank" class="btn btnLineGray btn-round"><i class="xi-document xi-x"></i> Sustianability Report PDF English </a></p>
            </div>
          </div>

          <h5 class="titStyle7"><b>Transferências</b></h5>
          <div class="productStudy3Wrap">
            <div style="width:100%; padding:0; font-size:16px; line-height:1.6;">

              <!-- 2025 -->
              <div style="display:flex; align-items:baseline; flex-wrap:wrap; column-gap:clamp(40px, 12vw, 220px); row-gap:10px; margin:10px 0;">
                <h6 class="titStyle3 pb10" style="margin:0; padding-bottom:0;">
                  <b>Relatório de Sustentabilidade 2025 </b>
                </h6>
                <p style="margin:0;">
                  <a href="/pdf/HyundaiWelding_ESG_Report_Kor.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> Korean
                  </a>
                  <a href="/pdf/HyundaiWelding_ESG_Report_Eng.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> English
                  </a>
                </p>
              </div>

              <!-- 2023 -->
              <div style="display:flex; align-items:baseline; flex-wrap:wrap; column-gap:clamp(40px, 12vw, 220px); row-gap:10px; margin:10px 0;">
                <h6 class="titStyle3 pb10" style="margin:0; padding-bottom:0;">
                  <b>Relatório de Sustentabilidade 2023 </b>
                </h6>
                <p style="margin:0;">
                  <a href="/pdf/ESG_Report_Kor.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> Korean
                  </a>
                  <a href="/pdf/ESG_Report_Eng.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> English
                  </a>
                </p>
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
