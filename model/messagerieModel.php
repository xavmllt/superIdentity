<?php
session_start();
if(!$_SESSION['pseudo']) {
    header('Location: connexion.php');
};
$message = "";
$bdd = new PDO("mysql:host=localhost;dbname=superIdentity;", 'root', 'root');
if(isset($_POST['submit'])) {
    if(!empty($_POST['message'])) {
        $pseudo = $_SESSION['pseudo'];
        $message = nl2br(htmlspecialchars($_POST['message'])); // Saut de ligne automatique
        $insertMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES (?, ?)');
        $insertMessage->execute(array($pseudo, $message));
    }else {
        $message = "<p style='color:green'>Écris ton super mssage</p>";
    };
};