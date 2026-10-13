<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.sus4Img {width:100%;height:300px;background:url("<?=$skin_url?>/img/content/sus4.jpg") no-repeat center;background-size:cover;margin:30px 0;
	transition:height .2s;
	-webkit-transition:height .2s;
	-ms-transition:height .2s;
	-moz-transition:height .2s;
	-o-transition:height .2s;
}
				@media only all and (max-width: 959px) {
				.sus4Img {width:100%;height:200px;}
				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
		<h3>Управление устройчивым развитием</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>Управление SHE (Safety, Health and Environment)  </b></h3>
          <h3 class="text-style1">
			<b>Видение управления SHE<br><br>
				<p class="titStyle5">"Безопасность и здоровье являются первостепенными задачами всего, что мы делаем, обеспечивая защиту наших сотрудников и их рабочих мест."</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>4 принципа управления SHE</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. Создание системы управления безопасностью.</b></p>
		  <p>- Создать «Группу повышения безопасности, охраны здоровья и окружающей средой» со специальными отделами безопасности и охраны труда в каждой сфере деятельности для внедрения системы, направленной на предотвращение промышленных аварий.
		  <br>- Раскрывать в полном объеме информацию о результатах повышения безопасности, охраны здоровья и окружающей средой (SHE) как внутренним, так и внешним заинтересованным сторонам.<br>
		  - Уделять приоритетное внимание безопасности и сохранению окружающей среды, сотрудников, деловых партнеров, клиентов и местного сообщества.<br>
		  - Получить сертификаты ISO 14001 (Международный стандарт систем экологического менеджмента) и ISO 45001 (Системы управления охраной труда и безопасностью).																				

		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. Создание безопасных рабочих мест</b></p>
		  <p>- Развивать культуру «безопасность превыше всего» во всех сферах бизнеса.<br>
- Проводить регулярные проверки помещений, и оборудования на рабочих местах для выявления угроз и минимизации риска несчастных случаев и травм.<br>
- Предоставить сотрудникам и деловым партнерам возможность активно участвовать в обеспечении безопасности рабочего места, предлагая комплексное обучение по охране труда и технике безопасности. Предоставлять нашим сотрудникам необходимые знания и навыки для распознавания потенциальных угроз и соблюдения протоколов безопасности.																				

		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. Содействие созданию безопасных рабочих мест </b></p>
		  <p>- Внедрить упреждающую систему управления здравоохранением, ориентированную на профилактику.<br>
		  - Проводить регулярные проверки и оценки рисков сварки для выявления опасных веществ (например, сварочного дыма и пыли) в рабочих помещениях.<br>
		  - Уменьшить риск возникновения опасностей, связанных со здоровьем, путем внедрения эффективных мер контроля.																

		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. Создание экологически чистых рабочих мест</b></p>
		  <p>- Уменьшить воздействие на окружающую среду, и снизить экологические риски посредством постоянного мониторинга.<br>
- Соблюдать экологические законы и правила, принимая во внимание и активно реагируя на внутренние и международные экологические проблемы.<br>
- Продвижение инициатив "зеленого бизнеса" путем содействия инновациям и инвестициям в новые экологически чистые технологии и материалы.															

		  </p>
        </div>
		<p style="margin:20px 0">
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Kor.pdf" target="_blank" class="btn btnLineGray btn-round" style="margin-right:10px; margin-bottom:10px">
            <i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF Korean
          </a>
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
            <i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF English
          </a>
		</p>
      </section>
    </div>
  </div>
  <!-- subWrap// -->