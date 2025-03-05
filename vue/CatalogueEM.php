<?php

require_once'../src/bdd/Bdd.php';
require_once("../src/modele/Films.php");
require_once("../src/Repository/FilmsRepository.php");
$filmsRepository = new FilmsRepository();
$lesFilms = $filmsRepository->catalogueFilms();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Films</title>
    <link href="../assets/css/CatalogueEM.css" rel="stylesheet">
</head>
<body>

<header>
    <h1>Catalogue de Films</h1>
    <nav>
        <a href="AccueilEM.php">Accueil</a>
        <a href="#films">Films à l'affiche</a>
        <a href="#">Utilisateur</a>
        <a href="SceanceEM.php">Séances</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<div class="container">
    <?php foreach ($lesFilms as $film): ?>
        <div class="movie">
            <img src="<?php echo htmlspecialchars($film['affiche']); ?>" alt="<?php echo htmlspecialchars($film['titre']); ?>">
            <div class="movie-info">
                <h2 class="movie-title"><?php echo htmlspecialchars($film['titre']); ?></h2>
                <p class="movie-genre"><strong>Genre :</strong> <?php echo htmlspecialchars($film['genre']); ?></p>
                <p class="movie-duration"><strong>Durée :</strong> <?php echo htmlspecialchars($film['duree']); ?> minutes</p>
                <p class="movie-description"><?php echo htmlspecialchars($film['description']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
<section id="contact" class="contact-section">
</section>
<hr>
<br>
<center><a style="color:white">Suivez-nous sur les réseaux sociaux (ou contacter nous):</a> <a href="https://www.facebook.com/share/18gNsJZcJq/" style="color: gold">Facebook</a><a style="color:white">,</a> <a href="https://www.instagram.com/ecranmajestueux/" style="color: gold">Instagram</a><a style="color:white">,</a> <a href="https://x.com/EcranM89780" style="color: gold">X</a></p></center>
</html>