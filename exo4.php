<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

/*
Phrase Comparative : $phraseTest
*/

// Lettres de la phrase en minuscule //
$phraseLower = mb_strtolower($phrase); 

// Suppression des espaces //
$phraseSpaceless = preg_replace("/\s+/","",$phraseLower); 

// Inversion des lettres //
$phraseTest = strrev($phraseSpaceless);

/*
Comparaison
*/

if($phraseSpaceless == $phraseTest) {
    echo "La phrase « $phrase » est un palindrome<br>";    
} else {
    echo "La phrase « $phrase » n'est pas un palindrome<br>";
}

