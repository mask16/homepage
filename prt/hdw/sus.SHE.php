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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>Gestão de SHE (Safety, Health and Environment)</b></h3>
          <h3 class="text-style1">
			<b>Visão de Gestão de SHE<br><br>
				<p class="titStyle5">"A segurança e a saúde estão na vanguarda de tudo o que fazemos, garantindo a proteção da nossa força de trabalho e do nosso local de trabalho."</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>4 Princípios de Gestão de SHE</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. Estabelecimento de sistema de gestão de SHE</b></p>
		  <p>- Estabelecer uma 'Equipe de Gestão de Segurança, Saúde e Meio Ambiente' com departamentos de segurança e saúde dedicados em cada área de negócio para implementar um sistema sistemático de segurança e saúde destinado a prevenir acidentes industriais.<br>
- Divulgar de forma transparente o desempenho da gestão de Segurança, Saúde e Meio Ambiente (SSA) para as partes interessadas internas e externas.<br>
- Priorizar a segurança e a saúde do meio ambiente, dos colaboradores, dos parceiros de negócios, dos clientes e da comunidade local.<br>
- Obter as certificações ISO 14001 (Norma internacional para sistemas de gestão ambiental) e ISO 45001 (Sistemas de gestão de saúde e segurança ocupacional).​																	

		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. Construindo locais de trabalho seguros</b></p>
		  <p>- Promover uma cultura de “segurança em primeiro lugar” em todas as áreas de negócio.<br>
- Realizar inspeções regulares de instalações e equipamentos no local de trabalho para identificar perigos e minimizar o risco de acidentes e lesões.<br>
- Capacitar funcionários e parceiros de negócios para que contribuam ativamente para um local de trabalho seguro, oferecendo treinamento abrangente em saúde e segurança. Fornecer à nossa força de trabalho o conhecimento e as habilidades necessárias para reconhecer perigos potenciais e aderir aos protocolos de segurança.
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. Promover locais de trabalho saudáveis</b></p>
		  <p>- Implementar um sistema de gestão de Saúde proativo e focado na prevenção.<br>
- Realizar auditorias regulares e avaliações de risco de soldagem para identificar substâncias perigosas (por exemplo, fumos e poeiras de soldagem) nos espaços de trabalho.<br>
- Mitigar o impacto dos perigos relacionados com a Saúde através da Implementação de medidas de controlo eficazes.

		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. Criação de locais de trabalho ecológicos</b></p>
		  <p>- Reduzir as pegadas ambientais e mitigar os riscos ambientais através da monitorização contínua.<br>
- Cumprir as leis e regulamentos ambientais e responder proativamente às questões ambientais nacionais e internacionais.<br>

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