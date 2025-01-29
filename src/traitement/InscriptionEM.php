<?php
session_start();
session_destroy();
$inscription = new PDO('mysql:host=localhost;dbname=ecranmajestueux', 'root', '');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $role = "Client";

    $req = $inscription->prepare('INSERT INTO utilisateurs(nom,prenom,email,mot_de_passe,role) VALUES(:nom,:prenom,:email,:mot_de_passe,:role)');
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'mot_de_passe' => $mot_de_passe,
        'role' => $role
    ));

    echo "Votre compte a bien été inscrit !";
    header('Location: ../vue/ConnexionEM.html');

}


?>
</body>
</html>

 