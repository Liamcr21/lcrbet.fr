<?php ob_start(); ?>



<section class="back-algo">
<h1 class="titre-algo-principal"> Algorithme de prédiction</h1>
    <p class="sous-titre-algo">Choississez votre championnat</p>

    <div class="select-champ">
        <img src="img/logo-nhl.png" class="img-algo" alt="" >
        <img src="img/ligue1.png" class="img/algo" alt="">
        <img src="img/premierleague.png" class="img-alo" alt="">
        <img src="img/bundes.png" class="img-algo" alt="">
        <img src="img/liga.png" class="img-algo" alt="">
    </div>


    <h2 class="sous-titre-algo">En savoir plus sur l'algorithme</h2>
    <p class="txt-algo">L’algorithme se base sur les derniers résultats des deux équipes qui s’affronte et prend aussi en compte les derniers matchs pour analyser la forme de ces équipes<br>
     L’algorithme est 100% gratuit</p>

     </section>
     
     

<?php $content = ob_get_clean(); require_once("./template/template.php");

