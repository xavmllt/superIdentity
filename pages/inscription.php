<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
@$messageVide = "";
@$messageVerification = ""; 
@$messageErreur = "";
@$messageSuccess = "";
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
                $pwd = sha1($_POST['password']);
                $insertUser = $bdd->prepare('INSERT INTO users(pseudo, email, pwd) VALUES (?, ?, ?)');
                $insertUser->execute(array($pseudo, $email, $pwd));
                $messageSuccess = "<p style='color:green'>Merci de ton inscription !</p>";
                $_SESSION['pseudo'] = $pseudo; 
            };
        };
    }else {
        $messageErreur = "<p style='color:red'>Veuillez renseigner tous les champs !</p>";
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
    <title>Super Identity - Inscription</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>SUPER INSCRIPTION</h1>
            <div class="form">
                <form action="" method="post">
                    <div class="form__contact">
                        <label for="pseudo" class="form__contact--red">Ton super pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" autofocus required>
                        <label for="email" class="form__contact--green">Ton super email :</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form__password">
                        <label for="password" class="password--blue">Ton super mot de passe :</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="form__submit">
                        <input type="submit" id="submit" name="submit" value="S'INSCRIRE">
                    </div>
                    <div class="form__link">
                    <a href="connection.php">SE CONNECTER</a>
                    </div>
                    <div class="messages">
                        <?php echo $messageVide;?>
                        <?php echo $messageVerification;?>
                        <?php echo $messageErreur;?>
                        <?php echo $messageSuccess;?>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>