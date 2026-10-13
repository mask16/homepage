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
          <h3 class="titStyle5">
			<b>
				真心欢迎访问现代Gloville主页的各位
			</b>
		  </h3>
        </div>
        <div class="text-style1">
          我们公司通过提高物流效率和服务能力来最大化客户价值的理念下，不断进行挑战和革新。
		  <br /><br />
          今天，我们的员工们为了适应第四次产业革命时代的变化，通过提供最佳的量身定做型物流解决方案，来给顾客带来最佳的满足感，正在持续进行投资的同时尽最大的努力。
		  <br /><br />
          本公司的企业文化是"作为事业者的顾客、公司和职员追求共同繁荣，热情地实现创意性的想象力，实现成为最佳公司的经营执行能力，并创造新的价值"。
		  <br /><br />
          我们现代Gloville以这样的心态，为了成为世界性的综合物流企业，将确保新的成长动力，持续进行责任经营。
		  <br /><br />
          今后为了提高顾客的价值，还会不断挑战。 请各位顾客多多关注和鼓励。
		  <br /><br />
          谢谢。
          <p class="tar ceoName">代表理事社长 <span>Dae Hoan Oh</span></p>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->