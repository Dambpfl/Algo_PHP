<h1>Exercice 10</h1>

<?php

$montantPayer = 152;
$montantVerse = 200;
$restePayer = $montantVerse - $montantPayer;

echo "Montant à payer : ".$montantPayer." €"."<br>";
echo "Montant à versé : ".$montantVerse." €"."<br>";
echo "Reste à payer : ".$restePayer." €"."<br>";

// billets de 5/10€, pieces de 1/2€, sur le reste a payer

$nbBillets10 = 0;
$nbBillets5 = 0;
$nbPieces2 = 0;
$nbPieces1 = 0;

// tant que le reste à payer et inf à 10 alors +1 billets de 10 / -10€ sur le reste à payer
while($restePayer >= 10){
    $nbBillets10++;
    $restePayer -= 10;
}

// echo $restePayer."<br>";

while($restePayer >= 5){
    $nbBillets5++;
    $restePayer -= 5;
}

// echo $restePayer."<br>";

while($restePayer >= 2){
    $nbPieces2++;
    $restePayer -= 2;
}

// echo $restePayer."<br>";

while($restePayer >= 1){
    $nbPieces1++;
    $restePayer -= 1;
}

// echo $restePayer."<br>";

echo "***************************************************"."<br>";
echo "Rendue de monnaie :"."<br>";
echo $nbBillets10." billets de 10 € - ".$nbBillets5." billet de 5 € - ".$nbPieces2." pièce de 2 € - ".$nbPieces1." pièce de 1 €";
