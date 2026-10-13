<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/head.sub.skin.php
+ Description	: tail.sub.skin
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<div class="top-btn">top</div>
<footer>
<div class="innerWrap">
	<div class="ft">
		<h1 class="ft-logo"></h1>
		<div class="ftSelect">
			<p><i class="ico-family"></i>Family site</p>
			<ul>
				<li><a href="/<?=$schar?>/hdw/index">Hyundai Welding</a></li>
				<li><a href="/<?=$schar?>/hdg/index">Hyundai Gloville</a></li>
				<li><a href="/<?=$schar?>/hds/index">Hyundai Superteck</a></li>
			</ul>
		</div>
	</div>

	<div class="ft-body">
		<ul>
			<li><a href="<?=$host_url?>/about/hwbc">기업소개</a></li>
			<li><a href="<?=$host_url?>/product/weldMaterialList">사업소개</a></li>
			<li><a href="<?=$host_url?>/sus/ethicsAbout">지속가능경영</a></li>
			<li><a href="<?=$host_url?>/recruit/rule">채용정보</a></li>
			<li><a href="<?=$host_url?>/support/contactUs">고객지원</a></li>
		</ul>
	</div>
	<div class="ftFt">
		<div class="ftAdWrap">
			<p class="ftAd">경북 포항시 북구<br/>영일만산단로 88번길 99</p>
			<p>Tel +82-54-260-0664, 0676</p>
			<p>Fax +82-54-260-0599, 0598</p>
		</div>
		<div class="ftFtRight">
			<div class="ftLink">
				<a href="<?=$host_url?>/legal">법적고지</a>
				<a href="<?=$host_url?>/privacyProcessing">개인정보처리방침</a>
				<a href="<?=$host_url?>/privacyHandling">개인정보취급방침</a>
				<a href="<?=$host_url?>/sitemap">사이트맵</a>
			</div>
			<p class="copyright">COPYRIGHT© 2013 HYUNDAI WELDING CO., LTD. ALL RIGHTS RESERVED.</p>
		</div>
	</div>
</div>
</footer>

<?php run_event('tail_sub'); ?>

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>