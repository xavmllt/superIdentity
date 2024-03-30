<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/rebelle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Super Identity - Rebelle</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <div class="rebelle">
            <div class="rebelle__description">
                <h1>REBELLE</h1>
                <p>Rebelle incarne la force brute et la détermination parmi les Supers Nanas, portant en elle un courage inébranlable et une volonté farouche de protéger ceux qu'elle aime. Elle est l'audace incarnée, prête à se lancer tête baissée dans l'action pour défendre ses idéaux et ceux qui lui sont chers. Son esprit combatif et sa loyauté indéfectible en font un pilier de force au sein du trio.</p>
                <p>En tant que figure de leadership, Rebelle prend souvent l'initiative lors des situations dangereuses, guidée par une détermination sans faille. Son courage inspirant et sa volonté inébranlable de se dresser contre l'injustice en font une protectrice féroce. Cependant, sa nature impulsive peut parfois la conduire à agir sans réfléchir, créant des tensions au sein du groupe.</p>
                <p>Rebelle, avec sa force extraordinaire et son esprit intrépide, est une figure charismatique et protectrice au sein des Supers Nanas. Sa volonté de fer et son courage indomptable font d'elle une défenseure sans pareil, bien que sa nature impulsive puisse parfois entraîner des frictions au sein du trio.</p>
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
            <div class="rebelle__image">
                <img src="../assets/rebelle2.png" id="rebelle2" alt="Rebelle">
            </div>
            </div>
        </section>
    </main>
</body>
</html>