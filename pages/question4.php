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
    <script src="../scripts/compteurQ4.js" defer></script>
    <title>Super Identity - Identity 4</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>Identity 4</h1>
            <div class="conteneur">
                <p>Quelle qualité est la plus importante pour toi chez un ami ?</p>
                <div class="reponse">
                    <div id="belle" class="choix">L'intelligence et la sagesse</div>
                    <div id="other" class="choix">Je n'ai pas de préférence particulière</div>
                    <div id="bulle" class="choix">La gentillesse et l'empathie</div>
                    <div id="rebelle" class="choix">La loyauté et le courage</div>    
                </div>
            </div>
            <?php include "../components/supernanaImage.php";?>
        </section>
    </main>
</body>
</html>