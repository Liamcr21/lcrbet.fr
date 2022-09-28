<?php
namespace Yr72dpi;




class BDD {
    
    public static function connect($c_directory = null) {
        

        $dsn = 'mysql:dbname=u801021231_BDDNHLlcrbet;host=localhost'; $user = 'u801021231_lcrbetadminbdd'; $password = '123456789';


        

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
