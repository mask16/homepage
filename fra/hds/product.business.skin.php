<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI SUPERTECK</p>
		<h3>Nos activités</h3>
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
      <section class="productStudy1">
        <div class="innerWrap conPd">
          <h5 class="titStyle5">
			<b>
				Hyundai Superteck est une entreprise professionnelle spécialisée dans les matériaux de soudage spéciaux pour fournir les meilleures solutions de soudage aux clients
			</b>
		  </h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            Hyundai Superteck est une société de soudure de matériaux spéciaux qui offre des solutions de soudage optimales aux clients en fournissant des matériaux de soudage spéciaux de haute qualité, des matériaux de soudage en alliage non ferreux et d'autres matériaux subsidiaires liés au soudage adaptés à l'environnement de soudage.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->