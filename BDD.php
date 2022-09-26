<?php
namespace Yr72dpi;



class BDD {
    
    public static function connect($c_directory = null) {
        

        $dsn = 'mysql:dbname=nhl;host=127.0.0.1'; $user = 'root'; $password = '';


        

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
