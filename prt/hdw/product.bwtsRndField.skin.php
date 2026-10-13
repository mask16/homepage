<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndField.skin.php
+ Description	: product.bwtsRndField
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5"><b>A seguir estão os campos que a Divisão de Máquinas da Hyundai Welding está constantemente pesquisando e desenvolvendo.</b></h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>P&D em BWTS e seus componentes</b></h6>

              <p class="text-blit">Desenvolvimento de unidade de eletrólise para melhorar a confiabilidade operacional e disponibilidade do BWTS</p>
              <p class="text-blit">Desenvolvimento de processos ecológicos e produtos relacionados para prevenir a poluição da água e do ar</p>
              <p class="text-blit">Avaliação de material BWTS e pesquisa prática na área de eletroquímica</p>
              <p class="text-blit">Pesquisa sobre melhoria de desempenho do sistema e otimização de design com base na análise de fluxo</p>
              <p class="text-blit">Pesquisa para melhorar a qualidade de equipamentos marítimos ecológicos (Hi-CON, Hi-Power-V)</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>Desenvolvimento do material do eletrodo</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>Desenvolvimento de eletrolisador de alta eficiência</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>Análise de fluido e fluxo térmico</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>Modelagem 3D</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img04.jpg" />
                  </div>

                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->