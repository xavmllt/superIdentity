<?php
$bdd = new PDO('mysql:host=localhost;dbname=superIdentity;' , 'root', 'root');

session_start();

if(!$_SESSION['password']) {
    header('Location: connexion.php');
};


if(isset($_GET['id']) && !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $recupMessage = $bdd->prepare('SELECT * FROM messagerie WHERE id = ?');
    $recupMessage->execute(array($getid));

    if($recupMessage->rowCount() > 0) {
        $deleteMessage = $bdd->prepare('DELETE from messagerie WHERE id = ?');
        $deleteMessage->execute(array($getid));
        header('Location: index.php');
    }else {
        echo "Aucun membre trouvé";
    };

}else {
    echo "identifiant non récupérer";
};
