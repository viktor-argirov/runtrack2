<?php
// Création des variables avec des valeurs
$booleanVar = True;
$integerVar = 23;
$stringVar = "Hello";
$floatVar = 25.14;

// Tableau contenant les informations des variables
$tableData = array(
    array("boolean", "booleanVar", $booleanVar),
    array("integer", "integerVar", $integerVar),
    array("string", "stringVar", $stringVar),
    array("float", "floatVar", $floatVar)
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informations des variables</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row): ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
