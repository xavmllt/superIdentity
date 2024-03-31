<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/connexion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <title>Super Identity - Connexion</title>
</head>
<body>
    <?php include "../components/headerQuestion.php";?>
    <main>
        <section>
            <h1>SUPER CONNEXION</h1>
            <div class="form">
                <form method="post">
                    <div class="form__contact">
                        <label for="pseudo" class="form__contact--red">Ton super pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" autofocus require>
                        <label for="email" class="form__contact--green">Ton super email :</label>
                        <input type="email" name="email" id="email" require>
                    </div>
                    <div class="form__password">
                        <label for="password" class="password--blue">Ton super mot de passe :</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form__submit">
                        <input type="submit" id="submit" name="submit">
                    </div>
                    <div class="form__link">
                    <a href="connection.php">SE CONNECTER</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>