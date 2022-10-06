


<?php ob_start(); ?>



<section id="hero">
    <img src="img/back.png" class="back-hero">
  </section>


<?php $content = ob_get_clean(); require_once("./template/template.php");
