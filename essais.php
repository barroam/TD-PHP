<?php

echo "hello <br>" ;
$nom = 'word';
echo $nom ;


$heure = date("H");


if ($heure < 12) {
   $message = " Bonjour";
} elseif($heure>15) {
   $message = " Bonjour, je sais tu fatigué ";
} elseif ($heure < 17) {
   $message = " Bonjour, bonne après-midi";
}
?> 