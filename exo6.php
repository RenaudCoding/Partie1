<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

// Valeurs d'entrée //
$prixUnitaire = 9.99;
$quantité  = 5;
$tauxTVA = 0.2;

// Calcul du montant de la facture //
$montantFacture = $prixUnitaire * $quantité * (1 + $tauxTVA);

//Affichage 
echo "Prix unitaire de l'article : $prixUnitaire €<br>";
echo "Quantité : $quantité<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de : $montantFacture €<br>";
