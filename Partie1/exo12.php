<h1>Exercice 12</h1>

<?php

$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach($personnes as $prenom => $language) {
    switch($language){
        case "FRA" : echo "Salut ".$prenom."<br>"; break;
        case "ESP" : echo "Hola ".$prenom."<br>"; break;
        case "ENG" : echo "Hello ".$prenom."<br>"; break;
    }
}
  

// trier de A à Z la variante $personnes
ksort($personnes)."<br>";
echo "<br>";


foreach($personnes as $prenom => $language) {
    switch($language){
        case "FRA" : echo "Salut ".$prenom."<br>"; break;
        case "ESP" : echo "Hola ".$prenom."<br>"; break;
        case "ENG" : echo "Hello ".$prenom."<br>"; break;
    }
}
