<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>Business</p>
        <h3>사업소개</h3>
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              EcoBallast는 현대중공업㈜에서 개발한 선박평형수처리설비 브랜드이며 현대종합금속㈜에서는 Ecoballast 제작에 대한 License를 가지고 있습니다.
               필터와 자외선방식을 사용하는 EcoBallast는 필터, UV램프, 세정 및 제어 등의 주요 장비로 구성되어 있습니다.<br /><br />

              필터 장비는 평형수 내의 침전물 양을 현저히 감소시킬 수 있으며, 50μm 이상의 해양 유기체의 유입을 방지합니다.<br /><br />

              EcoBallast 시스템을 위해 특별히 설계된 UV 램프는 고강도 중압 자외선 램프를 사용하여 공간을 줄이고 효율성을 극대화하였습니다.<br /><br />
              완전한 수처리를 위해 발라스팅과 디발라스팅 운전시 시스템을 작동해야합니다.
              이는 발라스팅 시 처리된 해수 내 유기체가 증식할 것을 고려하여, 디발라스팅 시 추가적인 수처리가 진행됨을 의미합니다.<br /><br />
              CIP(Cleaning in-place) 장비는 발라스팅 및 디발라스팅 운전시 UV 램프 보호관 외부에 생성될 수 있는 이물질을 세정하는 자동세정장비입니다. 이는 해수 내 오염물로 인한 UV 램프의 성능 저하를 방지할 수 있도록 작동되는 장비입니다.

            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>원리</th>
                  <td>필터 + 자외선</td>
                </tr>
                <tr>
                  <th>전력소모량<br />(per 1,000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>처리 시점</th>
                  <td>발라스팅 / 디발라스팅</td>
                </tr>
                <tr>
                  <th>특징</th>
                  <td>친환경적인 시스템 (No chemical)<br />온도/염도영향 없음</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->