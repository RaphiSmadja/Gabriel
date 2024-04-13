<?php
    function connectBdd() {  
        $host = "localhost";
        $dbname = "gabriel";
        $login = "root";
        $password = "";      
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
        } catch(PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    return $pdo;
    }
?>