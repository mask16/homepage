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
        <h3>Careers</h3>
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
          <h5 class="titStyle5"><b>Benefits</b></h5>
          <p class="text-style1">
			We offer industry-leading compensation packages including competitive pay to keep our employees motivated, while ensuring their financial stability and productivity.
		  </p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>Tuition Fee For Emplyee's Children</b></p>
              <p>We offer financial aid to support education of our employees' children, from kindergarten to university.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>Congratulations and Condolences Benefit</b></p>
              <p>In case of significant family events, such as weddings and funerals, employees are given leave of absence along with congratulations and condolences allowance.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>Cafeteria</b></p>
              <p>Our plants are equipped with cafeteria while HQ and regional office staff gets meal allowance.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>Housing Fund Support</b></p>
              <p>We help our employees with housing fund when they buy or rent a house.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>Commuter Bus</b></p>
              <p>We operate commuter buses for employees of Pohang factory.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>Company Dormitories</b></p>
              <p>Pohang factory's single employees are eligible to live in company-owned residence.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>Summer Vacation Allowance</b></p>
              <p>We offer holiday allowance during summer leave.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>Car Allowance</b></p>
              <p>Once designated as Deputy General Manager, employees can apply for car maintenance expense support.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>Gift Package</b></p>
              <p>Employees are presented with gift sets on Lunar New Year, Chuseok, Labor Day, Foundation Day and their birthdays.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>Medical Benefit</b></p>
              <p>We help our employees pay their medical bills.</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>Long Service Award</b></p>
              <p>Gold ring is presented as a token of gratitude to long-serving employees.</p>
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
