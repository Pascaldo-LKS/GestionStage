<?php

$title = "Ajouter un niveau";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<main class="main-content">

    <div class="page-content">

        <div class="page-header">

            <h1>Ajouter un niveau</h1>

        </div>


        <div class="form-card">

            <form
                method="POST"
                action="index.php?page=niveau/store"
            >

                <div class="form-group">

                    <label for="nom_niveau">
                        Libellé du niveau :
                    </label>

                    <input
                        type="text"
                        id="nom_niveau"
                        name="nom_niveau"
                        required
                    >

                </div>


                <div class="form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Enregistrer
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