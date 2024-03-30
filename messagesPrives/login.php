<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo'])){
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $recupUser->execute(array($_POST['pseudo']));

        if($recupUser->rowCount() > 0){

            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: index.php');

        }else{
            echo "Aucun utilisateur trouvé";
        };
    }else{
        echo "Veuillez rentrez votre pseudo";
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion</title>
</head>
<body>
    <form action="" method="post" align="center">
        <input type="text" name="pseudo">
        <br>
        <input type="submit" name="valider">
    </form>
</body>
</html> 