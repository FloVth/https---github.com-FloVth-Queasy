<?php // Accès à la base de donnée
define('NOMBRE_MAXIMUM',15);
$mysqlConnection = new PDO( 

    'mysql:host=localhost;dbname=php_atelier;charset=utf8', // changer le nom par celui de la vrai base de donnée
    'root', 
    ''
);
$requete = $mysqlConnection->prepare('SELECT * FROM atelier');  // changer le nom de la table par son vrai nom



$requete->execute(); 
$inscrit = $requete->fetchAll();
?>
 