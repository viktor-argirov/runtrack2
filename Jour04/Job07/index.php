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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        $largeur = $_POST['largeur'];
        $hauteur = $_POST['hauteur'];
        
        // Vérifier si les valeurs sont numériques et positives
        if (is_numeric($largeur) && is_numeric($hauteur) && $largeur > 0 && $hauteur > 0) {
            // Afficher la maison
            echo '<pre>';
            
            // Dessiner le toit
            for ($i = 0; $i < $hauteur; $i++) {
                echo str_repeat('&nbsp;', $hauteur - $i);
                echo str_repeat('*', ($i * 2) + 1);
                echo '<br>';
            }
            
            // Dessiner les murs
            for ($i = 0; $i < $hauteur; $i++) {
                echo str_repeat('*', $largeur);
                echo '<br>';
            }
            
            // Dessiner le sol
            echo str_repeat('*', $largeur);
            echo '</pre>';
        } else {
            echo "Veuillez entrer des valeurs numériques positives pour la largeur et la hauteur.";
        }
    }
}
?>
<form method="post" action="index.php">
    <label for="largeur">Largeur :</label>
    <input type="text" name="largeur" id="largeur" required /><br>
    
    <label for="hauteur">Hauteur :</label>
    <input type="text" name="hauteur" id="hauteur" required /><br>
    
    <input type="submit" value="Afficher la maison" />
</form>
</body>
</html>