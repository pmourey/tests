<?php
/**
 * Created by PhpStorm.
 * User: philippemourey
 * Date: 26/02/2018
 * Time: 15:39
 */

if (isset($_GET['image']))
    $source = imagecreatefromjpeg("images/" . $_GET['image']); // La photo est la source
else
{
    echo "<p>Erreur d'argument!</p>";
    exit();
}
$destination = imagecreatetruecolor(200, 150); // On crée la miniature vide

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// On crée la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
$nomImage = "mini_". $_GET['image'];
error_log($nomImage);

imagejpeg($destination, "images/" . $nomImage);

// Redirection du visiteur vers la page du minichat
header("Location: copyrighter.php?image=$nomImage");
