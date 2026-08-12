<?php
/** @var array $rapports */
?>

<?php
$title = "Liste des rapports";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';
?>

<main>

    <div class="page-content">

        <div class="page-header">

            <div>
                <h1>Liste des rapports</h1>

                <p>
                    Gestion des rapports de stage
                </p>
            </div>

            <a
                href="index.php?page=rapport/create"
                class="btn btn-primary"
            >
                + Déposer un rapport
            </a>

        </div>


        <div class="table-container">

            <table  class="data-table">

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Étudiant</th>

                        <th>Fichier</th>

                        <th>Date de dépôt</th>

                        <th>Statut</th>

                        <th>Actions</th>

                    </tr>

                </thead>


                <tbody>

                    <?php if (empty($rapports)): ?>

                        <tr>

                            <td colspan="6" class="empty-message">

                                Aucun rapport enregistré.

                            </td>

                        </tr>

                    <?php else: ?>


                        <?php foreach ($rapports as $rapport): ?>

                            <tr>

                                <td>
                                    <?= $rapport['id_rapport']; ?>
                                </td>


                                <!-- ETUDIANT -->

                                <td>

                                    <?php if (!empty($rapport['nom_etudiant'])): ?>

                                        <strong>
                                            <?= htmlspecialchars(
                                                $rapport['nom_etudiant']
                                                . ' '
                                                . $rapport['prenom_etudiant']
                                            ); ?>
                                        </strong>

                                        <br>

                                        <small>
                                            <?= htmlspecialchars(
                                                $rapport['nom_entreprise']
                                                ?? 'Entreprise non renseignée'
                                            ); ?>
                                        </small>

                                    <?php else: ?>

                                        <span>
                                            Étudiant non trouvé
                                        </span>

                                    <?php endif; ?>

                                </td>


                                <!-- FICHIER -->

                                <td>

                                    <a
                                        href="uploads/rapports/<?= urlencode($rapport['fichier']); ?>"
                                        target="_blank"
                                        class="file-link"
                                    >
                                        📄
                                        <?= htmlspecialchars($rapport['fichier']); ?>
                                    </a>

                                </td>


                                <!-- DATE -->

                                <td>

                                    <?= htmlspecialchars(
                                        $rapport['date_depot']
                                    ); ?>

                                </td>


                                <!-- STATUT -->

                                <td>

                                    <?php if ($rapport['statut_validation'] === 'Valide'): ?>

                                        <span class="status status-success">
                                            Validé
                                        </span>

                                    <?php elseif ($rapport['statut_validation'] === 'Refuse'): ?>

                                        <span class="status status-danger">
                                            Refusé
                                        </span>

                                    <?php else: ?>

                                        <span class="status status-warning">
                                            En attente
                                        </span>

                                    <?php endif; ?>

                                </td>


                                <!-- ACTIONS -->

                                <td>

                                    <div class="action-buttons">

                                        <a
                                            href="index.php?page=rapport/edit&id=<?= $rapport['id_rapport']; ?>"
                                            class="btn btn-edit"
                                        >
                                            Modifier
                                        </a>


                                        <a
                                            href="index.php?page=rapport/delete&id=<?= $rapport['id_rapport']; ?>"
                                            class="btn btn-delete"
                                            onclick="return confirm('Voulez-vous supprimer ce rapport ?');"
                                        >
                                            Supprimer
                                        </a>


                                        <?php if ($rapport['statut_validation'] === 'En attente'): ?>

                                            <a
                                                href="index.php?page=rapport/validate&id=<?= $rapport['id_rapport']; ?>"
                                                class="btn btn-success"
                                            >
                                                Valider
                                            </a>


                                            <a
                                                href="index.php?page=rapport/refuse&id=<?= $rapport['id_rapport']; ?>"
                                                class="btn btn-danger"
                                            >
                                                Refuser
                                            </a>

                                        <?php endif; ?>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</main>


<?php require_once __DIR__ . '/../layouts/footer.php'; ?>