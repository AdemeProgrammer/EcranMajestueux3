<?php

require_once '../src/bdd/Bdd.php';
$bdd = new Bdd();
$conn = $bdd->getBdd();

$sql = "SELECT * FROM utilisateurs";
$stmt = $conn->prepare($sql);
$stmt->execute();
$utilisateurs = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/AllUtilisateurs.css" rel="stylesheet">
</head>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Modification</th>
        <th>Suppression</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($utilisateurs as $utilisateur): ?>
        <tr>
            <td><?php echo ($utilisateur['nom']); ?></td>
            <td><?php echo ($utilisateur['prenom']); ?></td>
            <td><?php echo ($utilisateur['email']); ?></td>
            <td><?php echo ($utilisateur['role']); ?></td>
            <td>
                <a href="ModifAdmin.php?id_utilisateur=<?php echo $utilisateur['id_utilisateur']; ?>">Modifier</a>
            </td>
            <td>
                <a href="SuppressionAdminEM.php?id_utilisateur<?php echo $utilisateur['id_utilisateur']?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
