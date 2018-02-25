<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
	#minichat
	{
		width:70%;margin:auto;min-height:400px;
	}
	fieldset
	{
	width:50%;margin:auto;
	}
	fieldset p
	{
		width:70%;margin:auto;min-height:100px;text-align:center;box-shadow:0px 0px 6px #000;
	}
	input
	{
		width:50%;float:right;display:inline-block;margin:.5em auto;
	}
	label
	{
		display:inline-block;margin:auto;
	}
	.messages
	{
		width:40%;margin:auto;box-shadow:0px 0px 8px #000;
	}
    </style>
    <body>
     <div id="minichat">
       <form action="traitement.php" method="post">
	    <fieldset>
        <p>
        <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" value="
		<?php if(isset($_SESSION['pseudo'])) {echo $_SESSION['pseudo'];}?>"/>
		<br />
        <label for="message">Message : </label><input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" name="valider"/>
		</p>
		</fieldset>
	
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
$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_message,\'%d/%m/%Y %H h%i \') AS date FROM minichat ORDER BY ID DESC LIMIT 0, 10');
  ?>
  <div class="messages">
  <?php
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p>'. $donnees['date'] .'<strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
 
$reponse->closeCursor();

?>
</div>
 </div>   
 </body>
</html>