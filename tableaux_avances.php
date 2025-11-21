<?php

// crée un tableau associatif $film avec titre, année, réalisateur. Affiche "Le film [titre] de [realisateur] est sorti en [annee]." 
$film = [
    "titre" => "Gothika",
    "annee" => 2003,
    "realisateur" => "Mathieu Kassovitz"
];

echo "Le film " . $film["titre"] . " de " . $film["realisateur"] . " est sorti en " . $film["annee"] . ". ";

// crée un tableau $stock représentant un inventaire. Avec une boucle, affiche chaque fruit et sa quantité.
$stock = [
    "Pommes" => 50,
    "Bananes" => 30,
    "Oranges" => 20
];

foreach ($stock as $fruit => $quantite) {
    echo $fruit . " : " . $quantite . " unités - ";
}

// créé un tableau de 3 personnes, chaque personne a un prénom et un âge. Avec une boucle, affiche : "[Prénom] a [âge] ans."
$personnes = [
    ["prenom" => "Marie", "age" => 22],
    ["prenom" => "Paul", "age" => 24],
    ["prenom" => "Sophie", "age" => 21]
];

foreach ($personnes as $personne) {
    echo $personne["prenom"] . " a " . $personne["age"] . " ans. ";
}
