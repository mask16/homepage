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
      <section class="businessclient">

        <div class="innerWrap">
          <ul class="businessClientList">
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl01.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl02.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl03.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl04.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl05.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl06.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl07.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl08.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl09.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl10.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl11.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl12.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl13.png">
              </div>
            </li>
            <li>
              <div>
                <img src="<?=$skin_url?>/img/content/client/cl14.png">
              </div>
            </li>


          </ul>
        </div>


      </section>
  </div>
  <!-- subWrap// -->