<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Admin</title>
    <link href="../assets/css/InscriptionConnexionEM.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>
<>

<div class="imagedefond">
    <h2 class="form-title">Inscription</h2>
    <form method="POST" class="register-form" id="register-form" action="../src/traitement/trait_ajout.php">
        <div class="form-group">
            <label for="nom"><i class="zmdi zmdi-account "></i></label>
            <input type="text" name="nom" id="nom" placeholder="Votre nom" required/>
        </div>
        <div class="form-group">
            <label for="prenom"><i class="zmdi zmdi-account"></i></label>
            <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required/>
        </div>

        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-email"></i></label>
            <input type="email" name="email" id="email" placeholder="Votre Email" required/>
        </div>
        <div class="form-group">
            <label for="mot_de_passe"><i class="zmdi zmdi-lock"></i></label>
            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Votre mot de passe" required/>
        </div>

        <div class="form-group">
            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte toutes les déclarations dans les  <a href="#" class="term-service">conditions d'utilisation</a></label>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="signup" id="signup" class="form-submit" value="S'inscrire"/>
        </div>


    </form>
</div>
<a href="ConnexionEM.php">Je suis déjà membre</a>
<br>
<a href="InscriptionEM.php">Je veux créer un compte client</a>
</body>
</html>