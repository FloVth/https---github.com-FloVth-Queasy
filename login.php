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
    <p class="connect2">Connectez-Vous !</p>
    <form>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre nom">
        </div>
        <br>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Votre mot de passe">
        </div>
        <div class="form-check">
        </div>
      </form>
      <button type="button" class="btn btn-light" id="2"><span class="btn_connect">Se connecter</span></button>
      <p class="nom">Nom :</p>
      <p class="mdp">Mot de passe :</p>
</body>
</html>