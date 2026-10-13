<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
		<h3>Business Introduction</h3>
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
      <section class="businessGloville innerWrap">
        <div class="conPd">

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Handling & Controling</b></h6>
              <p class="titStyle5">HYUNDAI<br/>Visibility</p>
            </div>
            <div>
              <p class="">Real time cargo tracking through systematic information exchange with the Liners and airlines</p>
              <p class="">Exact schedule management of departure and arrival port</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Dedicated Services</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SQM</p>
              <b class="c-gray">service quality management</b>
            </div>
            <div>
              <p class="">Operation of a task force for each customer</p>
              <p class="">Weekly service and quality review for each customer (SQI, KPI Report)</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Logistics Security</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SSM</p>
              <b class="c-gray">security & safety management</b>
            </div>
            <div>
              <p class="">Operation of security guide and task force </p>
              <p class="">Management of regular security education</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>After-Service</b></h6>
              <p class="titStyle5">HYUNDAI<br/>CCM</p>
              <b class="c-gray">claim & complaint management</b>
            </div>
            <div>
              <p class="">Management of emergency accident process / on-site service / shipper visiting service</p>
              <p class="">Customer satisfaction survey, complaint analysis / improvement </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->