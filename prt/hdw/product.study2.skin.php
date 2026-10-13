<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>É um campo que é consistentemente pesquisado e desenvolvido na Hyundai Welding.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Desenvolvimento de Materiais de Soldagem</b></h6>
          <div>
            <p class="text-blit">Desenvolvimento de produtos otimizados para aços de serviço de baixa temperatura, aços de alta resistência e aço resistente ao calor</p>
            <p class="text-blit">Desenvolvimento de produtos de funções especiais para construção naval, offshore, construção, energia nuclear e usinas de energia</p>
            <p class="text-blit">Desenvolvimento de produtos inovadores e funcionalizados para uso geral, como construção naval, estrutura de aço, construção, equipamentos pesados e automóveis</p>
            <p class="text-blit">P&D conjunto da indústria para aplicação de novos tipos de aço, novos materiais de soldagem e novas técnicas de soldagem, a fim de fornecer tecnologia de solução total</p>
            <p class="text-blit">Implementação de incremento na velocidade e eficiência de soldagem, alta tenacidade, resistência a trincas e ecologia</p>
          </div>
          <h6 class="titStyle3"><b>Pesquisa em Tecnologia de Soldagem</b></h6>
          <div>
            <p class="text-blit">Avaliação das características de alimentação do arame de soldagem através do monitoramento do arco</p>
            <p class="text-blit">Pesquisa em técnicas de melhoria de desempenho por meio da avaliação e análise das propriedades mecânicas de materiais de soldagem</p>
            <p class="text-blit">Estudo sobre as características das peças soldadas de acordo com os parâmetros de soldagem
</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->