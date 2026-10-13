<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReport.skin.php
+ Description	: sus.unethicalReport
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
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

    <div class="subContent unethicalMain">
      <div class="innerWrap">
        <div class="unethicalTit">
          <h3>Стремление к честности,<br>справедливости и порядочности.</h3>
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">Сообщать о хищениях и взяточничестве</span>
              <span class="text">В отношении сотрудников Hyundai Welding, причастных к коррупции, вымогательству, растрате или взяточничеству</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">Сообщать о притеснении на рабочем месте</span>
              <span class="text">
				В отношении сотрудников Hyundai Welding, угрожающим или подвергающим жестокому и бесчеловечному обращению с коллегами, включая также словесные оскорбления и притеснения, психологическое давление, а также психологическое и физическое принуждение
</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">Сообщать о сексуальных домогательствах</span>
              <span class="text">
				В отношении сотрудников, чьи слова и действия заставляют других чувствовать сексуальное унижение или отвращения на рабочем месте
	</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">Сообщать о других неэтичных проблемах</span>
              <span class="text">
				Действия, нарушающие руководящие принципы кодекса поведения, или другие действия, признанные незаконными или неэтичными
			  </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->