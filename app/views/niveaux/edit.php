<!DOCTYPE html>
<html>

<head>
    <title>Modifier un Niveau</title>
</head>
<?php
/** @var array $niveau */
?>

<body>
    

<h1>Modifier une filière</h1>
<form method="POST" action="index.php?page=niveau/update">

<input type="hidden"  name="id_niveau"  value="<?= $niveau['id_niveau']; ?>">
<label>
Libellé du Niveau :
</label>
<input type="text" name="nom_niveau" value="<?= $niveau['niveau']; ?>" required> 
<br><br>

<button type="submit"> Modifier </button>
</form>
</body>
</html>