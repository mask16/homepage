<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI PNS</p>
			<h3>Introdução da Empresa</h3>
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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>Sinceramente, damos as boas-vindas ao site da Hyundai PNS.</b></h3>
        </div>
        <div class="text-style1">
			Hyundai PNS foi estabelecida em 20 de março de 2020 ao se dividir em Hyundai Welding Co., Ltd. para aumentar a eficiência de gerenciamento ao fortalecer ainda mais a experiência do negócio de equipamentos de soldagem e preparar uma base tecnológica para responder rapidamente às mudanças rápidas do mercado.
			<br><br>
			Hyundai PNS produziu máquinas de solda digital SCR em 2007 e máquinas de solda digital inversor em 2013 por meio de pesquisa e desenvolvimento contínuos por 25 anos desde o estabelecimento da divisão de máquinas de solda em 1995. Em 2019, desenvolvemos a série Hi, uma máquina de solda premium, e distribuída para todas as principais áreas de negócios, incluindo construção naval e fábrica.
			<br><br>
			Além disso, estamos assumindo a liderança no desenvolvimento e localização de novas tecnologias por meio da cooperação com os melhores institutos de pesquisa em cada campo para garantir a melhor tecnologia do mundo. Estamos sempre operando um Centro de P&D para fornecer equipamentos de soldagem otimizados para as necessidades das instalações industriais e nos esforçando para desenvolver produtos que atendam às necessidades dos clientes.
			<br><br>
			Hyundai PNS continuará a colocar a satisfação do cliente como nossa principal prioridade. Faremos sempre o nosso melhor para nos tornarmos uma empresa que valoriza e realiza sonhos maiores com os nossos clientes, com foco na gestão orientada para o cliente e com espírito de desafio para o futuro.
			<br><br>
			Agradecemos sinceramente aos nossos clientes e aguardamos o seu interesse e apoio.
          <!-- <p class="tar ceoName">CEO <span>Byungmook Bae</span></p> -->

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->