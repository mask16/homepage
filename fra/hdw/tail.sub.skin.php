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
				<li><a href="/<?=$schar?>/hdg/index">Hyundai Gloville</a></li>
				<li><a href="/<?=$schar?>/hds/index">Hyundai Superteck</a></li>
				<li><a href="/<?=$schar?>/hdp/index">Hyundai PNS</a></li>
			</ul>
		</div>
	</div>

	<div class="ft-body">
		<ul>
			<li><a href="<?=$host_url?>/about/hwbc">Accueil</a></li>
			<li><a href="https://products.hyundaiwelding.com">Nos activités</a></li>
			<li><a href="<?=$host_url?>/sus/ethicsAbout">Gestion de la durabilité</a></li>
			<li><a href="<?=$host_url?>/support/contactUs">Service client</a></li>
			<li><a href="<?=$host_url?>/recruit/rule">Carrières</a></li>
		</ul>
	</div>
	<div class="ftFt">
		<div class="ftAdWrap">
			<p class="ftAd">16F WeWork BLDG, 507<br>Teheran-ro, Gangnam-gu, Seoul, Korea</p>
			<p>Tel +82-2-6230-6042</p>
			<p>Fax +82-2-525-7317</p>
		</div>
		<div class="ftFtRight">
			<div class="ftLink">
				<!--<a href="<?=$host_url?>/legal">Legal Notice</a>
				<a href="<?=$host_url?>/privacyProcessing">Privacy Policy</a>
				<a href="<?=$host_url?>/privacyHandling">Privacy Statement</a>-->
				<a href="<?=$host_url?>/sitemap">Sitemap</a>
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