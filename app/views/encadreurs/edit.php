<!DOCTYPE html>
<html>

<head>
    <title>Modifier un encadreur</title>
</head>
<?php /** @var array $encadreur */ ?>
<body>

<h1>Modifier un encadreur</h1>


<form method="POST" action="index.php?page=encadreur/update">


    <input type="hidden"
           name="id_encadreur"
           value="<?= $encadreur['id_encadreur']; ?>">


    <label>Nom :</label>

    <input type="text"
           name="nom"
           value="<?= $encadreur['nom']; ?>">

    <br><br>


    <label>Prénom :</label>

    <input type="text" name="prenom" value="<?= $encadreur['prenom']; ?>">

    <br><br>

    <label>Email :</label>

    <input type="email" name="email" value="<?= $encadreur['email']; ?>">

    <br><br>

    <label>Téléphone :</label>

    <input type="text" name="telephone" value="<?= $encadreur['telephone']; ?>">

    <br><br>
    <label>Fonction :</label>

    <input type="text" name="fonction" value="<?= $encadreur['fonction']; ?>">

    <br><br>

    <button type="submit"> Modifier </button>

</form>


<br>

<a href="index.php?page=encadreur/index">
    Retour à la liste
</a>

</body>

</html>