<?php
/** @var array $rapport */
/** @var array $stages */
?>

<?php
$title = "Modifier un rapport";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';
?>

<main>

    <div class="page-content">

        <div class="page-header">

            <div>

                <h1>Modifier un rapport</h1>

                <p>
                    Modifier les informations du rapport.
                </p>

            </div>

        </div>


        <div class="form-container">

            <form
                method="POST"
                action="index.php?page=rapport/update"
                enctype="multipart/form-data"
            >

                <input
                    type="hidden"
                    name="id_rapport"
                    value="<?= $rapport['id_rapport']; ?>"
                >


                <!-- FICHIER ACTUEL -->

                <div class="info-box">

                    <p>

                        <strong>Fichier actuel :</strong>

                        <?= htmlspecialchars(
                            $rapport['fichier']
                        ); ?>

                    </p>

                </div>


                <!-- NOUVEAU FICHIER -->

                <div class="form-group">

                    <label for="fichier">
                        Nouveau fichier PDF
                    </label>

                    <input
                        type="file"
                        id="fichier"
                        name="fichier"
                        accept=".pdf"
                    >

                    <small>
                        Laissez vide si vous ne souhaitez pas changer le fichier.
                    </small>

                </div>


                <!-- STATUT -->

                <div class="form-group">

                    <label for="statut_validation">
                        Statut
                    </label>

                    <select
                        id="statut_validation"
                        name="statut_validation"
                    >

                        <option
                            value="En attente"
                            <?= $rapport['statut_validation'] === 'En attente'
                                ? 'selected'
                                : ''; ?>
                        >
                            En attente
                        </option>


                        <option
                            value="Valide"
                            <?= $rapport['statut_validation'] === 'Valide'
                                ? 'selected'
                                : ''; ?>
                        >
                            Validé
                        </option>


                        <option
                            value="Refuse"
                            <?= $rapport['statut_validation'] === 'Refuse'
                                ? 'selected'
                                : ''; ?>
                        >
                            Refusé
                        </option>

                    </select>

                </div>


                <!-- STAGE -->

                <div class="form-group">

                    <label for="id_stage">
                        Stage
                    </label>

                    <select
                        id="id_stage"
                        name="id_stage"
                        required
                    >

                        <?php foreach ($stages as $stage): ?>

                            <option
                                value="<?= $stage['id_stage']; ?>"
                                <?= $stage['id_stage'] == $rapport['id_stage']
                                    ? 'selected'
                                    : ''; ?>
                            >

                                Stage <?= $stage['id_stage']; ?>

                                -

                                <?= htmlspecialchars(
                                    $stage['nom_etudiant']
                                    . ' '
                                    . $stage['prenom_etudiant']
                                ); ?>

                                -

                                <?= htmlspecialchars(
                                    $stage['nom_entreprise']
                                ); ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- BOUTONS -->

                <div class="form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Modifier
                    </button>


                    <a
                        href="index.php?page=rapport/index"
                        class="btn btn-secondary"
                    >
                        Retour
                    </a>

                </div>

            </form>

        </div>

    </div>

</main>


<?php require_once __DIR__ . '/../layouts/footer.php'; ?>