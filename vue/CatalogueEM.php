 <?php

 require_once'../src/bdd/Bdd.php';
 require_once("../src/modele/Films.php");
 require_once("../src/Repository/FilmsRepository.php");
$filmsRepository = new FilmsRepository();
 $lesFilms = $filmsRepository->catalogueFilms();


?>
<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Films</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .movie {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            margin: 15px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .movie:hover {
            transform: translateY(-10px);
        }

        .movie img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .movie-info {
            padding: 15px;
        }

        .movie-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #000000;
        }

        .movie-description {
            font-size: 1em;
            color: #555;
        }
        .movie-genre {
            font-size: 1em;
            color: #333;
            font-weight: bold;
        }

        

        footer {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
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

    <footer>
        <p>&copy; 2025 Catalogue de Films. Tous droits réservés.</p>
    </footer>

</body>
 </html>






