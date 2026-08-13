<?php

$title = "Ajouter un stage";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

/** @var array $etudiants */
/** @var array $entreprises */

?>

<main class="main-content">

    <div class="page-content">

        <div class="page-header">

            <h1>Ajouter un stage</h1>

        </div>


        <div class="form-card">

            <form
                method="POST"
                action="index.php?page=stage/store"
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

                        <option value="">
                            -- Choisir un statut --
                        </option>

                        <option value="En cours">
                            En cours
                        </option>

                        <option value="Termine">
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

                        <option value="">
                            -- Choisir un étudiant --
                        </option>


                        <?php foreach ($etudiants as $etudiant): ?>

                            <option
                                value="<?= $etudiant['id_etudiant']; ?>"
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

                        <option value="">
                            -- Choisir une entreprise --
                        </option>


                        <?php foreach ($entreprises as $entreprise): ?>

                            <option
                                value="<?= $entreprise['id_entreprise']; ?>"
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
                        Enregistrer
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