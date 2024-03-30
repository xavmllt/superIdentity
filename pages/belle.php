<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/belle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image.png" href="../assets/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Super Identity - Belle</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
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
            <div class="belle__image">
                <img src="../assets/belle.png" id="belle1" alt="Belle">
                <img src="../assets/belle2.png" id="belle2" alt="Belle">
            </div>
        </div>  
        </section>
    </main>
</body>
</html>