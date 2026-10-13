<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
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

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>We pursue honesty, fairness, and integrity.</b></p>
          <h3 class="text-style1">
			<b>
				With the vision of implementing the best management and value creation (BESCOM: Best Company) that a company can carry out,
				Hyundai Welding will create a modern corporate culture that seeks joint prosperity between stakeholders and the community.
			</b>
		  </h3>
        </div>

        <div class="susCharterContent">
          <div class="left">
            <div class="circle">BESCOM</div>
          </div>
          <div class="right">
            <div class="circle">
              <h6><span>Bes</span>t <span>Com</span>pany</h6>
              <p>
				Create the best<br>management performance<br>
				and value that an<br>enterprise can implement
			  </p>
            </div>
          </div>
        </div>

        <p class="text-style1">
			Therefore, the Charter of Ethics Management is established for employees of Hyundai Welding to use as a standard for proper behavior and value judgment.
		</p>

        <div class="susCharterText">
          <p class="num-text"><span>1. </span>We seek to establish shared growth with customers by contributing to our customers’ value creation and actively collecting their complaints and feedback.</p>
          <p class="num-text"><span>2. </span>We actively compensate successful employees and create a work environment where challenges and innovations are encouraged.</p>
          <p class="num-text"><span>3. </span>We respect each other and create a healthy and ethical workplace atmosphere.</p>
          <p class="num-text"><span>4. </span>We create a sound corporate culture through fair competition with competitors and fair trade with our suppliers.</p>
          <p class="num-text"><span>5. </span>We comply with legal obligations and practice rational and transparent management.</p>
          <p class="num-text"><span>6. </span>We contribute to the local community by fulfilling our corporate social responsibilities and obligations, complying with environmental regulations, and helping to prevent environmental pollution.</p>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->