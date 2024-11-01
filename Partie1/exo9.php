<h1>Exercice 9</h1>

<?php

$age = 32;
$sexe = "F";

if(($sexe === "F" && $age >= 18 && $age <= 35) || ($sexe === "M" && $age >= 20)){
    $resultat = "imposable";
}else {
    $resultat = "non imposable";
}

$phrase = "La personne est ".$resultat.".";

echo "Age : ".$age."<br>";
echo "Sexe : ".$sexe."<br>";
echo $phrase."<br>";