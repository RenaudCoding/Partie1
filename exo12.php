<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
</p>
<p>Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG
</p>
<p>Affichage :</p>
<p>Salut Mickaël</p>
<p>Hola Virgile</p>
<p>Hello Marie-Claire</p>
<p>Variante : trier d’abord le tableau par ordre alphabétique du prénom
</p>
<p>Affichage :</p>
<p>Hello Marie-Claire</p>
<p>Salut Mickaël</p>
<p>Hola Virgile</p>


<h2>Résultat</h2>

<?php


// Tableau des prénoms et langues associées
$prenom_langue = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
    "Michel" => "FRA"
];


ksort($prenom_langue); // trier par odre alphabétique du prénom
foreach($prenom_langue as $prenom => $langue) {
    direbonjour($prenom, $langue);
}

function direBonjour($prenom, $langue) {
    switch($langue){
        case "FRA" :
            echo "Salut ".$prenom."<br>";
            break;
        case "ESP" :
            echo "Hola ".$prenom."<br>";
            break;
        case "ENG" :
            echo "Hello ".$prenom."<br>";
            break;
        default :
            echo "Langue non gérée pour ".$prenom."<br>";
    }
}























