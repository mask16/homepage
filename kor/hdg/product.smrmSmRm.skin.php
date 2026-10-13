<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.distribution ul.conBox-menu2 li {
    width: 24%;
</style>
  <section class="subVisual distributionVisual">
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

    
	<section class="distribution">
		<!-- conBox -->
		<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>소재/원료</h1>
			</div> 
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Department of Trading & SCM</h1>
				<ul class="conBox-menu2">
					<a href="/kor/hdg/product/smrmSmRm"><li class="on"  t="1">제강원료 및 합금철</li></a>
					<a href="/kor/hdg/product/smrmMetalSilicon"><li t="2">메탈실리콘</li></a>
					<a href="/kor/hdg/product/smrmNonFerrousMetal"><li t="3">비철금속</li></a>
					<a href="/kor/hdg/product/smrmGeneralTrading"><li t="4">일반무역</li></a>

				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<ul class="smrmCommonList smrm_ul">
						<li class="full_li">
							<div class="txt_box">
								<h2>
									제강원료 및 합금철
									<span>
										(Steel Making Raw Materials & Ferro Alloys)
									</span>
								</h2>
								<p>
									철과 각종 금속의 합금으로, 제강 공정 시 노내 또는 레이들에 첨가하여, 강질을 개선하고 강 내의 불순물에 작용해서 이것들을 강으로부터 분리 하는 청정용 (탈산· 탈유· 탈가스용)으로 사용되며, 합금을 통해 원하는 강종을 제조합니다.
								</p>
							</div>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img01.jpg" />
							</div>
						</li>
						<li>
							<h2>
								페로실리콘
								<span>
									Fe-Si(Ferro Silicon)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img02.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											탈산화제, 환원제, 흑연화촉진제 등
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											철과 실리콘의 합금으로 제강과정에서 추가하면 철강의 강도, 경도, 탄력성을 현저히 향상시켜, 형태를 개션하여 쇳물증의 기체 원소 함량을 감소시켜줍니다. 철강의 품질이 높아지며 원가절감 또한 가능합니다.
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								전기분해 망간금속
								<span>
									Electrolytic Manganese Metal Flake (EMMF)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img03.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											철강재와 배터리 사용 주요 산업 원자재
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											철강 생산 공정의 필수품으로 철강 공업에서, 탈산제, 탈황제로 가장 널리 사용되며, 철강 생산시 인장강도, 신장성을 높여주며, 자동차 강판, 전자기술, 화학공업, 식품위생, 공구 및 볼트, 항공우주산업 등에도 사용됩니다.
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								페로망간
								<span>
									Fe-Mn(Ferro Manganese)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img04.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											제강공정에서 탈 산 및 탈 황등 불순물 제거
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											철에 망간의 성질을 부여하기 위해 제강공정에서 사용되며, 철에 망간을 결합할 경우, 황과 결합해 강철의 부서짐 성질의 요인인 황화철의 형성을 막아 강도가 우수해 집니다.
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								실리콘망간
								<span>
									Si-Mn(Silico Manganese)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img05.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											제강 공정 중 불순물 제거 및 성분 조정 등
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											실리콘 망간은 강철의 자연 특성을 향상시켜 강도와 기능을 향상 시키며, 부식에 강합니다.
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								페로크롬
								<span>
									Fe-Cr(High / Low Carbon Ferro Chrome)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img06.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											제강 공정 중 불순물 제거 및 성분 조정 등
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											철과 크롬의 합금으로 탄소 함유량에 의해 저탄소, 고탄소의 페로크롬으로 분류되며, 외관과 부식에  대한 내성을위해 사용합니다. (전 세계 페로크롬의 80% 이상이 스테인리스강 생산에 사용)
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								페로바나듐
								<span>
									Fe-V(Ferrovanadium)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img07.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											제강 공정 중 불순물 제거 및 성분 조정 등
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											철과 바나듐의 합금으로, 알칼리성 시약과 황산 및 염산에 대한 내식성을 개선하는 것입니다. 또한 재료의 중량 대비 인장 강도를 향상시키는 데사용됩니다.
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								티타늄 스펀지
								<span>
									Ti 스펀지 (Titanium Sponge)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img08.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											우주항공산업, 항공기, 해수담수화 장치, 원자력 발전용 복수관 등
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											Titanium Ingot (항공, 엔진파트,화학공업,건설)<br>
											High-purity Titanium (D램용 반도체)<br>
											Titanium Powder (분말야금, 3D프린터용 재료)
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
						<li>
							<h2>
								페로티타늄
								<span>
									Fe-Ti(Ferrotitanium)
								</span>
							</h2>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/smrm_img09.jpg" />
								<span>
									※ 제강 공정의 합금 성분 보정과 탈산, 환원, 및 성질 개선 용도로 사용됩니다.
								</span>
							</div>
							<div class="txt_box">
								<ol>
									<li>
										<p>
											<b>용도</b>
											초고장력 자동차 강판, 고급강 제조
										</p>
									</li>
									<li>
										<p>
											<b>내용</b>
											철과 티타늄의 합금으로, 내열성, 내식성이 우수하여 우주항공산업, 3D프린팅 및 강의 탈산제, 자동차강판 절삭공구, 항공기용재, 화학장치 재료, 합금 첨가제, 통신기계, 광학기기 등에 사용됩니다.
										</p>
									</li>
									<li>
										<p>
											<b>다운로드</b>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												COA
											</a>
											<a href="#">
												<i class="xi-arrow-bottom"></i>
												MSDS
											</a>
										</p>
									</li>
								</ol>
							</div>
						</li>
					</ul>
				</div>
				<!--//conBox-in-1 -->
				

				
			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->

<script type="text/javascript">
	$(".conBox-menu2 li").click(function(){
		var t = $(this).attr('t');
		$(".conBox-menu2 li").attr('class','');
		$(this).attr('class','on');

		$(".conBox-in").hide();
		$(".conBox-in-"+t).show();
	});
</script>