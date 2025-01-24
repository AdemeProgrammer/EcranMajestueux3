<?php
session_start();
if (isset($_POST['mot_de_passe'])) {
    $affirmsup = $_POST['suppression'];
    if ($affirmsup == "SUPPRESSION DE COMPTE") {
        $suppression = new PDO('mysql:host=localhost;dbname=ecranmajestueux', 'root', '');
        $req = $suppression->prepare('DELETE * FROM utilisateurs WHERE id_utilisateur=:id_utilisateur');
        $req->execute(array('id_utilisateur' => $_POST['id_utilisateur']));
        header("location:ConnexionEM.php");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suppression</title>
    <link href="ModificationSuppressionEM.css" rel="stylesheet">
</head>
<body>
<form>
    <hr>
    <a href="DeconnexionEM.php">Se déconnecter</a>
    <br>
    <a href="AccueilEM.php">Annuler la suppression</a>
    <h1>Supression du compte de : <?= $_SESSION['email']?></h1>
    <hr>
    <p>La suppression d'un compte est définitve. Il est donc impossible de revenir en arrière.</p>
    <p>De surcroît, ce site ne dispose pas de service client. Vous ne pourrez donc pas vous plaindre en cas de suppression de votre compte.</p>

    <p>Voulez vous supprimer votre compte ? Si oui, écrivez : "SUPPRESSION DE COMPTE"</p>
    <input type="text" name="suppression">
    <input type = "submit" name ="validation">

</form>
</body>
</html>