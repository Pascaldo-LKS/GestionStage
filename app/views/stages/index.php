<?php

$title = "Liste des stages";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

/** @var array $stages */

?>

<main class="main-content">

    <div class="page-content">

        <div class="page-header">

            <h1>Liste des stages</h1>

            <a
                href="index.php?page=stage/create"
                class="btn btn-primary"
            >
                Ajouter un stage
            </a>

        </div>


        <div class="table-card">

            <div class="table-responsive">

                <table class="data-table">

                    <thead>

                        <tr>

                            <th>Date début</th>
                            <th>Date fin</th>
                            <th>Statut</th>
                            <th>Étudiant</th>
                            <th>Entreprise</th>
                            <th>Actions</th>
                        </tr>

                    </thead>


                    <tbody>

                    <?php foreach ($stages as $stage): ?>

                        <tr>
                            <td>
                                <?= htmlspecialchars($stage['date_debut']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($stage['date_fin']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($stage['statut']); ?>
                            </td>

                            <td>

                                <?= htmlspecialchars(
                                    $stage['nom_etudiant'] . ' ' .
                                    $stage['prenom_etudiant']
                                ); ?>

                            </td>

                            <td>

                                <?= htmlspecialchars(
                                    $stage['nom_entreprise']
                                ); ?>

                            </td>

                            <td class="actions">

                                <a
                                    href="index.php?page=stage/edit&id=<?= $stage['id_stage']; ?>"
                                    class="btn btn-edit"
                                >
                                    Modifier
                                </a>


                                <a
                                    href="index.php?page=stage/delete&id=<?= $stage['id_stage']; ?>"
                                    class="btn btn-delete"
                                    onclick="return confirm('Voulez-vous supprimer ce stage ?');"
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