<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/10/16
 * Time: 09:10
 */

$nomvoteur = $_POST["voteur"];
/* echo $nomvoteur."<br />";*/
/*  echo $_POST["vote"]; */
$name = $_POST["vote"];

if(count($name)>3){
    echo "Vous ne pouvez voter que pour 3 maximum";
} else {

    function getConnect()
    {
// Include des logs de connexion
        include 'config.php';

// Connecte à Mysql

        $conn = mysqli_connect($host, $user, $password, $db);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        return $conn;
    }

    $req4 = "UPDATE hackaton SET vote=1 where name='$nomvoteur'";
    $res4 = getConnect()->query($req4) or die('Erreur SQL!' . $req4 . '<br>' . mysqlerror());

    $name = $_POST["vote"];
    echo count($name);
    print_r($name);
    foreach ($name as $vote) {
        $req6 = "UPDATE hackaton SET poll_nb=poll_nb+1 where name='$vote'";
        $res6 = getConnect()->query($req6) or die('Erreur SQL!' . $req6 . '<br>' . mysqlerror());
    };
}

?>