
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
function estPremier($nombre) {
    if ($nombre < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i === 0) {
            return false;
        }
    }
    
    return true;
}

for ($nombre = 2; $nombre <= 1000; $nombre++) {
    if (estPremier($nombre)) {
        echo $nombre . "<br />";
    }
}
?>
</body>
</html>