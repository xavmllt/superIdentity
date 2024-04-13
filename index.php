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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="scripts/darkMode.js" defer></script>
    <script src="scripts/signature.js" defer></script>
    <title>Super Identity</title>
</head>
<body>
<header>
  <nav style="height: 50px" class="navbar navbar-expand-lg bg-body-tertiary">
    <div style="background-color: #e6e6e6" class="container-fluid bg">
      <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt="Logo superIdentity"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2 m-auto">
            <a class="nav-link active" aria-current="page" href="pages/rules.php">RÈGLES</a>
          </li>
          <li class="nav-item p-2 m-auto">
            <a class="nav-link active" aria-current="page" href="pages/avis.php">AVIS</a>
          </li>
          <li class="nav-item p-2 m-auto">
            <a class="nav-link active" aria-current="page" href="pages/messagerie.php">MESSAGERIE</a>
          </li>
          <li class="nav-item p-2 m-auto">
            <img src="assets/moon.svg" alt="Moon" onclick="changeDarkMode()">
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    <main>
        <section>
            <h1>Bienvenue sur Super Identity</h1>
            <p>T'es-tu déjà demandé à quelle super nana tu corresponds ?</p>
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