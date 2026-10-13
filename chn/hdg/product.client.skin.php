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
			<h3>事业介绍</h3>
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
      <section class="businessclient">

        <div class="innerWrap">
          <ul class="businessClientList">
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl01.png">
                <span class="titKor">현대중공업</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl02.png">
                <span class="titKor">케이씨씨</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl03.png">
                <span class="titKor">현대산업개발</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl04.png">
                <span class="titKor">삼성중공업</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl05.png">
                <span class="titKor">위니아-딤채</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl06.png">
                <span class="titKor">현대자동차그룹</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl07.png">
                <span class="titKor">현대글로비스</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl08.png">
                <span class="titKor">현대제철</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl09.png">
                <span class="titKor">유진건설</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl10.png">
                <span class="titKor">삼우화</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl11.png">
                <span class="titKor">한맥중공업</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl12.png">
                <span class="titKor">DKCS</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl13.png">
                <span class="titKor">가야ESC</span>
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl14.png">
                <span class="titKor">대주중공업</span>
              </div>
            </li>


          </ul>
        </div>


      </section>
  </div>
  <!-- subWrap// -->