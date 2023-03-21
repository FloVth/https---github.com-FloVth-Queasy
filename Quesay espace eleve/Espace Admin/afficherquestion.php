<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <linK rel="stylesheet" href="espace_eleve.css"> 
        <link href="Polices/VisbyRoundCF-Heavy.otf" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--favicon-->
        <link rel="shortcut icon" href="Logo-QUEASY.png"/>
        <title>QUEASY | Espace Admin</title>







    </head>
    <body>
    <?php
    include("database.php");
    $mysqlConnection = new PDO(
    'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
  )
?>
        <!--LOGO DU QUEASY-->
        <?php include 'headerutilisateur.php'; ?>
        
        <div class="Logo-QUEASY">
            <img src="Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
        </div>







<?php

        // déclaration de la constante
    define('NOMBRE_MAXIMUM',15) ;


    // création de le lien entre serv web et serv bd

    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

    // ordre de mission
    $requete = $mysqlConnection->prepare('SELECT * FROM atelier a INNER JOIN categorie c on a.fk_categorie=c.id_categorie');
    //execution de la requete
    $requete->execute();

    $ateliers = $requete->fetchAll();
    $mysqlConnection = null;
    $requete = null;

    ?>
 
  <div class="row">
    <div class="col center">
    <a href="index.php?route=create-atelier"><button class="btn btn-primary">Créer</button></a>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Categorie</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($ateliers as $ligne){
            ?>
            <tr>
                <th scope="row"><?= $ligne["id_atelier"] ?></th>
                <td><?= $ligne["titre"]?></td>
                <td><?= $ligne["libelle"]?></td>
                <td>
                    <a href="index.php?route=delete-atelier&id=<?= $ligne["id_atelier"] ?>"><button class="btn btn-danger">Supprimer</button></a>
                    <a href="index.php?route=edit-atelier&id=<?= $ligne["id_atelier"] ?>"><button class="btn btn-info">Modifier</button></a>
                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
    <?php
    $requete=null;
    $mysqlConnection=null;
    ?>
  
    </div>
  </div>
   