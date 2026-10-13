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
			<p>ABOUT US</p>
			<h3>기업소개</h3>
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
          <h3 class="titStyle5"><b>현대글로빌 홈페이지를<br />방문해주신 여러분들을 진심으로 환영합니다.</b></h3>
        </div>
        <div class="text-style1">
          저희 회사는 물류 효율성 제고와 서비스 능력 향상을 통해 고객 가치를 극대화시킨다는 이념하에 끊임없는 도전과 혁신을 이어가고 있습니다.<br /><br />

          오늘도 저희 임직원들은 4차산업혁명 시대 변화에 부응하는 최적의 맞춤형 물류 솔루션 제공을 통해 고객들에게 최고의 만족감을 줄 수 있도록 지속적인 투자와 함께 최선의 노력을 다하고 있습니다.<br /><br />

          저희 회사 기업문화는 "사업관계자인 고객과 회사와 임직원이 공동번영을 추구하며, 창의적인 상상력을 열정적으로 실현하여, 최고의 회사가 될 수 있도록 경영 수행능력을 구현하고 새로운 가치를 창조하는 것" 입니다.<br /><br />
          
          저희 현대글로빌은 이러한 마음가짐으로 세계적인 종합물류기업으로 자리매김하기 위해 새로운 성장 동력을 확보하고 책임경영을 지속해 나아가겠습니다.<br /><br />
          
          앞으로도 고객의 가치를 높이기 위한 도전은 끊임없이 계속될 것입니다. 고객 여러분들의 많은 관심과 격려 부탁드립니다.<br /><br />

          감사합니다.
          
          <p class="tar ceoName">대표이사 <span>박주형</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->