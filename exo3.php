<?php 
function calculerDuree($heureDebut, $heureFin) {
    $debut = DateTime::createFromFormat('H:i', $heureDebut);
    $fin = DateTime::createFromFormat('H:i', $heureFin);
    $debut_secondes = $debut->format('U');
    $fin_secondes = $fin->format('U');
    $difference_secondes = abs($fin_secondes - $debut_secondes);
    $difference = $debut->diff($fin);
    $duree = $difference->format('%h heures, %i minutes');
    $duree_secondes = $difference_secondes . ' secondes';

    return [
        'duree' => $duree,
        'duree_secondes' => $duree_secondes,
    ];
}
$heureDebut = '9:30';
$heureFin = '14:45';
$durees = calculerDuree($heureDebut, $heureFin);
echo "La durée entre $heureDebut et $heureFin est de {$durees['duree']}.\n";
echo "La durée en secondes est de {$durees['duree_secondes']}.\n";
$dateActuelle = date('j F Y');
echo " Aujourd'hui c'est le $dateActuelle \n";
function estBissextile($annee) {
    return ((($annee % 4 == 0) && ($annee % 100 != 0)) || ($annee % 400 == 0));
}
$annee = 2023;
if (estBissextile($annee)) {
    echo "$annee est une année bissextile.\n";
} else {
    echo "$annee n'est pas une année bissextile.\n";
}