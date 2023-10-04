<?php

function aicha($heureDebut, $heureFin)
{
$dureeTotale= $heureFin-$heureDebut ;
$heure=floor($dureeTotale / 3600);
$minute = floor (($dureeTotale% 3600) / 60);
$seconde=floor ($dureeTotale% 60 );
return ("$heure H $minute M $seconde S");
}
echo aicha (60 , 84600);

?>