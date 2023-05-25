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
       $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

       $dic = array(
           "consonnes" => 0,
           "voyelles" => 0
       );
       
       // Fonction pour vérifier si un caractère est une voyelle
       function isVowel($char) {
           $vowels = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
           return in_array($char, $vowels);
       }
       
       // Parcourir la chaîne et compter les consonnes et les voyelles
       for ($i = 0; $i < strlen($str); $i++) {
           $char = $str[$i];
           if (ctype_alpha($char)) {
               if (isVowel($char)) {
                   $dic["voyelles"]++;
               } else {
                   $dic["consonnes"]++;
               }
           }
       }
       
       // Afficher les résultats dans un tableau HTML
       echo '<table>';
       echo '<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
       echo '<tbody><tr><td>' . $dic["voyelles"] . '</td><td>' . $dic["consonnes"] . '</td></tr></tbody>';
       echo '</table>';
       
       ?>
       
</body>
</html>