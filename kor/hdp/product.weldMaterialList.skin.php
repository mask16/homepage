<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.weldMaterialList.skin.php
+ Description	: product.weldMaterialList
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<script type="text/javaScript">
	$(document).ready(function() { 
		$('.productWeldList a').on('click', function() {
			$('#detailForm input[name="pSeq"]').val($(this).find('input[name="seq"]').val());
			$('#detailForm input[name="category"]').val($(this).find('input[name="category"]').val());
			$('#detailForm').submit();
		});
	});
</script>

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
		<section class="ProductWrap ProductWeld">
			<div class="conPd titStyle5 innerWrap"><b>
				현대피엔에스는 최고 품질의 용접재료와 용접장비의
				<span>공급을 통해 고객에게 최적의 용접 솔루션을 제공하는</span>
				세계적인 용접 전문 기업입니다.</b>
			</div>

			<div class="innerWrap">
				<ul class="productWeldList">
<?php for( $i = 0; $i < count($category_list); $i++ ){?>
					<li class="weldImage">
						<a href="<?=$host_url?>/product/weldMaterialDetail?cate=<?=$category_list[$i]['mc_no']?>" style="cursor: pointer; background-image: url('<?=stripslashes($category_list[$i]['mc_file_url'])?>');">
						<span class="titKor"><?=stripslashes($category_list[$i]['mc_name'])?></span>
						<span class="titEng"><?=stripslashes($category_list[$i]['mc_name_en'])?></span>
						</a>
					</li>
<?php }?>
				</ul>
			</div>
		</section>
	</div>