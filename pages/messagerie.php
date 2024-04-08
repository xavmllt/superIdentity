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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/messagerie.css">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <title>Super Identity - Messagerie</title>
</head>
<body>
    <?php include "../components/header.php";?>
    <main>
        <h1>SUPER MESSAGERIE</h1>
        <section id="messages"></section>
        <form action="" method="post">
                <div class="input">
                    <textarea name="message" placeholder="Entre ton message ici"></textarea>
                    <input type="submit" value="envoyer" name="submit">
                </div>
            </form>
        <a href="../scripts/logout.php"><button>SE DÉCONNECTER</button></a>
    </main>
    <script>
        setInterval('load_messages()', 1000);
        function load_messages() {
            $('#messages').load('../scripts/loadMessages.php');
        };
    </script>
</body>
</html>