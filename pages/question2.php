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
    <script src="../scripts/compteurQ2.js" defer></script>
    <title>Super Identity - Identity 2</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>Identity 2</h1>
            <div class="conteneur">
                <p>Comment réagis-tu face à un conflit ?</p>
                <div class="reponse">
                    <div id="belle" class="choix">Je cherche des solutions logiques pour résoudre le problème</div>
                    <div id="other" class="choix">Je préfère éviter les conflits autant que possible</div>
                    <div id="bulle" class="choix">J'essaie de calmer les tensions et de réconcilier les personnes en conflit</div>
                    <div id="rebelle" class="choix">Je prends la défense de ceux qui sont injustement traités</div>    
                </div>
            </div>
            <?php include "../components/supernanaImage.php";?>
        </section>
    </main>
</body>
</html>