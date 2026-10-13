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
			<h3>企业介绍</h3>
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
          <h3 class="titStyle5">
			<b>欢迎来访现代综合金属网站。</b>
		  </h3>
        </div>
        <div class="text-style1">
          现代综合金属公司自1975年成立以来，不断进行研究开发, 积极投资最新设备，在生产出优质的焊接材料。不仅是韩国第一，而且是世界公认的焊接专业企业。
		  <br />
          此外，开发并在供应适合各产业的数码逆变焊机等最新焊接设备和环保性新事业——船舶用 BWTS。
		  <br /><br />
          我们将不满足于现状，以不断挑战和革新的精神，持续培养优秀人才，通过研发、质量革新以及开发最新焊接设备，为造船、海洋、重工业、成套设备、汽车、建设、钢管、环保能源产业等各产业提供更好的服务和焊接解决方案。
		  <br /><br />
          现代综合金属将以始终重视顾客的以顾客为中心的经营和面向未来的挑战精神为跳板，重视社会价值，为成为与各位顾客一起树立并实现更大的梦想而竭尽全力。
		  <br /><br />
          向各位顾客表示衷心的感谢，并请多多关注和支持。
          <p class="tar ceoName">代表理事 社长 <span>吴吉根</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->