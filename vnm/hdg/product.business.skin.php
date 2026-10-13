<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
	<div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
		<h3>giới thiệu kinh doanh</h3>
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
		<section class="businessGloville innerWrap">
			<div class="conPd">
				<h5 class="titStyle5">
					<b>
						Lĩnh vực kinh doanh chính là hàng hóa xuất nhập khẩu và dịch vụ vận tải nội địa, ngoài ra chúng tôi còn cung cấp các dịch vụ logistics như lưu giữ hàng hóa, đóng gói hàng hóa xuất khẩu, đại lý kinh doanh sân bay, vận chuyển hàng hóa đặc biệt.
					</b>
				</h5>

				<div class="businessGlovilleWrap brdr-b">
					<div>
						<h6 class="titStyle3">
							<b>
								Xuất nhập khẩu / vận chuyển hàng hóa nội địa
							</b>
						</h6>
						<p class="text-blit">
							AIR / OCEAN xuất nhập khẩu vận chuyển hàng hóa LCL FCL
						</p>
						<p class="text-blit">
							Vận chuyển hàng hóa nội địa trong nước (doanh nghiệp logistics )
						</p>
						<p class="text-blit">
							Vận chuyển hàng đặc biệt: nhà máy lớn, hàng điện lạnh, hàng trưng bày
						</p>
						<p class="text-blit">
							dự án Vận chuyển hàng hóa 
						</p>
					</div>
					<div>
						<div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>
					</div>
				</div>

				<div class="businessGlovilleWrap">
					<div>
						<h6 class="titStyle3">
							<b>
								3PL / Kho lưu trữ
							</b>
						</h6>
						<p class="text-blit">
							Quản lý hàng tồn kho, quản lý kho hàng, vận chuyển, kiểm tra, đóng gói, v.v.
						</p>
						<p class="text-blit">
							Dịch vụ lưu kho tại các trung tâm phân phối lớn trên toàn quốc
						</p>
					</div>
					<div>
						<div>
							<img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" />
						</div>
					</div>
				</div>

				<div class="businessGlovilleWrap">
					<div>
						<h6 class="titStyle3">
							<b>
								Kinh doanh sân bay / cảng
							</b>
						</h6>
						<p class="text-blit">
							Đưa đón sân bay, vận chuyển ULD
						</p>
						<p class="text-blit">
							Lưu trữ kho, quản lý xuất nhập và các cơ quan kinh doanh khác
						</p>
					</div>
					<div>
						<div>
							<img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" />
						</div>
					</div>
				</div>

				<div class="businessGlovilleWrap">
					<div>
						<h6 class="titStyle3">
							<b>
								Đóng gói hàng hóa xuất khẩu
							</b>
						</h6>
						<p class="text-blit">
							Thiết bị đóng gói mới nhất và môi trường làm việc tốt nhất (đóng gói kín, SKID, đóng gói chân không, v.v.)
						</p>
						<p class="text-blit">
							Giảm chi phí hậu cần của khách hàng thông qua đóng gói> liên kết vận chuyển
						</p>
					</div>
					<div>
						<div>
							<img src="<?=$skin_url?>/img/content/business_Gloville04.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- subWrap// -->