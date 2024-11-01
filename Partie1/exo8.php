<h1>Exercice 8</h1>

<?php

$tablemulti = 1;
$nb = 8;
$phrase = "Table de ".$nb." : "."<br>";


// methode 1
echo $phrase;

while($tablemulti <= 10){
    echo $tablemulti." x ".$nb." = ".$tablemulti*$nb."<br>";
    $tablemulti++;
}

echo "<br>";

// methode 2
echo $phrase;

for($tablemulti = 1; $tablemulti <= 10; $tablemulti++){
    echo $tablemulti." x ".$nb." = ".$tablemulti*$nb."<br>";
}