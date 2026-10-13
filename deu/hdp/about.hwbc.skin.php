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
			<h3>Unternehmensvorstellung</h3>
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
						<span class="fontPop">Einführung und Bedeutung von <b>HWBC</b></span>
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					Um präventiv auf das ständig wachsende und komplexe Geschäftsumfeld zu reagieren, in dem unsere Wettbewerbe stattfinden, muss unser Unternehmen weltweit präsenter und umfangreicher werden. Alle Führungskräfte sowie die Mitarbeiter sollten systematisch eine einheitliche Definition der Art des Betriebes und der Unternehmensführung festlegen und diese als Entscheidungsgrundlage verwenden.
					<br/>
					Wenn die Mitarbeiter aufgrund unterschiedlicher Perspektiven und Interessen am Unternehmensbetrieb teilnehmen, werden sie nicht die richtige Entscheidung und gewünschte Kommunikation treffen, da der grundlegende Zweck und die Richtung des Unternehmensbetriebs unterschiedlich sein werden.
					<br/><br/>
					Daher möchten wir eine Grundlage für alle Mitarbeiter schaffen, um die grundlegende Ausrichtung des Unternehmensbetriebs zu teilen, ihre Fähigkeit zur Erfüllung ihrer Aufgaben zu verbessern und ihre Entscheidungskraft zu einer einzigen zu vereinen - um eine starke und überlegene Unternehmenskultur zu schaffen.
					<br/>
					Daher müssen die Mitarbeiter der Hyundai Welding Company Geschäftsaktivitäten mit vollem Vertrauen in HWBC durchführen, da wir beabsichtigen, HWBC als Hyundai Welding-Unternehmenskultur zu etablieren.
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
						Gemeinsamen Wohlstand der<br>Interessen verfolgen
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						Führungskräfte sowie Mitarbeiter sind zugleich Geschäftsakteure.Sie sind der Kern und das Hauptorgan des Unternehmens. Sie erfüllen ihre Arbeit mit der Überzeugung, dass das Streben nach Wohlstand Aller letztendlich die Zufriedenheit und das Wachstum des Einzelnen steigern wird.
						<br/>
						Das Unternehmen schätzt alle ausgewählten Kunden und gedeiht letztendlich mit ihnen.
						<br/>
						Das Unternehmen stellt sicher, dass sich alle Mitarbeiter für ihre Arbeit und Leistung wertgeschätzt und gerecht entlohnt werden und dass alle Mitarbeiter zur Entwicklung des Unternehmens beitragen.
						<br/>
						Das Unternehmen verkörpert die interne Stabilität und das Wachstum des Unternehmens, damit der Unternehmenswert der Aktionäre steigen kann.
						<br/>
						Das Unternehmen erfüllt auch seine soziale Verantwortung, um gemeinsam mit der Gesellschaft erfolgreich zu sein.
						<br/>
						Dementsprechend wird der Wert des gemeinsamen Wohlstands für die Kunden-, Mitarbeiter- und Aktionärsgesellschafter geschaffen, was zu einem kontinuierlichen Wachstum und einer dauerhaften Entwicklung des Unternehmens führt, welches zur sozialen Weiterentwicklung und zum menschlichen Wohlbefinden beitragen wird.
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
					Implementierung von BESCOM über CIPP
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						Damit das Unternehmen den gemeinsamen Wert seiner Geschäftspartner in einem unendlichen Wettbewerbsumfeld realisieren kann, muss es seinen Wert durch die Implementierung von BESCOM - Best Management's Best Management Performance und Wertschöpfung - kontinuierlich maximieren.
						<br/>
						Zu diesem Zweck trägt der Mitarbeiter zur Unternehmensentwicklung bei, indem er seine Fähigkeiten durch die Implementierung von CIPP - Creative Imagination Passionate Practice unter Beweis stellt.
						<br/>
						CIPP definiert die Situation, den Geschäftswettbewerb zwischen Unternehmen zu gewinnen, indem leidenschaftlich kreative Fantasie und Mut von Führungskräften und Mitarbeitern praktiziert. Es ist der Ansicht, dass ein Umfeld, in dem Mitarbeiter ihren Mut zur Umsetzung von CIPP entfalten können, von entscheidender Bedeutung ist.
						<br/><br/>

						Daher wählt das Unternehmen mutige Führungskräfte und Mitarbeiter aus, um ihnen alle erforderlichen Befugnisse zu übertragen und mit einer angemessenen Vergütung zu gewähren das starke Herausforderungen und Innovationen, die auf Mut beruhen, über Einfachheit und Leistung hinaus kontinuierlich umgesetzt werden.
						<br/>
						Um BESCOM zu erreichen, ist es unmöglich, die derzeit begrenzte personelle und physische Situation in einem Augenblick zu erreichen. Daher treten wir wiederholt in Richtung eines verbesserten Unternehmens vor und erreichen den Status eines besten Unternehmens, indem wir mit starkem Ehrgeiz das „Ziel“ erreichen.
						<br/>
						Mutige Führungskräfte und Mitarbeiter müssen manchmal auf die Meinungen anderer hören, die sie nicht hören möchten, um die „Teamarbeit“ mit einer Kultur der End-of-the-End-Diskussionskommunikation zu maximieren, die auf gegenseitigem Respekt und Vertrauen basiert, und sich selbst zu Herausforderungen motivieren höhere Ziele und gleichzeitig zum gemeinsamen Wohlstand der Geschäftsinteressenten als Mitglied und Zentrum der Geschäftspartner beitragen.
					</p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>Mut von Mitarbeitern mit kreativer<br>Vorstellungskraft und Leidenschaft,<br>um sich gegenüber<br>Mitbewerbern durchzusetzen</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>
								Realisierung eines Unternehmens<br>für das Unternehmen zur Schaffung<br>gemeinsamer Werte mit<br>Geschäftsinteressenten in einem<br>unendlich wettbewerbsorientierten Geschäftsumfeld
							</p>
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
							<p>Große Veränderungen im Unternehmen beginnen<br> mit kleinen Veränderungen bei den Mitarbeitern</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>Gemeinsamer<br>Wohlstand</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Mitarbeiter</p>
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