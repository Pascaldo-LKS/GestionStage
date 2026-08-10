<!DOCTYPE html>
<html>

<head>
    <title>Modifier une filière</title>
</head>
<?php
/** @var array $filiere */
?>

<body>
    

<h1>Modifier une filière</h1>
<form method="POST" action="index.php?page=filiere/update">

<input type="hidden"  name="id_filiere"  value="<?= $filiere['id_filiere']; ?>">
<label>
Nom de la filière :
</label>
<input type="text" name="nom_filiere" value="<?= $filiere['nom_filiere']; ?>"  required> 
<br><br>

<button type="submit"> Modifier </button>
</form>
</body>
</html>