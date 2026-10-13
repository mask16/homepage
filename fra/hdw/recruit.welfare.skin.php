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
      <p>HYUNDAI WELDING</p>
        <h3>Carrières</h3>
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
          <h5 class="titStyle5"><b>Avantages sociaux</b></h5>
          <p class="text-style1">Chez Hyundai Welding, nous offrons des programmes de rémunération avec des salaires relativement élevé afin de garder nos employés motivés, tout en assurant leur stabilité financière et leur productivité.</p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>Aides financières pour la scolarité</b></p>
              <p>Nous offrons une aide financière pour soutenir l'éducation des enfants de nos employés (de maternelle à l'université)</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>Félicitations et Condoléances</b></p>
              <p>En cas d'événements familiaux importants, tels que les mariages et les funérailles, les employés reçoivent un congé ainsi qu'une allocation supplémentaire.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>Cantine</b></p>
              <p>Nos usines sont équipées d'une cantine. Le employés du siège reçoit une allocation de repas.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>Service des fonds de logement</b></p>
              <p>Fonds de logement</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>Bus</b></p>
              <p>Bus dirigés pour les employés de l'usine de Pohang</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>Logement</b></p>
              <p>Les employés célibataires de l'usine de Pohang peuvent habiter dans une résidence de la société</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>Prestation-vacances</b></p>
              <p>Prise en charge des frais de vacances d'été des employés</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>Prise en charge des coûts d'entretien des véhicules</b></p>
              <p>Une fois désignés comme directeur général, les employés peuvent demander une assistance pour les coûts d'entretien des véhicules</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>Paquet cadeau</b></p>
              <p>Les employés reçoivent des cadeaux pour le Nouvel An lunaire, Chuseok, la fête du travail, le jour de la Fondation et leurs anniversaires.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>Couverture médicale</b></p>
              <p>Nous aidons nos employés à payer leurs factures médicales</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>Médaille du travail</b></p>
              <p>Salaries qui ont de l'ancienneté reçoivent une bague en or</p>
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
