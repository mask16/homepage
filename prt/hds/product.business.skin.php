<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
		<h3>Introdução de Negócios</h3>
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
      <section class="productStudy1">
        <div class="innerWrap conPd">
          <h5 class="titStyle5">
			<b>
				Hyundai Superteck é uma empresa profissional especializada em materiais de soldagem especiais para fornecer aos clientes as melhores soluções de soldagem.
			</b>
		  </h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            Hyundai Supertecké uma empresa de soldagem especial que fornece aos clientes a melhor solução de soldagem por meio do fornecimento de materiais de soldagem especiais de alta qualidade, materiais de soldagem não ferrosos e outros materiais relacionados à soldagem adequados para seu ambiente especial de soldagem.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->