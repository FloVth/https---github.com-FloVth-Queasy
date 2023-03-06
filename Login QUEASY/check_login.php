<html>
    <head>

        <?php 
        $mysqlConnection = new PDO( 

        'mysql:host="https://www.db4free.net/phpMyAdmin/index.php?route=/&route=%2F&db=queasy";dbname=queasy;charset=utf8', 

        'florian', 

        'Flori@n1512' );
                
        $requete = $mysqlConnection->prepare('SELECT*  FROM USER WHERE login=:log AND password=:pwd');
        $requete->execute(["log"=>$_POST["login"], "pwd"=>$_POST["password"]]); 
        $ligne=$requete->fetch();

        if($ligne!=[]){
        
            $_SESSION["login"]=$_POST["login"];
            header("Location: Espace_eleve.html ");
        }
        else{
            header("Location: login.php");
        }
        ?>
</head>
</html>