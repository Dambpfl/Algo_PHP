<h1>Exercice 13</h1>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];


// implode = Rassemble les éléments d'un tableau en une chaîne
echo "Les notes obtenues par l'élève sont : ".implode(" ",$notes)."<br>";

$nbNotes = count($notes);

// array_sum = Calcule la somme des valeurs du tableau
$sommeNotes = array_sum($notes);

$moyenneNotes = round($sommeNotes / $nbNotes, 2);

echo "Sa moyenne générale est donc de : ".$moyenneNotes;