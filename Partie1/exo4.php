<h1>Exercice 4</h1> 

<?php

$phrase = "Engage le jeu que je gagne"; 
$phrase2 = strrev($phrase);

$compare = str_replace(" ","",$phrase);
$compare1 = str_replace(" ","",$phrase2);

$compare = mb_strtolower($compare);
$compare1 = mb_strtolower($compare1);


$sim = similar_text($compare, $compare1, $perc);

echo $compare."<br>";
echo $compare1."<br>";

echo "Similarité: $sim ($perc %)"."<br>";

if($perc == 100){
    $resultat = "La phrase « $phrase » est un palindrome";
} else {
    $resultat = "La phrase « $phrase » n'est pas un palindrome";
}

echo $resultat;