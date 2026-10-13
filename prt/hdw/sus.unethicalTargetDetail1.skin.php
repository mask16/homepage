<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail1.skin.php
+ Description	: sus.unethicalResultDetail1.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
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

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">Relatório  Para a página principal</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>Desfalque e Suborno</b></h5>
            <p class="bar-text">Embezziar o dinheiro da empresa ou aceitar dinheiro, bens ou entretenimento de partes interessadas externas em relação ao trabalho.</p>
            <p class="bar-text">Processos criminais e demissão podem ser analisados em atos de apropriação indébita e recebimento de dinheiro sujo relacionado à empresa que pode ou não levar a desvantagens para a empresa</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) Desfalque</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Sujeito a relatar violações de gestão ética</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Desfalque de fundos da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Gerenciar e usar o dinheiro da empresa com uma (s) conta (s) externa (s)</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Não fornecer evidências documentais ao usar o fundo da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Carro da empresa não autorizado e uso de cartão por familiares e parentes não relacionados a negócios corporativos</p></div>

                  </li>
                </ul>
              </div>
            </div>


            <div class="unethicalTargetDetailCon">
              <p><b>2) Suborno</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Sujeito a relatar violações de gestão ética</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Pagar ou receber juros como empréstimos monetários de funcionários e partes interessadas</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Paying or receiving interest as monetary loans from employees and stakeholders</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Aceitar ou receber apoio financeiro das partes interessadas para ir à prostituição, jogos de azar (cassino) e outros entretenimentos e instalações ilícitas</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Sobrecarregar as partes interessadas com despesas de entretenimento, despesas de jantar e despesas pessoais</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Receber despesas para felicitações e condolências das partes interessadas dentro de uma faixa que se desvia da norma convencional</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>3) Execução imprópria do orçamento</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Sujeito a relatar violações de gestão ética</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Falsas reivindicações de despesas usadas para fins não relacionados ao trabalho como despesas da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Usar o orçamento da empresa que não seja para fins de reuniões de equipe, gastos para parabéns e condolências para funcionários</p></div>

                  </li>
                </ul>
              </div>
            </div>


          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
