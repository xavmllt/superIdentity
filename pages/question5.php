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
    <script src="../scripts/compteurQ5.js" defer></script>
    <title>Super Identity - Identity 5</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>Identity 5</h1>
            <div class="conteneur">
                <p>Quelle est ta réaction face à une injustice flagrante ?</p>
                <div class="reponse">
                    <div id="other" class="choix">Je me sens mal mais je ne sais pas toujours comment agir</div>
                    <div id="bulle" class="choix">J'essaie de trouver un compromis pour rétablir l'équilibre</div>
                    <div id="belle" class="choix">Je cherche des moyens légaux pour résoudre le problème</div>
                    <div id="rebelle" class="choix">Je fonce tête baissée pour défendre ceux qui subissent l'injustice</div>    
                </div>
            </div>
            <?php include "../components/supernanaImage.php";?>
        </section>
    </main>
</body>
</html>