<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity', 'root', 'root');
if(!$_SESSION['pseudo']){
    header('Location: login.php');
}
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare("SELECT * FROM users WHERE id = ?");
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
        if(isset($_POST['envoyer'])){
            $message = htmlspecialchars($_POST['message']);
            $insererMessage = $bdd->prepare("INSERT INTO messages(message, id_destinataire, id_auteur) VALUES (?, ?, ?)");
            $insererMessage->execute(array($message, $getid, $_SESSION['id']));
        }
    }else{
        echo "Aucun utlisateur trouvé";
    }   
}else{
    echo "Aucun identifiant trouvé";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Message privé</title>
</head>
<body>
<form action="" method="post">
    <textarea name="message"></textarea>
    <br><br>
    <input type="submit" name="envoyer">
</form>


    <section id="message">
        <?php
        $recupMessages = $bdd->prepare('SELECT * FROM messages WHERE id_auteur = ? AND id_destinataire = ? OR id_auteur = ? AND id_destinataire = ?');
        $recupMessages->execute(array($_SESSION['id'], $getid, $getid, $_SESSION['id']));
        while($message = $recupMessages->fetch()){
            if($message['id_destinataire'] == $_SESSION['id']){
                ?>
                <p style="color:red"><?php echo $message['message']; ?></p>
                <?php
            }else{
                ?>
                <p style="color: green"><?php echo $message['message'] ?></p>
                <?php
            };
        };
        ?>
        <!-- <script>
            $(document).ready(function() {
    function loadMessages() {
        $('#message').load('loadMessages.php');
        setInterval(loadMessages, 500);
    };
    loadMessages();
});
         </script> -->


    </section>
</body>
</html>