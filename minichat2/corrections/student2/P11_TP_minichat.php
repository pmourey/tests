<?PHP
// On démarre la session AVANT d'écrire du code HTML
session_start();
$_SESSION['nb_vues']= $_SESSION['nb_vues'] + 1;
print 'Vous avez consulté cette page ' . $_SESSION['nb_vues'] . ' fois.';
?>

<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
       <title>2018-02-20 Mon MINICHAT</title>
    </head>
	<style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
        <p>Saisissez un nouveau message</p>

      <?php   
      if (isset($_SESSION['pseudo']) AND (strlen($_SESSION['pseudo']) > 0) )
        {
        echo 'pseudo mémorisé : ' . $_SESSION['pseudo']; 
        $strPseudo =$_SESSION['pseudo'];
        }
        else
            { $strPseudo ='';}
        ?>

        <form action="P11_TP_minichat_post.php" method="post">
            <p>
            <label for="pseudo">Votre pseudo</label> : <input type="text" name="pseudo" 
            value = "<?php echo $_SESSION['pseudo']; ?>" id="pseudo" /><br />
			<label for="message">Votre message</label> :  <input type="text" name="message" id="message" /><br />
            
            <!-- <?php print 'debug pseudo : ' . $_GET['pseudo']; ?> -->

            <input type="submit" value="Envoyer" />
            </p>
        </form>
        <p>Cette page est réservée au personnel AGI. Si vous ne travaillez pas à AGI, inutile d'insister ! </p>
   

<?php



// Effectuer ici maintenant requête qui affiche les 10 derniers messages

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'root');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT Mc_pseudo, Mc_message, DATE_FORMAT(Mc_dateCreat, \'[%d/%m/%Y %H:%i:%s]\') AS date1 FROM T_minichat ORDER BY Mc_id DESC LIMIT 0,5');
// On affiche chaque entrée une à une

echo '<ul>';
while ($donnees = $reponse->fetch())
{
    echo $donnees['date1'] . '  ' . '<strong>' . htmlspecialchars($donnees['Mc_pseudo']) . '</strong> : ' . htmlspecialchars($donnees['Mc_message']) . '</br>';
}
echo '</ul>';

$reponse->closeCursor(); // Termine le traitement de la requête
?>

 </body>
</html>