<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.hwbc.skin.php
+ Description	: about.hwbc
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<script>
      $(document).ready(function () {

        setInterval(function () {
          var active = $('li.active');
          active.removeClass('active');
          if (active.next('li').length == 0) {
            active.parent('ul').find('li:first').addClass('active');
          } else {
            active.next('li').addClass('active');
          }
        }, 1000);

        var hVisual = $('.subVisual').outerHeight(),
          hSec01 = $('.aboutHwbc01').outerHeight(),
          hSec02 = $('.aboutHwbc02').outerHeight(),
          hSec03 = $('.aboutHwbc03').outerHeight(),
          hTop = hVisual + hSec01 + hSec02 + 100,
          hTop2 = hVisual + hSec01 + hSec02 + hSec03;

        $(window).scroll(function () {
          if ($(document).scrollTop() > hTop) {
            $('.aboutHwbc03Circle').addClass('move');
          } else {
            $('.aboutHwbc03Circle').removeClass('move');
          }

          if ($(document).scrollTop() > hTop2) {
            $('.aboutHwbc04-right').addClass('move');
          } else {
            $('.aboutHwbc04-right').removeClass('move');
          }
        });

        var nav = $(".leftFloating ul li");
        var contents = $(".aboutHwbc");

        nav.click(function (e) {
          e.preventDefault();
          var target = $(this);
          var index = target.index();
          //alert(index);
          var section = contents.eq(index);
          var offset = section.offset().top;
          //alert(offset);
          $(".offset_top").text(offset);

          $("html,body").animate({
            scrollTop: offset
          }, 600);
        });

        $(window).scroll(function () {
          var wScroll = $(this).scrollTop();

          $(".scroll_top").text(wScroll);

          if (wScroll >= contents.eq(0).offset().top) {
            nav.removeClass("on");
            nav.eq(0).addClass("on");
          }
          if (wScroll >= contents.eq(1).offset().top) {
            nav.removeClass("on");
            nav.eq(1).addClass("on");
          }
          if (wScroll >= contents.eq(3).offset().top) {
            nav.removeClass("on");
            nav.eq(3).addClass("on");
          }
        });
      });
</script>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI SUPERTECK</p>
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

	<div class="subContent pb0">
      <section class="leftFloating" id="leftFloating">
        <ul>
          <li class="on"><a href="#aboutHwbc01">About</a></li>
          <li><a href="#aboutHwbc02">Preface</a></li>
          <li style="display:none;"><a href="#aboutHwbc03">Preface</a></li>
          <li><a href="#aboutHwbc04">Values</a></li>
        </ul>
      </section>
      <div class="floatingRight aboutWrap innerWrap">
        <section class="aboutHwbc aboutHwbc01 conPd" id="aboutHwbc01">
          <div class="subTitleArea">
            <h3 class="titStyle6">
				<span class="fontPop"><b>HWBC</b></span> 的树立和意义
			</h3>
          </div>
          <div class="aboutHwbcCon">
            <p class="text-style1">
				在我们经营公司上，竞争恶化已经超过国内，蔓延到全世界，为了先发制人的应对复杂的经营环境，实现企业的发展和安定，职员各位针对公司运营的本质和经营，
				要体制性的树立统一的定义，职员们要视次为进行决策的基准。职员每个人按照自己不同的观点和理解来运行公司的话，公司运营的基本目标和方向就会不同，不只不能相互交流，也不能进行正确的决策。
				<br/><br/>
				因此我们所有的职员共享公司的基本运营方针，提高业务执行能力，集所有职员的力量为一体，创立坚强和优秀的企业文化的基石。
				<br/>
				因此树立现代综合金属企业文化(Hyundai Welding Business Culture)为HWBC，HW的职员们一定要怀着对HWBC的信赖和信念进行事业活动。
			</p>
            <ul class="aboutHwbcImg01">
              <li class="aboutHwbcImgCircle active aboutHwbcImgCircle01"></li>
              <li class="aboutHwbcImgCircle aboutHwbcImgCircle02"></li>
              <li class="aboutHwbcImgCircle aboutHwbcImgCircle03"></li>
              <li class="aboutHwbcImgCircle aboutHwbcImgCircle04"></li>
            </ul>
          </div>
        </section>
        <!-- aboutHwbc01// -->

        <section class="aboutHwbc aboutHwbc02 conPd" id="aboutHwbc02">
			<div class="subTitleArea">
				<h3 class="titStyle5">
					追求事业关联者的共同繁荣
				</h3>
			</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					职员是事业关联者的同时，也是公司的中心组成主体，通过追求事业关联者的共同繁荣，怀着职员的满足度会变大，职员每个人也能实现成长的信念来执行任务。
					<br/>
					公司持续赋予客户价值，得到客户的选择，实现共同繁荣。
					<br/>
					公司通过职员的业务感受到价值，对成果进行报偿，职员对公司的发展做出贡献。
					<br/>
					公司通过体现内实和成长来增大股东的企业价值。
					<br/>
					而且公司也要履行企业的社会责任，和社会共同繁荣。
					<br/>
					因此，企业、职员、股东、社会共同繁荣价值实现公司的持续成长和永久存续，对社会发展和人类的幸福做出贡献。
				</p>
				<div class="aboutHwbcImg02">
					<span class="aboutHwbcImg02Dot"></span>
				</div>
			</div>
        </section>
        <!-- aboutHwbc02// -->


        <section class="aboutHwbc aboutHwbc03 conPd" id="aboutHwbc03">
          <div class="subTitleArea">
            <h3 class="titStyle5">
				<span class="fontPop">通过CIPP</span><br/>
				<span class="fontPop">体现BESCOM</span>
			</h3>
          </div>
          <div class="aboutHwbcCon">
            <p class="text-style1">
				在无限竞争的经营环境中，公司为了实现事业关联者的共同价值，公司通过体现 BESCOM(Best Company 事业能体现的最高经营执行能力和价值创造)来持续的进行价值最大化。
				<br/>
				为此，职员通过体现 CIPP(Creative Imagination Passionate Practice 热情的实现创意的想想力)来发挥职员的力量，对公司发展做出贡献。
				<br/>
				在CIPP中，热情的实现创意的想想力，企业间的竞争中，实现胜利的情况来判定职员的勇气。在体现CIPP时，职员的勇气能发挥的环境很重要。
				<br/><br/>
				持有勇气的员工进行报偿，通过赋予所需的各种权限，超越达成单纯成果的勇气来实现持续的强烈的挑战和革新。
				<br/>
				为了达成BESCOM，现在局限的人力物力情况下，瞬时间达成是不可能的，要实行反复的进行改善的公司 Step Forward，向上调整劲头十足的目标Target Goal，来达成Best Company。
				<br/>
				持有勇气的职员，有时候也要倾听别人的意见，相互尊重，以信赖为基础的充分讨论的疏通文化实现最大化的Team Work，通过自觉的激发，挑战高目标体现BESCOM，同时成为事业关联者的一员和中心，实现共同繁荣做贡献。
			</p>

            <div class="aboutHwbc03Circle">
				<span class="dot dot01"></span>
				<span class="dot dot02"></span>

				<div class="aboutHwbc03Circle01">
					<h5>
						<b>CIPP</b>
					</h5>
					<p>
						激情实践创新想象力，<br>
						赢得企业间战争的员工勇气
					</p>
				</div>
				<div class="aboutHwbc03Circle02">
					<h5>
						<b>BESCOM</b>
					</h5>
					<p>
						在无限竞争经营环境下，<br>
						公司与企业负责人创造共同价值的体现
					</p>
				</div>
            </div>
          </div>
        </section>
        <!-- aboutHwbc02// -->

      </div>
      <div class="aboutHwbc04_bg">
        <div class="floatingRight aboutWrap innerWrap">
          <section class="aboutHwbc conPd" id="aboutHwbc04">
            <div class="aboutHwbc04Con">
              <div class="aboutHwbc04-left">
                <div class="aboutHwbc04-leftContent">
                  <h4>HWBC’s Values</h4>
           	<p>从员工的微小变化开始的企业的巨变</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>共同繁荣</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>员工</p>
						</div>
						<div class="circle05">
							<p>BESCOM</p>
						</div>
						<div class="circle06">
							<p>HWBC</p>
                </div>

              </div>
            </div>
          </section>
          <!-- aboutHwbc04// -->
        </div>
      </div>

      <!-- aboutWrap// -->
    </div>
    <!-- subContent// -->
  </div>
  <!-- subWrap// -->