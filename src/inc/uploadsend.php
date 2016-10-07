<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06/10/16
 * Time: 17:53
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

$name = $_POST["namecandid"];
/* $img_url = $_POST["img_url"]; */

// Création requete sql
$req = "INSERT INTO hackaton (name, img_path, vote, poll_nb) values ('$name', '$img_url', False, 0)";

// Envoie requete sql
$res = getConnect()->query($req) or die('Erreur SQL!'.$req.'<br>'.mysqlerror());

// Retour utilisateur




// Requete 2 : recup tableau actuel
$req2 = "SELECT * FROM hackaton";

// Envoi requete 2
$res2 = getConnect()->query($req2) or die('Erreur SQL 2!'.$req2.'<br>'.mysqlerror());

// Recuperation sous forme de row
$row = mysqli_fetch_row($res2);
while ($row = $res2 -> fetch_assoc()) {
    echo $row['name'] . " " . $row['img_path'] . " " . $row['vote'] . " " . $row['poll_nb'] . '<br>';
};


// Cloture connexion
mysqli_close($conn);


?>