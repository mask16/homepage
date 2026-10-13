<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<script type="text/javaScript">
function fnTab(clCode){
	location.href="<?=$host_url?>/product/partner?clCode="+clCode;
}
</script>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
		<h3>Geschäftseinführung</h3>
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
      <section class="businessCooper">

        <div class="innerWrap">
          <div class="titrow">
            <!-- <div class="circle"><img src="<?=$skin_url?>/img/content/128px/0.png"></div> -->
            <span class="titStyle5"><b>Luftfahrt</b></span>
          </div>
          <ul class="businessClientList">
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co01.png">
                <span class="titKor">아시아나항공</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co02.png">
                <span class="titKor">대한항공</span>
              </div>
            </li>
          </ul>
          <div class="titrow">
            <!-- <div class="circle"><img src="<?=$skin_url?>/img/content/128px/0.png"></div> -->
            <span class="titStyle5"><b>Schifffahrt</b></span>
          </div>
          <ul class="businessClientList">
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co03.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co04.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co05.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co06.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co07.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co08.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co09.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/co10.png">
              </div>
            </li>
          </ul>
        </div>


      </section>
  </div>
  <!-- subWrap// -->