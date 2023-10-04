<?php
function COMPARAISONPHRASES($phrase1, $phrase2) { 
    $phrase1= readline("entrer phrase1: ");
    $phrase2= readline( "entrer phrase2: ");
 if ($phrase1 === $phrase2) { 
 echo "les phrases sont identiques";}
  else { 
   echo "les phrases ne sont pas identiques"; }
} 

$resultat=COMPARAISONPHRASES($phrase1, $phrase2);
?>
