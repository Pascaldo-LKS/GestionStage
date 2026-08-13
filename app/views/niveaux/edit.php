<?php

$title = "Modifier un niveau";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

/** @var array $niveau */

?>

<main class="main-content">

    <div class="page-content">

        <div class="page-header">

            <h1>Modifier un niveau</h1>

        </div>

        <div class="form-card">

            <form
                method="POST"
                action="index.php?page=niveau/update"
            >

                <input
                    type="hidden"
                    name="id_niveau"
                    value="<?= $niveau['id_niveau']; ?>"
                >

                <div class="form-group">

                    <label for="nom_niveau">
                        Libellé du niveau :
                    </label>

                    <input
                        type="text"
                        id="nom_niveau"
                        name="nom_niveau"
                        value="<?= htmlspecialchars($niveau['nom_niveau']); ?>"
                        required
                    >

                </div>

                <div class="form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Modifier
                    </button>

                    <a
                        href="index.php?page=niveau/index"
                        class="btn btn-secondary"
                    >
                        Retour
                    </a>

                </div>

            </form>

        </div>

    </div>

</main>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>