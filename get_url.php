<?php

/*$url = "https://www1.inscription.tn/ORegMx/servlet/AuthentificationEtud?ident=cin";
// Initialize session and set URL.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Get the response and close the channel.
$response = curl_exec($ch);
echo $response;
curl_close($ch);
*/


$postfields = array();
$postfields["cin"] = "14758624";
$postfields["cincap"] = "Tiger";


//url de la page de soumission
//ici mon annuaire (qui a un captcha donc inutile de tenter la soumission auto, c'est pour l'exemple)
$url = "https://www1.inscription.tn/ORegMx/servlet/AuthentificationEtud?ident=cin";
$useragent = "Mozilla/5.0";
$referer = $url;

//Initialise une session CURL
$ch = curl_init($url);
//CURL options
curl_setopt($ch, CURLOPT_POST, 1);
//On poste les données du tableau $postfields
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
//On définit un useragent ici Mozilla/5.0
//souvent les bots se font passés pour googlebot ce qui finalement est stupide
//On passe donc un useragent banal
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
//On passe un referrer ici on passe la même page $url
curl_setopt($ch, CURLOPT_REFERER, $referer);
//on récupère le contenu de la page de résultat de la soumission dans une chaine
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// en cas de redirection (facultatif ici)
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//Page de résultats et fermeture de session
$result = curl_exec($ch);
curl_close($ch);

//on peut faire un echo du résultat obtenu
echo $result;
