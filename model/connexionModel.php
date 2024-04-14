<?php
session_start();
$messageErreur = "";
$messageVide = "";
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
if(isset($_POST['submit'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = $_POST['password']; 
        $recupUser = $bdd->prepare('SELECT * FROM membre WHERE pseudo = ?');
        $recupUser->execute(array($pseudo));
        if($recupUser->rowCount() > 0) {
            $user = $recupUser->fetch();
            if(password_verify($password, $user['pwd'])) { // Utiliser password_verify() ici
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id'] = $user['id'];
                header('Location: ../pages/messagerie.php');
                exit(); 
            } else {
                $messageErreur = "<p style='color:red'>Mot de passe incorrect</p>";
            };
        } else {
            $messageErreur = "<p style='color:red'>Pseudo incorrect</p>";
        }
    } else {
        $messageVide = "<p style='color:red'>Veuillez renseigner tous les champs</p>";
    };
};