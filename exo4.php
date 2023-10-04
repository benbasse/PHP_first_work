<?php
$prefixes = ["Néo", "Ultra", "Méga", "Super", "Hyper","Mini","Micro","Maxi"];
$suffixes = ["-kurama-ville", "Satoru_gojo", "bourg-sur-Mer", "ville-les-Bains", "-sur-Montagne","des Champs","des Étoiles","wano","mugiwara"];
function generernom($prefixes, $suffixes) {
    $prefix = $prefixes[array_rand($prefixes)]; 
    $suffix = $suffixes[array_rand($suffixes)]; 

    return $prefix . $suffix;
}
echo"LES NOMS FICTIFS DE CREATURES FANTASTIQUES \n";
for ($i = 0; $i < 7; $i++) {
    $nomRandom = generernom($prefixes, $suffixes);
    echo ($i + 1) . ". " . $nomRandom . "\n";
}
echo "LES NOMS FICTIFS DES VILLES :\n";
for ($i = 8; $i < 15; $i++) {
    $nomRandom = generernom($prefixes, $suffixes);
    echo ($i + 1) . ". " . $nomRandom . "\n";
}