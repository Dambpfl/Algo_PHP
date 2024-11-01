<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>

<?php

$informations = ["Nom :", "Prénom :", "E-mail: ", "Ville :"];
$sexes = ["Masculin", "Feminin"];
$metiers = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
$bouton = "Envoyer le formulaire";


function afficherInfos($informations) {
    $info = "";
    foreach($informations as $infos) {
        $info .= "<label for='$infos'>$infos</label><br>
                 <input type='text' id='$infos' name='$infos'>"."<br>";
    }
return $info;
}

// echo afficherInfos($informations)."<br>";

function choixSexe($sexes) {
    $boutonRadio = "";
    foreach($sexes as $sexe) {
        $boutonRadio .= "<input type='radio' id='$sexe' name='sexe' value='option'>
                        <label for='$sexe'>$sexe</label>";
    }
    return $boutonRadio."<br>";
}

// echo choixSexe($sexes)."<br>";

function choixMetier($metiers) {
    $selection = "<select name='metier' id='metier'>";
    foreach($metiers as $metier) {
        $selection .= "<option value='$metier'>$metier</option>";
    }
    $selection .= "</select>";
    return $selection."<br>";
}

// echo choixMetier($metiers)."<br>";

function callButton($bouton){
    $button = "<input type='submit' value='$bouton'>";
    return $button;
}

// echo callButton($bouton)."<br>";

function formulaire($informations, $sexes, $metiers, $bouton) {
    echo afficherInfos($informations)."<br>";
    echo choixSexe($sexes)."<br>";
    echo choixMetier($metiers)."<br>";
    echo callButton($bouton)."<br>";
}

echo formulaire($informations, $sexes, $metiers, $bouton)."<br>";








