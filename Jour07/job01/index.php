<?php
session_start();

    $_SESSION['nbvisites'] = 0;
    
    // Incrémenter le compteur de visites
    $_SESSION["nbvisites"]++;
    
    // Afficher le contenu de la variable de session
    echo "Nombre de visites:" . $_SESSION["nbvisites"];

    // Vérifier si le bouton de réinitialisation a été cliqué
    if (isset($_POST['reset'])) {
        // Réinitialiser le compteur de visites
        $_SESSION['nbvisites'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="reset" value="Reinitialiser">
    </form>
</body>
</html>