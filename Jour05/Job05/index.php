<!-- Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer. -->

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec changement de style</title>
    <link id="style-link" rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Formulaire avec changement de style</h1>
    <form id="style-form" action="#" method="post">
        <label for="style">Sélectionnez un style :</label>
        <select id="style" name="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <br><br>
        <input type="submit" value="Valider">
    </form>

    <script>
        document.getElementById('style-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Empêcher le rechargement de la page

            var styleSelect = document.getElementById('style');
            var selectedStyle = styleSelect.value;

            var styleLink = document.getElementById('style-link');
            styleLink.href = selectedStyle + '.css';
        });
    </script>
</body>
</html>
