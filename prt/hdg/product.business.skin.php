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
		<h3>Introdução de Negócios</h3>
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
						A principal área de negócios da Hyundai Gloville é a importação e exportação de frete e serviço de transporte terrestre. Além desses serviços, também fornecemos serviços de logística, como armazenamento de carga, embalagem para exportação, condução de negócios em aeroportos, transporte de carga especial e muito mais.
					</b>
				</h5>

				<div class="businessGlovilleWrap brdr-b">
					<div>
						<h6 class="titStyle3">
							<b>
								Frete de importação e exportação e serviço de transporte interno
							</b>
						</h6>
						<p class="text-blit">
							AR, OCEANO importação e exportação LCL / FCL transporte de carga
						</p>
						<p class="text-blit">
							Transporte de carga nacional (logística empresarial)
						</p>
						<p class="text-blit">
							Transporte de cargas especiais: grandes fábricas, câmaras frigoríficas, artigos de exposição
						</p>
						<p class="text-blit">
							Carga de projeto
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
								3PL / Armazenamento em Armazém
							</b>
						</h6>
						<p class="text-blit">
							Gestão de estoque, gestão de armazenamento, transporte, inspeção, embalagem, etc.
						</p>
						<p class="text-blit">
							Serviços de armazenamento em armazém para os principais centros de distribuição em todo o país
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
								Indústria aeroportuária / portuária
							</b>
						</h6>
						<p class="text-blit">
							Transporte de translado para o aeroporto / transporte ULD
						</p>
						<p class="text-blit">
							Gerenciamento de armazenamento, recebimento e encaminhamento de armazém
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
								Embalagem de frete de exportação
							</b>
						</h6>
						<p class="text-blit">
							Equipamentos de embalagem e ambiente de trabalho atualizados (embalagens herméticas,SKID, embalagem a vácuo, etc)
						</p>
						<p class="text-blit">
							Reduzindo os custos de logística dos clientes com integração do sistema de embalagem para transporte
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