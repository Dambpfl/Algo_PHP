<h1>Exercice 7</1><br>

<?php

$age = 10;

if($age >= 6 && $age <= 7) {
    $resultat = "Poussin";
}elseif($age >= 8 && $age <= 9) {
    $resultat = "Pupille";
}elseif($age >= 10 && $age <= 11) {
    $resultat = "Minime";
}elseif($age >= 12) {
    $resultat = "Cadet";
}

$phrase = "L'enfant qui a ".$age." appartient à la catégorie « ".$resultat." »";

echo $phrase;