<?php
session_start();
$messageErreur = "";
$messageVide = "";
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
if(isset($_POST['submit'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = sha1($_POST['password']);
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND pwd = ?');
        $recupUser->execute(array($pseudo, $password));
            if($recupUser->rowCount() > 0) {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id'] = $recupUser->fetch()['id'];
                header('Location: ../pages/messagerie.php');
            }else {
                $messageErreur = "<p style='color:red'>Mot de passe ou pseudo incorrect";
            };
    }else {
        $messageVide = "<p style='color:red'>Veuillez rensignez tout les champs";
    };
};