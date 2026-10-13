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
			<p>HYUNDAI WELDING</p>
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

    <div class="subContent conPd">
      <section class="aboutWrap aboutCeo">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>Bienvenue sur le site de Hyundai Welding.</b></h3>
        </div>
        <div class="text-style1">
          Depuis sa création en 1975, Hyundai Welding produit des matériaux de soudage de haute qualité grâce à une recherche et un développement incessants et à des investissements actifs dans les dernières installations.<br />
          En outre, nous avons développé et fourni actuellement les derniers équipements de soudage, tels que des postes à technologie inverter numériques adaptées à diverses industries, et ainsi que notre nouvelle activité écologique - BWTS.<br /><br />

          Nous ne nous contentons pas de cela, mais continuons à cultiver d'excellents talents avec un esprit de défi et d'innovation sans fin, et à travers la R&D, l'innovation de qualité et le développement des derniers équipements de soudage, construction navale, offshore, industrie lourde, usines, automobiles, construction , tubes en acier, nous prendrons les devants en fournissant les meilleurs services et solutions de soudage aux clients de divers secteurs, y compris le secteur de l'énergie respectueux de l'environnement.<br /><br />

          Hyundai Welding fera toujours de son mieux pour devenir une entreprise qui valorise et réalise de plus grands rêves avec ses clients, avec une gestion centrée sur le client qui valorise les clients et un esprit de défi pour l'avenir.<br /><br />

          Nous remercions sincèrement et nous vous serions reconnaissants de votre intérêt et de votre soutien.
          <p class="tar ceoName">Hyundai Welding CEO</p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->