<!DOCTYPE html>
<html>

<head>
    <title>Modifier une filière</title>
</head>
<?php
/** @var array $annee */
?>

<body>
    

<h1>Modifier une date</h1>
<form method="POST" action="index.php?page=annee/update">

<input type="hidden"  name="id_annee"  value="<?= $annee['id_annee']; ?> ">
<label>
Nom de la filière :
</label>
<input type="text" name="libelle" value="<?= $annee['libelle']; ?>" required >
<br><br>

<button type="submit"> Modifier </button>
</form>
</body>
</html>