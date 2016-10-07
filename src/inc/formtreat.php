<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/10/16
 * Time: 09:10
 */

$name_voteur = $_POST["voteur"];
echo $name_voteur;

echo $_POST["vote"];


$name = $_POST['vote'];

foreach ($name as $vote){
    echo $vote."<br />";

}

?>