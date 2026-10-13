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
			<h3>Company Introduction</h3>
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
          <h3 class="titStyle5"><b>Welcome to Hyundai PNS.</b></h3>
        </div>
        <div class="text-style1">
			Hyundai PNS was established on March 20, 2020, splitting off from Hyundai Welding Co., Ltd. to enhance management efficiency 
			by further strengthening the expertise of the welding equipment business and to prepare a technological foundation to respond rapidly to market change.
			<br><br>
			Hyundai PNS has produced digital SCR welding machines since 2007 and digital inverter welding machines since 2013. 
			Since the establishment of the welding machine division in 1995, we have continuously carried out our R&D for 25 years. In 2019 we developed the Hi series, 
			a premium welder line, and distributed them to all major business areas including the shipbuilding and plant industry.
			<br><br>
			In addition, we are taking the lead in the development and localization of new technologies through cooperation with the best research institutes in each field to secure the world's best technology. 
			We have an R&D Center to ensure the supply of optimized welding equipment by site, and we strive to develop products that meet customer needs.
			<br><br>
			Hyundai PNS will continue to place customer satisfaction as the top priority. Hyundai PNS will always do its best to become a company that values ​​and realizes bigger dreams with its customers.
			<br><br>
			Hyundai PNS sincerely wants to thank it's customers for their continued interest and support. 
          <!-- <p class="tar ceoName">CEO <span>Byungmook Bae</span></p> -->

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->