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
			<h3>Introdução da Empresa</h3>
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
						Estabelecimento e significado de <span class="fontPop"><b></span>HWBC</b></span>
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					Para responder de manera preventiva al entorno empresarial complejo y en constante crecimiento en el que operan nuestras competencias, a empresa deve se tornar mais intensa e complexa em todo o mundo. Todos os executivos e funcionários devem sistematicamente estabelecer uma definição unificada da natureza da operação e gestão corporativa e, os funcionários devem usá-la como base para a tomada de decisões. Se os funcionários participam da operação corporativa, com base em diferentes perspectivas e interesses, eles não chegarão à decisão apropriada e à comunicação desejada, já que o objetivo básico e a direção da operação da empresa serão diferentes.
 	 		  <br><br>
			  Assim, gostaríamos de criar uma base para todos os funcionários compartilharem a direção básica da operação corporativa, melhorar sua capacidade de desempenhar suas funções e unir seus poderes em um - para criar uma cultura corporativa forte e superior.
			  <br><br>
			  Portanto, como pretendemos estabelecer a HWBC como a Hyundai Welding Business Culture, os funcionários da Hyundai Welding devem realizar atividades comerciais com plena fé na HWBC.



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
					<h3 class="titStyle5">Em busca da prosperidade conjunta
					<br/>das partes interessadas de negócios</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
					Executivos e funcionários são partes interessadas no negócio, entretanto, eles são o núcleo e o corpo principal da Empresa.Eles desempenham seus deveres de trabalho com a crença de que a busca pela co-prosperidade dos executivos de negócios acabará aumentando a satisfação e o crescimento individual.<br>
			  A empresa continua valorizando os clientes, escolhidos por eles e, em última análise, prosperando com eles.<br>
			  A empresa deve garantir que todos os funcionários se sintam recompensados e compensados por seu trabalho e desempenho, e que todos os funcionários devem contribuir para o desenvolvimento da empresa.<br>
			  A empresa incorpora a estabilidade e o crescimento internos da empresa para que o valor corporativo dos acionistas possa crescer. <br>
			  A empresa também cumpre suas responsabilidades sociais corporativas para prosperar junto com a sociedade.<br>
			  Consequentemente, o valor da prosperidade compartilhada para o cliente, funcionário e sociedade de acionistas é criado,resultando no crescimento contínuo e desenvolvimento permanente da empresa, que contribuirá para o desenvolvimento social e o bem-estar humano.

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
					Implementando<span class="fontPop">BESCOM</span><br/>
					através do <span class="fontPop">CIPP</span>
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
				Para que a empresa perceba o valor comum de seus associados de negócios em um ambiente de negócios competitivo infinito, a empresa deve maximizar continuamente o seu valor através da implementação do BESCOM - Melhor desempenho de gestão da empresa e criação de valor da melhor empresa.<br><br>

				Para tanto, o funcionário contribui com o desenvolvimento empresarial, demonstrando suas capacidades por meio da implantação do CIPP - define a situação de vencer a guerra de negócios entre empresas praticando apaixonadamente a imaginação criativa por meio da coragem de executivos e funcionários. Ela acredita que um ambiente no qual os funcionários possam exercer sua coragem na implementação do CIPP é essencial.<br><br>

				Por isso, a empresa seleciona executivos e funcionários corajosos para conceder-lhes toda autoridade necessária com uma remuneração adequada, para que fortes desafios e inovações baseadas na coragem, além da simplicidade e realização, sejam continuamente implementados.<br><br>

				Para alcançar a BESCOM, é impossível atingir a atual limitação de mão de obra e situação física em um instante, então avançamos repetidamente em direção a uma empresa aprimorada e alcançamos o status de Melhor Empresa elevando a “Objetivo Alvo” com forte ambição.<br><br>

				Executivos e funcionários corajosos às vezes precisam ouvir as opiniões de outras pessoas que não desejam ouvir, para maximizar o "Trabalho em Equipe" com uma cultura de comunicação de discussão ponta a ponta baseada no respeito e confiança mútuos, motivam-se a desafiar objetivos mais elevados, e, simultaneamente, contribuir para a prosperidade comum das partes interessadas do negócio, como membro e centro de associados de negócios.
            </p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>Coragem dos funcionários<br> com imaginação criativa<br> e paixão para obter<br>superioridade sobre<br> os concorrentes</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>Implementação da <br> empresa para criar<br>valor compartilhado<br>  com as partes interessadas<br>de negócios na era de<br> competição acirrada</p>
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
							<p>Grande mudança começa pequena</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>Prosperidade</br>Conjunta</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Funcionário</p>
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