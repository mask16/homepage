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
        <h3>Sustainable Management</h3>
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
          <h3 class="titStyle5"><b>SHE (Safety, Health and Environment) Management</b></h3>
          <h3 class="text-style1">
			<b>SHE Management Vision<br><br>
				<p class="titStyle5">"Safety and health are at the forefront of everything we do,<br>ensuring the protection of our workforce and our workplace."</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>4 Principles of SHE Management</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. Establishment of SHE management system</b></p>
		  <p>- Establish a 'Safety, Health, and Environment Management Team' with dedicated safety and health departments in each business area to implement a systematic safety and health system aimed at preventing industrial accidents.<br>
		  - Transparently disclose Safety, Health, and Environment (SHE) management performance to both internal and external stakeholders.	<br>
		  - Prioritize the safety and health of the environment, employees, business partners, customers, and the local community.<br>
		  - Obtain ISO 14001 (International standard for environmental management systems) and ISO 45001 (Occupational health and safety management systems) certifications.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. Building Safe Workplaces</b></p>
		  <p>- Foster a 'safety-first' culture across all business areas.<br>
		 - Conduct regular workplace inspections of facilities and equipment to identify hazards and minimize the risk of accidents and injuries.<br>
		 - Empower employees and business partners to actively contribute to a safe workplace by offering comprehensive health and safety training. Provide our workforce with the necessary knowledge and skills to recognize potential hazards and adhere to safety protocols.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. Fostering Healthy Workplaces</b></p>
		  <p>- Implement a proactive Health Management System focused on prevention.<br>
		  - Conduct regular audits and welding risk assessments to identify hazardous substances (e.g., welding fumes and dust) in workspaces.<br>
		  - Mitigate the impact of health-related hazards by implementing effective control measures.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. Creating environmentally-friendly Workplaces</b></p>
		  <p>- Reduce environmental footprints and mitigate environmental risks through continuous monitoring.<br>
		 - Comply with environmental laws and regulations and proactively respond to domestic and international environmental issues.<br>
		  - Drive Green business initiatives by fostering innovation and investment in new eco-friendly technologies and products.<br>
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