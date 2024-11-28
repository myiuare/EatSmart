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

// Connexion à MySQL avec mysqli
$mysqli = new mysqli('localhost', 'root', '', 'eatsmartprojet');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Définir l'encodage des caractères
$mysqli->set_charset("utf8");

// Création de la requête SQL
$sql = 'SELECT nom, prix, description FROM article';

// Exécution de la requête
if ($result = $mysqli->query($sql)) {
    // Boucle à travers chaque enregistrement
    while ($data = $result->fetch_assoc()) {
        // Affichage des informations de l'enregistrement
        echo '<b>' . htmlspecialchars($data['nom']) . ' ' . htmlspecialchars($data['prix']) . ' €</b>';
        echo ' <i>Description : ' . htmlspecialchars($data['description']) . '</i><br>';
    }

    // Libération du résultat
    $result->free();
} else {
    // En cas d'erreur dans la requête SQL
    echo 'Erreur SQL : ' . $mysqli->error;
}

// Fermeture de la connexion
$mysqli->close();

?>

</body>
</html>
