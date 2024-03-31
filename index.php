<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="icon" type=image/png href="assets/logo.png">
    <script src="scripts/darkMode.js" defer></script>
    <title>Super Identity</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="assets/logo.png" alt="Logo super nana"></a>
        </div>
        <nav>
            <ul>
                <img id="darkMode" src="assets/moon.svg" alt="Lune" onclick="changeDarkMode()"> 
                <a href="pages/messagerie.php"><li>MESSAGERIE</li></a>
                <a href="#"><li>CHAT</li></a>
                <a href="pages/rules.php"><li>RÈGLES</li></a>
                <a href="pages/avis.php"><li>AVIS</li></a>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Bienvenue sur Super Identity</h1>
            <p>T'es tu déjà demandé à quel super nana tu corresponds ?</p>
            <div class="supernana">
                <img src="assets/rebelle.png" alt="Rebelle">
                <img src="assets/belle.png" alt="Belle">
                <img src="assets/bulle.png" alt="Bulle">
            </div>
            <a href="pages/question1.php"><button>JOUER</button></a>
        </section>
    </main>
    <footer>
        <div class="marque">
            &copy;SUPER IDENTITY
        </div>
    </footer>
</body>
</html>