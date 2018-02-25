<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();


// Effectuer la requête qui insère le message

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'root');
	//array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Elegamment on choisit d'utiliser une requête préparée		
$req = $bdd->prepare('INSERT INTO T_minichat (Mc_pseudo, Mc_message , Mc_dateCreat) 
						VALUES( ?, ? , Now())');

//echo 'debug : ' . array($_POST['pseudo']) . ' ' . array($_POST['message']);
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

 if (isset($_POST['pseudo']) AND (strlen($_POST['pseudo']) > 0) 
 	AND isset($_POST['message']) AND (strlen($_POST['message']) > 0)) 
 // Si le pseudo et le message sont renseignés OK
	{
	$req->execute(array($_POST['pseudo'], 
						$_POST['message']));
	echo 'Le msg a bien été ajouté.';
	$_SESSION['pseudo']= $_POST['pseudo'];    // pour une prochaine utilisation
	}
	else
	{
		echo 'Compléter votre saisie (pseudo ET message) !';
	}

// Puis rediriger vers minichat.php comme ceci :
header('Location: P11_TP_minichat.php');

?>