<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un encadreur</title>
</head>

<body>

<h1>Ajouter un encadreur</h1>

<form method="POST" action="index.php?page=encadreur/store">

    <label>Nom :</label>

    <input type="text" name="nom_encadreur">

    <br><br>

    <label>Prénom :</label>

    <input type="text" name="prenom_encadreur">

    <br><br>

    <label>Email :</label>

    <input type="email" name="email">

    <br><br>

    <label>Téléphone :</label>

    <input type="text" name="telephone">

    <br><br>

    <label>Fonction :</label>

    <input type="text" name="fonction">

    <br><br>

    <button type="submit">
        Enregistrer
    </button>

</form>


<br>

<a href="index.php?page=encadreur/index">
    Retour à la liste
</a>

</body>

</html>