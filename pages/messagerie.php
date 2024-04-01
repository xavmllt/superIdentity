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
    <link rel="stylesheet" href="../styles/messagerie.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <title>Super Identity - Messagerie</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="../index.php"><img src="../assets/logo.png" alt="Logo super nana"></a>
        </div>
        <nav>
            <ul>
                <a href="../pages/rules.php"><li>RÈGLES</li></a>
                <a href="../pages/avis.php">AVIS</a>
            </ul>
        </nav>
    </header>
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