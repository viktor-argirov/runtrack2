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
    if(count($_POST)>0){
        $count = count($_POST);
        echo "Le nombre d'arguments POST envoyés est : " . $count;
    } else {
        echo "Aucun argument POST n'a ete envoye";
    }
    ?>
    <form action="index.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name"><br>
        <label for="age">Age :</label>
        <input type="text" name="age" id="age"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>