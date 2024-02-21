<?php
echo "hello <br>"  ;
$nom = 'word';
echo $nom ;

//Bien sûr ! Voici un exemple simple de code PHP qui affiche un message de salutation en fonction de l'heure de la journée :

// Obtenir l'heure actuelle
$heure = date("H");

// Message de salutation en fonction de l'heure
if ($heure < 12) {
    $message = " Bonjour";
} elseif($heure>15) {
    $message = " Bonjour, je sais tu fatigué ";
} elseif ($heure < 17) {
    $message = " Bonjour, bonne après-midi";
}

// Affichage du message
echo $message;

// Initialisation du produit
$p = 1;

// Demander à l'utilisateur de saisir le nombre de notes
echo "Entrez le nombre de notes : ";
$n = intval(trim(fgets(STDIN)));

// Boucle pour saisir les notes et calculer le produit
for ($i = 1; $i <= $n; $i++) {
    echo "Entrez la note $i : ";
    $note[$i] = floatval(trim(fgets(STDIN)));
    $p *= $note[$i];
}

// Affichage du produit
echo "Votre produit est : $p\n";

$note = 3 ;

?>


