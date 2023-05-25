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
    // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //     if (isset($_GET['nombre'])) {
    //         $nombre = $_GET['nombre'];
            
    //         if (is_numeric($nombre)) {
    //             if ($nombre % 2 === 0) {
    //                 echo "Nombre pair";
    //             } else {
    //                 echo "Nombre impair";
    //             }
    //         } else {
    //             echo "Veuillez entrer un nombre valide";
    //         }
    //     }

        if (isset($_GET)) {
         foreach ($_GET as $value){
            if ($value  % 2 === 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
         }  }
    ?>
<form method="get" action="index.php">
<label for="nombre">Entrez un nombre :</label>
<input type="text" name="nombre" id="nombre" required /><br>
<input type="submit" value="Valider" />
</form>
</body>
</html>