<?php
require_once '../bdd/Bdd.php';
require_once '../Repository/UtilisateursRepository.php';
require_once '../../vue/SuppressionAdminEM.php';
require_once '../modele/Utilisateurs.php';

if (isset($_GET['id_utilisateur'])) {
    $id_utilisateur = $_GET['id_utilisateur'];

    $utilisateursRepo = new UtilisateursRepository();

    $resultat = $utilisateursRepo->suppUtilisateursAdmin($id_utilisateur);

    if ($resultat) {
        echo "L'utilisateur a bien été supprimé. Bravo cher Admin !";
    } else {
        echo "Il y a eu un problème lors de la suppression de l'utilisateur. Courage Admin !";
    }

    header("Location: AllUtilisateurs.php");
    exit();
} else {
    echo "Avant de pouvoir supprimer un compte, il faut en sélectionner un.";
}
?>