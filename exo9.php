<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php

$age = 32;
$sexe = "F";

echo "Age : $age<br>";
echo "Sexe : $sexe<br>";


if($sexe === "F" && ($age >=18) && ($age <=35)) {    // si la personne est une femme entre 18 et 35 ans
    echo "La personne est imposable.<br>";  // elle est imposable
} else {
    if($sexe === "H" && $age >=20) {    // si la personne est un homme de plus de 20 ans
        echo "La personne est imposable.<br>";  // il est imposable
    } else {
        echo "La personne n'est pas imposable.<br>";    // sinon la personne n'est pas imposable
    }
}


// Version en utilsant switch case //

echo "<br>";
echo "Version switch case<br>";
switch ($sexe) {
    // si c'est une femme
    case "F":
        if(($age >=18) && ($age <=35)) {    // entre 18 et 35 ans elle est imposable
            echo "La personne est imposable.<br>";
        } else {    // sinon elle n'est pas imposable
            echo "La personne n'est pas imposable.<br>";
        }
        break;
        // si c'est un homme
    case "H": 
        if($age >=20) {     // de plus de 20 ans il est imposable
            echo "La personne est imposable.<br>";
        } else {    // sinon il n'est pas imposable
            echo "La personne n'est pas imposable.<br>";
        }
        break;
}
