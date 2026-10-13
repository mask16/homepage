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
			<p>ABOUT US</p>
			<h3>기업소개</h3>
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
            <h3 class="titStyle6"><span class="fontPop"><b>HWBC</b></span> 정립과 의미</h3>
          </div>
          <div class="aboutHwbcCon">
            <p class="text-style1">
              우리가 회사를 운영하는 데 있어서 경쟁이 국내를 넘어서 전 세계적으로 치열해지며 복잡해진 경영 환경에 선제적으로 대응하여 기업의 발전과 안정을 이루기 위해서는 임직원 모두가 회사 운영의 본질과 경영에 대한 통일된 정의를 체계적으로 정립하여, 임직원은 이를 의사결정의 기준으로 삼아야 합니다.
	  임직원이 각기 다른 관점과 이해에 따라 기업 운영을 하는 경우 회사 운영의 기본 목적과 방향을 달리하기 때문에 의사소통은 물론 올바른 의사결정에도 이르지 못하게 됩니다.<br/><br/>
	  따라서 우리는 전 임직원이 회사 운영의 기본방향을 공유하며 업무수행능력을 향상시키며, 임직원의 힘을 하나로 결집시켜 강하고 우수한 기업문화를 만드는 초석을 만들고자 합니다.
              이에 현대종합금속 기업문화(Hyundai Welding Business Culture)로서 HWBC를 정립하고자 하니, HW의 임직원들은 반드시 HWBC에 대한 믿음과 신념을 가지고 사업활동을 해 나가기 바랍니다.
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
	<h3 class="titStyle5">사업 관계자
	<br/>공동 번영 추구</h3>
</div>
<div class="aboutHwbcCon">
	<p class="text-style1">
		임직원은 사업 관계자임과 동시에 회사를 구성하는 중심이자 주체로서 사업 관계자 공동번영을 추구함으로써 임직원의 만족이 커지고 임직원 개인의 성장도 가능하다는 신념을 가지고 업무를 수행한다.<br/>
		회사는 고객에게 계속해서 가치 부여해서 선택받고 고객과 공동번영한다.<br/>
		회사는 임직원이 업무를 통해서 보람을 느끼고 성과에 대한 보상을 받게 하며, 임직원은 회사의 발전에 기여한다.<br/>
		회사는 주주의 기업가치가 커 나갈 수 있도록 회사의 내실과 성장을 구현한다.<br/>
		회사는 또한 기업의 사회적 책임을 다하여 사회와 함께 공동번영한다.<br/>
		이에 따라 고객, 임직원, 주주, 사회에 대한 공동번영 가치가 창조되어 기업이 지속성장과 영구히 존속 발전해 나가며 사회 발전과 인류의 행복에 기여한다.
            </p>
            <div class="aboutHwbcImg02">
              <span class="aboutHwbcImg02Dot"></span>
            </div>
          </div>
        </section>
        <!-- aboutHwbc02// -->


        <section class="aboutHwbc aboutHwbc03 conPd" id="aboutHwbc03">
          <div class="subTitleArea">
            <h3 class="titStyle5"><span class="fontPop">CIPP</span>를 통한<br /><span class="fontPop">BESCOM</span> 구현</h3>
          </div>
          <div class="aboutHwbcCon">
            <p  class="text-style1">
	무한경쟁 경영 환경 속에서 회사가 사업관계자 공동가치를 구현해 나가기 위해서는 회사는 BESCOM(Best Company 기업이 구현할 수 있는 최고의 경영 수행능력과 가치창조) 구현을 통해 지속적으로 가치를 극대화해야 한다.<br/>
	이를 위해, 임직원은 CIPP(Creative Imagination Passionate Practice 창의적인 상상력을 열정적으로 실현) 구현을 통해 임직원의 역량을 발휘하여 회사 발전에 기여한다.<br/>
	CIPP에서는 창의적인 상상력을 열정적으로 실천하여 기업 간 전쟁에서 승리하는 상황을 임직원의 용기로 규정하며, CIPP 구현에 임직원의 용기를 발휘할 수 있는 환경이 중요하다고 본다.<br/><br/>

	이에 따라 회사는 용기 있는 임직원을 발탁하여 보상하며 필요한 제반 권한을 부여하여 단순성과 달성을 뛰어넘는 용기를 기본으로 한 강한 도전과 혁신이 지속적으로 실천되도록 한다.<br/>
	BESCOM에 도달하기 위해서는 현재의 제한된 인적 물적 상황에 한순간에 도달하기는 불가능 하기 때문에 반복적으로 더 개선된 회사로 Step Forward 해 나가며 의욕적인 목표로 Target Goal을 상향 조정해 나가며 실행함으로써 Best Company에 도달한다.<br/>
	용기 있는 임직원은 때때로는 듣기 싫은 타인의 의견에도 귀 기울 줄 알며, 상호존중과 신뢰를 바탕으로 한 할 말은 다하는 끝장토론 소통문화로 Team Work를 극대화하며, 스스로 동기부여하여 높은 목표에 도전하여 BESCOM을 구현하며 동시에 사업관계자의 일원이자 중심으로서 사업관계자 공동번영에 이바지한다.
            </p>

            <div class="aboutHwbc03Circle">
              <span class="dot dot01"></span>
              <span class="dot dot02"></span>

              <div class="aboutHwbc03Circle01">
                <h5><b>CIPP</b></h5>
                <p>창의적인 상상력을 열정적으로<br />실천하여 기업 간 전쟁에서<br />승리하는 임직원의 용기</p>
              </div>
              <div class="aboutHwbc03Circle02">
                <h5><b>BESCOM</b></h5>
                <p>무한경쟁 영영 환경 속에서<br />회사가 사업 관계자와 공동가치를<br />창조하기 위한 회사의 구현</p>
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
                  <p>임직원의 작은 변화에서<br />시작되는 기업의 큰 변화</p>
                </div>
              </div>
              <div class="aboutHwbc04-right">
                <div class="circle01"></div>
                <div class="circle02">
                  <p>공동번영</p>
                </div>
                <div class="circle03">
                  <p>CIPP</p>
                </div>
                <div class="circle04">
                  <p>임직원</p>
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