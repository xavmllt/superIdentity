<?php
// Connexion au serveur
$ip = "localhost";
$user = "root";
$pwd = "root";

$connexion = mysqli_connect($ip, $user, $pwd);

if(!$connexion){
    die('Echec de connexion'.mysqli_connect_error());
};

// Connexion à la base de donnée

$bd_name = "superIdentity";

$cnx = mysqli_connect($ip, $user, $pwd, $bd_name);
if(mysqli_connect_errno()){
    echo 'Erreur de connection à la base '.mysqli_connect_error();
    exit();
};

// Le @ sert à cacher les messages d'erreurs
// En fait quand j'arrive sur la page il me met un message d'erreur car il n'y a rien dans les inputs donc je met les @ devant les variables pour cacher ces messages et pouvoir avoir un meilleur affichage
@$pseudo = htmlspecialchars($_POST["pseudo"]);
@$email = htmlspecialchars($_POST["email"]);
@$commentaire = htmlspecialchars($_POST["commentaire"]);

// On crée la requête 
$sql = "INSERT INTO player (pseudo, email, commentaire) VALUES ('$pseudo', '$email', '$commentaire')";

$result = mysqli_query($cnx, $sql) || die(include("messagePasEnvoye.php"));

include("messageEnvoye.php");
// ferme la connexion à la BDD
mysqli_close($cnx);
?>