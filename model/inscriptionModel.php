<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
$messageVide = "";
$messageVerification = ""; 
$messageErreur = "";
$messageSuccess = "";
if(isset($_POST['submit'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $checkUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND email = ?');
        $checkUser->execute(array($_POST['pseudo'], $_POST['email']));
        if($checkUser->rowCount() > 0) {
            $messageVide = "<p style='color:red'>Pseudo ou email déjà utilisé(s). Veuillez réessayer.</p>";
        }else {
            $email = $_POST['email'];
            if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
                $messageVerification = "<p style='color:red'>Adresse email invalide</p>";
            }else {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
                var_dump($pwd);
                $insertUser = $bdd->prepare('INSERT INTO users(pseudo, email, pwd) VALUES (?, ?, ?)');
                $insertUser->execute(array($pseudo, $email, $pwd));
                $messageSuccess = "<p style='color:green'>Merci de ton inscription !</p>";
                $_SESSION['pseudo'] = $pseudo;
                header('Location: ../pages/messagerie.php');
                exit();
            };
        };
    }else {
        $messageErreur = "<p style='color:red'>Veuillez renseigner tous les champs !</p>";
    };
};