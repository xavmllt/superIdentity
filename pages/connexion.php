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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="../styles/connexion.css">
    <title>Super Identity - Connexion</title>
</head>
<body>
    <?php include "../components/header.php";?>
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