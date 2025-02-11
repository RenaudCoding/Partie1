<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

// notes de l'élèves //
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

$nbNotes = count($notes); // nombre de notes //
$sommeNotes = array_sum($notes); // somme des notes //
$moyenne = round($sommeNotes / $nbNotes, 2); // moyenne à 2 décimales

echo "Les notes obtenues par l'élève sont : ".implode(" ", $notes)."<br>"; // énumération des notes
echo "Sa moyenne générale est donc de : $moyenne<br>";
