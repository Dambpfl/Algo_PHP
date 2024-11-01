<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés. </p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

function afficherInput($nomsInput) {
    $result = "";
    foreach($nomsInput as $civilite) {
        $result .= "<label for='$civilite'>$civilite</label><br>
                   <input type='text' id='$civilite' name='$civilite'>"."<br>";
        
    }
return $result;
 }

echo afficherInput($nomsInput);