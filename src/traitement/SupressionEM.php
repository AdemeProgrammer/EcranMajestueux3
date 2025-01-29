<?php
session_start();
if (isset($_POST['mot_de_passe'])) {
    $affirmsup = $_POST['suppression'];
    if ($affirmsup == "SUPPRESSION DE COMPTE") {
        $suppression = new PDO('mysql:host=localhost;dbname=ecranmajestueux', 'root', '');
        $req = $suppression->prepare('DELETE * FROM utilisateurs WHERE id_utilisateur=:id_utilisateur');
        $req->execute(array('id_utilisateur' => $_POST['id_utilisateur']));
        header("location:../vue/ConnexionEM.html");
    }
}
?>
