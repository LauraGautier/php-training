<?php

// crée une fonction calculerMoyenne($notes) qui prend un tableau de notes et retourne la moyenne.
function calculerMoyenne($notes) {
    $total = 0;
    
    foreach ($notes as $note) {
        $total += $note;
    }
    
    $moyenne = $total / count($notes);
    
    return $moyenne;
}

$mesNotes = [15, 12, 18, 14];
echo calculerMoyenne($mesNotes);