<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>
<p>Poussin : entre 6 et 7 ans</p>
<p>Pupille : entre 8 et 9 ans</p>
<p>Minime : entre 10 et 11 ans</p>
<p>Cadet : à partir de 12 ans</p>
<p>Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

$age = 10.5;

// Si l'enfant entre dans une catégorie //
if ($age >= 6) { 
    if($age < 8) {
        $catégorie = "Poussin";
    } elseif ($age >= 8 && $age < 10) {
        $catégorie = "Pupille";
    } elseif ($age >= 10 &&  $age < 12) {
        $catégorie = "Minime";
    } else {
        $catégorie = "Cadet";
    }
    echo "L'enfant qui a $age ans appartient à la catégorie « $catégorie »<br>";
// Si l'enfant n'entre pas dans une catégorie //
} else { 
    echo "L'enfant n'entre pas dans une catégorie<br>";
}
