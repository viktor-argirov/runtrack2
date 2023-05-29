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
    function calcule($nombre1, $operator, $nombre2){
        switch($operator){
            case "+":
                return $nombre1 + $nombre2;
            case "-":
                return $nombre1 - $nombre2;
            case "*":
                return $nombre1 * $nombre2;
            case "/":
                return $nombre1 / $nombre2;
            }
        }
    $resultat1 = calcule(20, '+', 3);
echo "Résultat 1: " . $resultat1 . "<br>";

$resultat2 = calcule(10, '*', 35);
echo "Résultat 2: " . $resultat2 . "<br>";

$resultat3 = calcule(1000, '/', 4);
echo "Résultat 3: " . $resultat3 . "<br>";

    ?> 
</body>
</html>