<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail2.skin.php
+ Description	: sus.unethicalResultDetail2.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI PNS</p>
        <h3>Gestion de la durabilité</h3>
      </div>
    </div>
  </section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">Retour de réclamation</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>Harcèlement au travail</b></h5>
            <p class="bar-text">Deliberately using superiority or authority to inflict physical or mental pain to other employees, or worsening ambience of the office through violence or abusive language.</p>
            <p class="bar-text">Disciplinary actions, such as dismissal, may be considered based on the severity of the case.</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) Harcèlement au travail</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Soumis à un rapport sur les violations de la gestion éthique</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Actes de violence physique entre salariés</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>L'acte d'infliger un choc mental par un langage abusif habituel, un langage abusif ou une voix forte</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Harceler ou intimider délibérément les autres</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Des actions telles que la calomnie infondée, la propagation de rumeurs, la critique de son apparence et l'interférence excessive avec la vie privée</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Diriger ou exclure un travail qui est loin de la compétence ou de l'expérience sans motif raisonnable</p></div>

                  </li>
                </ul>
              </div>
            </div>


            <div class="unethicalTargetDetailCon">
              <p><b>2)Respect mutuel</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Soumis à un rapport sur les violations de la gestion éthique</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Actions qui n'ont pas de courtoisie mutuelle entre les employés</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Discrimination fondée sur le sexe, l'éducation, l'origine ethnique, le mariage, la nationalité, la religion, etc.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Créer une faction par le biais d'une réunion informelle ou favoriser la discorde pour gagner un intérêt privé</p></div>

                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
