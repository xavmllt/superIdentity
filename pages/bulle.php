<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="../styles/bulle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Super Identity - Bulle</title>
</head>
<body>
    <?php include "../components/header.php";?>
    <main>
        <section>
            <div class="bulle">
            <div class="bulle__description">
                <h1>BULLE</h1>
                <p>Bulle est l'âme sensible et créative des Supers Nanas, guidée par une connexion profonde avec la nature et une sensibilité émotionnelle exceptionnelle. Son cœur bienveillant lui permet de percevoir la beauté là où d'autres ne voient que l'ordinaire. Artiste dans l'âme, elle déploie une imagination débordante pour résoudre les problèmes, apportant une touche de magie à chaque situation.</p>
                <p>En tant que médiatrice, Bulle incarne l'empathie et cherche constamment à apaiser les tensions au sein du groupe. Sa volonté inébranlable de rétablir l'harmonie en fait un pilier émotionnel au sein des Supers Nanas. Cependant, sa sensibilité peut la rendre vulnérable, car elle absorbe souvent les émotions des autres, laissant transparaître une fragilité émotionnelle.</p>
                <p>Bulle, avec sa douceur et son empathie sans bornes, apporte lumière et harmonie au sein du groupe. Sa connexion profonde à la nature et sa capacité à voir la beauté partout en font une figure clé, même si parfois sa sensibilité la rend plus vulnérable dans un monde parfois difficile à comprendre.</p>
                <a href="#" class="suite">afficher la suite<br>&#8675;</a>
                <script>
                    $(document).ready(function() {
                        var $paragraphe2 = $('p:eq(1)');
                        var $paragraphe3 = $('p:eq(2)');
                        $paragraphe3.hide() && $paragraphe2.hide();
                        $('a.suite').on("click", function() {
                            if($paragraphe3.is(':hidden') && $paragraphe2.is(':hidden')){
                                $paragraphe2.show('slow');
                                $paragraphe3.show('slow');
                                $(this).html('&#8673;<br>masquer...');
                            }else {
                                $paragraphe2.hide('slow');
                                $paragraphe3.hide("slow");
                                $(this).html("afficher la suite...<br>&#8675;");
                                return false;
                            };
                        });
                    });
                </script>
                <a href="../index.php"><button>ACCUEIL</button></a>
            </div>
            <div class="bulle__image">
                <img src="../assets/bulle.png" alt="Bulle">
            </div>
        </div>
        </section>
    </main>
</body>
</html>