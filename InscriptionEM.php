<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="Inscription.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


<h2 class="form-title">Inscription</h2>
<form method="POST" class="register-form" id="register-form" action="inscription.php">
    <div class="form-group">
        <label for="name"><i class="zmdi zmdi-account "></i></label>
        <input type="text" name="name" id="name" placeholder="Votre nom" required/>
    </div>
    <div class="form-group">
        <label for="prenom"><i class="zmdi zmdi-account"></i></label>
        <input type="text" name="prenom" id="forname" placeholder="Votre prenom" required/>
    </div>

    <div class="form-group">
        <label for="email"><i class="zmdi zmdi-email"></i></label>
        <input type="email" name="email" id="email" placeholder="Votre Email" required/>
    </div>
    <div class="form-group">
        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
        <input type="password" name="pass" id="pass" placeholder="Votre mot de passe" required/>
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
<a href="connexion.html">Je suis déjà membre</a>
</div>
</div>
</section>

</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

<?php
session_start();
session_destroy();
$inscription = new PDO('mysql:host=localhost;dbname=.ecranmajestueux', 'root', '');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $req = $inscription->prepare('INSERT INTO utilisateurs(nom,prenom,email,mot_de_passe) VALUES(:nom,:prenom,:email,:mot_de_passe)');
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'mot_de_passe' => $mot_de_passe,
    ));

    echo "Votre compte a bien été inscrit !";
    header('Location: Connexion.php');

}
?>
</body>
</html>