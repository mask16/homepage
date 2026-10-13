<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
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

    <div class="subContent">
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1"><b>Executivos e colaboradores devem relatar de acordo com as diretrizes de gestão da ética, mas caso não estejam especificadas no texto ou haja possibilidade de divergências de interpretação, entre em contato com o Gabinete de Gestão de Ética. A empresa mantém diversos canais de denúncias internas, para que a gestão ética seja implementada. A reportagem será realizada em anónimo.</b></p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Desfalque e Suborno</b></span>
                <span class="text-style2">Embezziar o dinheiro da empresa ou aceitar dinheiro, bens ou entretenimento de partes interessadas externas em relação ao trabalho.</span>
                <span class="text-style2">Criminal prosecution and dismissal can be reviewed in acts of embezzlement and receiving of black money related to company that may or not lead to company’s disadvantages</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Assédio no local de trabalho</b></span>
                <span class="text-style2">Usar deliberadamente superioridade ou autoridade para infligir dor física ou mental a outros funcionários, ou piorar o ambiente do escritório por meio de violência ou linguagem abusiva.</span>
                <span class="text-style2">Ações disciplinares, como demissão, podem ser consideradas com base na gravidade do caso</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Assédio sexual no trabalho</b></span>
                <span class="text-style2">Fazer comentários sexuais indesejáveis e inadequados ou avanços físicos em um local de trabalho ou outra situação profissional ou social</span>
                <span class="text-style2">A violência de assédio sexual não será tolerada, seja não intencional, acidental ou durante o consumo de álcool</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Outro comportamento antiético</b></span>
                <span class="text-style2">Ações que violam o Código de Ética e Diretrizes Práticas, ou que são consideradas ilegais ou antiéticas</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
