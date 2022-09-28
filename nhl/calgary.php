<?php

require_once "../BDD.php";
use YR72dpi\BDD;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calgary Flames - Algorithme de prédiction - LCREBT - LCRBET.fr</title>
    <link rel="stylesheet" href="../css/navbar-sf.css">
    <link rel="stylesheet" href="css-nhl/admin-algo.css">
    <link rel="stylesheet" href="css-nhl/algo-team.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../img/logo_white.png"></title>
</head>
  <header>
    <nav class="navbar" role="navigation">
        <div class="nav-logo">
            <a href="../index.html"><img class="logo" src="/img/logo_white.png" alt="Logo LCRBET"></a>
        </div>           
        <ul class="navbar-links">
            <li class="navbar-link first lien nav-active"><a href="../ps.html" >Paris sportif</a></li>
            <li class="navbar-link second lien"><a href="../algo.html" class="nav-active">Algorithme de prédiction</a></li>
            <li class="navbar-link fourth lien"><a href="../cdm.html">Coupe du monde</a></li>
            <li class="navbar-link fourth lien"><a href="../casino.html">Casino</a></li>
            <li class="navbar-link fifth lien"><a href="../contact.php"></i>Contact</a></li>
        </ul>

        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>        
</header>
<body>

    <h1 class="h1-algo"> Prédiction<br> Calgary Flames</h1>
    <img src="img-nhl/calgary.png" alt="" class="img-ny">
    <p class="txt-hero-algo">blablacla</p>


    <div class="admin-algo">
    <div class="top-algo">
        <img src="img-nhl/calgary.png" alt="" class="img-ny">
        <h2 class="name-match">Calgary - Colorado <br> timer</h2>
        <img src="img-nhl/calgary.png" alt="" class="img-ny">
    </div>
    <div class="res-general">
        <h2 class="titre-general">Prédiction Général</h2>
        <div class="res-general2">
        <h2 class="titre-predi">Nombre de but</h2>
        <h2 class="titre-predi">Vainqueur</h2>
        <h2 class="titre-predi">Prolongation</h2>
    </div>

    <?php

        $db = BDD::connect();

        $id = 2;
        $req = $db->query('SELECT * FROM calgary_flames WHERE id = '.$id);

    ?>

    <div class="res-general2">
        <div class="res-on">
            <p class="predi-txt"><?= $req->fetch(PDO::FETCH_ASSOC)["Moyenne_but_total"] ?></p>
        </div>
        <div class="res-on-modif2">
            <p class="predi-txt"><?= $req->fetch(PDO::FETCH_ASSOC)["Vainqueur"] ?></p>
        </div>
        <div class="res-on">
            <p class="predi-txt"><?= $req->fetch(PDO::FETCH_ASSOC)["Prolongation"] ?></p>
        </div>
    </div>
    <div class="res-general2">
        <h2 class="titre-predi">Nombre de but Calgary</h2>
        <h2 class="titre-predi">Nombre de but Colorado</h2>
    </div>
    <div class="res-general2">
        <div class="res-on-modif">
            <p class="predi-txt"><?= $req->fetch(PDO::FETCH_ASSOC)["Moyenne_but_Calgary"] ?></p>
        </div>
        <div class="res-on-modif">
            <p class="predi-txt">4,6</p>
        </div>
    </div>

    </div>
    <div class="res-1mt">
        <div class="col-1mt1">
            <h2 class="titre-general">1ère mi-temps</h2>
            <h2 class="titre-predi">Nombre de but</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Nombre de but Calgary</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Nombre de but Colorado</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Vainqueur</h2>
            <p class="predi-mt">4,6</p>
        </div>
        <div class="col-1mt2">
            <h2 class="titre-general">2ème mi-temps</h2>
            <h2 class="titre-predi">Nombre de but</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Nombre de but Calgary</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Nombre de but Colorado</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Vainqueur</h2>
            <p class="predi-mt">4,6</p>
        </div>
        <div class="col-1mt3">
            <h2 class="titre-general">3ème mi-temps</h2>
            <h2 class="titre-predi">Nombre de but</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Nombre de but Calgary</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Nombre de but Colorado</h2>
            <p class="predi-mt">4,6</p>
            <h2 class="titre-predi">Vainqueur</h2>
            <p class="predi-mt">4,6</p>
        </div>
    </div>
    </div>


    


    <script src="../js/navbar.js"></script>
</body>
</html>