<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI SUPERTECK</p>
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

    <div class="subContent">
      <section class="aboutWrap aboutHistory">

        <div class="subTitleArea conPd">
          <h3 class="fontPop titStyle5"><b>En savoir plus sur Hyundai SUPERTECK.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   Démarrage d'une entreprise d'acier allié spécial (acier inoxydable, aluminium, acier résistant à la chaleur, acier résistant à l'usure, etc.)</li>
                    <li><span>2020.10</span>   Démarrage d'une activité des fils pour projection thermique (ZINC, STS, Ni., Etc.) </li>
                    <li><span>2020.08</span>   Démarrage d'une entreprise de brasage fort et de brasage tendre</li>
                    <li><span>2020.07</span>   Démarrage d'une entreprise des électrodes en tungstène</li>
                    <li><span>2020.06</span>   Démarrage d'une entreprise des électrodes de gougeage</li>
                    <li><span>2018.07</span>   Début des activités des tambours de soudage en aluminium (80 kg ~ 173 kg)</li>
                    <li><span>2018.05</span>   Acquisition des certifications CE, TUV pour les produits de soudage au haute resistance a la tension</li>
                    <li><span>2018.03</span>   Acquisition des certification DNV-GL, CE, DB, TUV pour les produits de soudage en aluminium</li>
                    <li><span>2017.12</span>   Démarrage d'une entreprise de produits de soudage en aluminium</li>
                    <li><span>2017.09</span>   Démarrage d'une entreprise de produits de soudage en aluminium</li>
                    <li><span>2015.01</span>   Démarrage d'une entreprise de soudage en alliage spécial qui peut être appliquée à des structures nécessitant des fonctions spéciales - Duplex, Super Duplex, Inconel, Hastelloy, acier résistant à la chaleur Cr-Mo, cryogénique, résistance à la corrosion, haute résistance, conception sismique, ténacité à basse température, etc</li>
                    <li><span>2015.01</span>   Fondation de Hyundai Superteck</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
  <script>
    var swiper = new Swiper('.historySlider', {
      slidesPerView: 'auto',
      spaceBetween: 30,
    });
  </script>