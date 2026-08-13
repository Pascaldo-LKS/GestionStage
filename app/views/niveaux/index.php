<?php

$title = "Liste des niveaux";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

/** @var array $niveaux */

?>

<main >

    <div class="page-content">

        <div class="page-header">

            <h1>Liste des niveaux</h1>

            <a
                href="index.php?page=niveau/create"
                class="btn btn-primary"
            >
                Ajouter un niveau
            </a>

        </div>


        <div class="table-card">

            <div class="table-responsive">

                <table class="data-table">

                    <thead>

                        <tr>

                            <th>Nom du niveau</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                    <?php foreach ($niveaux as $niveau): ?>

                        <tr>

                            
                            <td>
                                <?= htmlspecialchars($niveau['nom_niveau']); ?>
                            </td>

                            <td class="actions">

                                <a
                                    href="index.php?page=niveau/edit&id=<?= $niveau['id_niveau']; ?>"
                                    class="btn btn-edit"
                                >
                                    Modifier
                                </a>

                                <a
                                    href="index.php?page=niveau/delete&id=<?= $niveau['id_niveau']; ?>"
                                    class="btn btn-delete"
                                    onclick="return confirm('Voulez-vous supprimer ce niveau ?');"
                                >
                                    Supprimer
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>