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
        <p>HYUNDAI GLOVILLE</p>
		<h3>BUSINESS</h3>
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
				<h1>3PL Logistics</h1>
				<a class="his" href="<?=$host_url?>/product/logistics">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" />Logistics Main
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Why Hyundai Gloville?</h1>
					<p class="conBox-txt">
							Custom services per customer needs are properly provided by managing self operated<br>or entrusted warehouse B2B and B2C systems professionally
					</p>
					
					<hr class="line" />

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img01.png" />
						<img src="<?=$skin_url?>/img/content/logistics3PL_img02.png" />
					</div>	

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
				<ul class="conBox-menu2w">
					<li class="on" t="1">Logistics consulting</li>
				</ul>
				<hr class="both" />
					<h2 class="conBox-sub-title">Examine and improve logistics, design the ideal process from the moment of constructing the warehouse with customers needs to the final destination of delivery.</h2>


				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">Logistics outsourcing</li>
				</ul>
				<hr class="both" />
		
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• Logistics subcontract<br>• Outsourcing</h2>
					<p class="conBox-txt">
						Properly manage as an logistics agent by having professional workers
					</p>

				<!--//conBox-in-2 -->

				<!-- conBox-in-3 -->
				<div class="conBox-in conBox-in-3" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">3PL Distribution agency</li>
				</ul>
				<hr class="both" />			
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• Fulfillment<br>• Store/ Delivery</h2>
					<p class="conBox-txt">
						Provide expert logistics services such as cosign managed centers, delivery, distribution, fabrication, etc.
					</p>
				</div>
				<!--//conBox-in-3 -->
				<hr class="line" />

					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img03.png" />
						<h2 class="conBox-sub-title5">1. In stock</h2>
						<p class="conBox-txt3">
						• Examination (Random or entire)<br>
						• Product review (Random or entire)
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img04.png" />
						<h2 class="conBox-sub-title5">2. Store</h2>
						<p class="conBox-txt3">• Assign warehouse<br>
						• Assign location and rack #<br>
						• Check the live inventory<br>
						• 24hr security guard
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img05.png" />
						<h2 class="conBox-sub-title5">3. Manage Orders</h2>
						<p class="conBox-txt3">• Customers PO<br>
						• Issue invoice<br>
						• Print peaking list<br>
						• Certificate receipt
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img06.png" />
						<h2 class="conBox-sub-title5">4. Peaking</h2>
						<p class="conBox-txt3">• Sorting per transportation<br>
						• Computing input<br>
						• Wrong-Peaking ZERO system
						</p>
					</div>
					
					<hr class="both" />

					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img07.png" />
						<h2 class="conBox-sub-title5">5. Wrapping / Packing</h2>
						<p class="conBox-txt3" style="padding:0 18px;">
						<span style="margin:0 3px 0 -18px;">•  </span>Examine items<br>
						<span style="margin:0 3px 0 -18px;">•  </span>Automatic wrapping system<br>
						<span style="margin:0 3px 0 -18px;">•  </span>Wrapping for item protection<br>
						<span style="margin:0 3px 0 -18px;">•  </span>Record the wrapping work via CCTV
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img08.png" />
						<h2 class="conBox-sub-title5">6. Release</h2>
						<p class="conBox-txt3">• Attach invoice<br>
						• Loading package to cargos/trucks<br>
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img09.png" />
						<h2 class="conBox-sub-title5">7. Transport</h2>
						<p class="conBox-txt3" style="padding:0 18px;">
						<span style="margin:0 3px 0 -18px;">•  </span>Package delivery<br>
						<span style="margin:0 3px 0 -5px;">  </span>(Lotte/CJ logistics corp. /Hanjin)<br>
						</p>
					</div>
					<div class="conBox-in-left2">
						<img src="<?=$skin_url?>/img/content/logistics3PL_img10.png" />
						<h2 class="conBox-sub-title5">8. Returns / Inventory<br>management</span></h2>
						<p class="conBox-txt3">• Live inventory management<br>
						• Quality Management<br>
						• Sorting / Managing returns<br>
						• WMS computing
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