<?php

$title = "Ajouter un étudiant";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>
<?php
/** @var array $filieres */
/** @var array $niveaux */
/** @var array $annees */
/** @var array $encadreurs */
?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Ajouter un étudiant</h1>

        <p>
            Enregistrer un nouvel étudiant.
        </p>

    </div>

    <a href="index.php?page=etudiant/index"
       class="btn btn-secondary">
        ← Retour
    </a>

</div>


<div class="form-card">

    <form action="index.php?page=etudiant/store"
          method="POST">


        <!-- NOM -->

        <div class="form-group">

            <label for="nom">
                Nom :
            </label>

            <input
                type="text"
                id="nom"
                name="nom"
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

                <option value="">
                    -- Choisir une filière --
                </option>

                <?php foreach($filieres as $filiere): ?>

                    <option
                        value="<?= $filiere['id_filiere']; ?>"
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
                required
            >

                <option value="">
                    -- Choisir un niveau --
                </option>

                <?php foreach($niveaux as $niveau): ?>

                    <option
                        value="<?= $niveau['id_niveau']; ?>"
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

                <option value="">
                    -- Choisir une année --
                </option>

                <?php foreach($annees as $annee): ?>

                    <option
                        value="<?= $annee['id_annee']; ?>"
                    >
                        <?= htmlspecialchars(
                            $annee['libelle']
                        ); ?>
                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <!-- ENCADREUR -->

        <div class="form-group">

            <label for="id_encadreur">
                Encadreur :
            </label>

            <select
                id="id_encadreur"
                name="id_encadreur"
                required
            >

                <option value="">
                    -- Choisir un encadreur --
                </option>

                <?php foreach($encadreurs as $encadreur): ?>

                    <option
                        value="<?= $encadreur['id_encadreur']; ?>"
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
