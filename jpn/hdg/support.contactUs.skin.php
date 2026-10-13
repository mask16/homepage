<?php
/***************************************************************
+ Page Name     : /skin/dc/jpn/hdw/support.contactUs.skin.php
+ Description   : support.contactUs (JP)
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
?>

<section class="subVisual visualCustomer">
  <div class="innerWrap">
    <div class="visualText">
      <p>HYUNDAI GLOVILLE</p>
      <h3>顧客支援</h3>
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

        <!-- カスタムタブ -->
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

          <!-- Korea -->
          <div class="contactTabPanel is-active" id="contact-tab-korea">

            <!-- 列 1 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">経営管理グループ</p>
                  <p class="conMail">キム・ジョンア プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6025</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6032</p>
                  <p class="conMail">jungah416@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="経営管理グループ - キム・ジョンア プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国際物流グループ / 航空輸出入チーム</p>
                  <p class="conMail">ハン・イェナ プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6079</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">yena@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国際物流グループ / 航空輸出入チーム - ハン・イェナ プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 列 2 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国際物流グループ / 第1チーム（2PL）</p>
                  <p class="conMail">イ・ジュンボム プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-6230-6807 / +82-2-568-6080</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">jblee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国際物流グループ / 第1チーム（2PL） - イ・ジュンボム プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国際物流グループ / プライシングチーム</p>
                  <p class="conMail">キム・ギュミン プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6022</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">kyumin92@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国際物流グループ / プライシングチーム - キム・ギュミン プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 列 3 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国際物流グループ / 第2チーム（3PL 輸入 / 三国間営業）</p>
                  <p class="conMail">ホン・ジニ プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6082</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">jin@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国際物流グループ / 第2チーム - ホン・ジニ プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国内物流グループ / ソウルオフィス（陸上輸送、コールドチェーン）</p>
                  <p class="conMail">イ・ジニョン プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">jinyoung@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国内物流グループ / ソウルオフィス - イ・ジニョン プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 列 4 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国際物流グループ / 第3チーム（3PL 輸出営業）</p>
                  <p class="conMail">チョ・ボヒョン プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6053</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">max@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国際物流グループ / 第3チーム - チョ・ボヒョン プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国内物流グループ / 唐津（タンジン）オフィス（重量物輸送、プロジェクト貨物）</p>
                  <p class="conMail">チ・ワンソク プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-41-356-6301</p>
                  <p class="conMobile"><span>FAX.</span> 041-352-6302</p>
                  <p class="conMail">wan078@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国内物流グループ / 唐津オフィス - チ・ワンソク プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 列 5 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国際物流グループ / 国際営業5チーム</p>
                  <p class="conMail">イ・ジンソン プロ</p>
                  <p class="conAd">ソウル特別市 江南区 テヘラン路 507 WeWorkビル 18階</p>
                  <p class="conTel"><span>電話.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>FAX.</span> 02-568-6078</p>
                  <p class="conMail">jinlee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国際物流グループ / 国際営業5チーム - イ・ジンソン プロ">
                      地図を見る<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

          </div>

          <!-- International -->
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
                  <p class="conTel"><span>電話.</span> +91-9500199441</p>
                  <p class="conMobile"><span>FAX.</span>&nbsp;</p>
                  <p class="conMail">pk.diwakar@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="12.970449446002785"
                       data-lng="80.15119346706831"
                       data-title="India / GLOVILLE LOGISTICS INDIA PVT. LTD. - Diwakar P K Pro">
                      地図を見る<i class="ico ico-map"></i>
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

<!-- 地図詳細モーダル -->
<div class="dim-layer" id="viewMap" style="display:none">
  <div class="dimBg"></div>
  <div class="pop-layer">
    <div class="layerContent">
      <div class="layerHead">
        <h3 id="map_title">地図の詳細</h3>
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
        <a href="javascript:void(0)" class="btn-text btn-textBlue btn-layerClose" onclick="fnMapClose()">閉じる</a>
      </div>
    </div>
  </div>
</div>
<!-- // 地図詳細モーダル -->

<style>
.contactTabPanel { display:none; }
.contactTabPanel.is-active { display:block; }
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX-1CbT-hHJVGBtrbr-APdb6wMB3bcq9U&language=ja" defer></script>

<script>
// グローバル参照
var __gmap, __gmarker, __ginfo;

// 地図を開く
function fnMap(lat, lng, title){
  if (typeof google === 'undefined' || !google.maps) {
    alert('地図を読み込み中です。しばらくしてからもう一度お試しください。');
    return;
  }

  lat = parseFloat(lat);
  lng = parseFloat(lng);

  if (isNaN(lat) || isNaN(lng)) {
    alert('緯度/経度の値が正しくありません。');
    return;
  }

  var pos = new google.maps.LatLng(lat, lng);

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

  document.getElementById('map_title').textContent = title || '地図の詳細';
  __ginfo.setContent("<div style='font-size:12px'>" + (title || '') + "</div>");
  __ginfo.open(__gmap, __gmarker);

  if (window.jQuery) {
    $('#viewMap').fadeIn('fast');
  } else {
    document.getElementById('viewMap').style.display = 'block';
  }
}

// 地図を閉じる
function fnMapClose(){
  if (window.jQuery) {
    $('#viewMap').fadeOut('fast');
  } else {
    document.getElementById('viewMap').style.display = 'none';
  }
}

// 地図ボタン
(function bindMapButtons(){
  if (!window.jQuery) {
    document.addEventListener('click', function(e){
      var el = e.target.closest('.btnMap');
      if (!el) return;
      e.preventDefault();
      fnMap(el.getAttribute('data-lat'), el.getAttribute('data-lng'), el.getAttribute('data-title'));
    });
    return;
  }

  $(document).on('click', '.btnMap', function(e){
    e.preventDefault();
    var $btn = $(this);
    fnMap($btn.data('lat'), $btn.data('lng'), $btn.data('title'));
  });
})();

// タブ切り替え
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