<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Me Contacter</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="Menu2.0.php">Menu</a></li>
        <li><a href="me_contacter.php">Me Contacter</a></li>
    </ul>
</nav>

<h1>Me Contacter</h1>
<p>Si vous avez un problème avec votre commande, n'hésitez pas à me contacter :</p>

<form action="confirmation.php" method="post">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="probleme">Votre problème :</label><br>
    <textarea id="probleme" name="probleme" rows="5" required></textarea><br><br>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
