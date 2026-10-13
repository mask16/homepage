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
        <p>Business</p>
        <h3>사업소개</h3>
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
				現代スーパーテックは、顧客に最適な溶接ソリューションを提供する特殊溶接専門企業です
			</b>
		  </h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            現代スーパーテックは、顧客の特別な溶接環境に適合する高品質の特殊溶接材料と非鉄合金溶接材料、溶接関連副資材の供給を通して、顧客に最適な溶接ソリューションを提供する特殊溶接専門企業です。
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->