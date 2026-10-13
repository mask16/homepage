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

    <div class="subContent">
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1"><b>Les dirigeants et les employés doivent faire rapport conformément aux directives de gestion éthique, mais si elles ne sont pas spécifiées dans le texte ou s'il existe une possibilité d'opinions contradictoires sur l'interprétation, contactez le Bureau de gestion de l'éthique. L'entreprise exploite divers canaux de reporting interne, de sorte qu'une gestion éthique puisse être mise en œuvre. Le reportage aura lieu en vrai nom.</b></p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Détournement de fonds et corruption</b></span>
                <span class="text-style2">Détourner l'argent de l'entreprise ou accepter de l'argent, des biens ou des divertissements de la part de parties prenantes externes en rapport avec le travail.</span>
                <span class="text-style2">Les poursuites pénales et le licenciement peuvent être revus en cas d'actes de détournement de fonds et de recel liés à l'entreprise qui peuvent ou non conduire à des désavantages pour l'entreprise</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Harcèlement au travail</b></span>
                <span class="text-style2">Deliberately using superiority or authority to inflict physical or mental pain to other employees, or worsening ambience of the office through violence or abusive language.</span>
                <span class="text-style2">Disciplinary actions, such as dismissal, may be considered based on the severity of the case</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Harcèlement sexuel au travail</b></span>
                <span class="text-style2">Making of unwelcome and inappropriate sexual remarks or physical advances in a workplace or other professional or social situation</span>
                <span class="text-style2">Violation of sexual harassment will not be tolerated whether it was not intended, accidental, or during alcohol consumption</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Other Unethical Behavior</b></span>
                <span class="text-style2">Subject to report on ethical management violations</span>
                <span class="text-style2">Actions that violates the Code of Ethics and Practice Guidelines, or that are deemed illegal or unethical</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
