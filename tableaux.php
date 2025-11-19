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