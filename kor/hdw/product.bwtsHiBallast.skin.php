<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              HiBallast는 현대중공업㈜에서 개발한 선박평형수처리장치 브랜드로 현대종합금속㈜는 HiBallast 제작 License를 가지고 있습니다.<br /><br />
              간접식 전기분해 방식을 사용하는 HiBallast는 필터, 전기분해장치, 중화장치, TRO센서 등의 주요 장비로 구성되어 있습니다.<br /><br />

              필터는 자동 역세척 기능을 가지고 있으며 해수 내 50μm 이상의 미생물과 유기체를 필터링 합니다.<br /><br />

              필터를 통과하는 50um 미만의 미생물을 처리하기 위해 간접식 전기분해 방식으로 고농도(1,000mg/l 이하)의 차아염소산을 생산하여 선박의 평형수 배관에 주입합니다.<br /><br />
              
              수처리 후 평형수가 중화작업 없이 배출이 되면 유해한 영향을 미칠 수 있으므로, 배출되기 전에 중화제를 주입하여 평형수 내에 잔존해 있는 산화제를 제거 후 배출하도록 합니다.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>원리</th>
                  <td>필터 + 전기분해(간접식)</td>
                </tr>
                <tr>
                  <th>전력소모량<br />(per 1,000㎥/h)</th>
                  <td>발라스팅 시 50kW<br />디발라스팅 시 1kW</td>
                </tr>
                <tr>
                  <th>처리 시점</th>
                  <td>발라스팅 시에만 처리<br />디발라스팅 시 중화처리</td>
                </tr>
                <tr>
                  <th>특징</th>
                  <td>낮은 전력 소모량<br />저염도 지역에서 전체 발라스트 탱크 용량의 1%의 해수만으로 운전 가능</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->