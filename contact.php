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

<?php ob_start(); ?>



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


<?php $content = ob_get_clean(); require_once("./template/template.php");
