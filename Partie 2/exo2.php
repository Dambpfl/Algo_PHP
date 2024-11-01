<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <br>
$capitales = [France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"]; </p>
<p2>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</p2>

<h2>Résultat</h2>


<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];


function afficherTableHTML($capitales) {
    asort($capitales); // trier de A à Z
    $result = "<table border=1> 
                <thead>                      <!-- Entête -->
                    <tr>                     <!-- row/ligne d'entête -->
                         <th>Pays</th>       <!-- titre 1 -->
                         <th>Capitale</th>
                    </tr>
                </thead>                     <!-- fin de l'entête -->
            <tbody>"; // corps du tableau
    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>   <!-- data -->
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }
    $result .= "</tbody></table>"; // fin du corps et tableau
    return $result;
}

echo afficherTableHTML($capitales);