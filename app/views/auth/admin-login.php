<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Administration - GestionStage</title>

</head>

<body>

<h1>Connexion administrateur</h1>

<?php if(isset($erreur)): ?>

    <p style="color:red;">
        <?= htmlspecialchars($erreur); ?>
    </p>

<?php endif; ?>


<form method="POST"
      action="index.php?page=auth/authenticate-admin">

    <label for="nom_utilisateur">
        Nom utilisateur
    </label>

    <br>

    <input
        type="text"
        id="nom_utilisateur"
        name="nom_utilisateur"
        required
    >

    <br><br>


    <label for="mot_de_passe">
        Mot de passe
    </label>

    <br>

    <input
        type="password"
        id="mot_de_passe"
        name="mot_de_passe"
        required
    >

    <br><br>


    <button type="submit">
        Se connecter
    </button>

</form>

</body>

</html>