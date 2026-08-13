<?php

$title = "Modifier un stage";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

/** @var array $stage */
/** @var array $etudiants */
/** @var array $entreprises */

?>

<main class="main-content">

    <div class="page-content">

        <div class="page-header">

            <h1>Modifier un stage</h1>

        </div>


        <div class="form-card">

            <form
                method="POST"
                action="index.php?page=stage/update"
            >


                <!-- ID DU STAGE -->

                <input
                    type="hidden"
                    name="id_stage"
                    value="<?= $stage['id_stage']; ?>"
                >


                <!-- DATE DE DÉBUT -->

                <div class="form-group">

                    <label for="date_debut">
                        Date de début :
                    </label>

                    <input
                        type="date"
                        id="date_debut"
                        name="date_debut"
                        value="<?= htmlspecialchars($stage['date_debut']); ?>"
                        required
                    >

                </div>


                <!-- DATE DE FIN -->

                <div class="form-group">

                    <label for="date_fin">
                        Date de fin :
                    </label>

                    <input
                        type="date"
                        id="date_fin"
                        name="date_fin"
                        value="<?= htmlspecialchars($stage['date_fin']); ?>"
                        required
                    >

                </div>


                <!-- STATUT -->

                <div class="form-group">

                    <label for="statut">
                        Statut :
                    </label>

                    <select
                        id="statut"
                        name="statut"
                        required
                    >

                        <option
                            value="En cours"
                            <?= $stage['statut'] === 'En cours' ? 'selected' : ''; ?>
                        >
                            En cours
                        </option>


                        <option
                            value="Termine"
                            <?= $stage['statut'] === 'Termine' ? 'selected' : ''; ?>
                        >
                            Terminé
                        </option>

                    </select>

                </div>


                <!-- ÉTUDIANT -->

                <div class="form-group">

                    <label for="id_etudiant">
                        Étudiant :
                    </label>

                    <select
                        id="id_etudiant"
                        name="id_etudiant"
                        required
                    >

                        <?php foreach ($etudiants as $etudiant): ?>

                            <option
                                value="<?= $etudiant['id_etudiant']; ?>"
                                <?= $etudiant['id_etudiant'] == $stage['id_etudiant'] ? 'selected' : ''; ?>
                            >

                                <?= htmlspecialchars(
                                    $etudiant['nom'] . ' ' .
                                    $etudiant['prenom']
                                ); ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <!-- ENTREPRISE -->

                <div class="form-group">

                    <label for="id_entreprise">
                        Entreprise :
                    </label>

                    <select
                        id="id_entreprise"
                        name="id_entreprise"
                        required
                    >

                        <?php foreach ($entreprises as $entreprise): ?>

                            <option
                                value="<?= $entreprise['id_entreprise']; ?>"
                                <?= $entreprise['id_entreprise'] == $stage['id_entreprise'] ? 'selected' : ''; ?>
                            >

                                <?= htmlspecialchars(
                                    $entreprise['nom_entreprise']
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
                        href="index.php?page=stage/index"
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