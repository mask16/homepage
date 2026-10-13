<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/support.contactUs.skin.php
+ Description	: support.contactUs
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualCustomer">
    <div class="innerWrap">
      <div class="visualText">
	    <p>HYUNDAI SUPERTECK</p>
        <h3>Atención al cliente</h3>
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
      <section class="customerContact">
        <div class="innerWrap">
          <div class="customerContactWrap">
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea">HYUNDAI SUPERTECK CO., LTD. </p>
                  <p class="conAd">16F WEWORK Building<br>507 Teheran-ro,<br>Gangnam-gu, Seoul</p>
                  <p class="conTel"><span>Tel.</span> +82-2-6230-6076, 6891</p>
                  <p class="conFax"><span>Fax.</span> +82-2-3486-2768</p>
                  <p class="conMail"><span>sean@hyundaisuperteck.com</p>
                </div>
                <div class="contactDesc">
                  <p class="conArea">HYUNDAI SUPERTECK CO., LTD. (Pohang Office)</p>
                  <p class="conAd">100 Daesong-ro, Nam-gu,<br>Pohang-si, Gyeongsangbuk-do</p>
                  <p class="conTel"><span>Tel.</span> +82-54-289-6354</p>
                  <p class="conFax"><span>Fax.</span> +82-54-289-6240</p>
                  <p class="conMail"></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
