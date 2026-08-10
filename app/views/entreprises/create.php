<!DOCTYPE html>
<html>

<head>
    <title>Ajouter une entreprise</title>
</head>

<body>

<h1>Ajouter une entreprise</h1>

<form method="POST" action="index.php?page=entreprise/store">

    <label>Nom de l'entreprise :</label>

    <input type="text" name="nom_entreprise">

    <br><br>


    <label>Adresse :</label>

    <input type="text" name="adresse">

    <br><br>


    <label>Téléphone :</label>

    <input type="text" name="telephone">

    <br><br>


    <label>Email :</label>

    <input type="email" name="email">

    <br><br>


    <button type="submit">
        Enregistrer
    </button>

</form>

<br>

<a href="index.php?page=entreprise/index">
    Retour à la liste
</a>

</body>

</html>