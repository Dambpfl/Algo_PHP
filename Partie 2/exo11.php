<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php

$date = ("2018-02-23");

function formatDateFR($date) {
    $dateObjet = new DateTime($date);
    $format = new IntlDateFormatter("fr-FR",
    IntlDateFormatter::FULL, // DATE EN TOUTE LETTRE
    IntlDateFormatter::NONE, // HEURE + REGION
    "Europe/Paris",
    IntlDateFormatter::GREGORIAN);
    $infoDate = $format->format($dateObjet);
    return $infoDate;
}


echo formatDateFR($date);