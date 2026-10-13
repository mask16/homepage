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
			<p>HYUNDAI GLOVILLE</p>
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
          <h3 class="titStyle5">
			<b>
				Sinceramente, damos as boas-vindas ao site da Hyundai Gloville.
			</b>
		</h3>
        </div>
        <div class="text-style1">
          Nossa empresa continua a desafiar e inovar tudo o que conectamos com a missão de maximizar o valor do cliente, melhorando a eficiência logística e facilidade de manutenção.
		  <br /><br />
         Hoje, nossos executivos e colaboradores investem e fazem o possível para proporcionar a melhor satisfação aos clientes, sugerindo soluções logísticas customizadas para fazer frente às mudanças da 4ª Revolução Industrial.
		  <br /><br />
          A declaração de missão de nossa empresa é "implementar nossas capacidades de desempenho de gerenciamento e criar novos valores para que nossos clientes e funcionários relacionados a negócios possam buscar a co-prosperidade, realizar sua imaginação criativa com paixão e se tornar a melhor empresa."
		  <br /><br />
          Os desafios para aumentar o valor do cliente continuarão. Pedimos seu interesse e incentivo.
		  <br /><br />
          Obrigado.

          <p class="tar ceoName">CEO <span>Dae Hoan Oh</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->