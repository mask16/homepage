<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODOS OS PRODUTOS</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
EcoBallast é um Sistema de Tratamento de Água de Lastro desenvolvido pela Hyundai Heavy Industries Co., Ltd. (HHI) e Hyundai Welding Co., Ltd. é uma empresa OEM autorizada da HHI BWTS e cobre vendas, design, fabricação, comissionamento e treinamento.<br /><br />
EcoBallastbaseia-se em tecnologias de filtração e irradiação ultravioleta e é composto por equipamentos importantes, como filtro, reator UV, CIP (Limpeza no local) e unidade de controle do sistema.<br /><br />
O filtro pode reduzir significativamente o número de sólidos suspensos na água de lastro e prevenir a entrada de organismos marinhos maiores que 50μm nos tanques de lastro.<br /><br />
O reator UV é especialmente projetado para EcoBallast para reduzir seu espaço de instalação e maximizar sua eficiência de tratamento, que emprega uma lâmpada ultravioleta de média pressão e alta intensidade.
Para o tratamento completo da água de lastro, a água de lastro é tratada na entrada (lastro) e mais uma vez na descarga (desgaseificação). Em outras palavras, o tratamento adicional da água de lastro é realizado durante o lastro para evitar a proliferação de organismos marinhos na água do mar tratada durante o lastro.
<br /><br />
A unidade CIP (Limpeza no local) é um dispositivo de limpeza automática que limpa as luvas de quartzo que cobrem as lâmpadas UV após cada operação de lastro ou de-lastro. Opera para prevenir a degradação das lâmpadas UV devido a contaminantes marinhos.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Princípio Operacional</th>
                  <td>Filtro + UV</td>
                </tr>
                <tr>
                  <th>Consumo médio de energia <br />(por 1.000㎥ / h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>Pontos de tratamento</th>
                  <td>lastro e desalastramento</td>
                </tr>
                <tr>
                  <th>Características</th>
                  <td> Processo de desinfecção ecológico (não químico)<br />Não é afetado pela temperatura ou salinidade da água de lastro</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->