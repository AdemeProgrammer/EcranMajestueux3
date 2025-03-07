<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/AjoutFilmEM.css" rel="stylesheet">
</head>
<body>

<div class="imagedefond">
    <h2 class="form-title">Ajout Film</h2>
    <form method="POST" class="register-form" id="register-form" action="../src/traitement/trait_ajout_film.php">
        <div class="form-group">
            <label for="titre"></label>
            <input type="text" name="titre" id="titre" placeholder="Un titre" required/>
        </div>
        <div class="form-group">
            <label for="description"></label>
            <input type="text" name="description" id="description" placeholder="Une description" required/>
        </div>

        <div class="form-group">
            <label for="genre"></label>
            <input type="text" name="genre" id="genre" placeholder="Un genre" required/>
        </div>
        <div class="form-group">
            <label for="duree"></i></label>
            <input type="text" name="duree" id="duree" placeholder="Une duree" required/>
        </div>
        <div class="form-group">
            <label for="affiche"></label>
            <input type="text" name="affiche" id="affiche" placeholder="Un lien d'affiche" required/>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="boutonAjouterFilm" id="boutonAjouterFilm" value="Ajouter le Film"/>
        </div>

    </form>
</div>
<a href="AccueilEM.php">Retourner à l'accueil</a>
<br>
<a href="DeconnexionEM.php">Se déconnecter</a>
</body>
</html>