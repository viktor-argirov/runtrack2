<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Vérifier si le cookie "nbvisites" existe déjà, sinon l'initialiser à 0
if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 0;
} else {
    // Récupérer la valeur actuelle du cookie "nbvisites"
    $nbvisites = $_COOKIE['nbvisites'];
}

// Augmenter la valeur du cookie "nbvisites" à chaque visite
$nbvisites++;
setcookie('nbvisites', $nbvisites, time() + 86400); // Durée de vie du cookie : 1 jour (86400 secondes)

// Afficher le contenu du cookie "nbvisites"
echo "Nombre de visites : " . $nbvisites;

// Vérifier si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur en supprimant le cookie
    setcookie('nbvisites', '', time() - 3600); // Définir une date d'expiration antérieure pour supprimer le cookie
    $nbvisites = 0;
}

?>

<!-- Afficher le bouton "reset" -->
<form method="POST">
    <input type="submit" name="reset" value="Reset">
</form>
</body>
</html>