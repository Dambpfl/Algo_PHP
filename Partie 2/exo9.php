<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$elements = ["Masculin", "Feminin", "Autre"];

function afficherSexe($elements) {
    $boutonRadio ="";
    foreach($elements as $sexe){
        $boutonRadio .= "<input type='radio' id='$sexe' name='sexe' value='option'>
                         <label for='$sexe'>$sexe</label>"."<br>";
    }
    return $boutonRadio;
}

echo afficherSexe($elements);