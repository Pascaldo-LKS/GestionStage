<!DOCTYPE html>
<html>
<head>
    <title>Liste des filières</title>
</head>

<body>

<h1>Liste des filières</h1>

<a href="index.php?page=filiere/create">
    Ajouter une filière
</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nom Filière</th>
        <th>Action</th>
    </tr>


    <?php foreach($filieres as $filiere): ?>

    <tr>

        <td>
            <?= $filiere['id_filiere']; ?>
        </td>

        <td>
            <?= $filiere['nom_filiere']; ?>
        </td>
        <td><a href="index.php?page=filiere/edit&id=<?= $filiere['id_filiere']; ?>"> Modifier </a>
            <a href="index.php?page=filiere/delete&id=<?= $filiere['id_filiere']; ?>"
             onclick="return confirm('Voulez-vous supprimer cette filière ?');"> Supprimer </a></td>

    </tr>

    <?php endforeach; ?>


</table>


</body>
</html>