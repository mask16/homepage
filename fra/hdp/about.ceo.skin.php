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
			<p>HYUNDAI PNS</p>
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
          <h3 class="titStyle5"><b>Bienvenue sur le site de Hyundai PNS.</b></h3>
        </div>
        <div class="text-style1">
			Hyundai PNS a été créé le 20 mars 2020 dans le but d'améliorer l'efficacité en renforçant l'expertise du secteur des équipements de soudage et pour préparer une base technologique afin de répondre rapidement aux changements du marché.
			<br><br>
			Depuis la création de la division en 1995, Hyundai PNS a produit des postes à souder numériques SCR en 2007 et des postes à souder inverter numérique en 2013 grâce à une recherche et un développement continus pendant 25 ans. En 2019, nous avons développé la Hi Series, une poste à souder au haut de gamme, et distribué à tous les principaux secteurs d'activité, y compris la construction navale et l'usine
			<br><br>
			Afin de garantir la meilleure technologie, nous prenons l'initiative dans le développement et la localisation de nouvelles technologies grâce à une coopération avec les meilleurs instituts de recherche dans chaque domaine. Nous exploitons un centre de R&D pour pouvoir fournir des équipements de soudage optimisés aux besoins des sites industriels et nous nous efforçons de développer des produits répondant aux exigences des clients.
			<br><br>
			Hyundai PNS continuera de mettre la satisfaction de ses clients en priorité absolue. Nous ferons toujours de notre mieux pour devenir une entreprise qui valorise et réalise de plus grands rêves avec nos clients, en nous concentrant sur des solutions orientées clients et un esprit de défi pour l'avenir.
			<br><br>
			Nous remercions sincèrement nos clients et attendons avec impatience de votre intérêt et votre soutien.
          <!-- <p class="tar ceoName">CEO <span>Byungmook Bae</span></p> -->

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->