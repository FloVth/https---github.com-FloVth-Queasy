 

<?php
if(isset($_POST['submit'])) {
    // Récupération des questions et des réponses
    $questions = array();
    for($i = 1; $i <= 21; $i++) {
        $question = $_POST['question'.$i];
        array_push($questions, $question);
    }
    $quiz_name = $_POST['quiz_name'];

    // Ouverture du fichier CSV pour l'écriture
    $file = fopen('quizzes.csv', 'a');
    // Écriture des données dans le fichier CSV
    fputcsv($file, array($quiz_name, implode(';', $questions)));

    // Fermeture du fichier
    fclose($file);

    // Afficher le message de confirmation
$message = "Votre quizz a bien été créé !";
header("Location: creerqueasy.php?message=".urlencode($message));
exit();
 
}
?>
 
