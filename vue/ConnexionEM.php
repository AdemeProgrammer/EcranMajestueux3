<html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="../assets/css/ConnexionEM.css   " rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<hr>
<h1>Connexion</h1>
<hr>
<form action ="../src/traitement/trait_connexion.php" method="post">
    <div class="form-group">
        <label for="email"><i class="zmdi zmdi-email"></i></label>
        <input type="email" name="email" id="email" placeholder="Votre Email" required/>
    </div>
    <div class="form-group">
        <label for="mot_de_passe"><i class="zmdi zmdi-lock"></i></label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Votre mot de passe" required/>
    </div>
    <input type = "submit" name ="validation">
    <style>
        body{
            background-color: black;
        }
        h1 {
            color: gold;
            font-size: 3rem;
            position: absolute;
            top: 20px;
            left: 20px;
            margin: 0;
            letter-spacing: 1px;
        }
    </style>

</form>
<a href ="InscriptionEM.php"><p>Vous n'êtes pas un membre majestueux ?</p></a>
</body>
</html>

