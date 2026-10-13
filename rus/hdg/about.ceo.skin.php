<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI GLOVILLE</p>
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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>Мы искренне приветствуем вас на сайте Hyundai Gloville.</b></h3>
        </div>
        <div class="text-style1">
         Наша компания продолжает бросать вызов и внедрять инновации во все, что мы соединяем, с целью максимизации ценности для клиентов за счет повышения эффективности логистики и удобства обслуживания.<br /><br />

          Сегодня наши руководители и сотрудники инвестируют и делают все возможное, чтобы обеспечить максимальное удовлетворение клиентов, предлагая индивидуальные логистические решения, соответствующие изменениям четвертой промышленной революции.<br /><br />

          Миссия нашей компании - «реализовать наши управленческие возможности и создать новые ценности, чтобы наши клиенты и сотрудники, связанные с бизнесом, могли добиваться совместного процветания, страстно реализовывать свое творческое воображение и становиться лучшей компанией».<br /><br />
          
          Мы продолжим обеспечивать новые двигатели роста и управлять обязанностями, чтобы стать глобальной логистической компанией.<br /><br />
          
          Задачи по увеличению ценности для клиентов будут продолжаться. Мы просим вашего интереса и поддержки.<br /><br />

          Спасибо.
          
          <p class="tar ceoName">Генеральный директор <span>Dae Hoan Oh</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->