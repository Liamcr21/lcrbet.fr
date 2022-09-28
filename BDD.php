<?php
namespace lcrbet;




class BDD {
    
    public static function connect($c_directory = null) {
        

        $dsn = 'mysql:dbname=u801021231_BDDNHLlcrbet;host=localhost'; $user = 'u801021231_lcrbetadminbdd'; $password = 'NHLbdd69lcrbet';


        

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
