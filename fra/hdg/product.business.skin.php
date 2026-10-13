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
		<h3>Nos activités</h3>
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
						Le principal domaine d'activité de Hyundai Gloville est le fret d'importation et d'exportation et le service de transport intérieur. En plus de ces services, nous fournissons également des services logistiques tels que stockage, l'emballage pour l'exportation, affaires aéroportuaires, transport de marchandises spéciales etc.
					</b>
				</h5>

				<div class="businessGlovilleWrap brdr-b">
					<div>
						<h6 class="titStyle3">
							<b>
								Service de fret import et export / Transport intérieur
							</b>
						</h6>
						<p class="text-blit">
							Transport de fret LCL / FCL (aerien, maritime)
						</p>
						<p class="text-blit">
							Transport domestique de marchandises (logistique d'entreprise)
						</p>
						<p class="text-blit">
							Transport de marchandises spéciales: grandes usines de fabrication, stockage froides, articles d'exposition
						</p>
						<p class="text-blit">
							Projet cargo
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
								3PL / Entrepôt de stockage
							</b>
						</h6>
						<p class="text-blit">
							Gestion des stocks, gestion du stockage, transport, inspection, emballage, etc.
						</p>
						<p class="text-blit">
							Services de Stockage pour l'entrepôt pour les principaux centres de distribution du pays
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
								Industrie aéroportuaire / portuaire
							</b>
						</h6>
						<p class="text-blit">
							Navette Aéroport / transport ULD
						</p>
						<p class="text-blit">
							Gestion des entrepôts (stockage, contrôle des entrées et sorties, redirections)
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
								Emballage d'exportation
							</b>
						</h6>
						<p class="text-blit">
							Équipement d'emballage et environnement de travail à jour (emballage hermétiquement fermé, SKID, emballage sous vide, etc.) 
						</p>
						<p class="text-blit">
							Réduire les coûts logistiques des clients grâce à l'intégration du système de l'emballage au transport
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