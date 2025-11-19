<?php

// afficher tous les nombres de 1 à 10 avec une boucle for
for ($i = 0; $i <= 10; $i++) {
    echo $i . " / ";
};

// afficher tous les nombres pairs entre 1 et 100
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
            echo $i . " - ";
    }
};

// afficher tous les nombres pairs entre 1 et 100 (autre méthode)
for ($i = 0; $i <= 100; $i += 2) {
    echo $i . " - ";
}

// afficher la table de 7 (format 7 * 1 = 7)
for ($i = 1; $i <= 10; $i++) {
    echo "7 x " . $i . " = " . (7 * $i) . " / ";
}
