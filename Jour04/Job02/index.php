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
    // Vérifie si des arguments GET ont été envoyés
    if (count($_GET) > 0) {
      echo '<table>';
      echo '<tr><th>Argument</th><th>Valeur</th></tr>';
  
      foreach ($_GET as $argument => $valeur) {
        echo '<tr>';
        echo '<td>' . $argument . '</td>';
        echo '<td>' . $valeur . '</td>';
        echo '</tr>';
      }
  
      echo '</table>';
    } else {
      echo 'Aucun argument GET n\'a été envoyé.';
    }
    ?>
    <form action="index.php" method="GET">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name"><br>
    <label for="age">Âge :</label>
    <input type="text" name="age" id="age"><br>
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>