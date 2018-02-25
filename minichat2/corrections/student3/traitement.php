<?php
session_start();
// Connexion à la base de données
 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['valider']) && ($_POST['pseudo'] && $_POST['message'])!==null ){
	
	
// Insertion en BDD
$req = $bdd->prepare('INSERT INTO minichat (pseudo,message) VALUES(?,?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection vers minichat
header('Location: index.php');
$_SESSION['pseudo']=$_POST['pseudo'];
}
?>

