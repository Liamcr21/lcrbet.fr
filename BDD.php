<?php
namespace lcrbet;




class BDD {
    
<<<<<<< HEAD
    public static function connect(string $cd = null) {
        $dsn = 'mysql:dbname=lcrbet;host=localhost'; $user = 'root'; $password = '';
=======
    public static function connect($c_directory = null) {
        

        $dsn = 'mysql:calgary-flames=;host=localhost'; $user = 'u801021231_lcrbetadminbdd'; $password = 'NHLbdd69lcrbet';


        
>>>>>>> d8cbf4a8b61f2447105848bfd07e81069109fe33

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
