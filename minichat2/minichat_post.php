<?php
    if ($_POST['pseudo'] != '')
        setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

try
{
    date_default_timezone_set('UTC+1');
    $today = date("Y-m-d H:i:s");
    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO minichat2 (pseudo, message, date_message) VALUES(?, ?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['message'], $today));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>