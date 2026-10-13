<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI GLOVILLE</p>
			<h3>Accueil</h3>
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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5">
			<b>
				Bienvenue sur le site de Hyundai Gloville
			</b>
		</h3>
        </div>
        <div class="text-style1">
          En améliorant l'efficacité logistique et la facilité de service, notre entreprise continue de développer et réaliser des progrès afin de maximiser la valeur client.
		  <br /><br />
         Aujourd'hui encore, nos dirigeants et employés mettent tout en œuvre avec des investissements continus pour apporter la meilleure satisfaction aux clients, en proposant des solutions logistiques personnalisées optimales pour répondre aux mutations à l'ère de la 4ème révolution industrielle.
		  <br /><br />
          L'énoncé de mission de notre entreprise est de «mettre en œuvre nos capacités de gestion et de créer de nouvelles valeurs afin que nos clients et les employés puissent poursuivre leur co-prospérité, réaliser leur imagination créative avec passion et devenir la meilleure entreprise».
		  <br /><br />
          Nous continuerons de garantir de nouveaux moteurs de croissance et de gérer les responsabilités pour devenir une entreprise de logistique mondiale.
		  Les défis pour augmenter la valeur client se poursuivront. Nous vous demandons votre intérêt et vos encouragements.<br />
		  Nous remercions sincèrement nos clients et attendons avec impatience de votre intérêt et votre soutien.<br /><br />
          <p class="tar ceoName">CEO <span>Dae Hoan Oh</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->