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
        <!--LOGO DU QUEASY-->
        <?php include 'headerutilisateur.php'; ?>
        
        <div class="Logo-QUEASY">
            <img src="Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
        </div>
        <div class="Votre_Espace">Créer votre QUEASY</div>



<?php
if(isset($_POST['submit'])) {
  // Récupérer les données du formulaire
  $nom_quizz = $_POST['nom_quizz'];
  $questions = $_POST['questions'];

  // Ouvrir le fichier CSV en mode écriture
  $fichier = fopen('quizz.csv', 'a');

  // Écrire les données dans le fichier CSV
  fputcsv($fichier, array($nom_quizz) + $questions);

  // Fermer le fichier
  fclose($fichier);

  // Rediriger vers la page de confirmation
  header('Location: confirmation.php');
  exit;
}
?>
</body>
</html>