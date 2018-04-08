<?php
session_start();
require connection.php;
function updatePasswd(){
	$bdd=connexionBD.getInstance();
	$apasswd = htmlspecialchars($_POST['apasswd']);
    $npasswd = htmlspecialchars($_POST['npasswd']);
    $cin=$_SESSION['cin'];
    $req = $bdd->prepare('SELECT cin,passwd FROM etudiant WHERE passwd = :apasswd AND cin= :cin ');

    $req->execute(array(‘apasswd’ => $apasswd, 'cin' => $cin));

    if (isset($req)) {$req = $bdd->prepare('UPDATE etudiant SET passwd = :npasswd WHERE cin = :cin');
        $req->execute(array(
            'npasswd' => $npasswd,
            'cin' => $cin
        ));
        return true; 
    }
    else return false;

}