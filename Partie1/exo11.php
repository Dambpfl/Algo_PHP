<h1>Exercice 11</h1>

<?php

$marques = array("Peugeot", "Renault", "BMW", "Mercedes");
$nbMarques = count($marques);

$phrase = "Il y a ".$nbMarques." marques de voitures dans le tableau :";

echo $phrase."<br>";

for ($i = 0; $i < $nbMarques; $i++) {
    echo $marques[$i]."<br>";
}