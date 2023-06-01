<?php 
//Connection à ma base de données ...
$bdd = new PDO('mysql:host=localhost;dbname=jour09', "root", "123456789");

$requete = $bdd->prepare("SELECT * FROM etudiants");
$requete->execute();
$users = $requete->fetchAll();

//Ici je récuprère tous les éléments de ma table
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>Prénom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "<th>sexe</th>";
echo "<th>email</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach($users as $key => $user){
    echo '<tr>';
    echo '<td>' . $user['id'] . '</td>';
    echo '<td>' . $user['prenom'] . '</td>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['naissance'] . '</td>';
    echo '<td>' . $user['sexe'] . '</td>';
    echo '<td>' . $user['email'] . '</td>';
    echo '</tr>';

}

echo '</tbody>';
echo '</table>';
?>