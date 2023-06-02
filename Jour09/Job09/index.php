<?php
$bdd = new PDO('mysql:host=localhost;dbname=jour09','root','123456789');
$requete = $bdd->prepare ("SELECT * FROM salles ORDER BY capacite DESC");
$requete->execute();
$users = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nom</th>";
echo "<th>numero</th>";
echo "<th>capacite</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key =>$user){
    echo '<tr>';
    echo '<td>' . $user['id'] . '</td>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['numero'] . '</td>';
    echo '<td>' . $user['capacite'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>