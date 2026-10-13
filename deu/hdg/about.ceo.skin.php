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
			<h3>Unternehmensvorstellung</h3>
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
          <h3 class="titStyle5"><b>Wir heißen Sie herzlich auf der Hyundai Gloville-Website willkommen.</b></h3>
        </div>
        <div class="text-style1">
          Unser Unternehmen setzt seinen innovativen Kurs fort, um den Kundennutzen durch Verbesserung der Logistikeffizienz und Servicefreundlichkeit zu maximieren.
		  <br /><br />
          Unsere Führungskräfte und Mitarbeiter geben Ihr Bestes, um dem Kunden die bestmögliche Zufriedenheit zu bieten, indem sie maßgeschneiderte Logistiklösungen vorschlagen und somit den Veränderungen in der 4. industriellen Revolution gerecht zu werden.
		  <br /><br />
          Unser Unternehmensleitbild ist es, "unsere Management-Leistungsfähigkeiten zu implementieren und neue Werte zu schaffen, damit unsere Kunden und Mitarbeiter gemeinsam Wohlstand schaffen, ihre kreative Fantasie leidenschaftlich verwirklichen um das bestmöglichste Unternehmen werden".
		  <br /><br />
          Wir werden weiterhin neue Wachstumsmotoren platzieren und die Verantwortung für ein globales Logistikunternehmen übernehmen.
		  <br /><br />
          Die Herausforderungen zur Steigerung des Kundennutzens werden fortgesetzt. Wir bitten um Ihr Interesse und Ihre Ermutigung.
		  <br /><br />
          Danke.
          <p class="tar ceoName">CEO <span>Dae Hoan Oh</span></p>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->