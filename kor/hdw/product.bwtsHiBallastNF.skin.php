<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallastNF.skin.php
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
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">
      <div class="innerWrap">
        
        <div class="sr-only">
          <h1>HiBallast NF는 간접식 전기분해 방식의 선박 평형수 처리장치입니다.</h1>
          <h2>간접식 전기분해 방식 BWTS</h2>
          <h2>홀딩타임 24시간</h2>
          <h3>세계 최초의 필터 없는 Side stream type</h3>
        </div>

        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/hiballast_nf.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
            본 시스템은 세계 최초의 필터 없는 사이드 스트림 전기분해 방식 BWTS로 탁도와 관계없이
            더욱 경제적이고 단순하며 신뢰성 높은 시스템을 제공합니다.

          </div>
          </div>

          <div class="topImg">
          <div class="left text-style1">
          <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">특징</b></span>
              <p class="bar-text" style="font-weight:200;">전기분해 방식</p>
              <p class="bar-text" style="font-weight:200;">간접(사이드 스트림) 방식
              <p class="bar-text" style="font-weight:200;">홀딩타임 24시간</p>
              <p class="bar-text" style="font-weight:200;">총 잔류 산화제(TRO): 8 mg/L</p>
              <p class="bar-text" style="font-weight:200;">전해액 공급 염도: 15 PSU 이상</p>
              <p class="bar-text" style="font-weight:200;">전해액 공급 온도: 4℃ 이상  (백업 솔루션 사용 시 제한 없음)</p>      
              <p class="bar-text" style="font-weight:200;">처리 용량: 75 ~ 10,000 m³/h</p>      
            </div>
          </div>
          </div>

          <div class="left text-style1">
          <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">Optimization & Cost Savings</b></span>
          </div><br /><br />
          <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/nf_ballasting_n_01.png" alt="" style="width: 60%; height: auto;"/></div>
          <br /> <br /><br /><br /><br /><br />

          <div class="left text-style1">
          <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">HiBallast NF 구성</b></span>
          </div>
          <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/nf_ballasting_n_02.png" alt=""/></div>
          <br /> <br /><br /><br /><br />  

          <div class="left text-style1" style="width: 80%; margin: 0 auto;">
            <b style="font-weight:700;"> 대표 모델: 75m³/h ~ 10,000m³/h
            </b>
          </div><br /> 

<style>
.table {
  text-align: center;
}
.table table {
  width: 80%;
  border-collapse: collapse;
  margin: 0 auto;
}
.table td {
  border: 1px solid #ccc;
  text-align: center;
  color: #666;
  padding: 10px;
}
.table tr:first-child td {
  background-color: #12357d;
  color: #fff;
  font-weight: bold;
}
.table td:first-child {
  border-left: none;
}
.table td:last-child {
  border-right: none;
}
.table-note {
  width: 80%;
  margin: 3px auto 0 auto; 
  text-align: left;
  color: #666;
  font-size: 17px;
}
</style>
          <div class="table">
            <table>
              <tbody>
              <tr>
                    <td> 대표모델 </td>
                    <td> 처리 용량 (m³/h) </td>
                    <td> EU 크기  LxWxH (mm) </td>
                    <td> EU 무게  (kg) </td>
                    <td> 전력 소비량량 (kW)  (at 30 PSU)</td>
                  </tr>
                  <tr>
                      <td><p>HiB-500</p></td>
                      <td><p>500</p></td>
                      <td><p>3000x2150x3100</p></td>
                      <td><p>3,000</p></td>
                      <td><p>25</p></td>
                  </tr>
                  <tr>
                      <td><p>HiB-1000</p></td>
                      <td><p>1,000</p></td>
                      <td><p>3000x2150x3100</p></td>
                      <td><p>3,500</p></td>
                      <td><p>50</p></td>
                  </tr>
                  <tr>
                      <td><p>HiB-2000</p></td>
                      <td><p>2,000</p></td>
                      <td><p>3000x2150x3100</p></td>
                      <td><p>3,800</p></td>
                      <td><p>100</p></td>
                  </tr>
                  <tr>
                      <td><p>HiB-4000</p></td>
                      <td><p>4,000</p></td>
                      <td><p>3200x2150x3150</p></td>
                      <td><p>4,900</p></td>
                      <td><p>200</p></td>
                  </tr>
                  <tr>
                      <td><p>HiB-6000</p></td>
                      <td><p>6,000</p></td>
                      <td><p>3500x2150x3150</p></td>
                      <td><p>5,700</p></td>
                      <td><p>300</p></td>
                  </tr>
                  <tr>
                      <td><p>HiB-8000</p></td>
                      <td><p>8,000</p></td>
                      <td><p>4550x2200x3200</p></td>
                      <td><p>6,600</p></td>
                      <td><p>400</p></td>
                  </tr>
                  <tr>
                      <td><p>HiB-10000</p></td>
                      <td><p>10,000</p></td>
                      <td><p>5300x2300x3500</p></td>
                      <td><p>8,950</p></td>
                      <td><p>500</p></td>
                  </tr>

              </tbody>
            </table>
            <div class="table-note">* 전력 소비량은 수질 조건에 따라 달라질 수 있습니다.</div>
          </div></br></br></br></br></br>

            <div class="left text-style1">
              <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">인증서</b></span>
            </div>
            <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/nf_ballasting_n_03.png" alt="" /></div>

        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->