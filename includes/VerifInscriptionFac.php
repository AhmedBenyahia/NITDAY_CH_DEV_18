<?php
require 'verifFichier.php';
if(verifFichier(htmlspecialchars($_POST['recup'])) &&
verifFichier(htmlspecialchars($_POST['image']))&&
verifFichier(htmlspecialchars($_POST['cincopie']))) echo "demande envoye avec succes";

?>