<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modifier un utilisateur</title>
</head>

<?php
/** @var array $utilisateur */
/** @var array $etudiants */
?>


?>

<?php
$title = "Modifier un utilisateur";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';
?>

<body>

<div class="page-container">

    <div class="page-header">
        <h1>Modifier un utilisateur</h1>
    </div>


    <div class="form-container">

        <form method="POST"
              action="index.php?page=utilisateur/update">


            <!-- ID -->
            <input
                type="hidden"
                name="id_utilisateur"
                value="<?= $utilisateur['id_utilisateur']; ?>"
            >


            <!-- NOM UTILISATEUR -->
            <div class="form-group">

                <label for="nom_utilisateur">
                    Nom utilisateur
                </label>

                <input
                    type="text"
                    id="nom_utilisateur"
                    name="nom_utilisateur"
                    value="<?= htmlspecialchars($utilisateur['nom_utilisateur']); ?>"
                    required
                >

            </div>


            <!-- ROLE -->
            <div class="form-group">

                <label for="role">
                    Rôle
                </label>

                <select
                    id="role"
                    name="role"
                    required
                >

                    <option
                        value="Administrateur"
                        <?= $utilisateur['role'] === 'Administrateur' ? 'selected' : ''; ?>
                    >
                        Administrateur
                    </option>

                    <option
                        value="Etudiant"
                        <?= $utilisateur['role'] === 'Etudiant' ? 'selected' : ''; ?>
                    >
                        Étudiant
                    </option>

                </select>

            </div>


            <!-- ETUDIANT -->
            <div
                class="form-group"
                id="etudiantGroup"
            >

                <label for="id_etudiant">
                    Étudiant
                </label>

                <select
                    id="id_etudiant"
                    name="id_etudiant"
                >

                    <option value="">
                        -- Choisir un étudiant --
                    </option>

                    <?php foreach ($etudiants as $etudiant): ?>

                        <option
                            value="<?= $etudiant['id_etudiant']; ?>"
                            <?= $etudiant['id_etudiant'] == $utilisateur['id_etudiant'] ? 'selected' : ''; ?>
                        >

                            <?= htmlspecialchars(
                                $etudiant['nom'] . ' ' .
                                $etudiant['prenom']
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
                    href="index.php?page=utilisateur/index"
                    class="btn btn-secondary"
                >
                    Annuler
                </a>

            </div>

        </form>

    </div>

</div>


<script>

const roleSelect = document.getElementById('role');

const etudiantGroup = document.getElementById('etudiantGroup');

const etudiantSelect = document.getElementById('id_etudiant');


function gererEtudiant()
{

    if (roleSelect.value === 'Etudiant')
    {

        // Afficher le champ étudiant
        etudiantGroup.style.display = 'block';

        // Activer le select
        etudiantSelect.disabled = false;

        // Le rendre obligatoire
        etudiantSelect.required = true;

    }
    else
    {

        // Cacher le champ étudiant
        etudiantGroup.style.display = 'none';

        // Désactiver le select
        etudiantSelect.disabled = true;

        // Retirer required
        etudiantSelect.required = false;

        // Aucun étudiant pour un administrateur
        etudiantSelect.value = '';

    }

}


// Quand le rôle change
roleSelect.addEventListener('change', gererEtudiant);


// Au chargement de la page
gererEtudiant();

</script>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>

</body>

</html>