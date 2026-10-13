<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.welfare.skin.php
+ Description	: recruit.welfare
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualRecruit">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI PNS</p>
		<h3>Трудоустройство</h3>
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

   <div class="subContent">
      <div class="recruitWelfare">
        <div class="conPd">
          <h5 class="titStyle5"><b>Преимущества</b></h5>
          <p class="text-style1">
			В Hyundai PNS мы предлагаем лучшие в отрасли компенсационные пакеты, включая конкурентоспособную заработную плату, чтобы поддерживать мотивацию наших сотрудников, обеспечивая при этом их финансовую стабильность и производительность.
		  </p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>Фонд поддержки обучения детей</b></p>
              <p>Мы предлагаем финансовую помощь для поддержки обучения детей наших сотрудников от детского сада до университета.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>Поддержка семейных праздников</b></p>
              <p>В случае значимых семейных событий, таких как свадьба и похороны, сотрудникам предоставляется отпуск с выплатой поздравлений и соболезнований.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>Кафетерий</b></p>
              <p>Наши заводы оборудованы кафетериями, а сотрудники штаб-квартиры и региональных офисов получают пособие на питание.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>Поддержка жилищного фонда</b></p>
              <p>Мы помогаем нашим сотрудникам с жилищным фондом при покупке или аренде жилья.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>Пригородный автобус</b></p>
              <p>Мы обслуживаем пригородные автобусы для сотрудников фабрики Pohang.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>Общежития компании</b></p>
              <p>Одинокие сотрудники фабрики Pohang имеют право проживать в резиденции, принадлежащей компании.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>Праздничное пособие</b></p>
              <p>Мы предлагаем отпускные во время летнего отпуска.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>Поддержка расходов на техническое обслуживание автомобиля</b></p>
              <p>После назначения на должность заместителя генерального директора сотрудники могут подать заявку на поддержку расходов на техническое обслуживание автомобиля.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>Подарочный пакет</b></p>
              <p>Сотрудникам дарят подарочные наборы в Лунный Новый год, Чусок, День труда, День основания и в дни их рождения.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>Медицинское страхование</b></p>
              <p>Мы помогаем нашим сотрудникам оплачивать медицинские счета.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>Программа признания услуг</b></p>
              <p>Золотое кольцо преподносится в знак признательности многолетним сотрудникам.</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg12.png" />
              <p><b>상가 지원</b></p>
              <p>상가소모품 지원</p>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
s