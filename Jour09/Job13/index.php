<?php
$bdd = new PDO('mysql:host=localhost;dbname=jour09','root','123456789');
$requete = $bdd->prepare ("SELECT salles.nom AS SN, etages.nom AS EN FROM salles JOIN etages ON salles.numero = etages.numero");
$requete->execute();
$users = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>nom_salle</th>";
echo "<th>nom_etages</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $key =>$user){
    echo '<tr>';
    echo '<td>' . $user['SN'] . '</td>';
    echo '<td>' . $user['EN'] . '</td>';

    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>