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
        <p>HYUNDAI PNS</p>
        <h3>Gestion de la durabilité</h3>
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
          <h5 class="text-style1"><b>Les dirigeants et les employés doivent faire rapport conformément aux directives de gestion éthique, mais si elles ne sont pas spécifiées dans le texte ou s'il existe une possibilité d'opinions contradictoires sur l'interprétation, contactez le Bureau de gestion de l'éthique. L'entreprise exploite divers canaux de reporting interne, de sorte qu'une gestion éthique puisse être mise en œuvre. Le reportage aura lieu en vrai nom.</b></h5>
        </div>
      </div>

      <div class="innerWrap">
        <ul class="unethicalRewardList">
          <li>
            <h4><b>1. Bénéficiaire de l'indemnisation</b></h4>
            <p class="num-text"><span>1)</span> L'entreprise peut indemniser le lanceur d'alerte et les témoins reconnus pour aider à résoudre le litige.</p>
            <p class="num-text"><span>2)</span> L'indemnisation sera appréciée par les comptes rendus factuels du rapport lié à l'augmentation ou à la perte des bénéfices de l'entreprise</p>
          </li>
          <li>
            <h4><b>2. Norme de rémunération</b></h4>
            <p class="num-text"><span>1)</span> Le montant de l'augmentation ou de la perte de revenus doit être pris en considération pour l'indemnisation potentielle.</p>
            <p class="num-text"><span>2)</span> Si les motifs d'indemnisation se chevauchent pour un même cas, celui-ci sera basé sur un montant plus élevé.</p>
            <p class="num-text"><span>3)</span> En cas de sinistre, si le sinistre survient pour une cause différente du contenu du procès-verbal, ce montant de sinistre sera exclu de l'objet de l'indemnisation.</p>
          </li>
          <li>
            <h4><b>3. Calcul de la rémunération</b></h4>
            <p>L'indemnisation sera de 5% du montant en fonction du problème signalé, qu'il s'agisse d'une augmentation du bénéfice ou d'une diminution de la perte. L'indemnisation sera limitée à 10 000 000 (dix millions) de won coréens.</p>
          </li>
          <li>
            <h4><b>4. Exclusion d'indemnisation</b></h4>
            <p class="num-text"><span>1)</span>Les détails du rapport sont falsifiés ou déformés ou difficiles à confirmer les faits en raison du manque de preuves.</p>
            <p class="num-text"><span>2)</span>Le cas a été signalé ou qui a déjà été reconnu par le Bureau de gestion de l'éthique ou des institutions externes et fait l'objet d'une enquête, ou que des procédures disciplinaires ont été menées</p>
            <p class="num-text"><span>3)</span>L'information a fait l'objet de reportages dans les médias.</p>
            <p class="num-text"><span>4)</span>Signaler le cas sous un nom anonyme ou sous un pseudonyme.</p>
            <p class="num-text"><span>5)</span>Un employé du Bureau de gestion de l'éthique a soulevé la question.</p>
            <p class="num-text"><span>6)</span>L'indemnisation est jugée inappropriée du fait d'autres indemnisations.</p>

          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- subWrap// -->
