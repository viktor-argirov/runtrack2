<?php
$bdd = new PDO('mysql:host=localhost;dbname=jour09', "root", "123456789");

$requete = $bdd->prepare("SELECT nom,capacite FROM salles");
$requete->execute();
$users = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>capacite</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach($users as $key => $user){
    echo '<tr>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['capacite'] . '</td>';
    echo '</tr>';

}

echo '</tbody>';
echo '</table>';
?>