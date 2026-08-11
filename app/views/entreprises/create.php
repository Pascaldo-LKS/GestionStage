<?php

$title = "Ajouter une entreprise";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Ajouter une entreprise</h1>

        <p>
            Enregistrer une nouvelle entreprise d'accueil.
        </p>

    </div>

    <a href="index.php?page=entreprise/index"
       class="btn btn-secondary">
        ← Retour
    </a>

</div>


<div class="form-card">

    <form method="POST"
          action="index.php?page=entreprise/store">


        <!-- NOM DE L'ENTREPRISE -->

        <div class="form-group">

            <label for="nom_entreprise">
                Nom de l'entreprise :
            </label>

            <input
                type="text"
                id="nom_entreprise"
                name="nom_entreprise"
                required
            >

        </div>


        <!-- ADRESSE -->

        <div class="form-group">

            <label for="adresse">
                Adresse :
            </label>

            <input
                type="text"
                id="adresse"
                name="adresse"
                required
            >

        </div>


        <!-- TÉLÉPHONE -->

        <div class="form-group">

            <label for="telephone">
                Téléphone :
            </label>

            <input
                type="text"
                id="telephone"
                name="telephone"
                required
            >

        </div>


        <!-- EMAIL -->

        <div class="form-group">

            <label for="email">
                Email :
            </label>

            <input
                type="email"
                id="email"
                name="email"
                required
            >

        </div>


        <!-- BOUTONS -->

        <div class="form-actions">

            <a
                href="index.php?page=entreprise/index"
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
