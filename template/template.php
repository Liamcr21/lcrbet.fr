<!DOCTYPE html>
<html lang="fr">

<?php 
require_once("head.php");
?>

<body <?= $idbody ?> data-scroll-container>

        <?php require_once("nav.php"); ?>

        <?php echo $content; ?>

        <?php require_once("footer.php"); ?>

   
<script src="js/script.js"></script>
<script src="../js/navbar.js"></script>

</body>
</html>