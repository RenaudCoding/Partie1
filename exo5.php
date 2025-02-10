<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$montantFrancs = 100;

if (gettype($montantFrancs) == "double" || gettype($montantFrancs) == "integer") { // test du type d'entrée //
    echo "Montant en francs : $montantFrancs<br>";
    $montantEuros = round($montantFrancs / 6.55957, 2); // Conversion  si valeur numérique//
    echo "$montantFrancs francs = $montantEuros €<br>";
} else {
    echo "Veuillez saisir une valeur numérique !<br>";
}
