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
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $length = strlen($str);
    $newStr = "";

    // Parcourir la chaîne
    for ($i = 0; $i < $length; $i++) {
        // Vérifier si c'est le dernier caractère
        if ($i == $length - 1) {
            // Le dernier caractère devient le premier
            $newStr .= $str[0];
        } else {
            // Caractère suivant devient le caractère courant
            $newStr .= $str[$i + 1];
        }
    }

echo $newStr;
    ?>
</body>
</html>