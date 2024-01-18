<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="/superIdentity/formulaire/regex.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Super Identity - Contact</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="/superIdentity/index.html"><img src="/superIdentity/images/logo.jpg" alt="Logo super nana"></a>
        </div>
        <nav>
            <ul>
                <a href="/superIdentity/regles/rules.html"><li>RÈGLES</li></a>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>SUPER FEEDBACK</h1>

            <div class="form">
                <form action="" method="post">
                    <div class="form__contact">
                        <label for="pseudo" class="form__contact--red">Ton super pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" autofocus>
                        <label for="email" class="form__contact--green">Ton super email :</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form__area">
                        <label for="textarea" class="textarea--blue">Ton super commentaire :</label>
                        <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form__submit">
                        <input type="submit" id="submit">
                    </div>
                </form>
            </div>
        </section>
    </main>

<?php
include_once("connexion.php");
?>
</body>
</html>