<?php
session_start();
function inscrire()
{
    $bdd = ConnexionBD.getInstance();

        $cin=$_SESSION['cin'];
        $email=htmlspecialchars($_POST['email']);
        $req = $bdd->prepare('UPDATE etudiant SET email = :email WHERE cin = :cin');
        $req->execute(array(
            'email' => $email,
            'cin' => $cin
        ));

}
