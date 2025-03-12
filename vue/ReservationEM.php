<?php
require_once __DIR__ . '/../src/bdd/Bdd.php';
require_once __DIR__ . '/../src/traitement/trait_reservation.php';
require_once __DIR__ . '/../src/Repository/FilmsRepository.php';
require_once __DIR__ . '/../src/Repository/SceancesRepository.php';
require_once __DIR__ . '/../src/Repository/ReservationsRepository.php';


// Vérifier si le formulaire a été soumis
$filmsRepository = new FilmsRepository();
$sceancesRepository = new SceancesRepository();

// Vérifie si un ID de film est passé en paramètre
if (isset($_GET['id_film'])) {
    $idFilm = intval($_GET['id_film']);
    $film = $filmsRepository->getFilmById($idFilm); // Récupérer les infos du film
    $seances = $sceancesRepository->seancesFilmId($idFilm); // Récupérer les séances du film
} else {
    die("Aucun film sélectionné !");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - <?php echo htmlspecialchars($film['titre']); ?></title>
    <link href="../assets/css/ReservationEM.css" rel="stylesheet">
</head>
<body>

<header>
    <h1>Réserver des places pour "<?php echo htmlspecialchars($film['titre']); ?>"</h1>
    <a href="CatalogueEM.php">Retour au catalogue</a>
</header>

<div class="container">
    <!-- Affichage de l'affiche du film -->
    <div class="film-info">
        <img src="<?php echo $film['affiche']; ?>" alt="<?php echo $film['titre']; ?>" style="max-width: 300px; height: auto; display: block; margin: auto;">
        <p><strong>Genre :</strong> <?php echo htmlspecialchars($film['genre']); ?></p>
        <p><strong>Durée :</strong> <?php echo htmlspecialchars($film['duree']); ?> minutes</p>
        <p><strong>Description :</strong> <?php echo htmlspecialchars($film['description']); ?></p>
    </div>

    <!-- Formulaire de réservation -->
    <h3>Choisissez une séance :</h3>
    <form action="../src/traitement/trait_reservation.php" method="post">

        <input type="hidden" name="id_film" value="<?php echo $idFilm; ?>">

        <!-- Liste des séances -->
        <?php if (!empty($seances)): ?>
            <select name="id_sceance" required>
                <option value="">Sélectionnez une séance</option>
                <?php foreach ($seances as $seance): ?>
                    <option value="<?php echo $seance['id_sceance']; ?>">
                        <?php echo $seance['date'] . " - " . $seance['heure'] . " (Salle " . $seance['salle'] . ")"; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <!-- Nombre de places à réserver -->
            <label for="nb_places">Nombre de places :</label>
            <input type="number" name="nb_places" min="1" required>

            <br><br>
            <!-- Bouton de soumission -->
            <input type="submit" value="Réserver">
        <?php else: ?>
            <p>Aucune séance disponible pour ce film.</p>
        <?php endif; ?>
    </form>
</div>

</body>
</html>