<?php
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;', 'root', 'root');
session_start();
if(!$_SESSION['password']) {
    header('Location: connexion.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $recupMessage = $bdd->query('SELECT * FROM messages');
    while($message = $recupMessage->fetch()) {
        ?>
        <p><?php echo $message['pseudo'].' : '.$message['message'];?> <a href="delete.php?id=<?=$message['id'];?>" style="color:red;text-decoration:none">Delete message</a></p>
        <?php
    };
    ?>
</body>
</html>