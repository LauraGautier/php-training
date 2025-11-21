<?php

// crée un tableau associatif $film avec titre, année, réalisateur. Affiche "Le film [titre] de [realisateur] est sorti en [annee]." 
$film = [
    "titre" => "Gothika",
    "annee" => 2003,
    "realisateur" => "Mathieu Kassovitz"
];

echo "Le film " . $film["titre"] . " de " . $film["realisateur"] . " est sorti en " . $film["annee"] . ".";