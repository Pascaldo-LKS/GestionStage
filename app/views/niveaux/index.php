<!DOCTYPE html>
<html>
<head>
    <title>Liste des niveaux</title>
</head>
<?php
/** @var array $niveaux */
?>
<body>
<h1>Liste des niveau</h1>

<a href="index.php?page=niveau/create">
    Ajouter un Niveau
</a><br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom Niveau</th>
        <th>Action</th>
    </tr>
    <?php foreach($niveaux as $niveau): ?>
    <tr>
        <td>
            <?= $niveau['id_niveau']; ?>
        </td>
        <td>
            <?= $niveau['nom_niveau']; ?>
        </td>
        <td><a href="index.php?page=niveau/edit&id=<?= $niveau['id_niveau']; ?>"> Modifier </a>
            <a href="index.php?page=niveau/delete&id=<?= $niveau['id_niveau']; ?>"
             onclick="return confirm('Voulez-vous supprimer ce niveau ?');"> Supprimer </a></td>
   </tr>
    <?php endforeach; ?>
</table>

</body>
</html>