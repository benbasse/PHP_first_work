<?php
$prefixes = ["im", "in", "il", "ir", "mal", "re", "en"];
$suffixes = ["able", "age", "sion", "ance", "eux", "ment", "tion"];

function genererUnMot($prefixes, $suffixes) {
    $prefixAleatoire = $prefixes[array_rand($prefixes)];
    $suffixeAleatoire = $suffixes[array_rand($suffixes)];
    return $prefixAleatoire . $suffixeAleatoire;
}

echo "Les noms des villes :\n";
for ($i = 0; $i < 7; $i++) {
    $nomAleatoire = genererUnMot($prefixes, $suffixes);
    echo $nomAleatoire . "\n";
}
?>

