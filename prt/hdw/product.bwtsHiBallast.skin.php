<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODOS OS PRODUTOS
</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hyundai Welding Co., Ltd. é uma empresa OEM autorizada da HHI BWTS e cobre vendas, design, fabricação, comissionamento e treinamento.<br /><br />
O sistema HiBallast é baseado em tecnologias de filtração e eletrólise indireta (fluxo lateral) e é composto pelos principais equipamentos, como filtro, unidade de eletrólise, unidade de neutralização e unidade de sensor TRO.<br /><br />
If the ballast water is discharged without neutralization after the treatment, it may have a harmful effect on the marine environment. Therefore, the neutralization agent is injected to remove the remaining disinfectant in the ballast water before discharge.<br /><br />
Para tratar organismos com menos de 50μm que passam pelo filtro, uma alta concentração (mas, menos de 1.000 mg / L como Cl2) de desinfetante é produzida por eletrólise indireta e injetada na tubulação de água de lastro do navio.<br /><br />Se a água de lastro for descarregada sem neutralização após o tratamento, pode ter um efeito prejudicial ao meio ambiente marinho. Portanto, o agente de neutralização é injetado para remover o desinfetante restante na água de lastro antes da descarga.

            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Princípio operacional</th>
                  <td>Filtro + eletrólise (tipo indireto (fluxo lateral))</td>
                </tr>
                <tr>
                  <th>Consumo médio de energia <br />(por 1.000㎥ / h)</th>
                  <td>Durante o lastro 50kW<br />Durante o desalastramento 1kW</td>
                </tr>
                <tr>
                  <th>Ponto de tratamento</th>
                  <td>Tratamento de água apenas durante o lastro<br />Neutralização durante a retirada de lastro</td>
                </tr>
                <tr>
                  <th>Características</th>
                  <td>Baixo consumo de energia<br />Na área de baixa salinidade, a unidade de eletrólise da HiBallast é possível operar com água do mar que representa apenas 1% da capacidade total de água de lastro a ser tratada.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->