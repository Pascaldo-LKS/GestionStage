<?php

$title = "Gestion des étudiants";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>
<?php  /** @var array $etudiants */ ?>
<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Liste des étudiants</h1>

        <p>
            Gestion des étudiants inscrits.
        </p>

    </div>


    <a href="index.php?page=etudiant/create"
       class="btn btn-primary">
        + Ajouter un étudiant
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

                <th>Encadreur</th>

                <th>Filière</th>

                <th>Niveau</th>

                <th>Année académique</th>

                <th>Action</th>

            </tr>

        </thead>


        <tbody>

            <?php foreach($etudiants as $etudiant): ?>

            <tr>

                <td>
                    <?= $etudiant['id_etudiant']; ?>
                </td>


                <td>
                    <?= htmlspecialchars($etudiant['nom']); ?>
                </td>


                <td>
                    <?= htmlspecialchars($etudiant['prenom']); ?>
                </td>


                <td>
                    <?= htmlspecialchars($etudiant['email']); ?>
                </td>


                <td>

                    <?= htmlspecialchars(
                        $etudiant['nom_encadreur'] . ' ' .
                        $etudiant['prenom_encadreur']
                    ); ?>

                </td>


                <td>
                    <?= htmlspecialchars($etudiant['nom_filiere']); ?>
                </td>


                <td>
                    <?= htmlspecialchars($etudiant['nom_niveau']); ?>
                </td>


                <td>
                    <?= htmlspecialchars($etudiant['libelle']); ?>
                </td>


                <td class="actions">

                    <a
                        href="index.php?page=etudiant/edit&id=<?= $etudiant['id_etudiant']; ?>"
                        class="btn btn-edit"
                    >
                        Modifier
                    </a>


                    <a
                        href="index.php?page=etudiant/delete&id=<?= $etudiant['id_etudiant']; ?>"
                        class="btn btn-delete"
                        onclick="return confirm('Voulez-vous supprimer cet étudiant ?');"
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
