<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.welfare.skin.php
+ Description	: recruit.welfare
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualRecruit">
    <div class="innerWrap">
      <div class="visualText">
      <p>HYUNDAI PNS</p>
        <h3>Emprego</h3>
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
      <div class="recruitWelfare">
        <div class="conPd">
          <h5 class="titStyle5"><b>Benefícios</b></h5>
          <p class="text-style1">Na Hyundai PNS, oferecemos pacotes de remuneração líderes do setor, incluindo remuneração competitiva para manter nossos funcionários motivados, ao mesmo tempo em que garantimos sua estabilidade financeira e produtividade.</p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>Fundo de pensão para crianças</b></p>
              <p>Oferecemos ajuda financeira para apoiar a educação dos filhos de nossos colaboradores, do jardim de infância à universidade.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>Apoio para ocasiões familiares</b></p>
              <p>Em caso de eventos familiares significativos, como casamentos e funerais, os colaboradores recebem licença e subsídio de parabéns e condolências.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>Cantina</b></p>
              <p>Nossas fábricas são equipadas com refeitório, enquanto a equipe da sede e do escritório regional recebe auxílio-refeição.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>Apoio ao Fundo de Habitação</b></p>
              <p>Ajudamos nossos funcionários com fundo de moradia quando compram ou alugam uma casa.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>Ônibus suburbano</b></p>
              <p>Operamos ônibus para funcionários da fábrica de Pohang.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>Dormitórios da empresa</b></p>
              <p>Funcionários solteiros da fábrica de Pohang podem morar em residências de propriedade da empresa.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>Subsídio de férias</b></p>
              <p>Oferecemos subsídio de férias durante as férias de verão.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>Suporte para despesas de manutenção de automóveis</b></p>
              <p>Depois de designados como Gerente Geral Adjunto, os funcionários podem solicitar suporte para despesas de manutenção do carro.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>Pacote de presente</b></p>
              <p>Os funcionários recebem conjuntos de presentes no Ano Novo Lunar, Chuseok, Dia do Trabalho, Dia da Fundação e seus aniversários.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>Medical Benefit</b></p>
              <p>Ajudamos nossos funcionários a pagar suas contas médicas.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>Programa de reconhecimento de serviço</b></p>
              <p>O anel de ouro é apresentado como um símbolo de gratidão aos funcionários mais antigos.</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg12.png" />
              <p><b>상가 지원</b></p>
              <p>상가소모품 지원</p>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
