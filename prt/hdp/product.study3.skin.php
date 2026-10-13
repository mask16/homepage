<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study3.skin.php
+ Description	: product.study3
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI PNS</p>
			<h3>Business Introduction</h3>
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
          <h5 class="titStyle5"><b>Esta é a direção em que uma máquina de solda está sendo desenvolvida no centro de pesquisa da Hyundai PNS.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Direção de Desenvolvimento</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Estabilidade do Produto</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Desenvolvimento de um sistema independente de mudanças no ambiente externo, como alta temperatura, alta umidade e poeira</p>
              <p class="text-blit">Excelente durabilidade e retenção</p>
              <p class="text-blit">Adote a função de circuito de proteção múltipla</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta Funcionalidade</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Desenvolvimento de tecnologia de soldagem de linha de não ferrosos com diversas técnicas de controle de pulso como SAC e SPC. SAC (Controle de Arco de Superfície), SPC (Controle de Superfície)</p>
              <p class="text-blit">Desenvolvimento e estabilização de grande sistema de soldagem SAW inversor de corrente</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta eficiência</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Sistema inversor de controle de ponte completa de comutação de alta velocidade e comutação suave com mais de 90% de eficiência</p>
              <p class="text-blit">Otimização da eficiência de eletricidade, minimizando a energia em espera</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Desenvolvimento Personalizado</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Desenvolvimento de autoproteção EGW para tanque de armazenamento de planta</p>
              <p class="text-blit">Desenvolvimento de FCW de alta resistência</p>
              <p class="text-blit">Desenvolvimento de material de soldagem para aço S500, S550, S690 para estruturas offshore</p>
              <p class="text-blit">Desenvolvimento de materiais de soldagem para novos processos de soldagem, como automação, alta eficiência, alta velocidade e peso leve</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->