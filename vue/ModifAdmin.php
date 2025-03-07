<?php
session_start();

if (isset($_GET['id_utilisateur'])) {
    $id_utilisateur = $_GET['id_utilisateur'];

    require_once '../src/bdd/Bdd.php';
    require_once '../src/Repository/UtilisateursRepository.php';

    $bdd = new Bdd();
    $conn = $bdd->getBdd();

    $utilisateursRepository = new UtilisateursRepository();
    $sql = "SELECT * FROM utilisateurs WHERE id_utilisateur = :id_utilisateur";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id_utilisateur' => $id_utilisateur]);
    $utilisateur = $stmt->fetch();

    if (!$utilisateur) {
        echo "Utilisateur non trouvé!";
        exit();
    }
} else {
    echo "ID utilisateur manquant!";
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif de compte (Admin)</title>
    <link href="../assets/css/InscriptionEM.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<form action="../src/traitement/trait_modif_admin.php" method="POST">
    <input type="hidden" name="id_utilisateur" value="<?php echo $utilisateur['id_utilisateur']; ?>">

    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="<?php echo ($utilisateur['nom']); ?>" required>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" value="<?php echo ($utilisateur['prenom']); ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo ($utilisateur['email']); ?>" required>

    <label for="role">Rôle:</label>
    <select name="role">
        <option value="user" <?php if ($utilisateur['role'] == 'Client') echo 'selected'; ?>>Client</option>
        <option value="admin" <?php if ($utilisateur['role'] == 'Admin') echo 'selected'; ?>>Administrateur</option>
    </select>

    <input type="submit" value="Modifier le compte">
</form>

