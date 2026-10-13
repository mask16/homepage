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
        <p>Customer Supports</p>
        <h3>고객지원</h3>
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
                  <p class="conArea">서울-본사</p>
                  <p class="conAd">서울 강남구 테헤란로 507 <br/>WEWORK 빌딩 16 층</p>
            <!--      <p class="conTel"><span>Tel.</span> +82-2-6230-6076, 6891</p>
                  <p class="conFax"><span>Fax.</span> +82-2-525-7317</p>  -->
                  <p class="conMail"></p>
                </div>
                <div class="contactDesc">
                  <p class="conArea">포항2공장</p>
                  <p class="conAd">포항시 북구<br/>영일만산단로 88번길 99</p>
                  <p class="conTel"><span>영업</span> +82-54-260-0664</p>
                  <p class="conFax"><span>Fax.</span> +82-54-260-0599</p>
                  <p class="conTel"><span>기술</span> +82-54-260-0676</p>
                  <p class="conFax"><span>Fax.</span> +82-54-260-0598</p>
                  <p class="conMail">HWC-WM@hyundaipns.com</p>
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
