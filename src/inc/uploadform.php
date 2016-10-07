
<div class="row all_blsp">
      <div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8">

<form method="post" action="inc/uploadtreat.php" enctype="multipart/form-data">

    <label for="titre">Nom du candidat (max. 25 caractères) :</label><br />

    <input type="text" name="namecandid" value="Nom du candidat" id="name" /><br />



     <label for="socket_img">Fichier (tous formats | max. 2 Mo) :</label><br />

     <input type="hidden" name="MAX_FILE_SIZE" value="20971520" />

     <input type="file" name="socket_img" id="socket_img" /><br />




     <input type="submit" name="submit" value="Envoyer" />

</form>

    </div>
</div>
?>