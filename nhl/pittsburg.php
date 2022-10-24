<?php ob_start(); ?>

<section class="home-section">
   
<div class="algo-admin">
      <h3 class=titre>Algorithme de prédiction</h3>
      <p class=txt>Stastitiques sur la saison 2022/2023 pour chaque matchs ainsi que le classement buteur pour vous aidez dans vos pronostics </p>
      <p class="txt">Choississez votre équipe !</p>

      <div class="algo">    
    <div class="col-acc">
    <a href="../nhl/anaheim.php"><img src="../img/nhl/anaheim-ducks-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/arizona.php"><img src="../img/nhl/arizona-coyotes-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/boston.php"><img src="../img/nhl/boston-bruins-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/buffalo.php"><img src="../img/nhl/buffalo-sabres-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/calgary.php"><img src="../img/nhl/calgary.png" alt="" class=img-col-admin></a>
<a href="../nhl/carolina.php"><img src="../img/nhl/carolina-hurricanes-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/chicago.php"><img src="../img/nhl/chicago-blackhawks-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/colorado.php"><img src="../img/nhl/colorado-avalanche-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/columbus.php"><img src="../img/nhl/columbus-blue-jackets-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/dallas.php"><img src="../img/nhl/dallas-stars-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/detroit.php"><img src="../img/nhl/detroit-red-wings-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/edmonton.php"><img src="../img/nhl/edmonton-oilers-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/florida.php"><img src="../img/nhl/florida-panthers-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/losangeles.php"><img src="../img/nhl/los-angeles-kings-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/minnesota.php"><img src="../img/nhl/minnesota-wild-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/montreal.php"><img src="../img/nhl/montreal-canadiens-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/nashville.php"><img src="../img/nhl/nashville-predators-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/njdevils.php"><img src="../img/nhl/new-jersey-devils-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/nyislanders.php"><img src="../img/nhl/new-york-islanders-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/nyrangers.php"><img src="../img/nhl/ny.png" alt="" class=img-col-admin></a>
<a href="../nhl/ottawa.php"><img src="../img/nhl/ottawa-senators-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/phila.php"><img src="../img/nhl/philadelphia-flyers-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/pittsburg.php"><img src="../img/nhl/pittsburgh-penguins-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/sanjose.php"><img src="../img/nhl/san-jose-sharks-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/seattle.php"><img src="../img/nhl/Seattle_Kraken_logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/stlouis.php"><img src="../img/nhl/st-louis-blues-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/tampa.php"><img src="../img/nhl/tampa-bay-lightning-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/toronto.php"><img src="../img/nhl/toronto-maple-leafs-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/vancouver.php"><img src="../img/nhl/vancouver-canucks-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/vegas.php"><img src="../img/nhl/vegas-golden-knights-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/washington.php"><img src="../img/nhl/washington-capitals-logo.png" alt="" class=img-col-admin></a>
<a href="../nhl/winnipeg.php"><img src="../img/nhl/winnipeg-jets-logo.png" alt="" class=img-col-admin></a>
</div>   
  
</div>
</div>



<h2 class=sous-titre>Pittsburg Penguins</h2>
<img src="../img/nhl/pittsburgh-penguins-logo.png" alt="logo" class="img-ekip" >



<div class="requete-admin">
<div class="tableau-gen">
<div class="resultat">
<h2 class=sous-titre>Statistiques</h2>
<h2 class=sous-titre-in>Statistiques Général</h2>
<table>
    <tr>
    <th scope="row"><a href="nhl.php"><img src="../img/nhl/logo-nhl.png" alt="" class=img-table></a></th>
        <th ><strong>Equipe</strong></th>
        <th><strong>Matchs joués</strong></th>
        <th><strong>Victoire</strong></th>
        <th><strong>Défaite</strong></th>
        <th><strong>Nul</strong></th>
        <th><strong>Victoire TR</strong></th>
        <th><strong>Victoire OT</strong></th>
    </tr>
<?php
$user = "u801021231_lcrbetadminbdd";
$pass = "NHLbdd69lcrbet";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u801021231_BDDNHLlcrbet', $user, $pass);
    foreach($dbh->query(' SELECT * FROM `nhl_stats` WHERE ID IN (23); `') as $row) {
        $row = array_map("utf8_encode", $row);
        $logo = $row['logo'];
        $equipe = $row['EQUIPES'];
        $nbmatch = $row['NB_matchs'];
        $v = $row['V'];
        $d = $row['D'];
        $n = $row['N'];
        $vtr = $row['VTR'];
        $vot = $row['VOT'];
        echo "<tr> 
        <td scope='row'>$logo</td>
        <td >$equipe</td>
        <td>$nbmatch</td>
        <td>$v</td>
        <td>$d</td>
        <td>$n</td>
        <td>$vtr</td>
        <td>$vot</td>
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
<div class="buts">
<h2 class=sous-titre-in>Statistiques buts</h2>

<table>
    <tr>
        <th scope="row"><a href="nhl.php"><img src="../img/nhl/logo-nhl.png" alt="" class=img-table></a></th>
        <th><strong>Moyenne buts marqué</strong></th>
        <th><strong>Moyenne buts concédés</strong></th>
        <th><strong>tirs par matchs</strong></th>
        <th><strong>tirs concédé par matchs</strong></th>
    </tr>
<?php
$user = "u801021231_lcrbetadminbdd";
$pass = "NHLbdd69lcrbet";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u801021231_BDDNHLlcrbet', $user, $pass);
    foreach($dbh->query(' SELECT * FROM `nhl_stats` WHERE ID IN (23); `') as $row) {
        $row = array_map("utf8_encode", $row);
        $logo = $row['logo'];
        $mbutm = $row['M_but_m'];
        $mbutc = $row['M_but_c'];
        $tirs = $row['tirs'];
        $tirsc = $row['tirs_c'];
        echo "<tr> 
        <td scope='row'>$logo</td>
        <td>$mbutm</td>
        <td>$mbutc</td>
        <td>$tirs</td>
        <td>$tirsc</td> 
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
<div class="mt">
<h2 class=sous-titre-in>Statistiques par Tiers-temps</h2>

<table>
    <tr>
        <th scope="row"><a href="nhl.php"><img src="../img/nhl/logo-nhl.png" alt="" class=img-table></a></th>
        <th><strong>1ère MT but marqué</strong></th>
        <th><strong>1ère MT but concédé</strong></th>
        <th><strong>1ère MT V </strong></th>
        <th><strong>2ème MT but marqué</strong></th>
        <th><strong>2ème MT but concédé</strong></th>
        <th><strong>2ème MT V </strong></th>
        <th><strong>3ème MT but marqué</strong></th>
        <th><strong>3ème MT but concédé</strong></th>
        <th><strong>3ème MT V </strong></th>
    </tr>
<?php
$user = "u801021231_lcrbetadminbdd";
$pass = "NHLbdd69lcrbet";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u801021231_BDDNHLlcrbet', $user, $pass);
    foreach($dbh->query(' SELECT * FROM `nhl_stats` WHERE ID IN (23); `') as $row) {
        $row = array_map("utf8_encode", $row);
        $logo = $row['logo'];
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
        <td scope='row'>$logo</td>
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
</div>

<div class="but-gen">
<h2 class=sous-titre-in>Classement Buteurs</h2>

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
    foreach($dbh->query(' SELECT LOGO,PLAYER,GOAL FROM `buteur_nhl` WHERE ID IN (24) ORDER BY GOAL DESC LIMIT 10; `') as $row) {
        $row = array_map("utf8_encode", $row);

        $equipe = $row['LOGO'];
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

</div>



</section>


<?php $content = ob_get_clean(); require_once("../template/template.php");

