<?php

$title = "Ajouter une filière";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Ajouter une filière</h1>

        <p>
            Enregistrer une nouvelle filière.
        </p>

    </div>


    <a
        href="index.php?page=filiere/index"
        class="btn btn-secondary"
    >
        ← Retour
    </a>

</div>


<div class="form-card">

    <form
        method="POST"
        action="index.php?page=filiere/store"
    >

        <div class="form-group">

            <label for="nom_filiere">
                Nom de la filière :
            </label>

            <input
                type="text"
                id="nom_filiere"
                name="nom_filiere"
                required
            >

        </div>


        <div class="form-actions">

            <a
                href="index.php?page=filiere/index"
                class="btn btn-secondary"
            >
                Annuler
            </a>


            <button
                type="submit"
                class="btn btn-primary"
            >
                Enregistrer
            </button>

        </div>

    </form>

</div>
```

</div>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>
