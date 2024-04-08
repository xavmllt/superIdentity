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
    <script src="../scripts/compteurQ12.js" defer></script>
    <title>Super Identity - Identity 12</title>
</head>
<body>
    <?php include "../components/header.php";?>
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