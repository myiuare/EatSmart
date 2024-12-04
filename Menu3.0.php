<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Menu</title>
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>

<?php 

try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=eatsmartprojet;charset=utf8', 'root', '');
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT nom, prix, description, image_url FROM article';
    $stmt = $mysqlClient->prepare($sql);
    $stmt->execute();

    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<b>' . htmlspecialchars($data['nom']) . ' ' . htmlspecialchars($data['prix']) . '</b>';
        echo ' <i>Description : ' . htmlspecialchars($data['description']) . '</i><br>';
        echo '  htmlspecialchars($data['image_url']) . '</i><br>';
    }
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}

?>

<?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>
