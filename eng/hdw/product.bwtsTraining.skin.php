<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Business Introduction</h3>
		</div>
	</div>
</section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent bwtsTraining">
		<!--
          <div class="conPd bwtsTrainingTop">
            <p>88beon-gil 99, Yeongilmansandan-ro,<br/>Heunghae-eup, Buk-gu, Pohang,<br/>Gyeongsangbuk-do</p>
          </div>
		  -->
		  <div class="conPd">
			<h5 class="titStyle5">
				<b>
				The Training Center of the Machinery Division of Hyundai Welding is always ready for
				customized BWTS training service with professional trainers for valuable clients.
				</b>
			</h5>
		  </div>

          <div class="bwtsTrainingCon">
            <div class="conPd">
              <h6 class="titStyle1 c-gray">
                <p>Facility Guide</p>
              </h6>
              <div class="bwtsTrainingWrap brdr-b">
                <div>
                  <h6 class="titStyle3">
                    <b>Facilities</b>
                  </h6>
                </div>
				<div class="bwtsTrainingContent">
					<div class="text-blit-wrap">
					  <p class="text-blit">Training room</p>
					  <p class="text-blit">Laboratory room</p>
					  <p class="text-blit">Lounge</p>
					</div>
					<div class="bwtsTrainingImg">
						<img src="<?=$skin_url?>/img/content/bwts_trainingImg01.png" />
					</div>
				</div>
              </div>

              <div class="bwtsTrainingWrap">
                <div>
                  <h6 class="titStyle3">
                    <b>Allowable Attendees</b>
                  </h6>
                </div>
				<div class="bwtsTrainingContent">
					<div class="text-blit-wrap">
					  <p class="text-blit">About 20 trainees per time</p>
					</div>
					<div class="bwtsTrainingImg">
						<img src="<?=$skin_url?>/img/content/bwts_trainingImg02.jpg" />
					</div>
				</div>
              </div>

              <div class="bwtsTrainingWrap">
                <div>
                  <h6 class="titStyle3">
                    <b>Training contents</b>
                  </h6>
                </div>
				<div class="bwtsTrainingContent">
					<div class="text-blit-wrap">
					  <p class="text-blit">BWTS main units and devices such as valves</p>
					  <p class="text-blit">Rectifiers</p>
					  <p class="text-blit">TRO sensors</p>
					  <p class="text-blit">Filters</p>
					</div>
					<div class="bwtsTrainingImg">
						<img src="<?=$skin_url?>/img/content/bwts_trainingImg03.jpg" />
					</div>
				</div>
              </div>

              <div class="bwtsTrainingWrap">
                <div>
                  <h6 class="titStyle3">
                    <b>Training Records</b>
                  </h6>
                </div>
                <div>
                  The 1 st trainees from SINOKOR
                  <p>From February 2017 to May 2021, staff training has been conducted 75 times.</p><br/>
                  <p class="text-blit">Sinokor Merchant Marine</p>
                  <p class="text-blit">Thenamaris Ships Management</p>
                  <p class="text-blit">Scorpio Ship Management</p>
                  <div class="bwtsTrainingImg"><img src="<?=$skin_url?>/img/content/bwts_trainingImg04.png" /></div>
                </div>
              </div>

			  <div class="bwtsTrainingWrap bwtsTrainingMapWrap">
                <div>
                  <h6 class="titStyle3">
                    <b>Contact info.</b>
                  </h6>
				  <p>
					<b>Tel : </b>+82-52-283-6903<br>
					<b>E-mail : </b>bwts-sales@hyundaiwelding.com
					<br><br>
					<b>Address : </b><br>88beon-gil 99, Yeongilmansandan-ro, Heunghae-eup, Buk-gu, Pohang, Gyeongsangbuk-do
				  </p>
                </div>
                <div class="mapWrap">
					<div class='embed-container'>
						<iframe
						src='https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12895.139502121494!2d129.40218989589962!3d36.09873175220718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z7ZiE64yA7KKF7ZWp6riI7IaN!5e0!3m2!1sko!2skr!4v1622012738305!5m2!1sko!2skr'
						frameborder='0'
						allowfullscreen=''
						aria-hidden='false'
						tabindex='0'></iframe>
					</div>
				</div>
              </div>

            </div>

            <!--가로스타일 <div class="swiper-containe bwtsTrainingSlider"> <div class="swiper-wrapper"> <div class="swiper-slide"> <img src="/images/content/bwts_trainingImg01.jpg" alt="" /> <h3>Facility</h3> <ul> <li>교육실</li> <li>실습실</li> <li>휴게실</li> </ul>
            <h3>Allowable accommodation</h3> <ul> <li>20명</li> </ul> </div> <div class="swiper-slide"> <img src="/images/content/bwts_trainingImg02.jpg" alt="" /> <h3>Exercise Area</h3> <ul> <li>밸브</li> <li>정류기</li> <li>TRO 센서</li> <li>필터 등</li> </ul> </div>
            <div class="swiper-slide"> <img src="/images/content/bwts_trainingImg03.jpg" alt="" /> <h3>The 1st trainees from <br />SINOKOR</h3> <ul> <li>교육 대상 : 장금상선(SINOKOR)</li> <li>참여 인원 : 10명</li> </ul> </div> </div> </div> 가로스타일//-->

          </div>

        </div>
      </div>
      <!-- subWrap// -->