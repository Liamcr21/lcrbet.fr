<?php

require_once "../bdd.php";
use lcrbet\BDD;

$db = BDD::connect();

$id = htmlspecialchars($_GET['id']);
$req = $db->query('SELECT * FROM NHL WHERE id = '.$id);
$data = $req->fetch(PDO::FETCH_ASSOC);

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


<?php $content = ob_get_clean(); require_once("../template/template.php");
