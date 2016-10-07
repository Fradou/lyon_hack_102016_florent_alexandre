<form method="post" action="inc/formtreat.php">

    <div class="form-group">
            <label for="voteur">Mon nom :</label>
            <select name="voteur" class="form-control">

                <?php
                    function getConnect()
                    {
                // Include des logs de connexion
                     include 'config.php';

                // Connecte à Mysql

                        $conn = mysqli_connect($host, $user, $password, $db);
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
                    echo '<option class="optionselect">'.$row['name']."</option>";
                };
/* On reporte la fermeture de connexion plus loin
                // Cloture connexion
                mysqli_close($conn);
*/
                ?>
            </select>
        <input type="hidden" name="votes" class="form-control"></select>
    </div>