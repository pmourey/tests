<?php
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
    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['message']));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>