<?php
require Connexion.php;
function verifExistance()
{


    $bdd = ConnexionBD.getInstance();

    $cin = htmlspecialchars($_POST['cin']);
    $passwd = htmlspecialchars($_POST['passwd']);}