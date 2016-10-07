<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 06/10/16
 * Time: 21:11
 */
include "inc/header.php";

include "inc/selection.php";
/* On teste, après tout why not !
function getConnection()
{
    include 'inc/config.php';

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
*/



    $req2 = "SELECT * FROM hackaton /*WHERE name != 'pape'*/";


// Envoi requete 2    !!!! On passe de get connection à getconnect pour tester
    $res2 = getConnect()->query($req2) or die('Erreur SQL 2!'.$req2.'<br>'); //.mysqlerror());

// Recuperation sous forme de row
    $row = mysqli_query($res2);
        echo '<div class="container-fluid">';
        echo '<div class="row">';
    while ($row = $res2 -> fetch_assoc()) {
        echo "<div class='imgvote col-xs-6 col-md-4 col-lg-2'><img src='".$row['img_path']."'/><br><input type='checkbox' name='vote[]' value='".$row['name']."'/></div>";

    };
    echo "</div>";
    echo "</div>";
?>
<input type="submit" name="submit" value="Envoyer" />
    </form>

<?php
// Cloture connexion
mysqli_close($conn);
?>