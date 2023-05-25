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
$str = "I'm sorry Dave I'm afraid I can't do that";

$vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
$result = "";

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);

    if (in_array($char, $vowels)) {
        $result .= $str[$i];
    }
}
echo $result;
    ?>
</body>
</html>