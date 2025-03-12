<?php

require_once'../src/bdd/Bdd.php';
require_once"../src/modele/Films.php";
require_once"../src/Repository/FilmsRepository.php";
require_once"../src/Repository/SceancesRepository.php";

$filmsRepository = new FilmsRepository();
$sceancesRepository = new SceancesRepository();

// Récupérer la liste des films
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
        <a href="UtilisateurEM.php">Utilisateur</a>
        <a href="CatalogueEM.php">Séances</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<div class="container">
    <?php foreach ($lesFilms as $film): ?>
        <div class="movie">
            <a href="ReservationEM.php?id_film=<?php echo $film['id_film']; ?>">
                <img src="<?php echo $film['affiche']; ?>" alt="<?php echo $film['titre']; ?>">
            </a>
            <div class="movie-info">
                <h2 class="movie-title">
                    <a href="ReservationEM.php?id_film=<?php echo $film['id_film']; ?>">
                        <?php echo $film['titre']; ?>
                    </a>
                </h2>
                <p class="movie-genre"><strong>Genre :</strong> <?php echo $film['genre']; ?></p>
                <p class="movie-duration"><strong>Durée :</strong> <?php echo $film['duree']; ?> minutes</p>
                <p class="movie-description"><?php echo $film['description']; ?></p>

                <!-- Récupérer toutes les séances pour ce film -->
                <h3>Séances :</h3>
                <?php
                // Vérifier si des séances sont disponibles pour ce film
                $seances = $sceancesRepository->seancesFilmId($film['id_film']); // On envoie l'ID du film
                if ($seances): // Si des séances existent
                    foreach ($seances as $seance): ?>
                        <div class="seance">
                            <p><strong>Date :</strong> <?php echo htmlspecialchars($seance['date']); ?></p>
                            <p><strong>Heure :</strong> <?php echo htmlspecialchars($seance['heure']); ?></p>
                            <p><strong>Salle :</strong> <?php echo htmlspecialchars($seance['salle']); ?></p>
                            <p><strong>Places disponibles :</strong> <?php echo htmlspecialchars($seance['nb_place_dispo']); ?></p>
                        </div>
                    <?php
                    endforeach;
                else:
                    ?>
                    <p>Aucune séance disponible pour ce film pour le moment.</p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>

<section id="contact" class="contact-section">
</section>

<hr>
<br>
<center><a style="color:white">Suivez-nous sur les réseaux sociaux (ou contactez-nous) :</a>
    <a href="https://www.facebook.com/share/18gNsJZcJq/" style="color: gold">Facebook</a><a style="color:white">,</a>
    <a href="https://www.instagram.com/ecranmajestueux/" style="color: gold">Instagram</a><a style="color:white">,</a>
    <a href="https://x.com/EcranM89780" style="color: gold">X</a></p></center>

</html>
