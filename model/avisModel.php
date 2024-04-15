<?php

$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');

$messageVerification = "";
if(isset($_POST['submit'])) {

    $email = $_POST['email'];

    if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $messageVerification = "<p style='color:red'>Chaine invalide</p>";
    };

};

$messageSubmit = "";
if(isset($_POST['submit'])) {

    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['commentaire'])) {
        
        @$pseudo = htmlspecialchars($_POST['pseudo']); // @ to display error message
        @$email = htmlspecialchars($_POST['email']);
        @$commentaire = htmlspecialchars($_POST['commentaire']);

        $insertPlayer = $bdd->prepare('INSERT INTO avis(pseudo, email, commentaire) VALUES (?, ?, ?)');
        $insertPlayer->execute(array($pseudo, $email, $commentaire));
        $messageSubmit = "<p style='color:green'>Merci de ton commentaire !</p>";
    }else {
        $messageSubmit = "<p style='color:red'>Une erreur est survenue, réessaye plus tard</p>";
    };

};
