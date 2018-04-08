
<?php
session_start();
require 'Connexion.php';


echo 'hi';
    $bdd = ConnexionBD::getInstance();

    $cin = htmlspecialchars($_POST['cin']);
    $motDePasse = htmlspecialchars($_POST['motDePasse']);

    $req = $bdd->prepare('SELECT cin,passwd FROM etudiant WHERE passwd = :motDePasse AND cin= :cin ');

    $req->execute(array('motDePasse' => $motDePasse, 'cin' => $cin));

    if ($req->fetch()) {
       $donne=$req->fetch();
     if(!isset($donne['email'])){
         echo "email";
         header('Location:../view/acceuil.php');
     }
    // Set username session variable
    echo "is set";

    $_SESSION['cin'] = $_POST['cin'];
        header("location:../me/index.php");

    }
else {
    echo "vous n etes pas inscrits";
    header('Location:../view/acceuil.php');


}


?>

