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
                header('Location: messagerie.php');
            }else {
                $messageErreur = "<p style='color:red'>Mot de passe ou pseudo incorrect";
            };
    }else {
        $messageVide = "<p style='color:red'>Veuillez rensignez tout les champs";
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/connexion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <title>Super Identity - Connexion</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>SUPER CONNEXION</h1>
            <h2>Connecte-toi pour avoir accès à la messagerie avec les autres super !</h2>
            <div class="form">
                <form method="post">
                    <div class="form__contact">
                        <label for="pseudo" class="form__contact--red">Ton super pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" autofocus require>
                    </div>
                    <div class="form__password">
                        <label for="password" class="password--blue">Ton super mot de passe :</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form__submit">
                        <input type="submit" id="submit" name="submit">
                    </div>
                    <div class="form__link">
                    <a href="inscription.php">S'INSCRIRE</a>
                    </div>
                    <div class="messages">
                        <?php echo $messageErreur;?>
                        <?php echo $messageVide;?>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>