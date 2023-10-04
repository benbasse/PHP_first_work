<?php

function comparaison_Phrases($phrase1, $phrase2) {
    if ($phrase1 === $phrase2) {
        return "Les phrases sont identiques.";
    } else {
        return "Les phrases sont différentes.";
    }
}
$phrase1 = readline("Entrez la première phrase : ");
$phrase2 = readline("Entrez la deuxième phrase : ");

$resultat = comparaison_Phrases($phrase1, $phrase2);
echo $resultat . "\n";