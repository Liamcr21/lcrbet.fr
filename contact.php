<?php
if($_POST):
$prenom=$_POST["firstname"];
$nom=$_POST["lastname"];
$mail=$_POST["email"];
$msg=$_POST["message"];
$sujet=$_POST["sujet"];

$texte= "Nouveau message de ".$prenom." ".$nom." ".$sujet." (".$mail.") : ".$msg;

$headers = 'From:'.$mail . "\r\n" . 
          'Reply-To:'.$mail . "\r\n" .
         'X-Mailer: PHP/' . phpversion();

         if(mail("cariou.liam@orange.fr", "Nouveau message", $texte,$headers )):

             $sqlQuery = 'INSERT INTO liamcariou(nom, prenom, sujet, msg, email) VALUES ("'.$nom.'", "'.$prenom.'", "'.$sujet.'", "'.$msg.'", "'.$mail.'")';

            $mysqlConnection = new PDO(  'mysql:host=localhost;dbname=u801021231_liamcariou;charset=utf8',
              'u801021231_liamcariou',
                'ftp21pir@teFTP21'
              );


            $mysqlConnection->query($sqlQuery); 

            //var_dump($mysqlConnection->errorInfo());

            $confirme="oui";
            endif;

            endif;
            ?>

            <?php

            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - LCRBET - LCRBET.fr</title>
    <link rel="stylesheet" href="/css/navbar-sf.css">
    <link rel="stylesheet" href="/css/maintenance.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" href="img/logo_white.png"></title>
</head>
  <header>
    <nav class="navbar" role="navigation">
        <div class="nav-logo">
            <a href="./"><img class="logo" src="./img/logo-nav.png" alt="Logo LCRBET"></a>
        </div>           
        <ul class="navbar-links">
            <li class="navbar-link first lien nav-active"><a href="ps" >Paris sportif</a></li>
            <li class="navbar-link second lien"><a href="algo">Algorithme de prédiction</a></li>
            <li class="navbar-link fourth lien"><a href="cdm">Coupe du monde</a></li>
            <li class="navbar-link fifth lien"><a href="contact" class="nav-active"></i>Contact</a></li>
        </ul>

        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>        
</header>
<body>


<h1 class="h1-contact">Contact LCRBET</h1>
<h1 class="h2-contact">pas encore fonctionnel</h1>
<div class="container">

  <?php
if ($confirme=="oui"):
  ?>
<p>Votre message a bien été envoyé ! Je vous y reponds au plus vite. </p>
 <?php
 else:
 ?>
  <form action="/action_page">
    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre prénom...">

    <label for="lname">Nom</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre nom ...">

    <label for="lname">email</label>
    <input type="text" id="lname" name="email" placeholder="Votre email..">

    <label for="subject" name="sujet">Sujet</label>
    <textarea id="message" name="message" placeholder="Votre message ..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
  <?php
  endif;
  ?>
</div>

</body>
</html>
     
    <footer class="footer-distributed">
			<div class="footer-right">
				<a href="https://discord.gg/7zHXJ4wX"><img src="img/discord.png" class="footer-img"></a>
        <a href="https://twitter.com/lcrbet"> <img src="img/twitter.png" class="footer-img"></a>
			</div>
			<div class="footer-left">
				<p>LCRBET &copy; 2022 - Par <a href="https://liamcariou.fr/" style="text-decoration:none;color: white;">Liamcariou.fr</a></p>
			</div>
		</footer> 
<script src="/js/navbar.js"></script>
</body>
</html>
