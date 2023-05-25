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
    $count = count($_GET);
    echo "Le nombre d'arguments GET envoyés est : " . $count;
    }
    ?>
 <form action="index.php" method="get">
        <label for="argument1">Argument 1 :</label>
        <input type="text" name="argument1" id="argument1" /><br>
        
        <label for="argument2">Argument 2 :</label>
        <input type="text" name="argument2" id="argument2" /><br>
        
        <input type="submit" value="Envoyer" />
    </form>

</body>
</html>