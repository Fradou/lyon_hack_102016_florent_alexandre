
<div class="row all_blsp">
      <div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8">

<form method="post" action="uploadtreat.php" enctype="multipart/form-data">

     <label for="icone">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label><br />

     <input type="file" name="icone" id="icone" /><br />


     <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />

     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />

     <input type="file" name="mon_fichier" id="mon_fichier" /><br />



     <label for="titre">Nom du candidat (max. 50 caractères) :</label><br />

     <input type="text" name="name" value="Nom du candidat" id="name" /><br />


     <input type="submit" name="submit" value="Envoyer" />

</form>

    </div>
</div>
?>