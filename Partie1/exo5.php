<h1>Exercice 5</h1>

<?php

$phrase = "Montant en ";
$monnais1 = "francs";
$monnais2 = "€";
$nbFrancs = 100;

// 1€ = 6,55957 francs

$valueEuro = $nbFrancs / 6.55957;
$roundEuro = round($valueEuro, 2);

echo $phrase.$monnais1." : ".$nbFrancs."<br>";
echo $nbFrancs." ".$monnais1." = ".$roundEuro." ".$monnais2;