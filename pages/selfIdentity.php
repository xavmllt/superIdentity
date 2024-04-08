<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/selfIdentity.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Super Identity - Self Identity</title>
</head>
<body>
    <?php include "../components/header.php";?>
    <main>
        <section>
            <div class="self">
            <div class="self__description">
                <h1>Tu as TA propre Identité(e) !</h1>
                <p>Tu es en constante évolution, adaptable et ouvert(e) à de multiples perspectives. Ta flexibilité te permet de t'ajuster facilement aux changements. Tu es ouvert(e) à de nouvelles idées sans être trop rigide dans tes opinions ou choix, mais parfois cela rend difficile la prise de décisions fermes ou l'engagement complet dans des objectifs spécifiques.
                </p>
                <p>Ton approche non contraignante est une qualité car tu es adaptable et ouvert(e) d'esprit, prêt(e) à accepter de nouvelles idées et à t'adapter à différents environnements. Cependant, cela peut aussi être perçu comme un défaut, car cela peut donner l'impression de manquer de direction claire ou de fermeté dans tes convictions. 
                </p>
                <p>Tu es une exploratrice curieuse, mais cela peut aussi créer un sentiment de flottement, de manque de direction précise. En fin de compte, ta polyvalence est un atout pour embrasser la diversité des expériences, mais tu pourrais ressentir le besoin de trouver une stabilité ou une direction plus concrète pour te sentir pleinement épanoui(e).
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
        </div>  
        </section>
    </main>
</body>
</html>