<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Menu</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="Menu2.0.php">Menu</a></li>
        <li><a href="me_contacter.php">Me Contacter</a></li>
    </ul>
</nav>

<?php 


// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', '');

// on sélectionne la base
mysql_select_db('eatsmartprojet',$db);

// on crée la requête SQL
$sql = 'SELECT nom,prix,description FROM article';

// on envoie la requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
    {
    // on affiche les informations de l'enregistrement en cours
    echo '<b>'.$data['nom'].' '.$data['prix'].'</b> ('.$data['statut'].')';
    echo ' <i>Description : '.$data['description'].'</i><br>';
    }

// on ferme la connexion à mysql
mysql_close();


?>

</body>
</html>
