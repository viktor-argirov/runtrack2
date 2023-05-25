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
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        
        foreach ($_POST as $argument => $valeur) {
            echo '<tr>';
            echo '<td>' . $argument . '</td>';
            echo '<td>' . $valeur . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    }
    ?>
    <form method="post" action="index.php">
    <label for="argument1">Argument 1:</label>
    <input type="text" name="argument1" id="argument1" /><br>
    
    <label for="argument2">Argument 2:</label>
    <input type="text" name="argument2" id="argument2" /><br>
    
    <!-- Ajoutez d'autres champs d'argument si nécessaire -->
    
    <input type="submit" value="Envoyer" />
</form>
</body>
</html>