<?php

$title = "Modifier une évaluation";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<main>

    <div class="page-content">

        <div class="page-header">

            <div>

                <h1>Modifier une évaluation</h1>

            </div>

        </div>


        <div class="form-card">

            <form
                method="POST"
                action="index.php?page=evaluation/update"
            >


                <input
                    type="hidden"
                    name="id_evaluation"
                    value="<?= $evaluation['id_evaluation']; ?>"
                >


                <!-- STAGE -->

                <div class="form-group">

                    <label for="id_stage">
                        Stage :
                    </label>

                    <select
                        name="id_stage"
                        id="id_stage"
                        required
                    >

                        <?php foreach ($stages as $stage): ?>

                            <option
                                value="<?= $stage['id_stage']; ?>"

                                <?= $stage['id_stage'] == $evaluation['id_stage']
                                    ? 'selected'
                                    : ''; ?>
                            >

                                Stage #<?= $stage['id_stage']; ?>

                                -
                                <?= htmlspecialchars(
                                    $stage['nom_etudiant'] . ' ' .
                                    $stage['prenom_etudiant']
                                ); ?>

                                -
                                <?= htmlspecialchars(
                                    $stage['nom_entreprise']
                                ); ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- NOTE -->

                <div class="form-group">

                    <label for="note">
                        Note :
                    </label>

                    <input
                        type="number"
                        name="note"
                        id="note"
                        min="0"
                        max="20"
                        step="0.01"
                        value="<?= htmlspecialchars(
                            $evaluation['note'] ?? ''
                        ); ?>"
                    >

                </div>


                <!-- APPRECIATION -->

                <div class="form-group">

                    <label for="appreciation">
                        Appréciation :
                    </label>

                    <textarea
                        name="appreciation"
                        id="appreciation"
                        rows="5"
                    ><?= htmlspecialchars(
                        $evaluation['appreciation'] ?? ''
                    ); ?></textarea>

                </div>


                <!-- DATE -->

                <div class="form-group">

                    <label for="date_evaluation">
                        Date d'évaluation :
                    </label>

                    <input
                        type="date"
                        name="date_evaluation"
                        id="date_evaluation"
                        value="<?= htmlspecialchars(
                            $evaluation['date_evaluation'] ?? ''
                        ); ?>"
                    >

                </div>


                <div class="form-actions">

                    <a
                        href="index.php?page=evaluation/index"
                        class="btn btn-secondary"
                    >
                        Annuler
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Modifier
                    </button>

                </div>


            </form>

        </div>

    </div>

</main>


<?php require_once __DIR__ . '/../layouts/footer.php'; ?>