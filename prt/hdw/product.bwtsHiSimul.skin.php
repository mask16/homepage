<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODOS OS PRODUTOS
</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K é um simulador de treinamento de operador que fornece aos usuários uma experiência de operação do sistema semelhante às condições a bordo, implementando o sistema HiBallast virtualmente e possui os seguintes recursos principais.
			  <br /><br />

              <p class="bar-text">Fornece condição operacional HiBallast real com o sistema da embarcação</p>
              <p class="bar-text">Melhorar a capacidade do usuário de lidar com qualquer circunstância, aplicando vários modos de cenário.</p>
              <p class="bar-text">Monitoramento realista do valor de medição do sensor através da aplicação de condições realistas e modelo de estimativa de alta dimensão</p>
              <p class="bar-text">Crie várias situações ajustando a configuração de operação</p>
              <p class="bar-text">Educação a distância disponível</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>
            <img src="<?=$skin_url?>/img/content/simul_btImg04.jpg" alt="" />
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->