<?php
$bdd = new PDO('mysql:host=localhost;dbname=jour09','root','123456789');
$requete = $bdd->prepare ("SELECT SUM(capacite) AS capacite_totale FROM salles");
$requete->execute();
$users = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>capacite_totale</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key =>$user){
    echo '<tr>';
    echo '<td>' . $user['capacite_totale'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>