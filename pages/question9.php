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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="../scripts/colorHover.js" defer></script>
    <script src="../scripts/compteurQ9.js" defer></script>
    <title>Super Identity - Identity 9</title>
</head>
<body>

    <?php include "../components/header.php";?>

    <main>

        <section>

            <h1>Identity 9</h1>

            <div class="conteneur">

                <p>Comment réagis-tu face à un défi difficile ?</p>

                <div class="reponse">
                    <div id="bulle" class="choix">J'essaie de calmer les émotions et de trouver un compromis</div>
                    <div id="other" class="choix">Je me sens parfois dépassé(e) et je cherche de l'aide</div>
                    <div id="rebelle" class="choix">Je fonce tête baissée et j'agis immédiatement</div>
                    <div id="belle" class="choix">J'analyse la situation et je trouve des solutions logiques</div>
                </div>

            </div>

            <?php include "../components/supernanaImage.php";?>

        </section>

    </main>
    
</body>
</html>