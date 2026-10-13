<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
		<h3>事业介绍</h3>
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>现代综合金属机械事业部R&D中心（技术研究所）以环保工程技术为基础，为保护海洋环境，致力于环保船舶器材的开发及研究。</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            本R&D中心（技术研究所）通过电化学基础研究，开发不溶性电极（DSA）材料、高效海水电解槽、Electro-Hydraulic阀门及智能控制系统。
			利用计算流体力学模拟(CFD)的 单相及多重流体的流动解释、热流动及性能解释、热管工程(3D modeling)等，以多种电算及工程技术努力得出最佳结果。以此为基础，为设计优化,、提高产品效率正在进行研究。
			此外，我们还致力于分析环保领域的革新技术动向，并根据市场变化，致力于开发高附加值的新产品及工艺的研究。
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->