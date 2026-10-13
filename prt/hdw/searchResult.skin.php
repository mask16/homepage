<?php
/***************************************************************
+ Page Name		: /skin/dc/prt/hdw/searchResult.skin.php
+ Description	: searchResult.skin
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<script type="text/javascript">
	function fm_search(name,value){
		$("#searchForm [name="+name+"]").val(value);
		if( name == 'tab' ){
			$("#searchForm [name=stv1]").val('');
			$("#searchForm [name=stv2]").val('');
			$("#searchForm [name=stv3]").val('');
		}
		$("#searchForm").submit();
	}
</script>

	<section class="subVisual visualSearch">
		<div class="visualSearchWrap">
			<div class="subSearchBox">
				<form name="searchForm" id="searchForm" method="get" action="<?=$host_url?>/searchResult">
					<input type="hidden" name="tab" value="<?=$tab?>" />
					<input type="hidden" name="stv1" value="<?=$stv1?>" />
					<input type="hidden" name="stv2" value="<?=$stv2?>" />
					<input type="hidden" name="stv3" value="<?=$stv3?>" />
					<input type="text" name="stx" value="<?=$stx?>" placeholder="Por favor digite um termo de pesquisa." />
					<button type="submit"><i class="ico ico-search"></i></button>
				</form>
			</div>
		</div>
	</section>

	<div class="subWrap subSearchWrap">
		<section class="leftFloating" id="leftFloating"></section>
		<section class="subNavWrap" id="subNavPos"></section>

		<div class="subContent pt0">
			<div class="innerWrap">

				<!-- searchTab01Wrap -->
				<div class="searchTab01Wrap">
					<div class="swiper-container searchTab01">
						<div class="swiper-wrapper">

							<div class="swiper-slide <?=($tab=='product')?'on':''?>">
								<a href="javascript:fm_search('tab','product');">Product <sup><?=$productTotalCnt?></sup></a>
							</div>
							<!--
							<div class="swiper-slide <?=($tab=='recruit')?'on':''?>">
								<a href="javascript:fm_search('tab','recruit');">Recruit <sup><?=$recruitTotalCnt?></sup></a>
							</div>
							-->
							<div class="swiper-slide <?=($tab=='news')?'on':''?>">
								<a href="javascript:fm_search('tab','news');">News <sup><?=$newsTotalCnt?></sup></a>
							</div>

							<div class="swiper-slide <?=($tab=='contact')?'on':''?>">
								<a href="javascript:fm_search('tab','contact');">Contact <sup><?=$contactTotalCnt?></sup></a>
							</div>
							<!-- <div class="swiper-slide <?=($tab=='download')?'on':''?>">
								<a href="javascript:fm_search('tab','download');">Download <sup><?=$downloadTotalCnt?></sup></a>
							</div> -->

						</div>
					</div>
				</div>
				<!--//searchTab01Wrap -->

<?php if( $tab == 'product' ){//product----------------------->?>

				<!-- searchTab02Wrap -->
				<div class="searchTab02Wrap">
					<div class="swiper-container searchTab02">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv1','')" <?=($stv1=='')?'checked':''?> />
									<span>All</span>
								</label>
							</div>
			<?php for( $i = 0; $i < count($materials_category); $i++ ){?>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv1','<?=$materials_category[$i]['mc_no']?>')" <?=($stv1==$materials_category[$i]['mc_no'])?'checked':''?> />
									<span><?=stripslashes($materials_category[$i]['mc_name'])?></span>
								</label>
							</div>
			<?php }?>
						</div>
					</div>
				</div>
				<!--//searchTab02Wrap -->

				<!--searchTab02Wrap -->
			<!--	<div class="searchTab02Wrap">
					<div class="swiper-container searchTab02">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','')" <?=($stv2=='')?'checked':''?> />
									<span>All</span>
								</label>
							</div>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','productName')" <?=($stv2=='productName')?'checked':''?> />
									<span>Product Number</span>
								</label>
							</div>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','aws')" <?=($stv2=='aws')?'checked':''?> />
									<span>AWS</span>
								</label>
							</div>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','jis')" <?=($stv2=='jis')?'checked':''?> />
									<span>JIS</span>
								</label>
							</div>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','en')" <?=($stv2=='en')?'checked':''?> />
									<span>EN</span>
								</label>
							</div>
						</div>
					</div>
				</div>-->
				<!--//searchTab02Wrap -->

				<!-- searchContent -->
				<div class="searchContent searchContentProduct">
	<?php
	if( $productCnt > 0 ){
		for( $i = 0; $i < count($materials_category); $i++ ){
			$Info = $materials_category[$i];
			$ls = $materials_category[$i]['productList'];
			if( count($ls) > 0 ){
	?>
					<div class="searchContentProWrap">
						<h5 class="titStyle3"><b><?=stripslashes($Info['mc_name'])?></b></h5>
						<div class="cellWrap">
							<div class="left">
								<div class="searchContentProImg searchStick" style="background:url(<?=stripslashes($Info['mc_file_url'])?>) center center;background-size:100%;background-repeat:no-repeat;"></div>
							</div>
							<div class="right">
								<p>Product</p>
								<ul>
								<?php for( $x = 0; $x < count($ls); $x++ ){?>
									<li>
										<a href="<?=$host_url?>/product/weldMaterialDetail?cate=<?=$ls[$x]['categoryL1']?>&cate2=<?=$ls[$x]['categoryL2']?>&productSeq=<?=$ls[$x]['seq']?>#toggleContent<?=$ls[$x]['seq']?>">
											<span class="proName"><?=stripslashes($ls[$x]['productName'])?></span>
											<ul>
												<li>
													<span>AWS</span>
													<?=($ls[$x]['aws'])?stripslashes($ls[$x]['aws']):'-'?>
												</li>
												<li>
													<span>JIS</span>
													<?=($ls[$x]['jis'])?stripslashes($ls[$x]['jis']):'-'?>
												</li>
												<li>
													<span>EN</span>
													<?=($ls[$x]['en'])?stripslashes($ls[$x]['en']):'-'?>
												</li>
											</ul>
										</a>
									</li>
								<?php }?>
								</ul>
							</div>
						</div>
					</div>

	<?php
			}
			unset($Info);
			unset($ls);
		}//$i for end--//
	}else{
	?>
					<div class="noResult">Não há resultados a serem mostrados.</div>
	<?php }?>
				</div>
				<!--//searchContent -->

<?php }else if( $tab == 'recruit' ){//recruit----------------------->?>

				<!-- searchTab02Wrap --
				<div class="searchTab02Wrap">
					<div class="swiper-container searchTab02">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv1','')" <?=($stv1=='')?'checked':''?> />
									<span>All</span>
								</label>
							</div>
			<?php for( $i = 0; $i < count($sitelist); $i++ ){?>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv1','<?=$sitelist[$i]['code_key']?>')" <?=($stv1==$sitelist[$i]['code_key'])?'checked':''?> />
									<span><?=stripslashes($sitelist[$i]['code_name'])?></span>
								</label>
							</div>
			<?php }?>
						</div>
					</div>
				</div>
				<!--//searchTab02Wrap -->

				<!-- searchTab02Wrap --
				<div class="searchTab02Wrap">
					<div class="swiper-container searchTab03">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','')" <?=($stv2=='')?'checked':''?> />
									<span>All</span>
								</label>
							</div>
			<?php for( $i = 0; $i < count($joblist); $i++ ){?>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv2','<?=$joblist[$i]['code_key']?>')" <?=($stv2==$joblist[$i]['code_key'])?'checked':''?> />
									<span><?=stripslashes($joblist[$i]['code_name'])?></span>
								</label>
							</div>
			<?php }?>
						</div>
					</div>
				</div>
				<!--//searchTab02Wrap -->

				<!-- searchTab02Wrap --
				<div class="searchTab02Wrap">
					<div class="swiper-container searchTab04">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv3','')" <?=($stv3=='')?'checked':''?> />
									<span>All</span>
								</label>
							</div>
			<?php for( $i = 0; $i < count($dutylist); $i++ ){?>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv3','<?=$dutylist[$i]['code_key']?>')" <?=($stv3==$dutylist[$i]['code_key'])?'checked':''?> />
									<span><?=stripslashes($dutylist[$i]['code_name'])?></span>
								</label>
							</div>
			<?php }?>
						</div>
					</div>
				</div>
				<!--//searchTab02Wrap -->

				<!-- searchContent -->
				<div class="searchContent">
	<?php
	if( $recruitCnt > 0 ){
		for( $i = 0; $i < count($sitelist); $i++ ){
			$Info = $sitelist[$i];
			$ls = $sitelist[$i]['recruitList'];
			if( count($ls) > 0 ){
	?>
					<div class="searchContentTable searchContentRecruit">
						<h5 class="titStyle5"><b><?=$Info['code_name']?></b></h5>
						<div class="tableStyle1">
							<div class="tableHeader">
								<table class="tc">
								<colgroup>
									<col width="15%">
									<col width="10%">
									<col width="15%">
									<col width="30%">
									<col width="20%">
									<col width="10%">
								</colgroup>
								<thead>
								<tr>
									<th>Nome da empresa</th>
									<th>Tipo de candidatura</th>
									<th>Cargo</th>
									<th>Área de emprego</th>
									<th>Tempo de candidatura</th>
									<th>Prazo</th>
								</tr>
								</thead>
								</table>
							</div>

							<ul class="tableList">
					<?php for( $x = 0; $x < count($ls); $x++ ){?>
								<li class="<?=($ls[$i]['endDt'] < date("Y-m-d H:i:s"))?'recruit-end':''?>">
									<div><span class="mTit"></span><?=$Info['code_name']?></div>
									<div><span class="mTit"></span><?=$ls[$x]['job']?></div>
									<div><span class="mTit"></span><?=$ls[$x]['duty']?></div>
									<div>
										<a href="<?=$host_url?>/recruit/noticeDetail?seq=<?=$ls[$x]['seq']?>&url=<?=urlencode(REQUEST_URI)?>">
											<?=mb_substr(stripslashes($ls[$x]['title']),0,24)?>
										</a>
									</div>
									<div>
										<span class="mTit"></span>
										<?=substr($ls[$x]['startDt'],0,10)?>
										<span style="">~</span>
										<?=substr($ls[$x]['endDt'],0,10)?>
									</div>
									<div>
										<span class="mTit"></span>
										<span class="<?=($ls[$x]['day']>0 && $ls[$x]['day']>-4)?'c-red':''?>"><?=$ls[$x]['dayNm']?></span>
									</div>
								</li>
					<?php }?>
							</ul>
						</div>
					</div>
	<?php
			}
			unset($Info);
			unset($ls);
		}//$i for end--//
	}else{
	?>
					<div class="searchContentTable searchContentRecruit">
						<div class="noResult">Não há resultados a serem mostrados.</div>
					</div>
	<?php }?>

				</div>
				<!--//searchContent -->

<?php }else if( $tab == 'news' ){//news----------------------->?>

				<!-- searchContent -->
				<div class="searchContent searchContentMedia">
		<?php if( $newsCnt > 0 ){?>
					<!-- supportList -->
					<div class="supportList">
						<ul>
				<?php
				for( $i = 0; $i < count($newslist); $i++ ){
				?>
							<li>
								<a href="<?=$host_url?>/support/news?seq=<?=$newslist[$i]['seq']?>&url=<?=urlencode(REQUEST_URI)?>">
									<span class="noticeBg" style="background-image:url(<?=$newslist[$i]['fileImage_url']?>)"></span>
									<span class="noticeText">
										<span class="noticeTit"><?=stripslashes($newslist[$i]['title'])?></span>
										<span class="noticeDate"><?=str_replace('-','.',$newslist[$i]['newsDt'])?></span>
										<span class="moreBtn icoMotion">MORE <i class="ico ico-arrow"></i></span>
									</span>
								</a>
							</li>
				<?php
						unset($Info);
						unset($ls);
					}//$i for end --//
				?>
						</ul>
					</div>
		<?php }else{?>
					<div class="noResult">Não há resultados a serem mostrados.</div>
		<?php }?>
				</div>
				<!--//searchContent -->

<?php }else if( $tab == 'contact' ){//contact----------------------->?>

				<!-- searchTab02Wrap -->
				<div class="searchTab02Wrap">
					<div class="swiper-container searchTab02">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv1','')" <?=($stv1=='')?'checked':''?> />
									<span>All</span>
								</label>
							</div>
			<?php for( $i = 0; $i < count($tabList); $i++ ){?>
							<div class="swiper-slide">
								<label class="checkBtn">
									<input type="checkbox" onclick="fm_search('stv1',<?=($i+1)?>)" <?=($stv1==($i+1))?'checked':''?> />
									<span><?=stripslashes($tabList[$i]['code_name'])?></span>
								</label>
							</div>
			<?php }?>
						</div>
					</div>
				</div>
				<!--//searchTab02Wrap -->

				<!-- searchContent -->
				<div class="searchContent">
	<?php
	if( $contactCnt > 0 ){
		for( $i = 0; $i < count($tabList); $i++ ){
			$Info = $tabList[$i];
			$ls = $tabList[$i]['contactList'];
			if( count($ls) > 0 ){
	?>
					<!-- searchContentTable -->
					<div class="searchContentTable searchContentLocation">
						<h5 class="titStyle5"><?=($Info['code_name'])?></h5>
						<div class="tableStyle1">
							<!-- tableHeader -->
							<div class="tableHeader">
								<table class="tc">
								<colgroup>
									<col width="25%">
									<col width="45%">
									<col width="25%">
								</colgroup>
								<thead>
								<tr>
									<th>Escritório/Nome da fábrica</th>
									<th>Endereço</th>
									<th>Contato</th>
								</tr>
								</thead>
								</table>
							</div>
							<!--//tableHeader -->

							<ul class="tableList">
					<?php for( $x = 0; $x < count($ls); $x++ ){?>
								<li>
									<div>
										<span class="mTit"></span>
										<?=($ls[$x]['officeType']=='domestic')?$ls[$x]['area']:$ls[$x]['category']?>.<?=stripslashes($ls[$x]['officeName'])?>
									</div>
									<div>
										<span class="mTit"></span>
										<a href="<?=$host_url?>/support/contactUs?tab=<?=$ls[$x]['tab']?>&seq=<?=$ls[$x]['seq']?>&url=<?=urlencode(REQUEST_URI)?>">
											<b><?=stripslashes($ls[$x]['address'])?></b>
										</a>
									</div>
									<div><span class="mTit"></span><?=stripslashes($ls[$x]['tell'])?></div>
								</li>
					<?php }?>
							</ul>
						</div>
					</div>
					<!--//searchContentTable -->
	<?php
			}
			unset($Info);
			unset($ls);
		}//$i for end--//
	}else{
	?>
					<div class="searchContent searchContentLocation">
						<div class="noResult">Não há resultados a serem mostrados.</div>
					</div>
	<?php }?>
				</div>
				<!--//searchContent -->

<?php }else if( $tab == 'download' ){//download----------------------->?>

				<!-- searchContent -->
				<div class="searchContent">
	<?php
	if( $downloadCnt > 0 ){
	?>
					<ul class="tableList">
		<?php for( $i = 0; $i < count($download); $i++ ){?>
						<li>
							<div><span class="mTit"></span><?=$download[$i]['no']?></div>
							<div><span class="mTit"></span><?=stripslashes($download[$i]['tab'])?></div>
							<div><span class="mTit"></span><b><?=stripslashes($download[$i]['title1'])?></b></div>
			<?php if( !$download[$i]['bwts'] ){?>
				<?php if( $download[$i]['tab'] == 'Approval Status / Product Catalog' ){?>
							<div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileApproval_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">Approval Status <i class="ico ico-downloadBlue"></i></a></div>
							<div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileProduct_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">Product Catalog <i class="ico ico-downloadBlue"></i></a></div>
				<?php }else if( $download[$i]['tab'] == '브로셔' ){?>
							<div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileBrochures_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a></div>
				<?php }else if( $download[$i]['tab'] == 'MSDS & TTR' ){?>
							<div><span class="mTit">AWS</span><?=stripslashes($download[$i]['aws'])?></div>
							<div><span class="mTit">JIS</span><?=stripslashes($download[$i]['jis'])?></div>
							<div><span class="mTit">EN</span><?=stripslashes($download[$i]['en'])?></div>
							<div><span class="mTit"></span>
								<?php if( $download[$i]['fileCatalo'] ){?><a href="<?=stripslashes($download[$i]['fileCatalo_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray"><span>CATALOG</span> <i class="ico ico-downloadBlue"></i></a><?php }?>
							</div>
							<div><span class="mTit"></span>
								<?php if( $download[$i]['fileMsds1'] ){?><a href="<?=stripslashes($download[$i]['fileMsds1_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray"><span>MSDS</span> <i class="ico ico-downloadBlue"></i></a><?php }?>
							</div>
							<div><span class="mTit"></span>
								<?php if( $download[$i]['fileTtr'] ){?><a href="<?=stripslashes($download[$i]['fileTtr_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray"><span>TTR</span> <i class="ico ico-downloadBlue"></i></a><?php }?>
							</div>
				<?php }else if( $download[$i]['tab'] == '인증현황' ){?>
							<div><span class="mTit">규격</span><?=stripslashes($download[$i]['classification'])?></div>
							<div><span class="mTit">비고</span><?=stripslashes($download[$i]['content'])?></div>
							<div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileCertification_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a></div>
				<?php }?>
			<?php }else{?>
							<div><span class="mTit"></span><a href="<?=stripslashes($download[$i]['fileExcel_url'])?>" target="_blank" class="downloadBtn btn btn-round btnLineGray">DOWNLOAD <i class="ico ico-downloadBlue"></i></a></div>
			<?php }?>
						</li>
		<?php }?>
					</ul>
	<?php
	}else{
	?>
					<div class="searchContent searchContentLocation">
						<div class="noResult">Não há resultados a serem mostrados.</div>
					</div>
	<?php }?>

				</div>
				<!--//searchContent -->

<?php }?>


			</div>
		</div>
	</div>
	<!-- subWrap// -->


<script type="text/javascript">
	var swiper = new Swiper('.searchTab01', {
		slidesPerView: 'auto',
		spaceBetween: 0,
	});

	var swiper = new Swiper('.searchTab02', {
		slidesPerView: 'auto',
		spaceBetween: 0,
	});

	<c:if test="${searchVO.condition eq 'recruit'}">
	var swiper = new Swiper('.searchTab03', {
	slidesPerView: 'auto',
	spaceBetween: 0,
	});

	var swiper = new Swiper('.searchTab04', {
	slidesPerView: 'auto',
	spaceBetween: 0,
	});
	</c:if>

	$('.globalList li').click(function() {
		$(this).addClass('on');
		$(this).siblings('li').removeClass('on');
	});
</script>