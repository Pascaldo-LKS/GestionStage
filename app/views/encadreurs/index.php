<?php

$title = "Gestion des encadreurs";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Liste des encadreurs</h1>

        <p>
            Gestion des encadreurs de stage.
        </p>

    </div>

    <a
        href="index.php?page=encadreur/create"
        class="btn btn-primary"
    >
        + Ajouter un encadreur
    </a>

</div>


<div class="table-container">

    <table class="data-table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nom</th>

                <th>Prénom</th>

                <th>Email</th>

                <th>Téléphone</th>

                <th>Fonction</th>

                <th>Actions</th>

            </tr>

        </thead>


        <tbody>

            <?php foreach($encadreurs as $encadreur): ?>

            <tr>

                <td>
                    <?= $encadreur['id_encadreur']; ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $encadreur['nom_encadreur']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $encadreur['prenom_encadreur']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $encadreur['email']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $encadreur['telephone']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $encadreur['fonction']
                    ); ?>
                </td>


                <td class="actions">

                    <a
                        href="index.php?page=encadreur/edit&id=<?= $encadreur['id_encadreur']; ?>"
                        class="btn btn-edit"
                    >
                        Modifier
                    </a>


                    <a
                        href="index.php?page=encadreur/delete&id=<?= $encadreur['id_encadreur']; ?>"
                        class="btn btn-delete"
                        onclick="return confirm('Voulez-vous supprimer cet encadreur ?');"
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
