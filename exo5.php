<?php
$nombres = [15, 20, 10, 5, 50, 45, 20];
function moyenne($tableau) {
    $somme = array_sum($tableau);
    $moyenne = ($somme / count($tableau));
    return $moyenne;
}
$resultat = moyenne($nombres);
echo "La moyenne des nombres est : $resultat ";
function tableau($nombres, $moyenne) {
    $valeur_superieur = array();
    $valeur_inferieur = array();
    foreach ($nombres as $valeur) {
        if ($valeur > $moyenne) {
            $valeur_superieur[] = $valeur;
        } else {
            $valeur_inferieur[] = $valeur;
        }
    }
    return [
        $valeur_superieur,
        $valeur_inferieur
    ];
}
[$valeur_superieur, $valeur_inferieur] = tableau($nombres, $resultat);
echo "Voici le tableau contenant les valeurs supérieures à la moyenne :\n";
print_r($valeur_superieur);
echo "Voici le tableau contenant les valeurs inférieures à la moyenne :\n";
print_r($valeur_inferieur);
