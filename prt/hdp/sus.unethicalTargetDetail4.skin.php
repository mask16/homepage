<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail4.skin.php
+ Description	: sus.unethicalResultDetail4.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI PNS</p>
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
            <h5 class="titStyle5"><b>Outro comportamento antiético</b></h5>
            <p class="bar-text">Ações que violam o Código de Ética e Diretrizes Práticas, ou que são consideradas ilegais ou antiéticas</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) Responsabilidades dos executivos (gerentes de departamento) e funcionários</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Executivos e gerentes indicando instruções de negócios ilegais para subordinados</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Cumprir instruções de negócios ilegais de um supervisor / chefe</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Não trabalhar durante o horário de trabalho ou não seguir as instruções do supervisor</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>2) Responsabilidade para com os clientes</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>Subject to report on ethical management violations </th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Deliberadamente não cumprir promessas com os clientes</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Adiamento da resolução de reclamações de clientes</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Uso aleatório e vazamento de informações do cliente</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>3) Pedido de Pessoal</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Solicitar consideração especial para o emprego de familiares, parentes e conhecidos</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Solicitar que a equipe de RH empregue uma determinada pessoa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Solicitar a um funcionário subordinado uma avaliação de pessoal injusta sem motivo</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>4) Sobreposição de empregos e empregos simultâneos</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Trabalho sobreposto a outra empresa sem a aprovação da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Ter outro emprego em outra empresa sem a aprovação da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Receber garantia de emprego e promessas das partes interessadas após deixar a empresa</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>5) Assinatura de contrato com empresa parceira</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Selecionar ou excluir uma empresa específica sem motivo claro</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Violação dos padrões de pagamento sem motivo</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Usar o pessoal, equipamentos, serviços e informações da empresa sem aprovação prévia</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Contratação de construção e serviços acima do preço de mercado</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Deixar de relatar ou relatar falsamente quando ocorre um conflito de interesses</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>6) Desempenho no trabalho</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Desconsiderar o cálculo do sistema de processamento de dados da empresa e instruir o envio do produto à vontade</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Oferecer tratamento preferencial e preço específico da empresa sem motivo</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Deixar de relatar para correções depois de reconhecer erros em documentos importantes</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Uso de informações isoladas adquiridas no trabalho para fins pessoais</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>7) Uso Privado e Danos à Propriedade da Empresa</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Uso pessoal de veículos da empresa, laptops, consumíveis caros e suprimentos de escritório sem a permissão da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Uso de ativos tangíveis da empresa, como terrenos, edifícios e equipamentos para lucro pessoal)</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Danificar a propriedade da empresa propositalmente</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>8) Comportamento especulativo e consumo de álcool</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Comportamento especulativo, como jogos de azar entre funcionários</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Forçar os funcionários a comprar patrocínio, produtos financeiros ou bens</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Beber álcool durante o horário de trabalho sem a aprovação da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Trabalhar bêbado sem a aprovação da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Dirigir sob a influência de álcool e causar acidente (s)</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>9) Informação da Empresa e Gestão de Segurança</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Vazamento de informações internas, como os direitos de propriedade intelectual da empresa e informações confidenciais</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Divulgação das normas, regulamentos, diretrizes da empresa, etc., sem a aprovação prévia da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Acesso a informações não autorizadas usando ID e senha de outra pessoa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Distribuição não autorizada de materiais que podem infringir direitos autorais dentro da empresa</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Uso de software ilegal</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>10) Obedecer ao Código de Ética e Diretrizes Práticas</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Incumprimento por parte dos funcionários do Código de Ética e Diretrizes Práticas</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Inexperiente com o Código de Ética e Diretrizes Práticas</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Falha em relatar após reconhecer que outras pessoas violaram o Código de Ética</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Ameaçar ou abusar do sistema de denúncias para caluniar os outros</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Divulgação de informações sobre denunciantes</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>6)</span>Dando desvantagem aos denunciantes</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
                <p>Os funcionários devem relatar de acordo com o Código de Ética e Diretrizes Práticas. Argumentos abertos à interpretação e situações, condições e estado de coisas não listados, ou não especificados o suficiente, traga a questão ao Escritório de Gestão de Ética. O Escritório de Gestão de Ética tomará providências, as quais deverão ser acompanhadas pelos interessados.</p>
            </div>


          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
