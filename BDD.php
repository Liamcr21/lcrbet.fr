<?php
namespace lcrbet;




class BDD {
    
    public static function connect($c_directory = null) {
        

<<<<<<< HEAD
        $dsn = 'mysql:dbname=lcrbet;host=localhost'; $user = 'root'; $password = '';
=======
        $dsn = 'mysql:dbname=u801021231_BDDNHLlcrbet;host=localhost'; $user = 'u801021231_lcrbetadminbdd'; $password = 'mdp';
>>>>>>> 68ef818fdf03dc13c6b0213015a3aebf69b8aed4


        

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
