<?php

require_once "../BDD.php";
use lcrbet\BDD;

$db = BDD::connect("../");

if (isset($_GET['id']) && !empty($_GET['id']) && preg_match("/^[0-9]{1,}$/i", $_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $req = $db->query('SELECT * FROM calgary_flames WHERE id = '.$id);
    
    if($data = $req->fetch(PDO::FETCH_ASSOC)) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calgary Flames - Algorithme de prédiction - LCREBT - LCRBET.fr</title>
    <link rel="stylesheet" href="../css/navbar-sf.css">
    <link rel="stylesheet" href="./css-nhl/admin-algo.css">
    <link rel="stylesheet" href="./css-nhl/algo-team.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../img/logo_white.png"></title>
</head>
  <header>
    <nav class="navbar" role="navigation">
        <div class="nav-logo">
            <a href="../"><img class="logo" src="../img/logo-nav.png" alt="Logo LCRBET"></a>
        </div>           
        <ul class="navbar-links">
            <li class="navbar-link first lien nav-active"><a href="../ps" >Paris sportif</a></li>
            <li class="navbar-link second lien"><a href="../algo" class="nav-active">Algorithme de prédiction</a></li>
            <li class="navbar-link fourth lien"><a href="../cdm">Coupe du monde</a></li>
            <li class="navbar-link fifth lien"><a href="../contact"></i>Contact</a></li>
        </ul>

        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>        
</header>
<body>

    <h1 class="h1-algo"> Prédiction<br> Calgary Flames</h1>
    <img src="img-nhl/calgary.png" alt="" class="img-ny">


    <div class="admin-algo">
    <div class="top-algo">
        <img src="img-nhl/calgary.png" alt="" class="img-ny">


        <h2 class="name-match"><?= $data["/"] ?> <br> timer</h2>


        <img src="img-nhl/calgary.png" alt="" class="img-ny">
    </div>
    <h2 class="titre-general">Prédiction Général</h2>
    <div class="res-general">
        <div class="res-general2">
        <h2 class="titre-predi titre-predi-top">Nombre de but</h2>
        <h2 class="titre-predi titre-predi-top">Vainqueur</h2>
        <h2 class="titre-predi titre-predi-top">Prolongation</h2>
    </div>

    <?php

       

    ?>

    <div class="res-general2">
        <div class="res-on">
            <p class="predi-txt"><?= $data["Moyenne_but_total"] ?></p>
        </div>
        <div class="res-on-modif2">
            <p class="predi-txt"><?= $data["Vainqueur"] ?></p>
        </div>
        <div class="res-on">
            <p class="predi-txt"><?= $data["Prolongation"] ?></p>
        </div>
    </div>
    <div class="res-general2">
        <h2 class="titre-predi">Nombre de but Calgary</h2>
        <h2 class="titre-predi">Nombre de but Colorado</h2>
    </div>
    <div class="res-general2">
        <div class="res-on-modif-">
            <p class="predi-txt"><?= $data["Moyenne_but_Calgary"] ?></p>
        </div>
        <div class="res-on-modif-2">
            <p class="predi-txt"><?= $data["Moyenne_but_adv"] ?></p>
        </div>
    </div>

    </div>
    <div class="titre-gen">
    <h2 class="titre-general">1ère mi-temps</h2>
    <h2 class="titre-general">2ème mi-temps</h2>
    <h2 class="titre-general">3ème mi-temps</h2>
</div>

    <div class="res-1mt">
        <div class="col-1mt1">
            <h2 class="titre-predi">Nombre de but</h2>
            <p class="predi-mt"><?= $data["Moyenne-total-1ere-MT"] ?></p>
            <h2 class="titre-predi">Nombre de but Calgary</h2>
            <p class="predi-mt"><?= $data["Moyenne_but_1ere_MT_Calgary"] ?></p>
            <h2 class="titre-predi">Nombre de but Colorado</h2>
            <p class="predi-mt"><?= $data["Moyenne_but_1ere_MT_adv"] ?></p>
            <h2 class="titre-predi">Vainqueur</h2>
            <p class="predi-mt"><?= $data["Vainqueur-1ere-MT"] ?></p>
        </div>
        <div class="col-1mt2">
            <h2 class="titre-predi">Nombre de but</h2>
            <p class="predi-mt"><?= $data["Moyenne-total-2eme-MT"] ?></p>
            <h2 class="titre-predi">Nombre de but Calgary</h2>
            <p class="predi-mt"><?= $data["Moyenne_but_2eme_MT_Calgary"] ?></p>
            <h2 class="titre-predi">Nombre de but Colorado</h2>
            <p class="predi-mt"><?= $data["Moyenne_but_2eme_MT_adv"] ?></p>
            <h2 class="titre-predi">Vainqueur</h2>
            <p class="predi-mt"><?= $data["Vainqueur-2eme-MT"] ?></p>
        </div>
        <div class="col-1mt3">
            <h2 class="titre-predi">Nombre de but</h2>
            <p class="predi-mt"><?= $data["Moyenne-total-3eme-MT"] ?></p>
            <h2 class="titre-predi">Nombre de but Calgary</h2>
            <p class="predi-mt"><?= $data["Moyenne_but_3eme_MT_Calgary"] ?></p>
            <h2 class="titre-predi">Nombre de but Colorado</h2>
            <p class="predi-mt"><?= $data["Moyenne_but_3eme_MT_adv"] ?></p>
            <h2 class="titre-predi">Vainqueur</h2>
            <p class="predi-mt"><?= $data["Vainqueur-3eme-MT"] ?></p>
        </div>
    </div>
    </div>


    <script src="nhl/js/navbar.js"></script>


    <footer class="footer-distributed">
			<div class="footer-right">
				<a href="https://discord.gg/7zHXJ4wX"><img src="./img/discord.png" class="footer-img"></a>
        <a href="https://twitter.com/lcrbet"> <img src="./img/twitter.png" class="footer-img"></a>
			</div>
			<div class="footer-left">
				<p>LCRBET &copy; 2022 - Par <a href="https://liamcariou.fr/" style="text-decoration:none;color: white;">Liamcariou.fr</a></p>
			</div>
		</footer>
 
</body>
</html>
