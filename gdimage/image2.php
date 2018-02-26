<?php
/**
 * Created by PhpStorm.
 * User: philippemourey
 * Date: 26/02/2018
 * Time: 11:15
 */

header ("Content-type: image/jpeg"); // 1 : on indique qu'on va envoyer une image PNG

$image = imagecreatefromjpeg("images/couchersoleil.jpg");

// 3 : on s'amuse avec notre image (on va apprendre à le faire)

imagejpeg($image); // 4 : on a fini de faire joujou, on demande à afficher l'image
