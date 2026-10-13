<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual logisticsVisual">
    <div class="innerWrap">
      <div class="visualText">
        <p>BUSINESS</p>
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

    
	<section class="logistics">
		<!-- conBox -->
		<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>3PL 물류</h1>
				<a class="his" href="<?=$host_url?>/product/logistics">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" />물류 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Why Hyundai Gloville?</h1>
					<p class="conBox-txt">
							자사 및 위탁물류센터 운영으로 B2B, B2C의 전문적인 시스템 및 인력으로 고객의 NEEDS에 맞춤 운영 물류SERVICE
					</p>
					
					<hr class="line" />

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img01.png" />
						<img src="<?=$skin_url?>/img/content/logistics3PL_img02.png" />
					</div>	

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
				<ul class="conBox-menu2w">
					<li class="on" t="1">물류 컨설팅</li>
				</ul>
				<hr class="both" />
					<h2 class="conBox-sub-title">물류진단 및 개선, 고객 니즈를 반영한 창고 건설부터 라스트 마일 배송까지 최적의 프로세스 설계 SERVICE</h2>


				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">물류 아웃소싱</li>
				</ul>
				<hr class="both" />
		
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• 물류도급<br>• 아웃소싱</h2>
					<p class="conBox-txt">
						물류 전문 인력 pool 확보되어 전문적인 물류 인력 대행
					</p>

				<!--//conBox-in-2 -->

				<!-- conBox-in-3 -->
				<div class="conBox-in conBox-in-3" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">3PL물류대행</li>
				</ul>
				<hr class="both" />			
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• 풀필먼트<br>• 보관/수배송</h2>
					<p class="conBox-txt">
						센터 위탁운영, 수/배송, 유통 및 가공 등 전문화된 물류서비스 제공
					</p>
				</div>
				<!--//conBox-in-3 -->
				<hr class="line" />

					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img03.png" />
						<h2 class="conBox-sub-title5">1.입고</h2>
						<p class="conBox-txt3">
						• 검수 (랜덤 및 전체)<br>
						• 검품 (랜덤 및 전체)
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img04.png" />
						<h2 class="conBox-sub-title5">2.보관</h2>
						<p class="conBox-txt3">• 물류센터 창고 선정<br>
						• 렉넘버 및 로케이션 선정<br>
						• 온라인 실시간 재고확인<br>
						• 24시간 보안경비
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img05.png" />
						<h2 class="conBox-sub-title5">3.주문관리</h2>
						<p class="conBox-txt3">• 고객사 발주 접수<br>
						• 운송장 발행<br>
						• 피킹 리스트 출력<br>
						• 출고증 접수
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img06.png" />
						<h2 class="conBox-sub-title5">4.피킹</h2>
						<p class="conBox-txt3">• 운송방식별 분류<br>
						• 전산입력<br>
						• 오피킹 ZERO시스템
						</p>
					</div>
					
					<hr class="both" />

					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img07.png" />
						<h2 class="conBox-sub-title5">5.포장</h2>
						<p class="conBox-txt3">• 출고상품 검수<br>
						• 자동화 포장 시스템<br>
						• 상품보호포장<br>
						• 포장작업 CCTV녹화
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img08.png" />
						<h2 class="conBox-sub-title5">6.출고</h2>
						<p class="conBox-txt3">• 송장 스티킹<br>
						• 화물차량 상차<br>
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img09.png" />
						<h2 class="conBox-sub-title5">7.운송</h2>
						<p class="conBox-txt3">• 택배 배송<br>(롯데/CJ대한통운/한진)
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img10.png" />
						<h2 class="conBox-sub-title5">8. 반품/재고 관리</h2>
						<p class="conBox-txt3">• 실시간 재고관리<br>
						• 양품화 작업<br>
						• 반품분류 / 관리<br>
						• WMS 전산입력
						</p>
					</div>

			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->

<script type="text/javascript">
	$(".conBox-menu2w li").click(function(){
		var t = $(this).attr('t');
		$(".conBox-menu2w li").attr('class','');
		$(this).attr('class','on');

		$(".conBox-in").hide();
		$(".conBox-in-"+t).show();
	});
</script>