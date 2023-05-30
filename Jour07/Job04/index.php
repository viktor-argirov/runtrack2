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
if (isset($_POST['connexion'])) {
    // Récupérer le prénom saisi dans le champ de texte
    $prenom = $_POST['prenom'];

    // Créer un cookie "prenom" avec la valeur saisie
    setcookie('prenom', $prenom, time() + 86400); // Durée de vie du cookie : 1 jour (86400 secondes)

    // Rediriger vers la même page pour éviter de re-poster le formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Vérifier si l'utilisateur est déjà connecté en vérifiant l'existence du cookie "prenom"
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour " . $prenom . " !";
    echo '<form method="POST">
              <input type="submit" name="deco" value="Déconnexion">
          </form>';
} else {
    // Afficher le formulaire de connexion
    echo '<form method="POST">
              <input type="text" name="prenom" placeholder="Prénom" required>
              <input type="submit" name="connexion" value="Connexion">
          </form>';
}

// Vérifier si le bouton "Déconnexion" a été soumis
if (isset($_POST['deco'])) {
    // Supprimer le cookie "prenom" en définissant une date d'expiration antérieure
    setcookie('prenom', '', time() - 3600);

    // Rediriger vers la même page pour éviter de re-poster le formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

</body>
</html>