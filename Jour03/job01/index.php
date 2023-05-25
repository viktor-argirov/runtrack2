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
    // Tableau de nombres
    $nombres = array(200, 204, 173, 98, 171, 404, 459);

    // Parcours du tableau
    foreach ($nombres as $nombre) {
        // Vérification si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo $nombre . ' est paire<br />';
        } else {
            echo $nombre . ' est impaire<br />';
        }
    }
    ?>
</body>
</html>
