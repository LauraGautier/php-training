<?php

// crée une fonction multiplier($a, $b) qui retourne le produit de deux nombres.
function multiplier($a, $b) {
    return $a * $b;
}

$resultat = multiplier(5, 5);

echo $resultat;

// crée une fonction estPair($nombre) qui retourne true si le nombre est pair, false sinon et vérifie un nombre au choix.

function estPair($nombre) {
    return $nombre % 2 == 0;
}

if (estPair(10)) {
    echo " 10 est pair";
} else {
    echo " 10 est impair";
}