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
    <link href="../assets/css/Suppression.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Suppression de Compte</h1>
    <p>Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.</p>
    <form action="/delete-account" method="POST">
        <button type="submit">Supprimer mon compte</button>
    </form>
</div>
</body>
</html>