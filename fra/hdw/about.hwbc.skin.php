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
			<p>HYUNDAI WELDING</p>
			<h3>Accueil</h3>
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
						ECréation et Signification de HWBC</span>
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					Afin de répondre à l'environnement concurrentiel et complexe, la société doit devenir plus redoutable et complexe à travers le monde. Tous les directeurs et personnel devraient systématiquement établir une fondation unifiée et devraient l'utiliser comme base pour la prise de décision. Si les employés participent à l'exploitation de l'entreprise avec la fondation de perspectives et d'intérêts différents, ils ne parviendront pas à la décision et à la communication appropriée.<br><br>
					Nous souhaitons créer une fondation pour tous nos employés, leur permettant de partager les principes des opérations de l'entreprise, et ainsi d'améliorer la capacité à s'acquitter efficacement de leurs tâches et d'unir leur pouvoir en un seul - pour créer une culture d'entreprise forte et supérieure. <br><br>
					Avec l'intention de créer HWBC en tant que la culture d'entreprise de Hyundai Welding, il est nécessaire que les employés de Hyundai Welding menent leurs responsabilités en confiance en HWBC.
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
					<h3 class="titStyle5">Poursuivre la prospérité
					<br/> conjointe des parties prenantes</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						  Les directeurs et personnel sont tous des parties prenantes de l'entreprise, et ils sont les valeurs fondamentales de l'entreprise. Ils s'acquittent de leurs tâches avec la conviction que la prospérité conjointe améliorera éventuellement la satisfaction du personnel et de croissance personnelle.<br>
L'entreprise continue de valoriser les clients, d'être choisie par les clients, et finalement co-prospèrent avec les clients.
L'entreprise doit s'assurer que tous les employés se sentent récompensés et rémunérés pour leur travail et leurs performances, et tous les employés doivent contribuer au développement de l'entreprise.<br>
L'entreprise prend conscience de la stabilité et de la croissance de l'entreprise afin d'accroître la valeur pour ses actionnaires.
L'entreprise assume également ses responsabilités sociales d'entreprise pour prospérer avec la société.<br>
En conséquence, la valeur du prospérité conjointe du client, l'employé et des actionnaires est créée, permettant la croissance et développement permanent de l'entreprise, et finalement contribue au développement social et au bien-être humain.

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
					Réaliser <span class="fontPop">BESCOM</span><br/>
					via <span class="fontPop">CIPP</span>
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
					  Afin de réaliser la valeur commune de ses associés dans un environnement concurrentiel, l'entreprise doit continuellement maximiser sa valeur en réalisant BESCOM -  (Best Company -  Création de la meilleure performance de gestion et de la valeur qu'une entreprise peut réaliser).
À cette effet, l'employé doit contribuer au développement de l'entreprise en démontrant ses capacités par la mise en œuvre de CIPP - (Creative Imagination Passionate Practice - Réaliser avec passion l'imagination créative). En pratiquant leur imagination créative avec passion, CIPP définit l'emportation du compétition entre les concurrents comme courage des directeurs et personnel. L'environnement dans lequel le courage des employés peut s'exprimer est donc essentiel dans la mise en œuvre du CIPP.
En conséquence, l'entreprise sélectionne les employés courageux pour leur accorder toute l'autorité nécessaire avec une rémunération appropriée, afin que des défis forts et des innovations basées sur le courage, au-delà de la simplicité et de la réussite, soient continuellementpratiqués.

			  <br><br>
			  Avec la situation humaine et matérielle limitée actuelle, il est impossible d'atteindre Bescom en un instant, alors en dirigeant à plusieurs reprises vers une entreprise améliorée, nous atteignons Bescom en augmentant l'objectif avec un objectif ambitieux.
Les dirigeants et employés courageux ont parfois besoin d'écouter les opinions des autres qu'ils ne souhaitent pas entendre, pour pourvoir maximiser le «Travail d'équipe» avec une culture de communication de bout en bout basée sur le respect mutuel et la confiance, et ainsi se motiver à remettre en question des objectifs plus élevés et contribuent simultanément à la prospérité conjointe des parties prenantes de l'entreprise.


            </p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>Courage des employés avec<br/>imagination créative et passion<br/>pour gagner la supériorité sur les<br/>concurrents</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>Exécution de la société pour<br/>créer une valeur commune avec les<br/>intervenants des entreprises à l'ère de<br/>la concurrence féroce</p>
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
							<p>Le grand changement commence petit</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>Prospérité</br>commune</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Employé</p>
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