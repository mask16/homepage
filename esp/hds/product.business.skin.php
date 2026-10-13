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
        <h3>Negocio</h3>
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
				Hyundai Superteck es una empresa profesional especializada en materiales de soldadura especiales para brindar al cliente las mejores soluciones de soldadura.
			</b>
		  </h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            Hyundai Superteck es una empresa de soldadura especial que ofrece a los clientes la mejor solución de soldadura mediante el suministro de materiales de soldadura especiales de alta calidad, materiales de soldadura no ferrosos y otros materiales relacionados con la soldadura adecuados para su entorno de soldadura especial.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->