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
			<h3>HWBC</h3>
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
						Establecimiento y Significado de <span class="fontPop"><b>HWBC</b></span>
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					Para lograr el desarrollo y la estabilidad de la empresa respondiendo de manera proactiva al complejo del entorno empresarial y a medida que la competencia se vuelve intensa a nivel mundial más allá del mercado nacional, todos nuestros ejecutivos y empleados deben tener una esencia unificada de operación y gestión de la empresa. La definición debe ser establecida sistemáticamente, los ejecutivos y empleados deben utilizar esto como criterio para la toma de decisiones. 
			  		Cuando los ejecutivos y empleados gestionan la empresa de acuerdo con diferentes perspectivas e intereses, el propósito básico y la dirección de la gestión de la empresa son diferentes, por lo que no sólo se puede llegar a la comunicación, sino también a la correcta toma de decisiones.
				<br><br>
			 Por lo tanto, nuestro objetivo es crear la base para una cultura corporativa sólida y superior compartiendo las directrices básicas de la gestión de la empresa con todos los empleados, mejorando el desempeño laboral y uniendo el potencial de nuestros empleados.<br><br>
Por tal motivo, como pretendemos establecer HWBC como la cultura empresarial de Hyundai Welding, los empleados de Hyundai Welding deben llevar a cabo sus actividades comerciales con confianza y fe en HWBC.



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
					<h3 class="titStyle5">Persecución de Prosperidad Común <br>de Los Interesados Comerciales</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						  Los ejecutivos como los empleados son partes interesantes del negocio y, al mismo tiempo, son el núcleo y el cuerpo principal de la empresa. Desempeñan sus deberes laborales con la convicción de que la persecución de la prosperidad común de los empleados eventualmente mejorará la satisfacción y crecimiento individual. <br>
			  La empresa sigue valorando a los clientes, elegida por ellos y, al final, prosperará con ellos.<br>
			  La empresa asegura que los empleados se sientan recompensados ​​y compensados ​​por su desempeño laboral, y los empleados contribuyen al desarrollo de la empresa.<br>
			  La empresa encarna la estabilidad y el crecimiento internos de la empresa para que el valor corporativo de los accionistas pueda crecer.<br>
			  La empresa también cumple con sus responsabilidades sociales corporativas para prosperar junto con la sociedad.<br>
			  En consecuencia, se crea el valor de la prosperidad común para la sociedad de clientes, empleados, accionistas, resultando en el crecimiento continuo y desarrollo permanente de la empresa, que contribuirá al desarrollo social y al bienestar humano.
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
					Implementación de <span class="fontPop">BESCOM</span><br/>
					 a través de <span class="fontPop">CIPP</span>
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
				Para que la empresa realice el valor común de los interesado comerciales en un entorno comercial infinitamente competitivo, la empresa debe maximizar continuamente su valor a través de la implementación de Bescom - el mejor desempeño de gestión y creación de valor de la mejor empresa.
Para ello, los empleados contribuyen al desarrollo corporativo demostrando sus capacidades a través de la implementación de CIPP - práctica apasionada de la imaginación creativa. CIPP define la situación de ganar la guerra comercial entre empresas practicando apasionadamente la imaginación creativa a través del coraje de los empleados. Cree que un entorno en el que los empleados puedan ejercer su coraje en la implementación de CIPP es esencial.
Por lo tanto, la empresa selecciona los empleados valientes para otorgarles toda la autoridad necesaria con una compensación adecuada, de modo que se implementen continuamente desafíos e innovaciones fuertes basados en el coraje, más allá de la simplicidad y el logro.<br><br>
Para llegar a Bescom, es imposible llegar por un momento en la limitada situación humana y material actual, por lo que repetidamente damos un paso adelante hacia una empresa mejorada y elevamos la meta con un objetivo ambicioso de llegar a la mejor empresa.
Los empleados valientes a veces necesitan escuchar las opiniones de otras personas que no desean escuchar, para maximizar el "Trabajo en Equipo" con una cultura de comunicación con discusiones de principio a fin basada en el respeto mutuo y la confianza, motivarse para desafiar metas más altas, y simultáneamente contribuir a la prosperidad común de los interesados del negocio, como miembro y centro de interesados comerciales.

            </p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>Valor de los empleados con<br/>imaginacióncreativa y pasión por<br/>obtener superioridad sobre<br/>los competidores.</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>Implementación de la empresa para<br/>crear valor compartido con las partes<br/> interesadasdel negocio en la era de<br/>la competencia feroz.</p>
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
							<p>Gran cambio de la empresa viene de<br>pequeños cambios de empleados</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>Prosperidad</br>común</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Empleados</p>
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