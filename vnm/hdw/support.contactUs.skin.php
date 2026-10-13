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
        <p>HYUNDAI WELDING</p>
        <h3>hỗ trợ khách hàng</h3>
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
          <div class="tabSliderWrap p0">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide <?=($tab==1)?'on':''?>"><a href="<?=$host_url?>/support/contactUs?tab=1">vật liệu hàn trong nước</a></div>
                <div class="swiper-slide <?=($tab==2)?'on':''?>"><a href="<?=$host_url?>/support/contactUs?tab=2">vật liệu hàn ngoài nước</a></div>
                <div class="swiper-slide <?=($tab==3)?'on':''?>"><a href="<?=$host_url?>/support/contactUs?tab=3">BWTS</a></div>
         <!--       <div class="swiper-slide <?=($tab==4)?'on':''?>"><a href="<?=$host_url?>/support/contactUs?tab=4">Steel Distribution</a></div> -->
              </div>
            </div>
          </div>

<?php if( $tab == 2 ){?>
		<div class="contactGlobal">
			<div class="contactGlobalImg"><img src="<?=$skin_url?>/img/content/img_map.jpg" alt=""/></div>
			<ul class="globalList">
	<?php for( $i = 0; $i < count($region); $i++ ){?>
				<li class="<?=($region[$i]['code_key']==$area)?'on':''?>">
					<a href="<?=$ThisUrl?>?tab=<?=$tab?>&area=<?=$region[$i]['code_key']?>">
						<button><?=$region[$i]['code_key']?> <span class="<?=$regionDot[$i]['code_name']?> globalDot"></span></button>
					</a>
				</li>
	<?php }?>
			</ul>
		</div>
<?php }?>

          <div class="customerContactWrap">
            <ul>
<?php
for( $i = 0; $i < count($ls); $i++ ){
	if( $i == 0 || ($i > 0 && $i%2 == 0) ) echo '<li>';
?>
                <div class="contactDesc">
                  <p class="conArea"><?=code_array('area',$areaLang,$ls[$i]['area'])?>-<?=stripslashes($ls[$i]['officeName'])?></p>
                  <p class="conAd"><?=stripslashes($ls[$i]['address'])?></p>
                  <p class="conTel"><!-- <span>Tel.</span>  --><?=stripslashes($ls[$i]['tell'])?></p>
                  <p class="conFax"><!-- <span>Fax.</span>  --><?=stripslashes($ls[$i]['fax'])?>&nbsp;</p>
                  <p class="conMail"><?=stripslashes($ls[$i]['email'])?></p>
                  <div class="conbtnArea">
                    <a href="javascript:fnMap(<?=$ls[$i]['latitude']?>, <?=$ls[$i]['longitude']?>, '<?=$ls[$i]['area']?>-<?=$ls[$i]['officeName']?>');" class="btn btnLineGray btn-round">Xem bản đồ<i class="ico ico-map"></i></a>
                    <a href="javascript:layer_contact_form('<?=stripslashes($ls[$i]['officeName'])?>','<?=$ls[$i]['seq']?>')" class="btn btnLineGray btn-round layerBtn">Liên hệ với chúng tôi <i class="ico ico-arrowBlue"></i></a>
                  </div>
                </div>
<?php
	if( $i%2 == 1 )	echo '</li>';
}
?>
              </li>
            </ul>
          </div>


        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

  <!-- 지도 상세보기 -->
	<div class="dim-layer" id="viewMap">
		<div class="dimBg"></div>
		<div class="pop-layer">
			<div class="layerContent">
				<div class="layerHead">
					<h3>Detail view</h3>
					<a href="javascript:fnMapClose();" class="btn-layerClose"><i class="ico ico-close ico-closeBlue"></i></a>
				</div>
				<div class="layerbodyWrap">
					<div class="layerbody">
						<div class="mapWrap" id='map_canvas'></div>
					</div>
				</div>
				<div class="layerfooter tar">
					<a href="javascript:fnMapClose();" class="btn-text btn-textBlue btn-layerClose">Close</a>
				</div>
			</div>
		</div>
	</div>
	<!-- 지도 상세보기 //-->

	<!-- 문의하기 -->
	<div class="dim-layer popupContact" id="layer_contact">
    <div class="dimBg"></div>
    <div class="pop-layer">
      <a href="javascript:layer_contact_close()" class="btn-layerClose btn-Close"></a>
      <div class="popupHeader">
        <h5><b>Liên hệ với chúng tôi</b></h5>
      </div>
      <div class="pop-body">
      <form name="fm" id="fm" action="<?=$ActionUrl?>" method="post">
        <ul class="formStyle">
          <li>
            <span class="formTh dot">Tên</span>
            <div class="formTd">
              <input type="text" class="inputStyle1 required" name="name" id="name" maxlength="20" placeholder="Nhập tên của bạn" /></input>
            </div>
          </li>
          <li>
            <span class="formTh dot">E-mail</span>
            <div class="formEmail formTd">
              <div><input type="text" class="inputStyle1 required" name="email[0]" id="email1" maxlength="30" placeholder="Vui lòng nhập địa chỉ email của bạn" /></input></div>
              <div>@</div>
              <div><input type="text" class="inputStyle1 required" name="email[1]" id="email2" maxlength="30" placeholder="Vui lòng nhập địa chỉ email của bạn" /></input></div>
              <div>
                <select class="selectStyle2" onchange="fnMail(this.value)">
				  <option value="">Nhập trực tiếp</option>
				  <?=code_select_option('EmailList',1)?>
			    </select>
              </div>
            </div>
          </li>
          <li>
            <span class="formTh dot">quốc gia</span>
            <div class="formTd">
              <input type="text" name="country" id="country" class="inputStyle1 required" maxlength="30" placeholder="Nhập quốc gia của bạn" /></input>
            </div>
          </li>
          <li>
            <span class="formTh dot">công ty</span>
            <div class="formTd">
              <input type="text"name="company" id="company" class="inputStyle1 required" maxlength="30" placeholder="nhập công ty của bạn" /></input>
            </div>
          </li>
          <li>
            <span class="formTh dot">câu hỏi</span>
            <div class="formTd">
              <textarea name="content" id="content" class="textareaStyle1 required" rows="10" style="padding:10px;" placeholder="Vui lòng nhập câu hỏi."></textarea>
            </div>
          </li>
        </ul>
		<input type="hidden" name="mode" value="" />
		<input type="hidden" name="token" value="" />
		<input type="hidden" name="ReturnUrl" value="<?=$ThisUrl?>?tab=<?=$tab?>&area=<?=$area?>" />
		<input type="hidden" name="url" value="<?=$url?>" />
		<input type="hidden" name="site" value="<?=$shost?>" />
		<input type="hidden" name="lang" value="<?=$schar?>" />
		<input type="hidden" name="category" id="category" />
		<input type="hidden" name="seq" id="seq" />
      </form>
      </div>
      <div class="pop-ft tac">
          <a href="javascript:fm_submit();" class="btn btnLineGray btn-round">đặt câu hỏi</a>
          <a href="javascript:layer_contact_close()" class="btn-Close btn btnLineGray btn-round">sự hủy bỏ</a>
      </div>
    </div>
  </div>
  <!-- 문의하기 //-->
<style type="text/css">
.gm-style .gm-style-iw-t::after {display:none}
</style>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX-1CbT-hHJVGBtrbr-APdb6wMB3bcq9U&sensor=true&language=ko"></script>
	<script type="text/javascript">
		function fnMap(mapX, mapY, mapTXT){
			// 지도 중앙에 표시될 위치의 좌표를 입력. (위도, 경도)
			var latlng = new google.maps.LatLng(mapX, mapY);

			// 줌 설정. 최대 축소값(1), 최대 확대값(18)
			// 중앙에 위치할 좌표 설정.
			// Maptype : ROADMAP 은 입반적인 2D 지도입니다. (위성:SATELLITE, HYBRID, 지형:TERRAIN 등이 있습니다.)
			var myOptions = {
				zoom: 15,
				center: latlng,
				height: 300,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			// map_canvas 에 지도를 출력합니다.
			var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

			var geocoder =  new google.maps.Geocoder();

			var marker = new google.maps.Marker ({
				position: new google.maps.LatLng(mapX, mapY),
				map: map,
				draggable: false,
				//icon: "/images/google/map_point.png"
			});

			var infowindow = new google.maps.InfoWindow({
				content: "<div align='left' style='font-size:12px'>"+ mapTXT +"</div>"
			});

			infowindow.open(map, marker);

			google.maps.event.addListener(marker, "click", function() {
				infowindow.open(map, marker);
			});

			$('#map_canvas').attr('style', 'height:600px');
			$('#viewMap').fadeIn('fast');
		}
		function fnMapClose(){
			$('#viewMap').fadeOut('fast');
		}

		function layer_contact_form(category,seq){
			$("#category").val(category);
			$("#seq").val(seq);
			$('#layer_contact').fadeIn('fast');
		}

		function layer_contact_close(){
			$('#layer_contact').fadeOut('fast');
		}

		//submit
		function fm_submit(){
			// token
			if( !token_check('fm') )	return false;

			//필수항목검수
			if( !fm_check('fm') )	return false;
			
			$("#fm [name=mode]").val('inquirySubmit');
			$("#fm").submit();
		}
	</script>
