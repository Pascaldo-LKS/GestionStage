<!DOCTYPE html>
<html>

<head>
    <title>Modifier une entreprise</title>
</head>
<?php /** @var array $entreprise */
 ?>
<body>

<h1>Modifier une entreprise</h1>

<form method="POST" action="index.php?page=entreprise/update">


    <input type="hidden"
           name="id_entreprise"
           value="<?= $entreprise['id_entreprise']; ?>">


    <label>Nom de l'entreprise :</label>

    <input type="text"
           name="nom_entreprise"
           value="<?= $entreprise['nom_entreprise']; ?>">

    <br><br>


    <label>Adresse :</label>

    <input type="text"
           name="adresse"
           value="<?= $entreprise['adresse']; ?>">

    <br><br>


    <label>Téléphone :</label>

    <input type="text"
           name="telephone"
           value="<?= $entreprise['telephone']; ?>">

    <br><br>


    <label>Email :</label>

    <input type="email"
           name="email"
           value="<?= $entreprise['email']; ?>">

    <br><br>


    <button type="submit">
        Modifier
    </button>

</form>

<br>

<a href="index.php?page=entreprise/index">
    Retour à la liste
</a>

</body>

</html>