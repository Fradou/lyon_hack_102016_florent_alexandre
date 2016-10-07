<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/10/16
 * Time: 01:24
 */

$pageTitle = "Back office";
include 'inc/header.php';

/** Tout ce bloc php est à supprimer une fois selection en include ailleurs */

?>


<form method="post" action="formtreat.php">

    <div class="form-group">
            <label for="Secteur d'activité">Mon nom :</label>
            <select name="voteur" class="form-control">

                <?php
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

       /* Tout le bloc connect du dessus sera a ressortir par la suite */
                // Requete 3 : recup tableau actuel des personnes n'ayant pas encore voté !
                $req3 = "SELECT * FROM hackaton WHERE vote = 0";

                // Envoi requete 2
                $res3 = getConnect()->query($req3) or die('Erreur SQL 3!'.$req3.'<br>'.mysqlerror());

                // Recuperation sous forme de row
                $row = mysqli_query($res3);

                while ($row = $res3 -> fetch_assoc()) {
                    echo '<option>'.$row['name']."</option>";
                };

                // Cloture connexion
                mysqli_close($conn);

                ?>
            </select>
    </div>


        <?php

        $req4 = "UPDATE hackaton SET vote = Yes where name = $nomvoteur";

        $req5 = "UPDATE hackaton SET poll_nb++ where ";

        ?>