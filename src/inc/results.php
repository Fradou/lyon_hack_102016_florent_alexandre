<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/10/16
 * Time: 01:25
 */

function getConnect()
{
// Include des logs de connexion
    include 'config.php';

// Connecte à Mysql

    $conn = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
        die();
    }
    return $conn;
}

// Requete 2 : recup tableau actuel
$req2 = "SELECT * FROM hackaton ORDER BY poll_nb DESC";

// Envoi requete 2
$res2 = getConnect()->query($req2) or die('Erreur SQL 2!'.$req2.'<br>'.mysqlerror());

// Recuperation sous forme de row
$row = mysqli_query($res2);

echo "<table><tr><th>Pseudo</th><th>Nombre de votes</th></tr>";

while ($row = $res2 -> fetch_assoc()) {
    echo "<tr><td>".$row['name']."</td><td>" . $row['poll_nb'] . "</td></tr>";
};

echo "</table>";

// Cloture connexion
mysqli_close($conn);