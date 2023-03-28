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
        
        <div class="Votre_Espace">Vos Queasy déjà créés</div>

      <?php



  // Récupérer les titres et les IDs des quiz depuis la base de données
  $requete = $mysqlConnection->prepare('SELECT id_quizz, titre FROM quizz');
  //execution de la requete
  $requete->execute();
 
  $quizz = $requete->fetchAll();
  $mysqlConnection = null;
  $requete = null;
 
  ?>

<div class="container">
    <div class="row justify-content-center">
        <?php foreach ($quizz as $ligne) { ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100 border border-dark">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?= $ligne["titre"] ?></h5>
                        <a href="montrerquizz.php?id=<?= $ligne["id_quizz"] ?>" class="btn btn-primary align-self-end">Voir</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

