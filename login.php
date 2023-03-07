<!DOCTYPE html>
<html>
<head>
     <?php
     include('header.php');
     ?>

</head>
<body>
  <div class="Logo-QUEASY">
    <img src="Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
  </div>
  <form method="post">
            Identifiant <input  type="text" name="identifiant"></input>
            <div></div>
            Mot de passe <input type='text' name ="mdp"></input>
            <input type="submit">
</form> 
            <?php
            // Databasesettings
            $db="queasy";
            $dbhost="https://www.db4free.net/";
            $dbport=3306;
            $dbuser="florian";
            $dbpasswd="Flori@n1512";
            $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
            $pdo->exec("SET CHARACTER SET utf8");
            $mdp = $_POST['mdp'];
            $login = $_POST['identifiant'];
            $stmt = $pdo->prepare("SELECT * FROM user WHERE login=? AND password=?");
            $stmt->bindParam(1,$login);
            $stmt->bindParam(2,$mdp);
            $stmt->execute();
            ?>
</body>
</html>