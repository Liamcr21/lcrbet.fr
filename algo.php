<?php ob_start(); ?>

<section class="home-section">
   
<div class="algo-admin">
      <h3 class=titre>Algorithme de prédiction</h3>
      <p class=txt>Stastitiques sur la saison 2022/2023 pour chaque matchs ainsi que le classement buteur pour vous aidez dans vos pronostics </p>
      <p class="txt">Choississez votre championnat</p>

      <div class="algo">    
    <div class="col-acc">
<a href="nhl.php"><img src="img/nhl/logo-nhl.png" alt="" class=img-col></a>
</div>   
  
</div>
</div>

<div class="c-ekip">

<h1 >Stat équipes</h1>
<table>
    <tr>
        <th scope="row"><strong>Equipe</strong></th>
        <th><strong>Matchs joués</strong></th>
        <th><strong>Victoire</strong></th>
        <th><strong>Défaite</strong></th>
        <th><strong>Nul</strong></th>
        <th><strong>Victoire TR</strong></th>
        <th><strong>Victoire OT</strong></th>
        <th><strong>Moyenne buts marqué</strong></th>
        <th><strong>Moyenne buts concédés</strong></th>
        <th><strong>tirs par matchs</strong></th>
        <th><strong>tirs concédé par matchs</strong></th>
        <th><strong>1ère MT but marqué</strong></th>
        <th><strong>1ère MT but concédé</strong></th>
        <th><strong>1ère MT V </strong></th>
        <th><strong>2ème MT but marqué</strong></th>
        <th><strong>2ème MT but concédé</strong></th>
        <th><strong>2ème MT V </strong></th>
        <th><strong>r3ème MT but marqué</strong></th>
        <th><strong>3ème MT but concédé</strong></th>
        <th><strong>3ème MT V </strong></th>

    </tr>

<?php
$user = "u801021231_lcrbetadminbdd";
$pass = "NHLbdd69lcrbet";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u801021231_BDDNHLlcrbet', $user, $pass);
    foreach($dbh->query(' SELECT * FROM `nhl_stats`; `') as $row) {
        $row = array_map("utf8_encode", $row);

        $equipe = $row['EQUIPES'];
        $nbmatch = $row['NB_matchs'];
        $v = $row['V'];
        $d = $row['D'];
        $n = $row['N'];
        $vtr = $row['VTR'];
        $vot = $row['VOT'];
        $mbutm = $row['M_but_m'];
        $mbutc = $row['M_but_c'];
        $tirs = $row['tirs'];
        $tirsc = $row['tirs_c'];
        $unmtb = $row['1_mt_b'];
        $unmtc = $row['1_mt_c'];
        $unmtv = $row['1_mt_v'];
        $deuxmtb = $row['2_mt_b'];
        $deuxmtc = $row['2_mt_c'];
        $deuxmtv = $row['2_mt_v'];
        $troismtb = $row['3_mt_b'];
        $troismtc = $row['3_mt_c'];
        $troismtv = $row['3_mt_v'];
        echo "<tr> 
        <td scope='row'>$equipe</td>
        <td>$nbmatch</td>
        <td>$v</td>
        <td>$d</td>
        <td>$n</td>
        <td>$vtr</td>
        <td>$vot</td>
        <td>$mbutm</td>
        <td>$mbutc</td>
        <td>$tirs</td>
        <td>$tirsc</td>
        <td>$unmtb</td>
        <td>$unmtc</td>
        <td>$unmtv</td>
        <td>$deuxmtb</td>
        <td>$deuxmtc</td>
        <td>$deuxmtv</td>
        <td>$troismtb</td>
        <td>$troismtc</td>
        <td>$troismtv</td>  
        </tr>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
</table>
</div>


<div class="c-bu">

<h1 >Classement Buteur</h1>
<table>
    <tr>
        <th scope="row"><strong>Equipe</strong></th>
        <th><strong>Joueur</strong></th>
        <th><strong>But</strong></th>
    </tr>

<?php
$user = "u801021231_lcrbetadminbdd";
$pass = "NHLbdd69lcrbet";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u801021231_BDDNHLlcrbet', $user, $pass);
    foreach($dbh->query(' SELECT EQUIPES,PLAYER,GOAL FROM `buteur_nhl` ORDER BY GOAL DESC LIMIT 15; `') as $row) {
        $row = array_map("utf8_encode", $row);

        $equipe = $row['EQUIPES'];
        $joueur = $row['PLAYER'];
        $but = $row['GOAL'];
        echo "<tr> 
        <td scope='row'>$equipe</td>
        <td>$joueur</td>
        <td>$but</td>
        </tr>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
</table>
</div>



</section>


<?php $content = ob_get_clean(); require_once("./template/template.php");

