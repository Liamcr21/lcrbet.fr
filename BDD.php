<?php
namespace lcrbet;




class BDD {
    
    public static function connect($c_directory = null) {
        

        $dsn = 'mysql:dbname=lcrbet;host=localhost'; $user = 'root'; $password = '';


        

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
