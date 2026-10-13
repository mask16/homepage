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
			<p>HYUNDAI PNS</p>
			<h3>О компании</h3>
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
						Предназначение и смысл <span class="fontPop"><b>HWBC</b></span>
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					Для того, чтобы оперативно реагировать на постоянно растущую конкуренцию и непростые условия бизнеса, компания должна стать более активной и сильной во всем мире. Все руководители и сотрудники должны следовать единым принципам корпоративной деятельности и управления, а сотрудники должны использовать их в качестве основы для принятия решений. Если сотрудники не разделяют принципов корпоративной деятельности, они не смогут прийти к правильному решению и необходимому взаимодействию, поскольку основная цель и направление деятельности компании будут другими.
					<br/><br/>
					Таким образом, мы хотим создать основу для того, чтобы все сотрудники разделяли основные направления и принципы корпоративной деятельности, повышали результативность выполнения своих обязанностей и направляли все свои силы только для создания сильной и превосходной корпоративной культуры.
					Поскольку мы намерены сделать HWBC бизнес-культурой Hyundai Welding, то сотрудники Hyundai Welding должны работать с верой в HWBC, и следовать основным ее принципам.
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
						Стремление к совместному процветанию заинтересованных сторон
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						Руководители и сотрудники являются заинтересованными сторонами в бизнесе, в то же время они являются ядром и основным маханизмом деятельности компании. Они должны выполнять свои рабочие обязанности с полной отдачей и верой в то, что стремление к совместному процветанию, в конечном итоге повысит их благосостояние и даст возможность роста.
						<br/>
						Компания ценит своих клиентов, и делает все возможное, чтобы процветать вместе с ними.
						<br/>
						Все сотрудники должны чувствовать себя значимыми, и быть вознагражденными за свою работу и полезность для компании, для того, чтобы все сотрудники были мотивированы вносить свой вклад в развитие компании.
						<br/>
						Компания олицетворяет внутреннюю стабильность и рост, так что доход акционеров будет расти.
						<br/>
						Компания также выполняет свои социальные обязательства, чтобы процветать вместе с обществом.
						<br/>
						Соответственно, создается предпосылки общего процветания для клиентов, сотрудников и акционеров, это приведет к постоянному росту и развитию компании, и в конечном итоге, будет способствовать социальному развитию и улучшению благосостояния людей.
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
					Внедрение <span class="fontPop">BESCOM</span><br/>
					через <span class="fontPop">CIPP</span>
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						Компания осознает ценность своих деловых партнеров в изменчивой конкурентной бизнес-среде, компания должна постоянно увеличивать свою стоимость за счет внедрения BESCOM - Best Company's Best Management Performance and Value Creation.
						<br/>
						С этой целью сотрудник вносит свой вклад в корпоративное развитие, демонстрируя свои возможности посредством внедрения CIPP - Creative Imagination Passionate Practice. CIPP позволяет добиться победы в конкурентной среде, путем самоотверженной работы и применения творческого воображения руководителями и сотрудниками. Среда, в которой сотрудники могут проявить смелость при внедрении CIPP, имеет большое значение.
						<br/><br/>
						Поэтому компания выбирает смелых руководителей и сотрудников, чтобы предоставить им все необходимые полномочия с соответствующей компенсацией, чтобы постоянно реализовывать серьезные задачи и внедрять инновации.
						<br/>
						Стать BESCOM невозможно  в одно мгновение, поэтому мы постоянно шагаем вперед по пути развития и улучшенния компании, к получению статуса Лучшей компании, ставя перед собой амбициозные цели и достигая их.
						<br/>
						Руководители и сотрудники иногда должны прислушиваться к мнению другг друга, чтобы максимизировать и получать результаты «командной работы» с культурой обмена мнениями, основанной на взаимном уважении и доверии, мотивировать себя, бросать вызов ныненим условиям конкуренции, ставить более высокие цели и одновременно вносить вклад в общее процветание заинтересованных сторон, в качестве составной части делового партнерства.
					</p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>
								Смелость сотрудников с творческим<br>
								воображением и страстью к<br>
								достижению превосходства над <br>конкурентами
							</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>
													Внедрение компании для <br>
				           создания общих ценностей <br> с заинтересованными сторонами <br>в эпоху жесткой конкуренции
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
							<p>Большие перемены начинаются с малого</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>Совместное<br>процветание</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Сотрудник</p>
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