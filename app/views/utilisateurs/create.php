<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>

<?php /** @var array $etudiants */ ?>
?>

<?php
$title = "Ajouter un etudiant ";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';
?>

<body>

<div class="page-content">

    <div class="page-header">
        <h1>Ajouter un utilisateur</h1>
    </div>

    <div class="form-card">

        <form method="POST"
              action="index.php?page=utilisateur/store">

            <div class="form-group">

                <label for="nom_utilisateur">
                    Nom utilisateur :
                </label>

                <input
                    type="text"
                    id="nom_utilisateur"
                    name="nom_utilisateur"
                    required
                >

            </div>


            <div class="form-group">

                <label for="mot_de_passe">
                    Mot de passe :
                </label>

                <input
                    type="password"
                    id="mot_de_passe"
                    name="mot_de_passe"
                    required
                >

            </div>


            <div class="form-group">

                <label for="role">
                    Rôle :
                </label>

                <select
                    id="role"
                    name="role"
                    required
                >

                    <option value="">
                        -- Choisir un rôle --
                    </option>

                    <option value="Administrateur">
                        Administrateur
                    </option>

                    <option value="Etudiant">
                        Étudiant
                    </option>

                </select>

            </div>


            <div class="form-group" id="etudiantGroup">

                <label for="id_etudiant">
                    Étudiant :
                </label>

                <select
                    id="id_etudiant"
                    name="id_etudiant"
                >

                    <option value="">
                        -- Choisir un étudiant --
                    </option>

                    <?php foreach($etudiants as $etudiant): ?>

                        <option value="<?= $etudiant['id_etudiant']; ?>">

                            <?= htmlspecialchars(
                                $etudiant['nom'] . ' ' .
                                $etudiant['prenom']
                            ); ?>

                        </option>

                    <?php endforeach; ?>

                </select>

            </div>


            <div class="form-actions">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Enregistrer
                </button>

                <a
                    href="index.php?page=utilisateur/index"
                    class="btn btn-secondary"
                >
                    Retour
                </a>

            </div>

        </form>

    </div>

</div>


<script>

const role = document.getElementById('role');
const etudiantGroup = document.getElementById('etudiantGroup');
const etudiant = document.getElementById('id_etudiant');

function gererEtudiant()
{
    if (role.value === 'Etudiant') {

        etudiantGroup.style.display = 'flex';
        etudiant.disabled = false;
        etudiant.required = true;

    } else {

        etudiantGroup.style.display = 'none';
        etudiant.disabled = true;
        etudiant.required = false;
        etudiant.value = '';

    }
}

role.addEventListener('change', gererEtudiant);

gererEtudiant();

</script>
<?php

require_once __DIR__ . '/../layouts/footer.php';

?>

</body>
</html>