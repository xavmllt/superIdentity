<?php
$bdd = new PDO("mysql:host=localhost;dbname=messagerie;", 'root', 'root');
if(isset($_POST['submit'])) {
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message'])); // Saut de ligne automatique

        $insertMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES (?, ?)');
        $insertMessage->execute(array($pseudo, $message));
    }else {
        "Veuillez compléter tout les champs";
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>SUPER IDENTITY - MESSAGERIE</title>
</head>
<body>
    <form action="" method="post" align="center">
        <input type="text" name="pseudo">
        <br><br>
        <textarea name="message"></textarea>
        <br><br>
        <input type="submit" name="submit">
    </form>
    <section id="messages"></section>

    <script>
        setInterval('load_messages()', 1000);
        function load_messages() {
            $('#messages').load('loadMessages.php');
        };
    </script>
</body>
</html>