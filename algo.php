<?php ob_start(); ?>

<section class="home-section">
   
<div class="algo-admin">
      <h3 class=titre>Algorithme de prédiction</h3>
      <p class=txt>Stastitiques sur la saison 2022/2023 pour chaque matchs ainsi que le classement buteur pour vous aidez dans vos pronostics </p>
      <p class="txt">Choississez votre championnat</p>

      <div class="algo">    
    <div class="col-acc">
<a href="nhl.php"><img src="img/nhl/logo-nhl.png" alt="" class=img-col-acc></a>
</div>   
  
</div>
</div>



</section>


<?php $content = ob_get_clean(); require_once("./template/template.php");

