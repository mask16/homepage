<?php
/***************************************************************
+ Page Name     : /skin/dc/deu/hdw/support.contactUs.skin.php
+ Description   : support.contactUs (Deutsch)
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
?>

<section class="subVisual visualCustomer">
  <div class="innerWrap">
    <div class="visualText">
      <p>Customer Supports</p>
      <h3>Kundenbetreuung</h3>
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

        <!-- Eigene Tabs -->
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
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Geschäftsmanagementgruppe</p>
                  <p class="conMail">Jung-ah Kim Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6025</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6032</p>
                  <p class="conMail">jungah416@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Geschäftsmanagementgruppe - Jung-ah Kim">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Internationale Logistikgruppe / Luftfrachtabteilung</p>
                  <p class="conMail">Yena Han Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6079</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">yena@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Internationale Logistikgruppe / Luftfrachtabteilung - Yena Han">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Internationale Logistikgruppe / Team 1 (2PL)</p>
                  <p class="conMail">Jun-beom Lee Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-6230-6807 / +82-2-568-6080</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jblee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Internationale Logistikgruppe / Team 1 (2PL) - Jun-beom Lee">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Internationale Logistikgruppe / Preisabteilung</p>
                  <p class="conMail">Liam Kim Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6022</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">kyumin92@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Internationale Logistikgruppe / Preisabteilung - Liam Kim Profi">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Internationale Logistikgruppe / Team 2 (3PL Import/Drittlandhandel)</p>
                  <p class="conMail">Jin-ui Hong Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6082</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jin@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Internationale Logistikgruppe / Team 2 - Jin-ui Hong">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Inlandslogistikgruppe / Seoul Büro (Landtransport, Kühlkette)</p>
                  <p class="conMail">Jin-young Lee Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jinyoung@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Inlandslogistikgruppe / Seoul Büro - Jin-young Lee">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Internationale Logistikgruppe / Team 3 (3PL Exportvertrieb)</p>
                  <p class="conMail">Bo-hyeon Jo Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6053</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">max@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Internationale Logistikgruppe / Team 3 - Bo-hyeon Jo">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Inlandslogistikgruppe / Dangjin Büro (Schwerlasttransport, Projektfracht)</p>
                  <p class="conMail">Wan-seok Ji Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-41-356-6301</p>
                  <p class="conMobile"><span>Fax.</span> 041-352-6302</p>
                  <p class="conMail">wan078@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Inlandslogistikgruppe / Dangjin Büro - Wan-seok Ji">
                      Karte anzeigen<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">Internationale Logistikgruppe / Team 5</p>
                  <p class="conMail">Jinsung Lee Profi</p>
                  <p class="conAd">WEWORK BLDG 18F, TEHERAN-RO 507, GANGNAM-GU, SEOUL, KOREA</p>
                  <p class="conTel"><span>Tel.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>Fax.</span> 02-568-6078</p>
                  <p class="conMail">jinlee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="Internationale Logistikgruppe / Team 5 - Jinsung Lee Profi">
                      Karte anzeigen<i class="ico ico-map"></i>
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
                  <p class="conTel"><span>Tel.</span> +91-9500199441</p>
                  <p class="conMobile"><span>Fax.</span>&nbsp;</p>
                  <p class="conMail">pk.diwakar@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="12.970449446002785"
                       data-lng="80.15119346706831"
                       data-title="India / GLOVILLE LOGISTICS INDIA PVT. LTD. - Diwakar P K Pro">
                      Karte anzeigen<i class="ico ico-map"></i>
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

<!-- Karten-Detail-Modal -->
<div class="dim-layer" id="viewMap" style="display:none">
  <div class="dimBg"></div>
  <div class="pop-layer">
    <div class="layerContent">
      <div class="layerHead">
        <h3 id="map_title">Kartendetails</h3>
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
        <a href="javascript:void(0)" class="btn-text btn-textBlue btn-layerClose" onclick="fnMapClose()">Schließen</a>
      </div>
    </div>
  </div>
</div>
<!-- // Karten-Detail-Modal -->

<style>
.contactTabPanel { display:none; }
.contactTabPanel.is-active { display:block; }
</style>

<!-- deutsche Seite -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX-1CbT-hHJVGBtrbr-APdb6wMB3bcq9U&language=de" defer></script>

<script>
// Globale Referenzen
var __gmap, __gmarker, __ginfo;

// Karte öffnen
function fnMap(lat, lng, title){
  if (typeof google === 'undefined' || !google.maps) {
    alert('Karte wird geladen. Bitte versuchen Sie es in Kürze erneut.');
    return;
  }

  lat = parseFloat(lat);
  lng = parseFloat(lng);

  if (isNaN(lat) || isNaN(lng)) {
    alert('Ungültige Breiten-/Längengradwerte.');
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

  document.getElementById('map_title').textContent = title || 'Kartendetails';
  __ginfo.setContent("<div style='font-size:12px'>" + (title || '') + "</div>");
  __ginfo.open(__gmap, __gmarker);

  if (window.jQuery) {
    $('#viewMap').fadeIn('fast');
  } else {
    document.getElementById('viewMap').style.display = 'block';
  }
}

// Karte schließen
function fnMapClose(){
  if (window.jQuery) {
    $('#viewMap').fadeOut('fast');
  } else {
    document.getElementById('viewMap').style.display = 'none';
  }
}

// Karten-Buttons
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

// Tab-Umschaltung
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