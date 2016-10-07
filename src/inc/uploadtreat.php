<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06/10/16
 * Time: 18:58
 */

$maxsize=2097152;
$maxwidth=5000;
$maxheight=5000;

if ($_FILES['socket_img']['error'] > 0) echo "Erreur lors du transfert"; /* $erreur = "Erreur lors du transfert"; */

if ($_FILES['socket_img']['size'] > $maxsize) echo "Le fichier est trop grand";
/* $erreur = "Le fichier est trop gros"; */

/* Verification extension */
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

//1. strrchr renvoie l'extension avec le point (« . »).

//2. substr(chaine,1) ignore le premier caractère de chaine.

//3. strtolower met l'extension en minuscules.

$extension_upload = strtolower(  substr(  strrchr($_FILES['socket_img']['name'], '.')  ,1)  );

if ( in_array($extension_upload,$extensions_valides) ) /*echo "Extension correcte <br>"; */

/* Verification taille en pixel */

$image_sizes = getimagesize($_FILES['socket_img']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) /* $erreur = "Image trop grande";*/ echo "Image trop grande";


/* Création du nom : alphanumerique unique*/

$id_membre = md5(uniqid(rand(), true));

/* Déplacement fichier temp dans emplacement definitif
 */

$img_url = "../../public/img/{$id_membre}.{$extension_upload}";

/*
echo $img_url."<br>";
echo $_FILES['socket_img']['tmp_name']."<br>";
*/

$resultat = move_uploaded_file($_FILES['socket_img']['tmp_name'],$img_url);
echo $resultat;
if (! $resultat) /*{echo "Transfert réussi";} else */{echo "Transfert fail";}

include 'uploadsend.php';


/*
$_FILES['socket_img']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : socket_img.png).
$_FILES['socket_img']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['socket_img']['size']     //La taille du fichier en octets.
$_FILES['socket_img']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['socket_img']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
 */