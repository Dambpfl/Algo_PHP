<h1>Exercice 6</h1>

<?php

$phrase = "Prix unitaire de l'article";
$phrase2 = "Quantité";
$phrase3 = "Taux de TVA";
$phrase4 = "Le montant de la facture à régler est de";

$prix = 9.99;
$quantité = 5;
$tva = 0.2;

$totalPrix = $prix * $quantité;
$totalPrixTVA = $totalPrix * (1 + $tva);

echo $phrase." : ".$prix." € "."<br>";
echo $phrase2." : ".$quantité."<br>";
echo $phrase3." : ".$tva."<br>";
echo $phrase4." : ".$totalPrixTVA. " € ";
