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

          if ($(document).scrollTop() > hTop) {
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
			<p>ABOUT US</p>
			<h3>Company Introduction</h3>
		</div>
	</div>
</section>

<div class="subWrap">

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
				<li class="on">
					<a href="#aboutHwbc01">About</a>
				</li>
				<li>
					<a href="#aboutHwbc02">Preface</a>
				</li>
				<li style="display:none;">
					<a href="#aboutHwbc03">Preface</a>
				</li>
				<li>
					<a href="#aboutHwbc04">Values</a>
				</li>
			</ul>
		</section>
		<div class="floatingRight aboutWrap">
			<section class="aboutHwbc aboutHwbc01 conPd" id="aboutHwbc01">
				<div class="subTitleArea">
					<h3 class="titStyle6">
						Establishment and Meaning of <span class="fontPop"><b>HWBC</b></span>
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					In order to respond to the increasing complex business environment, all employees must establish a unified notion of management and use it for decision-making.
 	 		  <br><br>
			  Unless this is done, employees will not be able to make appropriate decisions, since there will be a gap between their goals and those of the company.
			  <br><br>
			  We are creating a foundation for all employees to share the basic direction of the enterprise, to improve their ability to perform their duties,
			  and to unite their power into one: to create a strong and superior corporate culture.
			  <br><br>
			  Therefore, as we intend to establish HWBC as the Hyundai Welding Business Culture,
			  Hyundai Welding's employees must carry out business activities with full belief in HWBC.


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
					<h3 class="titStyle5">Pursuing Joint Prosperity
					<br/>of Business Stakeholders</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						  Executives and employees are both business stakeholders while, in the meantime, they are also the core of the enterprise.
			  They perform their work duties with the belief that pursuing co-prosperity will eventually enhance individual satisfaction and growth.<br>
			  The company continues to create value and prosper with it's customers.<br>
			  The company will ensure that all employees feel rewarded and compensated for their work and performance. In return,
			  all employees will contribute to the development of the company.<br>
			  In order to grow corporate value for shareholders, the company embodies the internal stability and growth.<br>
			  The company will fulfil it's corporate social responsibilities in order to prosper together, within society. <br>
			  Accordingly, shared prosperity among customers, employees, shareholders, and society is created. This, in turn, contributes to a sustainable
			  development of society and human well-being.
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
					Implementing <span class="fontPop">BESCOM</span><br/>
					through <span class="fontPop">CIPP</span>
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
					   In order for the company to realize common values with its business associates in a competitive business environment,
                                      it must continuously maximize its value through the implementation of BESCOM - Best Company's Best Management performance and value creation.
			  To this end, employees contribute to corporate development by demonstrating their capabilities through the implementation of CIPP -
			  Creative Imagination Passionate Practice. CIPP is about winning in fierce competition by courageously practicing creative imagination.
			  A work environment in which employees are driven and encouraged to implement CIPP is important.
			  <br><br>
			  Therefore, the company selects courageous executives and employees to grant them all necessary authority with an appropriate compensation,
			  so that strong challenges and innovations based on courage, beyond simplicity and achievement, are continuously implemented.
			  At this point, it is impossible to reach BESCOM due to limited manpower and physical status. Therefore, we repeatedly step forward and reach Best Company status by constantly raising the "Target Goal" with strong ambition.
			  Executives and employees sometimes need to listen to unpleasant opinions, in order to maximize teamwork based on mutual respect and trust.
			  This will motivate them to aim for higher goals and will also contribute to common prosperity of stakeholders.
            </p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>Courage of employees with<br/>creative imagination and passion<br/>to gain superiority over competitors</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>The company's implementation<br/>to create shared value with business<br/>stakeholders in an era of<br/>fierce competition</p>
						</div>
					</div>
				</div>
			</section>
			<!-- aboutHwbc02// -->

			<section class="aboutHwbc aboutHwbc04 conPd" id="aboutHwbc04">
				<div class="aboutHwbc04Con">
					<div class="aboutHwbc04-left">
						<div class="aboutHwbc04-leftContent">
							<h4>HWBC’s Values</h4>
							<p>Big change starts small.</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>Joint</br>Prosperity</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Employee</p>
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
		<!-- aboutWrap// -->
	</div>
	<!-- subContent// -->
</div>
<!-- subWrap// -->