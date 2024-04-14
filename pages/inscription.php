<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/inscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <title>Super Identity - Inscription</title>
</head>
<body>
    <?php include "../components/header.php";?>
    <main>
        <section>
            <h1>SUPER INSCRIPTION</h1>
            <h2>Rejoins-le gang des super 🦸</h2>
            <h3>Tu pourras discuter avec les autres super 🔥</h3>
            <div class="form">
                <form action="../controller/inscriptionController.php" method="post">
                    <div class="form__contact">
                        <label for="pseudo" class="form__contact--red">Ton super pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" autofocus required>
                        <label for="email" class="form__contact--green">Ton super email :</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form__password">
                        <label for="password" class="password--blue">Ton super mot de passe :</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="form__submit">
                        <input type="submit" id="submit" name="submit" value="S'INSCRIRE">
                    </div>
                    <div class="form__link">
                    <a href="connexion.php">SE CONNECTER</a>
                    </div>
                    <div class="messages">
                        <?php echo @$messageVide;?>
                        <?php echo @$messageVerification;?>
                        <?php echo @$messageErreur;?>
                        <?php echo @$messageSuccess;?>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>