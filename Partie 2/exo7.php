<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = ["Choix 1", "Choix 2", "Choix 3"];

function genererCheckbox($elements) {
    $checkbox = "";
    foreach($elements as $choix) {
        $checkbox .= "<input type='checkbox' id='$choix' name='choix' value='$choix'/>
                      <label for='$choix'>$choix</label>"."<br>";     
    }
    return $checkbox;
}

echo genererCheckbox($elements);