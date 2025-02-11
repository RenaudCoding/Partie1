<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<h2>Résultat</h2>

<?php

$montantPayer = 152;
$montantVersé = 200;
$resteApayer = $montantVersé - $montantPayer;

echo "Montant à payer : $montantPayer €<br>";
echo "Montant versé : $montantVersé €<br>";
echo "Reste à payer : $resteApayer €<br>";
echo "****************************************************<br>";
echo "Rendue de monnaie :<br>";

// Nombre de billet de 10 € à rendre
$billets10 = floor($resteApayer / 10); // nombre de billet de 10 €
$restant = $resteApayer - ($billets10 * 10); // somme restante en conséquence
echo "$billets10 billets de 10 € - ";

// Nombre de billet de 5 € à rendre
$billets5 = floor($restant / 5); // nombre de billet de 5 €
$restant = $restant - ($billets5 * 5); // somme restante en conséquence
echo "$billets5 billet de 5 € - ";

// Nombre de pièce de 2 € à rendre
$pièces2 = floor($restant / 2); // nombre de pièce de 2 €
$restant = $restant - ($pièces2 *2); // somme restante en conséquence
echo "$pièces2 pièce de 2 € - ";

// Nombre de pièce de 1 € à rendre 
echo "$restant pièce de 1 €";

