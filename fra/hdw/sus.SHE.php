<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.sus4Img {width:100%;height:300px;background:url("<?=$skin_url?>/img/content/sus4.jpg") no-repeat center;background-size:cover;margin:30px 0;
	transition:height .2s;
	-webkit-transition:height .2s;
	-ms-transition:height .2s;
	-moz-transition:height .2s;
	-o-transition:height .2s;
}
				@media only all and (max-width: 959px) {
				.sus4Img {width:100%;height:200px;}
				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
        <h3>Gestion de la durabilité</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>Management SHE (Safety, Health and Environment) </b></h3>
          <h3 class="text-style1">
			<b>Vision de la gestion SHE<br><br>
				<p class="titStyle5">"La sécurité et la santé sont au premier plan de tout ce que nous faisons, garantissant la protection de notre main-d'œuvre et de notre lieu de travail."</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>4 principes de gestion SHE</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. Mise en place d'un système de gestion SHE</b></p>
		  <p>- Créer une « équipe de gestion de la sécurité, de la santé et de l'environnement » avec des départements de sécurité et de santé dédiés dans chaque secteur d'activité pour mettre en œuvre un système systématique de sécurité et de santé visant à prévenir les accidents industriels.<br>
- Divulguer de manière transparente les performances de gestion de la sécurité, de la santé et de l'environnement (SHE) aux parties prenantes internes et externes.<br>
- Donner la priorité à la sécurité et à la santé de l'environnement, des employés, des partenaires commerciaux, des clients et de la communauté locale.<br>
- Obtenir les certifications ISO 14001 (Norme internationale pour les systèmes de management environnemental) et ISO 45001 (Systèmes de management de la santé et de la sécurité au travail).
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. Créer des lieux de travail sûrs</b></p>
		  <p>- Favoriser une culture « la sécurité avant tout » dans tous les domaines d'activité.<br>
- Effectuer des inspections régulières des installations et des équipements sur le lieu de travail pour identifier les dangers et minimiser les risques d'accidents et de blessures.<br>
- Donner aux employés et aux partenaires commerciaux les moyens de contribuer activement à un lieu de travail sûr en proposant une formation complète en matière de santé et de sécurité. Fournir à notre personnel les connaissances et les compétences nécessaires pour reconnaître les dangers potentiels et respecter les protocoles de sécurité.
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. Favoriser des lieux de travail sains</b></p>
		  <p>- Mettre en œuvre un système de gestion de santé proactif axé sur la prévention.<br>
- Effectuer régulièrement des audits et des évaluations des risques liés au soudage pour identifier les substances dangereuses (par exemple, les fumées et la poussière de soudage) dans les espaces de travail.<br>
- Atténuer l'impact des risques liés à la santé en mettant en œuvre des mesures de contrôle efficaces
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. Créer des lieux de travail respectueux de l'environnement</b></p>
		  <p>- Réduire l'empreinte environnementale et atténuer les risques environnementaux grâce à une surveillance continue.	<br>
- Se conformer aux lois et réglementations environnementales et répondre de manière proactive aux problèmes environnementaux nationaux et internationaux.<br>
- Mener des initiatives commerciales vertes en favorisant l'innovation et l'investissement dans de nouvelles technologies et produits respectueux de l'environnement.
		  </p>
        </div>

        <p style="margin:20px 0">
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Kor.pdf" target="_blank" class="btn btnLineGray btn-round" style="margin-right:10px; margin-bottom:10px">
            <i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF Korean
          </a>
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
            <i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF English
          </a>
		    </p>
      </section>
    </div>
  </div>
  <!-- subWrap// -->