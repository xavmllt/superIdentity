<?php
$bdd = new PDO("mysql:host=localhost;dbname=superIdentity;", 'root', 'root');
$recupMessages = $bdd->query('SELECT * FROM messages');
while($message = $recupMessages->fetch()) {
    ?>
    <div class="message">
        <p class="date"><?php echo date('d/m/Y').'&thinsp;&thinsp;&thinsp;&thinsp;';?></p>
        <h4><?php echo $message['pseudo'].' -&nbsp;'; ?></h4>
        <p><?php echo $message['message'];?></p>
    </div>
    <?php
};
?>