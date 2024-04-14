<?php
$bdd = new PDO("mysql:host=localhost;dbname=superIdentity;", 'root', 'root');
$recupMessages = $bdd->query('SELECT * FROM messagerie');
while($message = $recupMessages->fetch()) {
    ?>
    <div class="message">
        <h4><?php echo $message['pseudo'].' -&nbsp;'; ?></h4>
        <p><?php echo $message['message'];?></p>
    </div>
    <?php
};
?>