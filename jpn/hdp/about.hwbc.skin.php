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
			<p>HYUNDAI PNS</p>
			<h3>企業紹介</h3>
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
				<span class="fontPop"><b>HWBC</b></span>確立の定義
			</h3>
          </div>
          <div class="aboutHwbcCon">
            <p class="text-style1">
				我々が会社を運営するにあたって、国内だけでなく全世界的に競争が激しくなり、複雑になっていく経営環境に先見的に対応し、企業の発展と安定を図るためには、役職員全員が会社運営の本質と経営に対する統一した定義を具体的に確立し、役職員はこのことを意思決定の基準にしなければなりません 役職員がそれぞれ異なる観点と理解に従って企業を運営する場合、会社運営の基本目的と方向が異なるため、意思疎通はもちろん正しい意思決定にも至らなくなってしまいます
				<br/><br/>
				従って、私たちは全役職員が会社運営の基本方向を共有し、業務遂行能力を向上させ、役職員の力を一つに結集させ、強くて優秀な企業文化を作る礎を築こうとしています
				<br/>
				そのため、現代綜合金属企業文化(Hyundai Welding Business Culture)としてHWBCを確立したいと考えておりますので、HW(現代綜合金属)の役員や従業員は、ぜひHWBCに対する信頼と信念を持って事業活動を展開をしていく所存です
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
				事業関係者との<br>共同繁栄を追求する
			</h3>
          </div>
          <div class="aboutHwbcCon">
            <p class="text-style1">
				役職員は事業関係者であると同時に、会社を構成する中心であり自ら主体として事業関係者の共同繁栄を追求することで役職員の満足度が高まり、役職員個人の成長も可能であるという信念を持って業務を遂行する事が可能である
				<br/>
				会社は顧客に常に価値を付与して会社が顧客に選択され、また顧客と共に繁栄する
				<br/>
				会社は役職員が業務を通じて達成感をを感じ、成果に対する補償を受けられるようにし、役職員は会社の発展に寄与する
				<br/>
				会社は株主の企業価値が大きくなるように会社の内実と成長を実現する
				<br/>
				会社はまた、社会的責任を果たし、社会と共に共同繁栄する
				<br/>
				これにより、顧客従業員の株主社会に対する共同繁栄価値が創造され、企業が持続成長と永久に存続発展し、社会発展と人類の幸福に貢献する事が出来る
			</p>
			<div class="a
            <div class="aboutHwbcImg02">
              <span class="aboutHwbcImg02Dot"></span>
            </div>
          </div>
        </section>
        <!-- aboutHwbc02// -->


        <section class="aboutHwbc aboutHwbc03 conPd" id="aboutHwbc03">
          <div class="subTitleArea">
            <h3 class="titStyle5">
				<span class="fontPop">CIPP</span>による<br/>
				<span class="fontPop">BESCOM</span>での具現化
			</h3>
          </div>
          <div class="aboutHwbcCon">
            <p class="text-style1">
				無限競争の経営環境の中で、会社が事業関係者の共同価値を具現化していくためには、会社はBESCOM（BestCompany 企業が具現できる最高の経営遂行能力と価値創造）の具現を通じて、持続的に価値を極大化しなければならない
				<br/>
				そのため、社員一同はCIPP(Creative Imagination Passionate Practice 創意的な想像力を情熱的に実現)を実現し、社員個々の力量を発揮して会社の発展に貢献するCIPPにより、創意的な想像力を情熱的に実現し、企業間の競争で勝利する状況を社員一同の勇気と表現し、CIPPの実現に社員一同の勇気を発揮できる環境が重要であると考えている
				<br/><br/>
				これにより会社は勇気ある社員を抜擢して相応な役職や諸権限を与え、単純性と達成を超える勇気を基本にした強い挑戦と革新が持続的に実践されるような職場環境を創造維持していく
				<br/>
				BESCOMに到達するためには、現在の限られた人的·物的状況に一気に到達することは不可能であるため、継続的な改善がなされた会社にステップフォーワードしていき、意欲的な目標でターゲット·ゴールを常に上方修正していき、実行することによってベスト·カンパニ― に到達する
				<br/>
				勇気ある社員一同は、時には聞きたくない他人の意見にも耳を傾け、相互尊重と信頼を基にした、必要な場合は徹底討論の疎通文化でTeam Workを極大化し、自らの動機付与をしながら高い目標に挑戦してBESCOMを具現すると同時に、事業関係者の一員であり中心として事業関係者との共同繁栄に貢献する
			</p>

            <div class="aboutHwbc03Circle">
              <span class="dot dot01"></span>
              <span class="dot dot02"></span>

              <div class="aboutHwbc03Circle01">
				<h5>
					<b>CIPP</b>
				</h5>
				<p>
					クリエイティブな<br>
					想像力を情熱的に実践し、<br>
					企業間の戦争で勝利する社員の勇気
				</p>
			  </div>
			  <div class="aboutHwbc03Circle02">
				<h5>
					<b>BESCOM</b>
				</h5>
				<p>
					無限競争の経営環境の中で、<br>
					事業関係者と共同価値を創造する<br>
					会社の具現
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
							<p>社員の小さな変化から始まる企業の大きい変化</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>共同繁栄</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>社員</p>
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