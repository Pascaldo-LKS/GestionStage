<?php
/** @var array $stage */
?>

<?php
$title = "Déposer un rapport";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-etudiant.php';
?>

<main>

    <div class="page-content">

        <div class="page-header">

            <div>

                <h1>Déposer mon rapport</h1>

                <p>
                    Déposez votre rapport de stage au format PDF.
                </p>

            </div>

        </div>


        <div class="form-container">


            <!-- INFORMATIONS DU STAGE -->

            <div class="info-box">

                <h3>Mon stage</h3>

                <p>

                    <strong>Date de début :</strong>

                    <?= htmlspecialchars($stage['date_debut']); ?>

                </p>


                <p>

                    <strong>Date de fin :</strong>

                    <?= htmlspecialchars($stage['date_fin']); ?>

                </p>

            </div>


            <!-- FORMULAIRE -->

            <form
                method="POST"
                action="index.php?page=rapport/store"
                enctype="multipart/form-data"
            >

                <div class="form-group">

                    <label for="fichier">
                        Rapport PDF
                    </label>

                    <input
                        type="file"
                        id="fichier"
                        name="fichier"
                        accept=".pdf"
                        required
                    >

                    <small>
                        Format accepté : PDF
                    </small>

                </div>


                <div class="form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Déposer mon rapport
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