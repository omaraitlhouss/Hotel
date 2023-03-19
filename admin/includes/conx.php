<?php 
    try {
            $pdo = new PDO('mysql:host=localhost;dbname=projetfin', "root", "");
          
     } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
?>