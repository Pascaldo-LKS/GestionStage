<!DOCTYPE html>
<html>

<head>
    <title>Liste des entreprises</title>
</head>
<?php /** @var array $entreprises */ ?>
<body>

<h1>Liste des entreprises</h1>

<a href="index.php?page=entreprise/create">
    Ajouter une entreprise
</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nom de l'entreprise</th>
        <th>Adresse</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>


    <?php foreach($entreprises as $entreprise): ?>

    <tr>

        <td>
            <?= $entreprise['id_entreprise']; ?>
        </td>

        <td>
            <?= $entreprise['nom_entreprise']; ?>
        </td>

        <td>
            <?= $entreprise['adresse']; ?>
        </td>

        <td>
            <?= $entreprise['telephone']; ?>
        </td>

        <td>
            <?= $entreprise['email']; ?>
        </td>

        <td>

            <a href="index.php?page=entreprise/edit&id=<?= $entreprise['id_entreprise']; ?>">
                Modifier
            </a>

            |

            <a href="index.php?page=entreprise/delete&id=<?= $entreprise['id_entreprise']; ?>"
               onclick="return confirm('Voulez-vous supprimer cette entreprise ?');">
                Supprimer
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

</body>

</html>