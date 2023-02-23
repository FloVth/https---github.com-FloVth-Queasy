<!DOCTYPE html>
<html>
<head>
     <?php
     include('header.php');
     $mysqlConnection = new PDO( 

      'mysql:host="https://www.db4free.net/phpMyAdmin/index.php?route=/&route=%2F&db=queasy";dbname=queasy;charset=utf8', 

      'florian', 

      'Flori@n1512' );
     ?>
</head>
<body>
  <div class="Logo-QUEASY">
    <img src="Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
  </div>
  <form action="check_login.php" method="post">
            Login<input  type="text" name="login"></input>
            <div></div>
            Password <input type='text' name ="password"></input>
            <input type="submit">
      <p class="nom">Nom :</p>
      <p class="mdp">Mot de passe :</p>
</body>
</html>