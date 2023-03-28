<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Queasy</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='classement.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: #648BC4">
    <img src="Logo-QUEASY.png" class="logo">
    <h1 class="classement">Votre Classement</h1>

    <p class="reste">Reste du classement</p>

    <img src="podium.png" class="podium">
</body>
</html>

<?php // Accès à la base de donnée
     $mysqlConnection = new PDO( 

        'mysql:host=localhost;dbname=queasy;charset=utf8', 
  
        'root', 
  
        '' );
     
?>

<?php                // Execution de la requête 
    $sqlQuery = 'SELECT * FROM user_quiz INNER JOIN user WHERE fk_id_user=id_user';
    $recipesStatement = $mysqlConnection->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    
    foreach ($recipes as $ligne){
        ?>
         
        <p class="eleve_<?=$ligne['id_user_quizz']?>">Nom prenom : <?=$ligne['note']?> points</p> 
    <?php // <?=$ligne['fk_id_user'] (le nom et prenom dans la base de donnée)
    }
    
    ?>