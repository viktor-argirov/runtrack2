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
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Récupérer les valeurs du formulaire
  $str = $_POST["str"];
  $fonction = $_POST["fonction"];

  // Appliquer les transformations en fonction de l'option choisie
  switch ($fonction) {
    case "gras":
      $str = mettreEnGrasMotsMajuscules($str);
      break;
    case "cesar":
      $str = deplacerCaracteres($str);
      break;
    case "plateforme":
      $str = ajouterUnderscore($str);
      break;
    default:
      // Option invalide, ne rien faire
      break;
  }

  // Afficher le résultat
  echo "Résultat : $str";
}

// Fonction pour mettre en gras les mots commençant par une lettre majuscule
function mettreEnGrasMotsMajuscules($str) {
  return preg_replace_callback('/\b[A-Z][a-zA-Z]*\b/', function ($matches) {
    return "<strong>" . $matches[0] . "</strong>";
  }, $str);
}

// Fonction pour déplacer les caractères d'un nombre donné
function deplacerCaracteres($str, $decalage = 2) {
  $resultat = "";
  $longueur = strlen($str);
  for ($i = 0; $i < $longueur; $i++) {
    $caractere = $str[$i];
    
    // Vérifier si le caractère est une lettre
    if (ctype_alpha($caractere)) {
      // Déplacer le caractère en fonction du décalage
      $code = ord($caractere);
      $nouveauCode = ($code - ord('a') + $decalage) % 26 + ord('a');
      $caractere = chr($nouveauCode);
    }
    $resultat .= $caractere;
  }
  return $resultat;
}

// Fonction pour ajouter un "_" aux mots finissant par "me"
function ajouterUnderscore($str) {
  return preg_replace('/\b(\w+me)\b/', '$1_', $str);
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <label for="str">Texte :</label>
  <input type="text" id="str" name="str" required><br><br>

  <label for="fonction">Transformation :</label>
  <select id="fonction" name="fonction" required>
    <option value="gras">Gras</option>
    <option value="cesar">Cesar</option>
    <option value="plateforme">Plateforme</option>
  </select><br><br>

  <button type="submit">Valider</button>
</form>
</body>
</html>