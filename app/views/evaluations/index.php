<?php

$title = "Liste des évaluations";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<main>

    <div class="page-content">

        <div class="page-header">

            <div>

                <h1>Liste des évaluations</h1>

                <p>
                    Gestion des évaluations des stages.
                </p>

            </div>

            <a
                href="index.php?page=evaluation/create"
                class="btn btn-primary"
            >
                + Ajouter une évaluation
            </a>

        </div>


        <div class="table-container">

            <table class="data-table">

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Étudiant</th>

                        <th>Entreprise</th>

                        <th>Note</th>

                        <th>Appréciation</th>

                        <th>Date</th>

                        <th>Actions</th>

                    </tr>

                </thead>


                <tbody>

                <?php foreach ($evaluations as $evaluation): ?>

                    <tr>

                        <td>
                            <?= $evaluation['id_evaluation']; ?>
                        </td>


                        <td>

                            <?= htmlspecialchars(
                                $evaluation['nom'] . ' ' .
                                $evaluation['prenom']
                            ); ?>

                        </td>


                        <td>

                            <?= htmlspecialchars(
                                $evaluation['nom_entreprise']
                            ); ?>

                        </td>


                        <td>

                            <?= htmlspecialchars(
                                $evaluation['note']
                            ); ?>

                        </td>


                        <td>

                            <?= htmlspecialchars(
                                $evaluation['appreciation'] ?? ''
                            ); ?>

                        </td>


                        <td>

                            <?= htmlspecialchars(
                                $evaluation['date_evaluation'] ?? ''
                            ); ?>

                        </td>


                        <td class="actions">

                            <a
                                href="index.php?page=evaluation/edit&id=<?= $evaluation['id_evaluation']; ?>"
                                class="btn btn-edit"
                            >
                                Modifier
                            </a>


                            <a
                                href="index.php?page=evaluation/delete&id=<?= $evaluation['id_evaluation']; ?>"
                                class="btn btn-delete"
                                onclick="return confirm('Voulez-vous supprimer cette évaluation ?');"
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

</main>


<?php require_once __DIR__ . '/../layouts/footer.php'; ?>