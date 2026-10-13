<?php
/***************************************************************
+ Page Name     : /skin/dc/kor/hdw/support.contactUs.skin.php
+ Description   : support.contactUs
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
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

        <!-- 자체 탭 -->
        <div class="tabSliderWrap p0 glovilleTabWrap">
          <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper">
              <div class="swiper-slide on">
                <a href="javascript:void(0);" class="jsContactTab" data-tab="korea">Hyundai Gloville (Korea)</a>
              </div>
              <div class="swiper-slide">
                <a href="javascript:void(0);" class="jsContactTab" data-tab="international">Hyundai Gloville (International)</a>
              </div>
            </div>
          </div>
        </div>

        <div class="customerContactWrap">

          <!-- 국내 -->
          <div class="contactTabPanel is-active" id="contact-tab-korea">
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">경영관리그룹</p>
                  <p class="conMail">김정아 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6025</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6032</p>
                  <p class="conMail">jungah416@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="경영관리그룹 - 김정아 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국제물류그룹 / 항공수출입팀</p>
                  <p class="conMail">한예나 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6079</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">yena@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국제물류그룹 / 항공수출입팀 - 한예나 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국제물류그룹 / 1팀 (2PL)</p>
                  <p class="conMail">이준범 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-6230-6807 / +82-2-568-6080</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jblee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국제물류그룹 / 1팀 (2PL) - 이준범 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국제물류그룹 / 프라이싱팀</p>
                  <p class="conMail">김규민 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6022</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">kyumin92@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국제물류그룹 / 프라이싱팀 - 김규민 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국제물류그룹 / 2팀 (3PL 수입/삼국간 영업)</p>
                  <p class="conMail">홍진의 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6082</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jin@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국제물류그룹 / 2팀 - 홍진의 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국내물류그룹 / 서울사무소 (육상운송, 콜드체인)</p>
                  <p class="conMail">이진영 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jinyoung@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국내물류그룹 / 서울사무소 - 이진영 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국제물류그룹 / 3팀 (3PL 수출 영업)</p>
                  <p class="conMail">조보현 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6053</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">max@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국제물류그룹 / 3팀 - 조보현 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국내물류그룹 / 당진사무소 (중량물운송, 프로젝트화물)</p>
                  <p class="conMail">지완석 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-41-356-6301</p>
                  <p class="conMobile"><span>Fax.</span> 041-352-6302</p>
                  <p class="conMail">wan078@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국내물류그룹 / 당진사무소 - 지완석 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">국제물류그룹 / 국제영업5팀</p>
                  <p class="conMail">이진성 프로</p>
                  <p class="conAd">서울특별시 강남구 테헤란로 507 WeWork빌딩 18층</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jinlee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="국제물류그룹 / 국제영업5팀 - 이진성 프로">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <!-- 해외 -->
          <div class="contactTabPanel" id="contact-tab-international">
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">India / GLOVILLE LOGISTICS INDIA PVT. LTD.</p>
                  <p class="conMail">Diwakar P K Pro</p>
                  <p class="conAd">
                    SECOND FLOOR, (REAR SIDE), PLATINUM TOWER-II,<br>
                    NO.7/11, OLD TRUNK ROAD, PALLAVARAM, CHENNAI, INDIA
                  </p>
                  <p class="conTel"><span>Tel.</span> +91-9500199441</p>
                  <p class="conMobile"><span>Fax.</span>&nbsp;</p>
                  <p class="conMail">pk.diwakar@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                      class="btn btnLineGray btn-round btnMap"
                      data-lat="12.970449446002785"
                      data-lng="80.15119346706831"
                      data-title="India / GLOVILLE LOGISTICS INDIA PVT. LTD. - Diwakar P K Pro">
                      지도보기<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>
  </div>
</div>
<!-- subWrap// -->

<!-- 지도 상세보기 모달 -->
<div class="dim-layer" id="viewMap" style="display:none">
  <div class="dimBg"></div>
  <div class="pop-layer">
    <div class="layerContent">
      <div class="layerHead">
        <h3 id="map_title">지도 상세보기</h3>
        <a href="javascript:void(0)" class="btn-layerClose" onclick="fnMapClose()">
          <i class="ico ico-close ico-closeBlue"></i>
        </a>
      </div>
      <div class="layerbodyWrap">
        <div class="layerbody">
          <div class="mapWrap" id="map_canvas" style="height:600px"></div>
        </div>
      </div>
      <div class="layerfooter tar">
        <a href="javascript:void(0)" class="btn-text btn-textBlue btn-layerClose" onclick="fnMapClose()">닫기</a>
      </div>
    </div>
  </div>
</div>
<!-- // 지도 상세보기 모달 -->

<style>
.contactTabPanel { display:none; }
.contactTabPanel.is-active { display:block; }
</style>

<!-- Google Maps JS API (도메인 referrer 제한 권장) -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX-1CbT-hHJVGBtrbr-APdb6wMB3bcq9U&language=ko" defer></script>

<script>
// 전역 참조
var __gmap, __gmarker, __ginfo, __ggeocoder;

function openMapWithPosition(pos, title){
  if (!__gmap) {
    __gmap = new google.maps.Map(document.getElementById('map_canvas'), {
      zoom: 15,
      center: pos,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    __gmarker = new google.maps.Marker({
      position: pos,
      map: __gmap,
      draggable: false
    });

    __ginfo = new google.maps.InfoWindow();
  } else {
    __gmap.setCenter(pos);
    __gmarker.setPosition(pos);
  }

  document.getElementById('map_title').textContent = title || '지도 상세보기';
  __ginfo.setContent("<div style='font-size:12px'>" + (title || '') + "</div>");
  __ginfo.open(__gmap, __gmarker);

  if (window.jQuery) {
    $('#viewMap').fadeIn('fast');
  } else {
    document.getElementById('viewMap').style.display = 'block';
  }
}

// 지도 열기
function fnMap(lat, lng, title, address){
  if (typeof google === 'undefined' || !google.maps) {
    alert('지도를 불러오는 중입니다. 잠시 후 다시 시도해주세요.');
    return;
  }

  lat = parseFloat(lat);
  lng = parseFloat(lng);

  if (!isNaN(lat) && !isNaN(lng)) {
    openMapWithPosition(new google.maps.LatLng(lat, lng), title);
    return;
  }

  if (address) {
    if (!__ggeocoder) __ggeocoder = new google.maps.Geocoder();

    __ggeocoder.geocode({ address: address }, function(results, status){
      if (status === 'OK' && results[0]) {
        openMapWithPosition(results[0].geometry.location, title);
      } else {
        alert('해당 주소의 지도를 찾을 수 없습니다.');
      }
    });
    return;
  }

  alert('위치 정보가 없습니다.');
}

// 지도 닫기
function fnMapClose(){
  if (window.jQuery) {
    $('#viewMap').fadeOut('fast');
  } else {
    document.getElementById('viewMap').style.display = 'none';
  }
}

// 지도 버튼 바인딩
(function bindMapButtons(){
  if (!window.jQuery) {
    document.addEventListener('click', function(e){
      var el = e.target.closest('.btnMap');
      if (!el) return;
      e.preventDefault();
      fnMap(
        el.getAttribute('data-lat'),
        el.getAttribute('data-lng'),
        el.getAttribute('data-title'),
        el.getAttribute('data-address')
      );
    });
    return;
  }

  $(document).on('click', '.btnMap', function(e){
    e.preventDefault();
    var $btn = $(this);
    fnMap(
      $btn.data('lat'),
      $btn.data('lng'),
      $btn.data('title'),
      $btn.data('address')
    );
  });
})();

// 탭 바인딩
(function bindContactTabs(){
  var tabButtons = document.querySelectorAll('.jsContactTab');
  var tabSlides = document.querySelectorAll('.glovilleTabWrap .swiper-slide');
  var tabPanels = document.querySelectorAll('.contactTabPanel');

  function activateTab(tabName){
    for (var i = 0; i < tabSlides.length; i++) {
      tabSlides[i].classList.remove('on');
    }
    for (var j = 0; j < tabPanels.length; j++) {
      tabPanels[j].classList.remove('is-active');
    }

    var targetButton = document.querySelector('.jsContactTab[data-tab="' + tabName + '"]');
    var targetPanel = document.getElementById('contact-tab-' + tabName);

    if (targetButton && targetButton.parentNode) {
      targetButton.parentNode.classList.add('on');
    }
    if (targetPanel) {
      targetPanel.classList.add('is-active');
    }
  }

  for (var i = 0; i < tabButtons.length; i++) {
    tabButtons[i].addEventListener('click', function(e){
      e.preventDefault();
      activateTab(this.getAttribute('data-tab'));
    });
  }
})();
</script>