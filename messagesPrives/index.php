<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity', 'root', 'root');
if(!$_SESSION['pseudo']){
    header('Location: login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tout les utlisateurs sur le site</title>
</head>
<body>
<?php
$recupUser = $bdd->query('SELECT * FROM users');
while($user = $recupUser->fetch()){
    ?>
    <a href="message.php?id=<?php echo $user['id']; ?>">
        <p><?php echo $user['pseudo'];?></a></p>
    <?php
}
?>
</body>
</html>