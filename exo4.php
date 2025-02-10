<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

/*
Phrase Comparative : $phraseTest1
*/

// Lettres de la phrase en minuscule //
$phraseLower = mb_strtolower($phrase); 

// Suppression des espaces //
$phraseSpaceless = preg_replace("/\s+/","",$phraseLower); 

// Inversion des lettres //
$phraseTest1 = strrev($phraseSpaceless);

/* L'ensemble sur une seule ligne : $phraseTest2
*/
$phraseTest2 = strrev(mb_strtolower(preg_replace("/\s+/","",$phrase)));


/*
Comparaison
*/

//  Avec phraseTest1
if($phraseSpaceless == $phraseTest1) {
    echo "La phrase « $phrase » est un palindrome<br>";    
} else {
    echo "La phrase « $phrase » n'est pas un palindrome<br>";
}

//  Avec phraseTest2
if($phraseSpaceless == $phraseTest2) {
    echo "La phrase « $phrase » est un palindrome<br>";    
} else {
    echo "La phrase « $phrase » n'est pas un palindrome<br>";
}
