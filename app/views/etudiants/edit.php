<?php

$title = "Modifier un étudiant";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>
<?php
/** @var array $filieres */
/** @var array $niveaux */
/** @var array $annees */
/** @var array $encadreurs */
/** @var array $etudiant */

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Modifier un étudiant</h1>

        <p>
            Modifier les informations de l'étudiant.
        </p>

    </div>

    <a href="index.php?page=etudiant/index"
       class="btn btn-secondary">
        ← Retour
    </a>

</div>


<div class="form-card">

    <form method="POST"
          action="index.php?page=etudiant/update">


        <!-- ID ÉTUDIANT -->

        <input
            type="hidden"
            name="id_etudiant"
            value="<?= $etudiant['id_etudiant']; ?>"
        >


        <!-- NOM -->

        <div class="form-group">

            <label for="nom">
                Nom :
            </label>

            <input
                type="text"
                id="nom"
                name="nom"
                value="<?= htmlspecialchars($etudiant['nom']); ?>"
                required
            >

        </div>


        <!-- PRÉNOM -->

        <div class="form-group">

            <label for="prenom">
                Prénom :
            </label>

            <input
                type="text"
                id="prenom"
                name="prenom"
                value="<?= htmlspecialchars($etudiant['prenom']); ?>"
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
                value="<?= htmlspecialchars($etudiant['email']); ?>"
                required
            >

        </div>


        <!-- FILIÈRE -->

        <div class="form-group">

            <label for="id_filiere">
                Filière :
            </label>

            <select
                id="id_filiere"
                name="id_filiere"
                required
            >

                <?php foreach($filieres as $filiere): ?>

                    <option
                        value="<?= $filiere['id_filiere']; ?>"
                        <?= $filiere['id_filiere'] == $etudiant['id_filiere'] ? 'selected' : ''; ?>
                    >

                        <?= htmlspecialchars(
                            $filiere['nom_filiere']
                        ); ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <!-- NIVEAU -->

        <div class="form-group">

            <label for="id_niveau">
                Niveau :
            </label>

            <select
                id="id_niveau"
                name="id_niveau"
            >

                <?php foreach($niveaux as $niveau): ?>

                    <option
                        value="<?= $niveau['id_niveau']; ?>"
                        <?= $niveau['id_niveau'] == $etudiant['id_niveau'] ? 'selected' : ''; ?>
                    >

                        <?= htmlspecialchars(
                            $niveau['nom_niveau']
                        ); ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <!-- ANNÉE ACADÉMIQUE -->

        <div class="form-group">

            <label for="id_annee">
                Année académique :
            </label>

            <select
                id="id_annee"
                name="id_annee"
                required
            >

                <?php foreach($annees as $annee): ?>

                    <option
                        value="<?= $annee['id_annee']; ?>"
                        <?= $annee['id_annee'] == $etudiant['id_annee'] ? 'selected' : ''; ?>
                    >

                        <?= htmlspecialchars(
                            $annee['libelle']
                        ); ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <!-- ENCADREUR -->

        <div
            class="form-group"
            id="encadreurDiv"
            style="display: none;"
        >

            <label for="id_encadreur">
                Encadreur :
            </label>

            <select
                id="id_encadreur"
                name="id_encadreur"
            >

                <option value="">
                    -- Aucun encadreur --
                </option>

                <?php foreach($encadreurs as $encadreur): ?>

                    <option
                        value="<?= $encadreur['id_encadreur']; ?>"
                        <?= $encadreur['id_encadreur'] == $etudiant['id_encadreur'] ? 'selected' : ''; ?>
                    >

                        <?= htmlspecialchars(
                            $encadreur['nom_encadreur']
                            . ' '
                            . $encadreur['prenom_encadreur']
                        ); ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <!-- BOUTONS -->

        <div class="form-actions">

            <a
                href="index.php?page=etudiant/index"
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

<script>

function afficherEncadreur()
{
    const niveau =
        document.querySelector('select[name="id_niveau"]');

    const encadreurDiv =
        document.getElementById('encadreurDiv');


    if (!niveau || !encadreurDiv) {
        return;
    }


    const niveauSelectionne =
        niveau.options[niveau.selectedIndex].text.trim();


    if (niveauSelectionne === "Licence 3")
    {
        encadreurDiv.style.display = "flex";
    }
    else
    {
        encadreurDiv.style.display = "none";
    }
}


document.addEventListener("DOMContentLoaded", function()
{
    const niveau =
        document.querySelector('select[name="id_niveau"]');


    if (niveau)
    {
        niveau.addEventListener(
            'change',
            afficherEncadreur
        );

        afficherEncadreur();
    }
});

</script>
