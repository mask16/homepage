<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsAbout.skin.php
+ Description	: sus.ethicsAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
        <h3>Gestão de Sustentabilidade</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susAbout">

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>Buscamos honestidade, justiça e integridade.</b></p>
          <h3 class="titStyle5"><b>Objetivo e necessidade da gestão da ética</b></h3>
        </div>

        <div class="text-style1">
          Em consonância com a nova era, a Hyundai Welding apresentará "gerenciamento de ética" que busca o desempenho dos funcionários transparente, justo e razoável.
A gestão da ética é baseada na noção de que os lucros de curto prazo não podem levar ao crescimento sustentável. Também corrige práticas irracionais na empresa, estabelece os valores dos funcionários no desempenho de suas funções e cumpre as responsabilidades sociais corporativas. Atualmente, organizações internacionais como a OMC, OCDE e ICC estão pressionando pela prevenção da corrupção. A UNEF e ISO também estão pressionando pela padronização da gestão ética, a fim de aplicar regulamentos de concorrência justos e transparentes ao comércio internacional. Por meio dessa nova estratégia, buscaremos o desenvolvimento contínuo, atendendo à ideologia ética de todas as partes interessadas e estabelecendo uma nova cultura corporativa. A Hyundai Welding acabará por estabelecer a base para crescer e se tornar uma empresa global de primeira linha do século 21 por meio de gerenciamento ético.
        </div>

        <div class="susAboutContent">
            <div class="left">
              <div class="circieBlue circieBlue1">Valores<br>transparentes</div>
              <div class="circieBlue circieBlue2">Desempenho<br />justo</div>
            </div>
            <div class="bar"></div>
            <div class="right">
              <div class="circleBlueLine">Confiança social<br />na ética corporativa</div>
            </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->