<?php

$title = "Modifier un encadreur";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Modifier un encadreur</h1>

        <p>
            Modifier les informations de l'encadreur.
        </p>

    </div>


    <a
        href="index.php?page=encadreur/index"
        class="btn btn-secondary"
    >
        ← Retour
    </a>

</div>


<div class="form-card">

    <form
        method="POST"
        action="index.php?page=encadreur/update"
    >


        <!-- ID ENCADREUR -->

        <input
            type="hidden"
            name="id_encadreur"
            value="<?= $encadreur['id_encadreur']; ?>"
        >


        <!-- NOM -->

        <div class="form-group">

            <label for="nom_encadreur">
                Nom :
            </label>

            <input
                type="text"
                id="nom_encadreur"
                name="nom_encadreur"
                value="<?= htmlspecialchars(
                    $encadreur['nom_encadreur']
                ); ?>"
                required
            >

        </div>


        <!-- PRÉNOM -->

        <div class="form-group">

            <label for="prenom_encadreur">
                Prénom :
            </label>

            <input
                type="text"
                id="prenom_encadreur"
                name="prenom_encadreur"
                value="<?= htmlspecialchars(
                    $encadreur['prenom_encadreur']
                ); ?>"
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
                value="<?= htmlspecialchars(
                    $encadreur['email']
                ); ?>"
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
                value="<?= htmlspecialchars(
                    $encadreur['telephone']
                ); ?>"
                required
            >

        </div>


        <!-- FONCTION -->

        <div class="form-group">

            <label for="fonction">
                Fonction :
            </label>

            <input
                type="text"
                id="fonction"
                name="fonction"
                value="<?= htmlspecialchars(
                    $encadreur['fonction']
                ); ?>"
                required
            >

        </div>


        <!-- BOUTONS -->

        <div class="form-actions">

            <a
                href="index.php?page=encadreur/index"
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
```

</div>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>
