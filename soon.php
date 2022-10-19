<?php ob_start(); ?>


<section class="home-section">

<div class="loader"></div>



</section>



<?php $content = ob_get_clean(); require_once("./template/template.php");