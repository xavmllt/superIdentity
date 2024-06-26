<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image.png" href="../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="../styles/belle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Super Identity - Belle</title>
</head>
<body>

    <?php include "../components/header.php";?>

    <main>

        <section>

            <div class="belle">

                <div class="belle__description">
                    <h1>BELLE</h1>
                    <p>Belle incarne l'harmonie entre l'intellect, la bienveillance et la détermination. Son esprit curieux et avide de connaissances lui confère une intelligence exceptionnelle, toujours avide d'en apprendre davantage. Elle représente la voix de la raison au sein du trio des Supers Nanas, apportant une sagesse et une prudence essentielles dans les moments critiques. Sa capacité à voir le potentiel en chaque personne et à agir avec compassion en fait un pilier d'empathie.
                    </p>
                    <p>Sa loyauté envers ses sœurs et ses amis est inébranlable, prête à tout pour les défendre. Cependant, son désir constant de perfection et d'excellence peut parfois la conduire à se mettre trop de pression. Elle peut être critique envers elle-même et envers les autres, cherchant toujours à atteindre des standards élevés. Parfois, cette recherche incessante de perfection peut devenir un défi à surmonter, l'empêchant de voir l'aspect émotionnel des situations.
                    </p>
                    <p>Belle est un modèle d'intelligence, de compassion et de détermination. Sa volonté d'apprendre et sa capacité à agir avec sagesse en font une force incontestable au sein des Supers Nanas, même si parfois son perfectionnisme peut être un frein.
                    </p>
                    <a href="#" class="suite">afficher la suite<br>&#8675;</a>

                    <script>
                        $(document).ready(function() { 
                            var $paragraphe2 = $('p:eq(1)'); // target the second <p>
                            var $paragraphe3 = $('p:eq(2)'); // target the third <p>
                            $paragraphe3.hide() && $paragraphe2.hide(); // hide the third and second <p>
                            $('a.suite').on("click", function() { 

                                if($paragraphe3.is(':hidden') && $paragraphe2.is(':hidden')){ // if both <p> are hidden
                                    $paragraphe2.show('slow'); // show the second <p>
                                    $paragraphe3.show('slow'); // show the third <p>
                                    $(this).html('&#8673;<br>masquer...'); 
                                }else {
                                    $paragraphe2.hide('slow'); // hide the second <p>
                                    $paragraphe3.hide("slow"); // hide the third <p>
                                    $(this).html("afficher la suite...<br>&#8675;");
                                    return false; // prevent the default action
                                };

                            });
                        });
                    </script>

                    <a href="../index.php"><button>ACCUEIL</button></a>

                </div>
                    <div class="belle__image">
                    <img src="../assets/belle.png" id="belle1" alt="Belle">
                    <img src="../assets/belle2.png" id="belle2" alt="Belle">
                </div>

            </div>  

        </section>

    </main>

</body>
</html>