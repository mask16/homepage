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
		<h3>Negocio</h3>
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
						El principal campo de actividad de Hyundai Gloville es el transporte de mercancías de importación y exportación y el servicio de transporte interior. Además de esos servicios, también brindamos servicios de logística como almacenamiento de carga, empaque de exportación, realización de negocios en el aeropuerto, transporte de carga especial y muchos más.
					</b>
				</h5>

				<div class="businessGlovilleWrap brdr-b">
					<div>
						<h6 class="titStyle3">
							<b>
								Servicio de Carga de Importación y Exportación y Transporte Terrestre
							</b>
						</h6>
						<p class="text-blit">
							AÉREO, OCÉANO importación y exportación transporte de carga LCL / FCL
						</p>
						<p class="text-blit">
							Transporte de carga nacional (logística empresarial)
						</p>
						<p class="text-blit">
							Transporte de carga especial: grandes plantas, refrigeración, artículos de exposición.
						</p>
						<p class="text-blit">
							Carga de proyecto
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
								3PL / Almacenamiento
							</b>
						</h6>
						<p class="text-blit">
							Gestión de inventario, gestión de almacenamiento, transporte, inspección, embalaje, etc.
						</p>
						<p class="text-blit">
							Servicios de almacenamiento en bodegas para los principales centros de distribución a nivel nacional
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
								Industria Aeroportuaria / Portuaria
							</b>
						</h6>
						<p class="text-blit">
							Transporte de enlace al aeropuerto, transporte ULD
						</p>
						<p class="text-blit">
							Almacenamiento en almacén, gestión de entrada y salida y otras agencias comerciales
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
								Embalaje de Carga de Exportación
							</b>
						</h6>
						<p class="text-blit">
							Los últimos equipos de envasado y el mejor entorno de trabajo (envasado cerrado, SKID, envasado al vacío, etc.)
						</p>
						<p class="text-blit">
							Reducción de costos de logística del cliente mediante la vinculación de embalaje y transporte
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