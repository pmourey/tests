<?php

//Cookie afin de retenir le pseudo du visiteur
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat_activite (pseudo, message, date_message) VALUES(?, ?, NOW())');
$req->execute(array(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['message'])));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>