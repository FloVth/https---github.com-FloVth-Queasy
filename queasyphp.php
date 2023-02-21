<?php // Accès à la base de donnée
define('NOMBRE_MAXIMUM',15);
$mysqlConnection = new PDO( 

    'mysql:host=localhost;dbname=php_atelier;charset=utf8', 

    'root', 
    ''
);
$requete = $mysqlConnection->prepare('SELECT * FROM atelier'); 



$requete->execute(); 
$inscrit = $requete->fetchAll();
?>
 