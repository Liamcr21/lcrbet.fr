<?php
namespace lcrbet;




class BDD {
    
    public static function connect(string $cd = null) {
        
        $env = json_decode(file_get_contents($cd."./env.json"));

        $dsn = 'mysql:dbname='.$env->db->name.';host='.$env->db->host;
        $user = $env->db->username;
        $password = $env->db->password;


        

         try {
             $dbh = new \PDO($dsn, $user, $password);
             return $dbh;
         } catch (\PDOException $e) {
             echo 'Connexion échouée : ' . $e->getMessage();
         }
    } 
 }

?>
