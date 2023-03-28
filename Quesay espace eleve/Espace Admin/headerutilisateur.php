<!DOCTYPE html>
<html>
<head> <!-- Il faut préciser "#user" afin d'éviter de changer les autres éléments sur les autres pages-->
	<style>
		#user {
			float: right;
			margin-right: 20px;
			margin-top: 10px;
		}	

        		#user p {
			float: right;
            margin-top: 15px;
			font-size: 2em;
		}
		
		#user img 
		{
			width= 40px height= 50px
		}
		#user a { 
			text-decoration: none;  
			color: inherit;  
			display: block; 
			height: 100%; 
		}

		#retour {
		float: right;
		margin-right: 20px;
		margin-top: 10px;
	}
	
	#retour a {
		text-decoration: none;
		background-color: #03224C;
		color: white;
		padding: 10px 20px;
		border-radius: 5px;
	}

		
	</style>
</head>
<body>


    <?php
    $user_name = "admin";
    $user_icon = "user.png";
     ?>
	<header>
	<a href="compte utilisateur.php">
		<div id="user">
			<img src="<?php echo $user_icon; ?>" alt="Icône utilisateur">
			<p> <?php echo $user_name; ?></p>

			</a>
</div>
		
<div id="retour">
	<br>
			<a href="Espace admin.php">Retour au menu principale</a>
		</div>
		<div id="retour">
	<br>
			<a href="afficherqueasy.php">Afficher les Queasy</a>
		</div>
        <div class="Logo-QUEASY"> <!--- Logo du site --->
			<a href="Espace admin.php">
            <img src="Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
</a>
        </div>
       

	</header>
</body>
</html>
