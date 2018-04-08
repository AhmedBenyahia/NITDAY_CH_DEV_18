<?php
session_start();
require connection.php;
function modif_passwd(){
	$bdd=connexionBD.getInstance();
	$numTel = htmlspecialchars($_POST['numTel']);
    $cin=$_SESSION['cin'];
    $req = $bdd->prepare('SELECT cin FROM etudiant WHERE  cin= :cin ');

    $req->execute(array('cin' => $cin));

    if (isset($req)) {$req = $bdd->prepare('UPDATE etudiant SET numTel = :numTel WHERE cin = :cin');
        $req->execute(array(
            'numTel' => $numTel,
            'cin' => $cin
        ));
        return true;
    }
    else return false;

}
?>