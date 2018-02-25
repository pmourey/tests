<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" href="stylesheet.css"/>
    </head>
    <style>

    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php 
        	if(isset($_COOKIE["pseudo"])){
        		echo htmlspecialchars($_COOKIE['pseudo']);
        	}
        	?>"/><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

	<?php
	// Connexion à la base de données
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'root');
		}
		catch(Exception $e)
		{
	        die('Erreur : '.$e->getMessage());
		}

		// Récupération des 10 derniers messages
		$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_message, \'[%d/%m/%Y à %Hh%imin%ss]\') AS date_message_creation FROM minichat_activite ORDER BY ID DESC');

		// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
		while ($donnees = $reponse->fetch())
		{
			echo '<p>' . htmlspecialchars($donnees['date_message_creation']) .' <strong>' . $donnees['pseudo'] . '</strong> : ' . $donnees['message'] . '</p>';
		}

		$reponse->closeCursor();

	?>
    </body>
</html>