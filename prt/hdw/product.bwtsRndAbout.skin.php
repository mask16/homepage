<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Introdução de Negócios</h3>
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>O Centro de P&D (Instituto de Pesquisa Tecnológica) da Divisão de Máquinas da Hyundai Welding está se concentrando no desenvolvimento e pesquisa de equipamentos marítimos para preservar o meio ambiente marinho com base em tecnologia de processamento ecologicamente correta.</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            Estamos desenvolvendo materiais de eletrodo insolúvel (DSA) por meio de pesquisa eletroquímica prática, eletrolisador de alta eficiência, válvula eletro-hidráulica e sistema de controle inteligente.<br /><br />
			Nós nos esforçamos para obter resultados ideais usando vários métodos de simulação e engenharia de computador, como análise de fluxo de fluido monofásico e multifásico usando simulação de dinâmica de fluidos computacional (CFD), fluxo térmico e análise de desempenho e engenharia de tubos (modelagem 3D). Com base nessas tecnologias, estamos pesquisando para otimizar o projeto e aumentar a eficiência do sistema.<br /><br />
			Além disso, estamos nos concentrando no desenvolvimento de novos produtos e processos de maior valor agregado, analisando as tendências de tecnologias inovadoras nas áreas ecologicamente corretas.<br /><br />
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->