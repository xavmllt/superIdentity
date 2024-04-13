<?php
session_start();

if(isset($_POST['submit'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $pseudoAdmin = "admin";
        $passwordAdmin = "admin";

        $pseudoRentrer = htmlspecialchars($_POST['pseudo']);
        $passwordRentrer = htmlspecialchars($_POST['pseudo']);

        if($pseudoAdmin == $pseudoRentrer && $passwordAdmin == $passwordRentrer) {
            $_SESSION['password'] = $passwordRentrer;
            header('Location: index.php');
        }else {
            echo "Pseudo ou mot de passe incorrect";
        };
    }else {
        echo "Veuille remplir tout les champs";
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Admin</title>
</head>
<body>

    <form action="" method="post" align="center">
        <input type="text" name="pseudo">
        <br>

        <input type="password" name="password">
        <br>
        
        <input type="submit" name="submit">
    </form>

</body>
</html>