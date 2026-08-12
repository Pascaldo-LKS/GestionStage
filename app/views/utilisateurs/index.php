<?php

$title = "Gestion des utilisateurs";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>
        <h1>Liste des utilisateurs</h1>

        <p>
            Gestion des comptes utilisateurs de la plateforme.
        </p>
    </div>

    <a href="index.php?page=utilisateur/create"
       class="btn btn-primary">
        + Ajouter un utilisateur
    </a>

</div>


<div class="table-container">

    <table class="data-table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nom utilisateur</th>

                <th>Rôle</th>

                <th>ID Étudiant</th>

                <th>Actions</th>

            </tr>

        </thead>


        <tbody>

            <?php foreach($utilisateurs as $utilisateur): ?>

            <tr>

                <td>
                    <?= $utilisateur['id_utilisateur']; ?>
                </td>


                <td>
                    <?= htmlspecialchars(
                        $utilisateur['nom_utilisateur']
                    ); ?>
                </td>


                <td>
                    <span class="badge">

                        <?= htmlspecialchars(
                            $utilisateur['role']
                        ); ?>

                    </span>
                </td>


                <td>
                    <?= htmlspecialchars( $utilisateur['nom'] ?? '-'); ?>
                </td>


                <td class="actions">

                    <a
                        href="index.php?page=utilisateur/edit&id=<?= $utilisateur['id_utilisateur']; ?>"
                        class="btn btn-edit"
                    >
                        Modifier
                    </a>


                    <a
                        href="index.php?page=utilisateur/delete&id=<?= $utilisateur['id_utilisateur']; ?>"
                        class="btn btn-delete"
                        onclick="return confirm('Voulez-vous supprimer cet utilisateur ?');"
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
