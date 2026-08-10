<!DOCTYPE html>
<html>
<head>
<title>Ajouter un libelle</title>
</head>

<body>
<h1>Ajouter un niveau</h1>

<form method="POST" action="index.php?page=niveau/store">
    <label>
    Libellé du Niveau :
    </label>
    <input type="text" name="nom_niveau" required>
    <br><br>
    <button type="submit"> Enregistrer </button>
</form>


</body>
</html>