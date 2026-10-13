<?php
/***************************************************************
+ Page Name      : /skin/dc/kor/hdw/product.study1.skin.php
+ Description    : product.study1 (study1 + study2 + study3 통합)
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
?>

<section class="subVisual visualProduct">
  <div class="innerWrap">
    <div class="visualText">
      <p>HYUNDAI WELDING</p>
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

    <!-- [1] 연구소소개 (기존 study1) -->
    <section class="productStudy1">
      <div class="conPd">
        <h5 class="titStyle5">
          <b>
            现代综合金属浦项技术研究所把顾客的需求放在首位，致力于开发能够立即满足顾客需求的焊接解决方案。
          </b>
        </h5>
      </div>
      <div class="productStudyImg"></div>
      <div class="productStudy1Con">
        <div class="conPd">
          自1977年研究所成立以来，一直致力于手工电弧焊材、埋弧焊材、实芯焊丝、药芯焊丝、氩弧焊丝、镍合金钢以及其他焊接材料的研究开发，为大韩民国的产业发展做出了贡献。通过与国内大型实际用户进行密切技术共享，促进共同技术开发，并通过海外分公司获取竞争企业及海外实际用户的基本信息，树立战略。
          <br /><br />
          通过与国策研究机关的有机合作，根据新钢材开发焊接材料，确保产品可靠性，在不断地发展。 另外，以积累的经验为基础，开发高性能、环保、高效率、新钢种连接型焊接材料，通过国内外售后服务/事前服务及技术支援，为了成为更进一步接近顾客的研究所而努力。本研究所致力于提高顾客生产率、改善质量、降低成本、开发符合顾客需求的新产品,在所有领域为了取得最佳结果而努力，致力于开发符合市场变化的焊接材料的研究。
        </div>
      </div>
    </section>

    <!-- 섹션 사이 간격(추천) -->
    <div style="height:60px;"></div>

    <!-- [2] 연구분야 (기존 study2) -->
    <section class="productStudy2">
      <div class="conPd">
        <h5 class="titStyle5"><b>现代综合金属在不断研究并发展的领域</b></h5>
      </div>
      <div class="productStudy2Img"></div>
      <div class="productStudy2Con conPd">
        <h6 class="titStyle3"><b>焊接材料开发</b></h6>
        <div>
          <p class="text-blit">对低温钢、高强度钢、耐热钢等最适合的产品开发</p>
          <p class="text-blit">造船、海洋、建设、核能、发电设备用特殊功能性产品开发</p>
          <p class="text-blit">造船、钢构、建设、重装备、汽车等对常规产品的创新功能化产品开发</p>
          <p class="text-blit">为了适用新的钢种、新的焊接材料、新的焊接法，业界共同研究开发并提供Total solution技术</p>
          <p class="text-blit">提高焊接速度及效率，高韧性、耐裂纹、环保</p>
        </div>

        <h6 class="titStyle3"><b>焊接技术研究</b></h6>
        <div>
          <p class="text-blit">通过监测电弧，评价焊丝的送丝特性</p>
          <p class="text-blit">通过焊接材料的机械特性评价及分析，研究能提高性能的方法</p>
          <p class="text-blit">根据焊接参数，研究焊接部特性</p>
        </div>
      </div>
    </section>

    <!-- 섹션 사이 간격(추천) -->
    <div style="height:100px;"></div>

    <!-- [3] 제품개발 방향 (기존 study3) -->
    <section class="productStudy3">
      <div class="conPd">
        <h5 class="titStyle5"><b>现代综合金属研究所正在开发焊接材料的方向开发方向</b></h5>
        <h6 class="titStyle1 c-gray"><p>开发方向</p></h6>

        <div class="productStudy3Wrap brdr-b">
          <div>
            <h6 class="titStyle3"><b>环保型</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
            <p class="text-blit">开发低烟尘焊接材料</p>
            <p class="text-blit">开发低锰焊接材料</p>
            <p class="text-blit">开发低飞溅焊接材料</p>
            <p class="text-blit">开发自保药芯焊丝</p>
          </div>
        </div>

        <div class="productStudy3Wrap">
          <div>
            <h6 class="titStyle3"><b>高性能</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
            <p class="text-blit">开发极低温CTOD特性优秀的焊接材料</p>
            <p class="text-blit">开发海洋工业用超高强度/高韧性焊接材料</p>
            <p class="text-blit">开发耐吸湿极低氢焊接材料</p>
          </div>
        </div>

        <div class="productStudy3Wrap">
          <div>
            <h6 class="titStyle3"><b>高效率</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
            <p class="text-blit">开发电煤气焊接材料</p>
            <p class="text-blit">开发高速焊接用金属芯焊丝</p>
          </div>
        </div>

        <div class="productStudy3Wrap">
          <div>
            <h6 class="titStyle3"><b>新钢种连接型</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
            <p class="text-blit">开发成套设备储罐用Self Shield EGW</p>
            <p class="text-blit">开发高强度FCW</p>
            <p class="text-blit">开发海洋平台S500、S550、S690 钢用焊接材料</p>
            <p class="text-blit">开发自动化、高效率化、高速化、轻量化等新焊接工程焊接材料</p>
          </div>
        </div>

      </div>
    </section>

  </div>
</div>
<!-- subWrap// -->
