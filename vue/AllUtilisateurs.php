<?php

require_once '../src/bdd/Bdd.php';
$bdd = new Bdd();
$conn = $bdd->getBdd();

$sql = "SELECT * FROM utilisateurs";
$stmt = $conn->prepare($sql);
$stmt->execute();
$utilisateurs = $stmt->fetchAll();
?>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Actions</th>
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
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>