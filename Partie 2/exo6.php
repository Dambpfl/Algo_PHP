<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante($elements) {
    $selection = "<select name='civilite' id='civilite'>";
    foreach($elements as $civilite) {
        $selection .= "<option value='$civilite'>$civilite</option>";
    }
    $selection .= "</select>";
    return $selection;
}

echo alimenterListeDeroulante($elements);