<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 06/10/16
 * Time: 21:11
 */

function getConnection()
{
    $host       = "localhost";
    $user       = "root";
    $password   = "jecode4laloupe";
    $db         = "hack";

    $mysqli = new mysqli($host, $user, $password, $db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();
    }
    return $mysqli;
}
function execSql($mysqli, $sql){
    if (!$result = $mysqli->query($sql)){
        echo "failed to run query : (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}



$req2 = "SELECT * FROM hackaton";

// Envoi requete 2
$res2 = getConnection()->query($req2) or die('Erreur SQL 2!'.$req2.'<br>'); //.mysqlerror());

// Recuperation sous forme de row
$row = mysqli_fetch_row($res2);
print_r($row);
echo '<div class="row">';
while ($row = $res2 -> fetch_assoc()) {
    echo $row['name'] . "<img src='" . $row['img_path'] . "'/> " . $row['vote'] . " " . $row['poll_nb'] . '<br>';
    echo '</div>' ;
};






// Cloture connexion
mysqli_close($conn);
