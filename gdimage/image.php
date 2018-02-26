<?php
/**
 * Created by PhpStorm.
 * User: philippemourey
 * Date: 26/02/2018
 * Time: 11:15
 */

header ("Content-type: image/jpeg"); // 1 : on indique qu'on va envoyer une image PNG

$image = imagecreate(200,50);


$orange = imagecolorallocate($image, 255, 128, 0);

$bleu = imagecolorallocate($image, 0, 0, 255);

$bleuclair = imagecolorallocate($image, 156, 227, 254);

$noir = imagecolorallocate($image, 0, 0, 0);

$blanc = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 4, 35, 15, utf8_decode("Salut les Zér0s !"), $noir);
imagecolortransparent($image, $orange); // On rend le fond orange transparent

imagepng($image);