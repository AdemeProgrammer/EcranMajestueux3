<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Film</title>
    <link href="../assets/css/SceanceEM.css" rel="stylesheet">
</head>
<body>

<div class="imagedefond">
    <h2 class="form-title">Ajout Séance</h2>
    <form method="POST" class="register-form" id="register-form" action="../src/traitement/trait_ajout_sceance.php">
        <div class="form-group">
            <label for="date"></label>
            <input type="date" name="date" id="titre" placeholder="Une date" required/>
        </div>
        <div class="form-group">
            <label for="heure"></label>
            <input type="time" name="heure" id="heure" placeholder="Une heure" required/>
        </div>
        <div class="form-group">
            <label for="salle"></i></label>
            <input type="number" name="salle" id="salle" placeholder="Une salle" required/>
        </div>
        <div class="form-group">
            <label for="nb_place_dispo"></label>
            <input type="number" name="nb_place_dispo" id="nb_place_dispo" placeholder="Nombre de place disponible" required/>
        </div>
        <div class="form-group">
            <label for="ref_film"></label>
            <input type="number" name="ref_film" id="ref_film" placeholder="L'id du film" required/>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="boutonAjouterSceance" id="boutonAjouterSceance" value="Ajouter la scéance"/>
        </div>

    </form>
</div>
<a href="AccueilEM.php">Retourner à l'accueil</a>
<br>
<a href="DeconnexionEM.php">Se déconnecter</a>
</body>
</html>