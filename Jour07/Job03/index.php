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
session_start();

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer le prénom saisi dans le champ de texte
    $prenom = $_POST['prenom'];

    // Vérifier si la variable de session existe déjà, sinon l'initialiser avec un tableau vide
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = array();
    }

    // Ajouter le prénom à la variable de session
    $_SESSION['prenoms'][] = $prenom;
}

// Vérifier si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Réinitialiser la variable de session en la vidant
    $_SESSION['prenoms'] = array();
}

// Afficher tous les prénoms saisis
if (isset($_SESSION['prenoms'])) {
    echo "Prénoms saisis :";
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>" . $prenom . "</li>";
    }
    echo "</ul>";
}

?>

<!-- Formulaire de saisie du prénom -->
<form method="POST">
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="submit" name="submit" value="Ajouter">
    <input type="submit" name="reset" value="Reset">
</form>

</body>
</html>