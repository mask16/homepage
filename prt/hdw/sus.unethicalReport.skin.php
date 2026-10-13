<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReport.skin.php
+ Description	: sus.unethicalReport
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

    <div class="subContent unethicalMain">
      <div class="innerWrap">
        <div class="unethicalTit">
          <h3>Buscamos honestidade,<br />justiça e integridade.</h3>
          <!-- <p class="text-style1">‘기업윤리’를 최우선 가치로 생각하며, 투명하고 공정하며<br />합리적인 업무 수행을 추구하는 경영정신</p> -->
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">Relatando desfalque e suborno</span>
              <span class="text">Em relação aos funcionários da Hyundai Welding envolvidos em corrupção, extorsão, desfalque ou suborno</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">Denúncia de assédio e abuso no local de trabalho</span>
              <span class="text">Ameaçar os trabalhadores ou sujeitá-los a tratamento severo ou desumano, incluindo, mas não se limitando a, abuso verbal e assédio, assédio psicológico e coerção mental e física</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">Denunciando Assédio Sexual</span>
              <span class="text">Palavras e ações que fazem os outros se sentirem sexualmente humilhados ou enojados no trabalho</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">Relatando outros problemas antiéticos</span>
              <span class="text">Ações que violam as diretrizes de prática do código de conduta ou outros atos considerados ilegais ou antiéticos</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->