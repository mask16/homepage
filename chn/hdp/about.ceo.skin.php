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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>真心欢迎各位访问现代PNS网站</b></h3>
        </div>
        <div class="text-style1">
			现代PNS于2020年3月20日，为进一步加强焊接设备事业部门的专业性，提高经营效率，并迅速应对急剧变化的市场变化，打造技术基础，由现代综合金属（株）分割成立
			<br /><br />
			现代PNS自1995年设立焊接机事业部以来，经过25年的不断研究开发，2007年生产数字SCR焊接机，2013年生产数字变频焊接机，特别是2019年开发了高端焊接机Hi系列，供应包括造船、成套设备在内的整个事业领域
			<br /><br />
			另外，为了确保世界最先进的技术力，通过与各领域最顶尖的研究机关合作，带头开发新技术并实现国产化，为了提供最适合产业现场要求的焊接设备，一直运营R&D CENTER，努力开发符合顾客需求的产品
			<br /><br />
			现代PNS今后也将把满足顾客作为最优先的价值，以时刻重视顾客的客户为中心经营和面向未来的挑战精神为跳板，重视社会价值，为成为与各位顾客一起培养并实现更大的梦想的企业而竭尽全力。
			<br /><br />
			向各位顾客表示衷心的感谢，并请给予更多的关心和支持
			<!-- <p class="tar ceoName">代表理事 <span>裴炳默</span></p> -->
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->