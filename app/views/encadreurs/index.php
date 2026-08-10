<!DOCTYPE html>
<html>

<head>
    <title>Liste des encadreurs</title>
</head>
<?php /** @var array $encadreurs */ ?>
<body>

<h1>Liste des encadreurs</h1>

<a href="index.php?page=encadreur/create">
    Ajouter un encadreur
</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Fontion</th>
        <th>Actions</th>
    </tr>


    <?php foreach($encadreurs as $encadreur): ?>

    <tr>

        <td>
            <?= $encadreur['id_encadreur']; ?>
        </td>

        <td><?= $encadreur['nom']; ?></td>
        <td><?= $encadreur['prenom']; ?></td>
        <td><?= $encadreur['email']; ?></td>
        <td> <?= $encadreur['telephone']; ?></td>
        <td><?= $encadreur['fonction']; ?></td>

        <td>
            <a href="index.php?page=encadreur/edit&id=<?= $encadreur['id_encadreur']; ?>">
                Modifier</a>

            <a href="index.php?page=encadreur/delete&id=<?= $encadreur['id_encadreur']; ?>"
               onclick="return confirm('Voulez-vous supprimer cet encadreur ?');">
                Supprimer
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

</body>

</html>