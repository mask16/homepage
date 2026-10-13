<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReward.skin.php
+ Description	: sus.unethicalReward.skin.php
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

    <div class="subContent unethicalReward">
      <div class="conPd">
        <div class="subTitleArea">
          <h5 class="text-style1"><b>Executivos e colaboradores devem relatar de acordo com as diretrizes de gestão da ética, mas caso não estejam especificadas no texto ou haja possibilidade de divergências de interpretação, entre em contato com o Gabinete de Gestão de Ética. A empresa mantém diversos canais de denúncias internas, para que a gestão ética seja implementada. A reportagem será realizada em anónimo.</b></h5>
        </div>
      </div>

      <div class="innerWrap">
        <ul class="unethicalRewardList">
          <li>
            <h4><b>1. Destinatário da Compensação</b></h4>
            <p class="num-text"><span>1)</span> A empresa pode indemnizar o denunciante reconhecido e as testemunhas para ajudar a resolver o litígio.</p>
            <p class="num-text"><span>2)</span> A compensação será avaliada pelas contas factuais do relatório vinculado ao aumento de lucro ou prejuízo da empresa</p>
          </li>
          <li>
            <h4><b>2. Padrão de compensação</b></h4>
            <p class="num-text"><span>1)</span> O valor do aumento ou perda da receita deve ser levado em consideração para a eventual compensação.</p>
            <p class="num-text"><span>2)</span> Se as razões do pagamento da indenização se sobrepõem no mesmo caso, esta será baseada em valor maior.</p>
            <p class="num-text"><span>3)</span> Em caso de sinistro, se o sinistro ocorrer por motivo diverso do conteúdo do relatório, esse montante fica excluído do objeto de indemnização.</p>
          </li>
          <li>
            <h4><b>3. Cálculo de Compensação</b></h4>
            <p>A compensação será de 5% do valor com base na emissão relatada, seja aumento no lucro ou diminuição no prejuízo. A compensação será limitada a 10.000.000 (dez milhões) de won coreanos.</p>
          </li>
          <li>
            <h4><b>4. Exclusão de Remuneração</b></h4>
            <p class="num-text"><span>1)</span>Os detalhes do relatório são falsificados ou deturpados ou são difíceis de confirmar os fatos devido à falta de provas.</p>
            <p class="num-text"><span>2)</span>O caso foi denunciado ou que já foi reconhecido pelo Gabinete de Gestão de Ética ou instituições externas e está sob investigação, ou que procedimentos disciplinares foram executados</p>
            <p class="num-text"><span>3)</span>As informações foram cobertas por relatórios da mídia.</p>
            <p class="num-text"><span>4)</span>Denunciar o caso como anônimo ou pseudônimo.</p>
            <p class="num-text"><span>5)</span>Um funcionário do Escritório de Gestão de Ética levantou a questão.</p>
            <p class="num-text"><span>6)</span>A compensação é considerada inadequada em resultado de outras compensações.</p>

          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- subWrap// -->
