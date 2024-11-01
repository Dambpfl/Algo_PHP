<h1>Exercice 12</h1>

<p>A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Résultat</h2>

<?php

$tableauValeurs = [true, "texte", 10, 25.369,["valeur1", "valeur2"]];

function afficherDetails($tableauValeurs) {
   foreach($tableauValeurs as $tableau) {
    $resultat = var_dump($tableau);
   }
   return $resultat;
}

echo afficherDetails($tableauValeurs);