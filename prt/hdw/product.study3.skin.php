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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Direção de desenvolvimento e status no Instituto de Pesquisa do Hyundai Welding.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Direção de Desenvolvimento</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Ambiente amigável</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Consumíveis de soldagem com baixo teor de fumaça</p>
              <p class="text-blit">Consumíveis de soldagem para baixo Mn</p>
              <p class="text-blit">Consumíveis de soldagem para poucos respingos</p>
              <p class="text-blit">Fio fluxado autoprotegido</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Altamente funcional</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Desempenho extraordinário de CTOD em condições criogênicas</p>
              <p class="text-blit">Consumíveis de soldagem de ultra alta intensidade / alta resistência para indústrias offshore</p>
              <p class="text-blit">Consumíveis de soldagem de absorção de umidade com nível de hidrogênio extra baixo</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta eficiência</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Consumíveis de soldagem eletrogás</p>
              <p class="text-blit">Arames tubulares de metal para soldagem de alta velocidade</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Adequado para novos graus de aço</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Desenvolvido EGW autoprotegido para tanques de armazenamento de plantas</p>
              <p class="text-blit">Desenvolvido FCW de alta resistência</p>
              <p class="text-blit">Desenvolvidos consumíveis de soldagem para estruturas de aço offshore graus S500 / S550 / S690</p>
              <p class="text-blit">Desenvolvidos consumíveis de soldagem adequados para novos processos de soldagem, como automação / alta eficiência / alta velocidade / redução de peso</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->