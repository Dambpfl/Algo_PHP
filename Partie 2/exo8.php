<h1>Exercice 8</h1>

<p>Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>

<h2>Résultat</h2>

<?php

$url = "https://my.mobirise.com/data/userpic/764.jpg";
$repetition = 4;

function repeterImage($url, $repetition) {
    $afficherImage = "";
    for ($compteur = 0; $compteur < $repetition; $compteur++) {
        $afficherImage .= "<img src='$url'>";
    }
    return $afficherImage;

}

echo repeterImage($url, $repetition);

