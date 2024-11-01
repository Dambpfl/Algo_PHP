<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.</p>

<h2>Résultat</h2>

<?php

$phrase = "Mon texte en paramètre";

function convertirMajRouge($phrase, $color) {
    return "<p style='color:$color'>".mb_strtoupper($phrase)."</p>";
}

echo convertirMajRouge($phrase, 'red');