<?php
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
@$messageVerification = "";
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $messageVerification = "<p style='color:red'>Chaine invalide</p>";
    };
};
@$messageSubmit = "";
if(isset($_POST['submit'])) {
    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['commentaire'])) {
        @$pseudo = htmlspecialchars($_POST['pseudo']);
        @$email = htmlspecialchars($_POST['email']);
        @$commentaire = htmlspecialchars($_POST['commentaire']);
        $insertPlayer = $bdd->prepare('INSERT INTO players(pseudo, email, commentaire) VALUES (?, ?, ?)');
        $insertPlayer->execute(array($pseudo, $email, $commentaire));
        $messageSubmit = "<p style='color:green'>Merci de ton commentaire !</p>";
    }else {
        $messageSubmit = "<p style='color:red'>Une erreur est survenue, réessaye plus tard</p>";
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/avis.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <title>Super Identity - Avis</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="../index.php"><img src="../assets/logo.png" alt="Logo super nana"></a>
        </div>
        <nav>
            <ul>
                <a href="../pages/rules.php"><li>RÈGLES</li></a>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>SUPER FEEDBACK</h1>
            <div class="form">
                <form method="post">
                    <div class="form__contact">
                        <label for="pseudo" class="form__contact--red">Ton super pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" autofocus require>
                        <label for="email" class="form__contact--green">Ton super email :</label>
                        <input type="email" name="email" id="email" require>
                    </div>
                    <div class="form__area">
                        <label for="textarea" class="textarea--blue">Ton super commentaire :</label>
                        <textarea name="commentaire" id="commentaire" cols="30" rows="10" require></textarea>
                    </div>
                    <div class="form__submit">
                        <input type="submit" id="submit" name="submit">
                    </div>
                    <div class="form__messages">
                        <div><?php echo $messageVerification?></div>
                        <div><?php echo $messageSubmit?></div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>