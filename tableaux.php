<?php

// écrire un tableau avec 5 prénoms, boucler dessus avec un foreach
$prenoms = ['Maxime', 'Laura', 'Jeanne', 'Jean-Jacques', 'Jonathan'];

foreach ($prenoms as $prenom) {
    echo $prenom . " ";
}

// écrire un tableau de 5 chiffres, boucler uniquement sur ceux supérieurs à 10
$nombres = [5, 12, 8, 20, 3];

foreach ($nombres as $nombre) {
    if ($nombre > 10) {
        echo $nombre . " ";
    }
}

// code une fonction pour trouver le max du tableau $T sans utiliser la fonction max()
function trouverMax($T) {
    $max = $T[0];
    foreach ($T as $nombre) {
        if ($nombre > $max) {
            $max = $nombre;
        }
    } 
    return $max;
}

$nombres = [5, 12, 8, 27, 3, 15];
echo trouverMax($nombres) . " ";

// code une fonction trouverMin($T) pour trouver le plus petit nombre du tableau
function trouverMin($T) {
    $min = $T[0];
    foreach ($T as $nombre) {
        if ($nombre < $min) {
            $min = $nombre;
        }
    }
    return $min;
}
$nombres = [15, 3, 28, 7, 12];
echo trouverMin($nombres);

// code une fonction compterPairs($T) qui compte combien il y a de nombres pairs dans un tableau
function compterPairs($T) {
    $pairs = 0;
    foreach ($T as $nombre) {
        if ($nombre % 2 == 0) {
            $pairs++;
        }
    }
    return $pairs;
}

$nombres = [1, 2, 3, 4, 5, 6, 7, 8];
echo compterPairs($nombres);