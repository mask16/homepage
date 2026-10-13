<?php
/***************************************************************
+ Page Name     : /skin/dc/chn/hdw/support.contactUs.skin.php
+ Description   : support.contactUs (中文)
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
?>

<section class="subVisual visualCustomer">
  <div class="innerWrap">
    <div class="visualText">
      <p>Customer Supports</p>
      <h3>客户支持</h3>
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

        <!-- 自定义标签 -->
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

          <!-- 韩国 -->
          <div class="contactTabPanel is-active" id="contact-tab-korea">

            <!-- 1列 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">经营管理组</p>
                  <p class="conMail">金正雅 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6025</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6032</p>
                  <p class="conMail">jungah416@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="经营管理组 - 金正雅 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国际物流组 / 航空进出口部</p>
                  <p class="conMail">韩艺娜 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6079</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">yena@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国际物流组 / 航空进出口部 - 韩艺娜 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 2列 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国际物流组 / 1部 (2PL)</p>
                  <p class="conMail">李俊范 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-6230-6807 / +82-2-568-6080</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">jblee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国际物流组 / 1部 (2PL) - 李俊范 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国际物流组 / 定价部</p>
                  <p class="conMail">金圭民 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6022</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">kyumin92@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国际物流组 / 定价部 - 金圭民 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 3列 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国际物流组 / 2部 (3PL 进口/三国间营业)</p>
                  <p class="conMail">洪珍义 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6082</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">jin@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国际物流组 / 2部 - 洪珍义 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国内物流组 / 首尔事务所 (陆上运输, 冷链)</p>
                  <p class="conMail">李眞榮 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">jinyoung@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国内物流组 / 首尔事务所 - 李眞榮 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 4列 -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国际物流组 / 3部 (3PL 出口营业)</p>
                  <p class="conMail">赵宝炫 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6053</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">max@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.523678"
                       data-lng="127.032485"
                       data-title="国际物流组 / 3部 - 赵宝炫 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>

                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国内物流组 / 唐津事务所 (重量物运输, 项目货物)</p>
                  <p class="conMail">池完锡 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-41-356-6301</p>
                  <p class="conMobile"><span>传真.</span> 041-352-6302</p>
                  <p class="conMail">wan078@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="36.976309"
                       data-lng="126.686690"
                       data-title="国内物流组 / 唐津事务所 - 池完锡 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

            <!-- 5列 (추가된 국제영업5팀) -->
            <ul>
              <li>
                <div class="contactDesc">
                  <p class="conArea" style="margin-bottom:20px">国际物流组 / 国际营业5部</p>
                  <p class="conMail">李镇成 专业</p>
                  <p class="conAd">首尔特别市 江南区 德黑兰路 507 WeWork大厦 18层</p>
                  <p class="conTel"><span>电话.</span> +82-2-568-6029</p>
                  <p class="conMobile"><span>传真.</span> 02-568-6078</p>
                  <p class="conMail">jinlee@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="37.507653"
                       data-lng="127.0577603"
                       data-title="国际物流组 / 国际营业5部 - 李镇成 专业">
                      查看地图<i class="ico ico-map"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>

          </div>

          <!-- 国际 -->
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
                  <p class="conTel"><span>电话.</span> +91-9500199441</p>
                  <p class="conMobile"><span>传真.</span>&nbsp;</p>
                  <p class="conMail">pk.diwakar@hyundaigloville.com</p>
                  <div class="conbtnArea" style="margin-top:10px">
                    <a href="#"
                       class="btn btnLineGray btn-round btnMap"
                       data-lat="12.970449446002785"
                       data-lng="80.15119346706831"
                       data-title="India / GLOVILLE LOGISTICS INDIA PVT. LTD. - Diwakar P K Pro">
                      查看地图<i class="ico ico-map"></i>
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

<!-- 地图详情弹窗 -->
<div class="dim-layer" id="viewMap" style="display:none">
  <div class="dimBg"></div>
  <div class="pop-layer">
    <div class="layerContent">
      <div class="layerHead">
        <h3 id="map_title">地图详情</h3>
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
        <a href="javascript:void(0)" class="btn-text btn-textBlue btn-layerClose" onclick="fnMapClose()">关闭</a>
      </div>
    </div>
  </div>
</div>
<!-- // 地图详情弹窗 -->

<style>
.contactTabPanel { display:none; }
.contactTabPanel.is-active { display:block; }
</style>

<!-- Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX-1CbT-hHJVGBtrbr-APdb6wMB3bcq9U&language=zh-CN" defer></script>

<script>
// 全局引用
var __gmap, __gmarker, __ginfo;

// 打开地图
function fnMap(lat, lng, title){
  if (typeof google === 'undefined' || !google.maps) {
    alert('正在加载地图，请稍后再试。');
    return;
  }

  lat = parseFloat(lat);
  lng = parseFloat(lng);

  if (isNaN(lat) || isNaN(lng)) {
    alert('纬度/经度值无效。');
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

  document.getElementById('map_title').textContent = title || '地图详情';
  __ginfo.setContent("<div style='font-size:12px'>" + (title || '') + "</div>");
  __ginfo.open(__gmap, __gmarker);

  if (window.jQuery) {
    $('#viewMap').fadeIn('fast');
  } else {
    document.getElementById('viewMap').style.display = 'block';
  }
}

// 关闭地图
function fnMapClose(){
  if (window.jQuery) {
    $('#viewMap').fadeOut('fast');
  } else {
    document.getElementById('viewMap').style.display = 'none';
  }
}

// 地图按钮绑定
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

// 标签切换
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