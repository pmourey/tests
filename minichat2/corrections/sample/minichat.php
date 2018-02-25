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
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" <?php if (isset($_GET['pseudo'])) { echo ' value="' . $_GET['pseudo'] . '"'; }?> /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
    </p>
    </form>

    <?php
    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', 'root');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo, message, DAY(date_message) AS jour, MONTH(date_message) AS mois, YEAR(date_message) AS annee, HOUR(date_message) AS heure, MINUTE(date_message) AS minute, SECOND(date_message) AS seconde FROM minichat ORDER BY date_message DESC LIMIT 10');

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch())
    {
        echo '<p>[' . $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'] . ' ' . $donnees['heure'] . 'h' . $donnees['minute'] . 'm' . $donnees['seconde'] . 's] <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
    }

    $reponse->closeCursor();

    ?>
    </body>
</html>
