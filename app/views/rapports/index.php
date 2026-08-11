<!DOCTYPE html>
<html>

<head>
    <title>Liste des rapports</title>
</head>
<?php  /** @var array $rapports */ ?>
<body>

<h1>Liste des rapports</h1>

<a href="index.php?page=rapport/create">
    Déposer un rapport
</a>

<br><br>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Fichier</th>
        <th>Date de dépôt</th>
        <th>Statut</th>
        <th>Stage</th>
        <th>Actions</th>
    </tr>

    <?php foreach($rapports as $rapport): ?>

    <tr>

        <td>
            <?= $rapport['id_rapport']; ?>
        </td>

        <td>
            <a href="uploads/rapports/<?= $rapport['fichier']; ?>"
               target="_blank">
                <?= $rapport['fichier']; ?>
            </a>
        </td>

        <td>
            <?= $rapport['date_depot']; ?>
        </td>

        <td>
            <?= $rapport['statut_validation']; ?>
        </td>

        <td>
            <?= $rapport['id_stage']; ?>
        </td>

        <td>

            <a href="index.php?page=rapport/edit&id=<?= $rapport['id_rapport']; ?>">
                Modifier
            </a>

            |

            <a href="index.php?page=rapport/delete&id=<?= $rapport['id_rapport']; ?>"
               onclick="return confirm('Voulez-vous supprimer ce rapport ?');">
                Supprimer
            </a>
            |
            <?php if($rapport['statut_validation'] == 'En attente'): ?>

            <a href="index.php?page=rapport/validate&id=<?= $rapport['id_rapport']; ?>">
                Valider
            </a>

            |

            <a href="index.php?page=rapport/refuse&id=<?= $rapport['id_rapport']; ?>">
                Refuser
            </a>

<?php endif; ?>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

</body>

</html>