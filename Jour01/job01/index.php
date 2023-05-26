<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=pnj, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Création de la variable str
$str = "LaPlateforme";
echo $str; // Affiche "LaPlateforme"

// Création des variables str2 et str3
$str2 = "Vive";
$str3 = "!";

// Concaténation des variables
echo $str2 . "  " . $str . "  " . $str3; // Affiche "Vive LaPlateforme !"

// Création de la variable val
$val = 6;
echo $val; // Affiche 6

// Ajout de 4 à la variable val
$val += 4;
echo $val; // Affiche 10

// Création de la variable myBool
$myBool = True;
echo $myBool; // Affiche 1 (true est converti en 1 lors de l'affichage)

// Modification de la valeur de myBool à false
$myBool = False;
echo $myBool; // Affiche rien, car false est converti en une chaîne vide lors de l'affichage
?>

</body>
</html>