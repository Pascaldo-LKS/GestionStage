<?php

$title = "Gestion des filières";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Liste des filières</h1>

        <p>
            Gestion des filières de formation.
        </p>

    </div>

    <a
        href="index.php?page=filiere/create"
        class="btn btn-primary"
    >
        + Ajouter une filière
    </a>

</div>


<div class="table-container">

    <table class="data-table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nom de la filière</th>

                <th>Actions</th>

            </tr>

        </thead>


        <tbody>

            <?php foreach($filieres as $filiere): ?>

            <tr>

                <td>
                    <?= $filiere['id_filiere']; ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $filiere['nom_filiere']
                    ); ?>
                </td>


                <td class="actions">

                    <a
                        href="index.php?page=filiere/edit&id=<?= $filiere['id_filiere']; ?>"
                        class="btn btn-edit"
                    >
                        Modifier
                    </a>


                    <a
                        href="index.php?page=filiere/delete&id=<?= $filiere['id_filiere']; ?>"
                        class="btn btn-delete"
                        onclick="return confirm('Voulez-vous supprimer cette filière ?');"
                    >
                        Supprimer
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>
```

</div>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>
