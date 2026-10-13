<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsAbout.skin.php
+ Description	: sus.ethicsAbout
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

    <div class="subContent conPd">
      <section class="susWrap susAbout">

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>Nous recherchons l'honnêteté, l'équité et l'intégrité.</b></p>
          <h3 class="titStyle5"><b>Objectif et nécessité de la gestion de l'éthique</b></h3>
        </div>

        <div class="text-style1">
          Conformément à la nouvelle ère, Hyundai Welding introduira une «gestion de l'éthique» »qui vise une performance des employés transparente, juste et raisonnable.
La gestion éthique repose sur l'idée que les profits à court terme ne peuvent pas conduire à une croissance durable. Il corrige également les pratiques irrationnelles dans l'entreprise, établit les valeurs des employés dans l'exercice de leurs fonctions et assume les responsabilités sociales de l'entreprise. Actuellement, des organisations internationales telles que l'OMC, l'OCDE et la CCI font pression pour la prévention de la corruption. l'UNEF et l'ISO font également pression pour la normalisation de la gestion éthique afin d'appliquer des règles de concurrence équitables et transparentes au commerce international. Grâce à cette nouvelle stratégie, nous nous efforcerons de parvenir à un développement continu en satisfaisant l'idéologie éthique de toutes les parties prenantes et en établissant une nouvelle culture d'entreprise. Hyundai Welding jettera finalement les bases pour devenir une entreprise mondiale de premier ordre du 21e siècle grâce à une gestion éthique.

        </div>

        <div class="susAboutContent">
            <div class="left">
              <div class="circieBlue circieBlue1">Valeurs<br />transparentes</div>
              <div class="circieBlue circieBlue2">Performance<br />équitable</div>
            </div>
            <div class="bar"></div>
            <div class="right">
              <div class="circleBlueLine">Confiance sociale dans<br />l'éthique d'entreprise</div>
            </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->