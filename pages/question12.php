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
    <script src="../scripts/compteurQ12.js" defer></script>
    <title>Super Identity - Identity 12</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>Identity 12</h1>
            <div class="conteneur">
                <p>Quel type de lecture préfères-tu ?</p>
                <div class="reponse">
                    <div id="belle" class="choix">Quel type de lecture préfères-tu ?</div>
                    <div id="bulle" class="choix">Des livres poétiques ou des contes féeriques</div>
                    <div id="rebelle" class="choix">Des romans d'action ou des histoires d'aventure</div>
                    <div id="other" class="choix">Je ne lis pas souvent</div>
                </div>
            </div>
            <?php include "../components/supernanaImage.php";?>
        </section>
    </main>
</body>
</html>