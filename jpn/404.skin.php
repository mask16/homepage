<?php
/***************************************************************
+ Page Name		: /_admin/404.php
+ Description	: ADMIN > 404 NOT FOUND
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>404 NOT FOUND!</title>
	<link rel="stylesheet" type="text/css" href="<?=G5_URL?>/css/default.css?ver=<?=G5_VER?>" />
	<link rel="stylesheet" type="text/css" href="<?=G5_URL?>/css/skin.error.css?ver=<?=G5_VER?>" />
	<link rel="stylesheet" href="<?=G5_JS_URL?>/font-awesome/css/font-awesome.min.css" />

	<script src="<?=G5_JS_URL?>/jquery-2.2.4.min.js?ver=<?=G5_VER?>"></script>
	<script src="<?=G5_URL?>/js/common.js?ver=<?=G5_VER?>"></script>
</head>
<body>

<style>
	.txt_wrap {width:100%;height:100vh;display:flex;align-items:center;justify-content:center;}
	.title_wrap {margin-bottom:50px;}
	.title {position:relative;text-align:center;width:400px;height:0;padding-bottom:400px;background:#f6f8fd;border-radius:100%;}
	h1 {position:absolute;top:50%;left:50%;border-radius:100%;font-size:140px;line-height:1;color:#151d86;
		-webkit-transform:translate(-50%,-50%);
		-ms-transform:translate(-50%,-50%);
		transform:translate(-50%,-50%);
	}
	h1 span {font-size:18px;display:block;color:#000;}
	.tx {color:#333;font-size:14px;margin-left:50px;}
	.tx a {display:inline-block;font-size:16px;margin-top:30px;padding:5px 30px;background:#151d86;color:#fff;border-radius:100px;}

	@media only all and (max-width:900px) {
		.wrap {position:relative;}
		.txt_wrap {position:absolute;top:50%;left:50%;width:90%;height:auto;display:block;text-align:center;
			transform:translate(-50%,-50%);
		}
		.title_wrap {margin-bottom:30px;}
		.title {margin:0 auto;width:300px;padding-bottom:300px;}
		h1 {font-size:100px;}
		.tx {margin-left:0;}
	}
	@media only all and (max-width:480px) {
		.title {width:200px;padding-bottom:200px;}
		h1 {font-size:70px;}
		h1 span {font-size:14px;}
		.tx .pc_v {display:none;}
		.tx {text-align:left;}
		.tx a {display:block;text-align:center;}
	}
</style>

<!-- wrap -->
<div id="wrap">
	<div class="txt_wrap">
		<div class="title_wrap">
			<div class="title">
				<h1>
					404
					<span>Page Not Found</span>
				</h1>
			</div>
		</div>
		<div class="tx">
			<p style="width:100%;">
			방문하시려는 페이지의 주소가 잘못 입력되었거나,<br class="pc_v">
			내부 오류가 있어 정상적인 페이지를 표시할 수 없습니다.<br class="pc_v">
			불편을 드려 죄송합니다.
			<br><br>
			입력하신 주소가 정확한지 다시 한 번 확인해 주시기 바랍니다.<br class="pc_v">
			지속적인 에러 발생시, 고객센터로 신고주시면 빠르게 조치하겠습니다.
			</p>
			<a href="<?=G5_URL?>">
				돌아가기 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>
<!--//wrap -->

</body>
</html>