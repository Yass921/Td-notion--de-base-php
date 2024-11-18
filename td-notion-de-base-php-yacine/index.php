<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>
    <form action="verif.php" method="post">
        <label for="id-login">Nom utilisateur :</label>
        <input type="text" name="login" id="id-login" placeholder="Nom" required><br>
        <label for="id-password">Mot de passe :</label>
        <input type="password" name="password" id="id-password" placeholder="password" required><br><br>
        <button type="submit">ENVOYER</button>
    </form>
</body>

</html>