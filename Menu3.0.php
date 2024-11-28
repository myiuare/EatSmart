<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Menu</title>
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>

<?php 

// on se connecte à MySQL
$mysqlClient = new PDO('mysql:host=localhost;dbname=eatsmartprojet;charset=utf8', 'root', '');

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

<?php require_once(__DIR__ . '/footer.php'); ?>

?>

</body>
</html>
