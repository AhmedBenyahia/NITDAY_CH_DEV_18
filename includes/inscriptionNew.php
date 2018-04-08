<?php
require  'Connexion.php';



    $bdd = ConnexionBD::getInstance();

    $cin = htmlspecialchars($_POST['cin']);
    $passwd = htmlspecialchars($_POST['passwd']);

    $req = $bdd->prepare('SELECT cin,passwd FROM etudiant WHERE passwd = :passwd AND cin= :cin ');

    $req->execute(array('passwd' => $passwd, 'cin' => $cin));

    if ($req->fetch()) {

        $email=htmlspecialchars($_POST['email']);
        $numTel=htmlspecialchars($_POST['numTel']);
        $req = $bdd->prepare('UPDATE etudiant SET email = :email, numTel = :numTel WHERE cin = :cin');
        $req->execute(array(
            'email' => $email,
            'numTel' => $numTel,
            'cin' => $cin
        ));

        $_SESSION['cin'] = $_POST['cin'];
        header("location:../me/index.php");

    } else
    {
        echo "<script> alert(\"vous n etes pas inscrits\")</script>";
        //header('Location:../view/acceuil.php');
    }
