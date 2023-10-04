<?php
function Devinette() {
    $nombreSecret = rand(0, 100);
    $tentatives = 0;
    $trouver = false;
    $erreurs = 0;
    $proche = false;
    $lettre =[];
    echo "Bienvenue dans le jeu de devinette du groupe 6 !\n";
    while (!$trouver) {
        $guess =intval(readline("Devinez le nombre (entre 1 et 100) : "));
        $lettre[]=$guess;
        $tentatives++;
        if ($guess < 1 || $guess > 100) {
            echo "Le nombre doit être entre 1 et 100.\n";
        } elseif ($guess < $nombreSecret) {
            echo "Plus grand !\n";
            if (abs($guess - $nombreSecret) <= 10) {
                echo "Vous êtes proche !\n";
                $proche = true;
            }
        } elseif ($guess > $nombreSecret) {
            echo "Plus petit !\n";
            if (abs($guess - $nombreSecret) <= 10) {
                echo "Vous êtes proche ! , le nombre se trouve dans une intervalle de 10\n";
                $proche = true;
            }
        } else {
            echo "Bravo ! Vous avez deviné le nombre en $tentatives tentatives.\n";
            echo "les nombres que vous avez saisie sont respectivement \n";
            print_r($lettre);
            if ($proche) {
                echo "Vous avez été proche avant de trouver!\n";
            }
            $trouver = true;
        }
        $erreurs = $erreurs + 1;
        echo "Nombre d'erreurs : $erreurs\n";
    }
    $rejouer = readline("Voulez-vous rejouer ? (oui/non) : ");
    if (strtolower($rejouer) === "oui") {
        Devinette();
    } else {
        echo "Merci d'avoir joué !\n";
    }
}
Devinette();