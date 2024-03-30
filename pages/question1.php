<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/identity.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <script src="../scripts/colorHover.js" defer></script>
    <script src="../scripts/compteurQ1.js" defer></script>
    <title>Super Identity - Identity 1</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>Identity 1</h1>
            <div class="conteneur">
                <p>Quelle activité préfères-tu pendant ton temps libre ?</p>
                <div class="reponse">
                    <div id="belle" class="choix">Lire des livres ou apprendre quelque chose de nouveau</div>
                    <div id="bulle" class="choix">Participer à des actions caritatives ou aider les autres</div>
                    <div id="rebelle" class="choix">Exprimer ma créativité à travers l'art ou la musique</div>
                    <div id="other" class="choix">Ça dépend de mon humeur du jour</div>
                </div>
            </div>
            <?php include "../components/supernanaImage.php";?>
        </section>
    </main>
</body>
</html>