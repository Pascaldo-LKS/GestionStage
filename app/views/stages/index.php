<!DOCTYPE html>
<html>

<head>
    <title>Liste des stages</title>
</head>
<?php  /** @var array $stages */ ?>
<body>

<h1>Liste des stages</h1>

<a href="index.php?page=stage/create">
    Ajouter un stage
</a>

<br><br>

<table border="3">

    <tr>
        <th>ID</th>
        <th>Date début</th>
        <th>Date fin</th>
        <th>Statut</th>
        <th>Étudiant</th>
        <th>Entreprise</th>
        <th>Actions</th>
    </tr>


    <?php foreach($stages as $stage): ?>

    <tr>

        <td>
            <?= $stage['id_stage']; ?>
        </td>

        <td>
            <?= $stage['date_debut']; ?>
        </td>

        <td>
            <?= $stage['date_fin']; ?>
        </td>

        <td>
            <?= $stage['statut']; ?>
        </td>

        <td> <?= $stage['nom_etudiant'] . ' ' . $stage['prenom_etudiant']; ?></td>

        <td> <?= $stage['nom_entreprise']; ?> </td>

        <td>

            <a href="index.php?page=stage/edit&id=<?= $stage['id_stage']; ?>">
                Modifier
            </a>

            

            <a href="index.php?page=stage/delete&id=<?= $stage['id_stage']; ?>"
               onclick="return confirm('Voulez-vous supprimer ce stage ?');">
                Supprimer
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

</body>

</html>