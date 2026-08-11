<?php

$title = "Gestion des entreprises";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>
<?php /** @var array $entreprises */ ?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Liste des entreprises</h1>

        <p>
            Gestion des entreprises d'accueil des stages.
        </p>

    </div>


    <a href="index.php?page=entreprise/create"
       class="btn btn-primary">
        + Ajouter une entreprise
    </a>

</div>


<div class="table-container">

    <table class="data-table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nom de l'entreprise</th>

                <th>Adresse</th>

                <th>Téléphone</th>

                <th>Email</th>

                <th>Actions</th>

            </tr>

        </thead>


        <tbody>

            <?php foreach($entreprises as $entreprise): ?>

            <tr>

                <td>
                    <?= $entreprise['id_entreprise']; ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $entreprise['nom_entreprise']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $entreprise['adresse']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $entreprise['telephone']
                    ); ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $entreprise['email']
                    ); ?>
                </td>


                <td class="actions">

                    <a
                        href="index.php?page=entreprise/edit&id=<?= $entreprise['id_entreprise']; ?>"
                        class="btn btn-edit"
                    >
                        Modifier
                    </a>


                    <a
                        href="index.php?page=entreprise/delete&id=<?= $entreprise['id_entreprise']; ?>"
                        class="btn btn-delete"
                        onclick="return confirm('Voulez-vous supprimer cette entreprise ?');"
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
