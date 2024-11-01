<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2>Résultat</h2>


<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];


function afficherTableHTML($capitales) {
    asort($capitales); // trier de A à Z
    $result = "<table border=1> 
                <thead>                      <!-- Entête -->
                    <tr>                     <!-- row/ligne d'entête -->
                         <th>Pays</th>       <!-- titre 1 -->
                         <th>Capitale</th>
                         <th>Lien wiki</th>
                    </tr>
                </thead>                     <!-- fin de l'entête -->
            <tbody>"; // corps du tableau
    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>   <!-- data -->
                        <td>".ucfirst($capitale)."</td>
                        <td>"."<a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
                    </tr>";
    }
    $result .= "</tbody></table>"; // fin du corps et tableau
    return $result;
}

echo afficherTableHTML($capitales);