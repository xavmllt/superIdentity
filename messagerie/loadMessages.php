<?php
$bdd = new PDO("mysql:host=localhost;dbname=messagerie;", 'root', 'root');

$recupMessages = $bdd->query('SELECT * FROM messages');
while($message = $recupMessages->fetch()) {
    ?>
    <div class="message">
        <h4><?php echo $message['pseudo']; ?></h4>
        <p><?php echo $message['message'];?></p>
    </div>
    <?php
};
?>

