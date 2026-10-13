<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReward.skin.php
+ Description	: sus.unethicalReward.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
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

    <div class="subContent unethicalReward">
      <div class="conPd">
        <div class="subTitleArea">
          <h5 class="text-style1"><b>Executives and employees shall report in accordance with ethical management guidelines, but if they are not specified in the text or if there is a possibility of conflicting opinions on interpretation, contact the Ethics Management Office. The company operates various channels of internal reporting, so that ethical management can be implemented. The reporting will be held in anonymous.</b></h5>
        </div>
      </div>

      <div class="innerWrap">
        <ul class="unethicalRewardList">
          <li>
            <h4><b>1. Compensation Recipient</b></h4>
            <p class="num-text"><span>1)</span> The company may compensate the recognized whistleblower and witnesses to help solve the dispute.</p>
            <p class="num-text"><span>2)</span> Compensation shall be assessed by the factual accounts of the report connected to the company's profit increase or loss</p>
          </li>
          <li>
            <h4><b>2. Compensation Standard</b></h4>
            <p class="num-text"><span>1)</span> The amount of revenue increase or loss shall be taken into consideration to the potential compensation.</p>
            <p class="num-text"><span>2)</span> If the reasons for compensation payment overlap for the same case, it shall be based on a larger amount.</p>
            <p class="num-text"><span>3)</span> In the case of loss, if the loss befalls due to a reason different from the content of the report, this amount of loss shall be excluded from the subject of compensation.</p>
          </li>
          <li>
            <h4><b>3. Compensation Calculation</b></h4>
            <p>Compensation shall be 5% of the amount based on the reported issue, whether increase in profit or decrease in loss. Compensation shall be limited to 10,000,000 (ten million) Korean Won.</p>
          </li>
          <li>
            <h4><b>4. Exclusion of Compensation</b></h4>
			<p>Compensation will not be made if/when:<br /><br /></p>
            <p class="num-text"><span>1)</span>Details of the report are falsified or misrepresented or difficult to confirm the facts due to lack of evidence.</p>
            <p class="num-text"><span>2)</span>The case has been reported or that have already been recognized by the Ethics Management Office or external institutions and are under investigation, or that disciplinary procedures have been carried out</p>
            <p class="num-text"><span>3)</span>Information has been covered by media reports.</p>
            <p class="num-text"><span>4)</span>An employee of Ethics Management Office has raised the issue.</p>
            <p class="num-text"><span>5)</span>The compensation is deemed inappropriate as a result of other compensations.</p>

          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- subWrap// -->
