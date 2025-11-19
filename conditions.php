<?php

// écrire une condition avec un if/else
$age = 16;

if ($age < 18) {
    echo "Désolée, tu peux pas boire! ";
    } else {
    echo "Cool, tu peux boire! ";
};

// écrire une condition avec plusieurs else if
$temperature = 28;

if ($temperature > 25) {
    echo "Wow, il fait chaud ";
} else if ($temperature >= 15 && $temperature <= 25) {
    echo "Ca va ";
} else if ($temperature <15) {
    echo "Oh la vache il fait froid ";
};

// écrire une condition avec des nombres égaux
$nombre1 = 5;
$nombre2 = 5;

if ($nombre1 == $nombre2) {
    echo "Ils sont égaux";
} else if ($nombre1 > $nombre2) {
    echo $nombre1; 
} else if ($nombre1 < $nombre2) {
    echo $nombre2;
};
