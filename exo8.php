<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :</p>
<p>Affichage (pour la table de 8) :</p>
<p>Table de 8 :</p>
<p>1 x 8 = 8</p>
<p>2 x 8 = 16</p>
<p>3 x 8 = 24 …</p>
<p>Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php

// Première solution : boucle FOR //
$nombre = 8;

echo "Table de $nombre : ( boucle for)<br>";
for($i=1; $i <= 10; $i = $i + 1) {
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat<br>";
}

// Deuxième solution : boucle FOREACH //
echo "Table de $nombre : ( boucle foreach)<br>";
foreach(range(1,10) as $multiple) {
    $resultat = $multiple * $nombre;
    echo "$multiple x $nombre = $resultat<br>";
}
