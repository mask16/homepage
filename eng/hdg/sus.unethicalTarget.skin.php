<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
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
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1">
			<b>
				Executives and employees shall report in accordance with ethical management guidelines,
				but if they are not specified in the text or if there is a possibility of conflicting opinions on interpretation,
				contact the Ethics Management Office.
				The company operates various channels of internal reporting,
				so that ethical management can be implemented.
				The reporting will be held in anonymous.
			</b>
			</p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Embezzlement and Bribery</b></span>
                <span class="text-style2">Embezzling the company money or accepting money, goods, or entertainment from external stakeholders in relation to the job.</span>
                <span class="text-style2">Criminal prosecution and dismissal can be reviewed in acts of embezzlement and receiving of black money related to company that may or not lead to company’s disadvantages</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Workplace Harassment</b></span>
                <span class="text-style2">Deliberately using superiority or authority to inflict physical or mental pain to other employees, or worsening ambience of the office through violence or abusive language.</span>
                <span class="text-style2">Disciplinary actions, such as dismissal, may be considered based on the severity of the case</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Sexual Harassment at Work</b></span>
                <span class="text-style2">Making of unwelcome and inappropriate sexual remarks or physical advances in a workplace or other professional or social situation</span>
                <span class="text-style2">Violation of sexual harassment will not be tolerated whether it was not intended, accidental, or during alcohol consumption</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Other Unethical Behavior</b></span>
                <span class="text-style2">Subject to report on ethical management violations </span>
                <span class="text-style2">Actions that violates the Code of Ethics and Practice Guidelines, or that are deemed illegal or unethical</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
