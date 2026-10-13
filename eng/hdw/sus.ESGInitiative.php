<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.productStudy3Wrap img {
    max-width: 100%; 
    margin-bottom: 20px;
}
.productStudy3Wrap {margin-top:100px !important;}
.productStudy3Wrap.brdr-b {
   margin-top: 0px !important;
}
				@media only all and (max-width: 959px) {
				.productStudy3Wrap > div:first-child { width: 200px;}

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

    <div class="subContent">
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>ESG Initiatives </b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		<b>At Hyundai Welding, we view sustainability as our duty as a corporate citizen. We are committed to conscientiously implementing ESG management practices and actively participating in global initiatives that promote responsible business conduct.</b>
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_1.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>Task Force on Climate-Related Financial Disclosures (TCFD) </b></h6>
              <p class="">The Task Force on Climate-Related Financial Disclosures (TCFD) framework, established in 2015 by the Financial Stability Board (FSB), offers standardized guidelines for businesses and organizations to disclose information concerning both the opportunities and risks associated with climate change. Hyundai Welding publicly announced its endorsement of the TCFD framework in January 2023 and commits to transparently disclose information such as governance structure, strategy, risk management, target management, and more. By diligently identifying financial risks and integrating sustainability principles throughout our business operations, we strive to foster a resilient and responsible approach to climate-related challenges.</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_2.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>UN Global Compact (UNGC) </b></h6>
              <p class="">
In January 2023, Hyundai Welding became a member of the United Nations Global Compact (UNGC). Embracing the UNGC's 10 principles rooted in human rights, labor, environment, and anti-corruption, our company pledges voluntary compliance with these core values across all business operations. By internalizing a heightened sense of responsibility, Hyundai Welding is dedicated to fulfilling its role as a conscientious corporate citizen, contributing positively to society and the global community.</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_3.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>Family-friendly Company Certification</b></h6>
              <p class="">The Family-Friendly Certificate is bestowed upon companies and public institutions that demonstrate outstanding family-friendly practices, including flexible work schedules, support for childbirth and child-rearing, and the establishment of a nurturing work environment for families. This certification process involves thorough document review, on-site assessments, and satisfaction surveys among employees. 
In December 2023, Hyundai Welding was honored to receive the 'Family-friendly Company Certification' from the Ministry of Gender Equality and Family, affirming our commitment to fostering a supportive and inclusive workplace environment for all employees and their families.</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_4.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>International Standard Organization (ISO) certification </b></h6>
              <p class="">Hyundai Welding holds international certifications for ISO 14001 (Environmental Management System), ISO 45001 (Occupational Health and Safety Management System), and ISO 9001 (Quality Management System). Additionally, we are certified under the global automotive quality management system standard, IATF 16949.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>ESG Evaluation </b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		In line with our commitment to sustainability, we promise to make improvements based on the findings of the ESG evaluation and share our achievements with our stakeholders. 
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_5.png" alt="" />
			 </div>
            </div>
            <div>
              <h6 class="titStyle3"><b>Sustinvest </b></h6>
              <p class="">Hyundai Welding received a BB rating in the ESG overall evaluation from Sustinvest, a korean ESG professional evaluation agency.
In particular, we were recognized for our excellent performance by receiving an A grade in the environmental and social areas.
Hyundai Welding will continue to advance ESG management based on external evaluations.</p>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
  <!-- subWrap// -->