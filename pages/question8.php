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
    <script src="../scripts/compteurQ8.js" defer></script>
    <title>Super Identity - Identity 8</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>Identity 8</h1>
            <div class="conteneur">
                <p>Quelle qualité est la plus importante pour toi dans une décision importante ?</p>
                <div class="reponse">
                    <div id="bulle" class="choix">L'intuition et le sentiment</div>
                    <div id="other" class="choix">Je ne sais pas vraiment, ça dépend des circonstances</div>
                    <div id="rebelle" class="choix">L'audace et la détermination</div> 
                    <div id="belle" class="choix">La rationalité et la logique</div>
                </div>
            </div>
            <?php include "../components/supernanaImage.php";?>
        </section>
    </main>
</body>
</html>