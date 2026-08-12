<?php

$title = "Tableau de bord";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<main>

    <div class="page-content">

        <div class="page-header">

            <div>

                <h1>Tableau de bord</h1>

                <p>
                    Bienvenue dans l'espace d'administration de GestionStage.
                </p>

            </div>

        </div>


        <div class="dashboard-grid">


            <!-- ETUDIANTS -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    👨‍🎓
                </div>

                <div class="dashboard-card-content">

                    <h3>Étudiants</h3>

                    <strong>
                        <?= $totalEtudiants; ?>
                    </strong>

                </div>

                <a href="index.php?page=etudiant/index"  class="btn btn-primary">
                    Voir les étudiants →
                </a>

            </div>


            <!-- ENTREPRISES -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    🏢
                </div>

                <div class="dashboard-card-content">

                    <h3>Entreprises</h3>

                    <strong>
                        <?= $totalEntreprises; ?>
                    </strong>

                </div>

                <a href="index.php?page=entreprise/index"  class="btn btn-primary">
                    Voir les entreprises →
                </a>

            </div>


            <!-- ENCADREURS -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    👨‍🏫
                </div>

                <div class="dashboard-card-content">

                    <h3>Encadreurs</h3>

                    <strong>
                        <?= $totalEncadreurs; ?>
                    </strong>

                </div>

                <a href="index.php?page=encadreur/index"  class="btn btn-primary">
                    Voir les encadreurs →
                </a>

            </div>


            <!-- STAGES -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    🎓
                </div>

                <div class="dashboard-card-content">

                    <h3>Stages</h3>

                    <strong>
                        <?= $totalStages; ?>
                    </strong>

                </div>

                <a href="index.php?page=stage/index"  class="btn btn-primary">
                    Voir les stages →
                </a>

            </div>


            <!-- RAPPORTS -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    📄
                </div>

                <div class="dashboard-card-content">

                    <h3>Rapports</h3>

                    <strong>
                        <?= $totalRapports; ?>
                    </strong>

                </div>

                <a href="index.php?page=rapport/index"  class="btn btn-primary">
                    Voir les rapports →
                </a>

            </div>


            <!-- EVALUATIONS -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    ⭐
                </div>

                <div class="dashboard-card-content">

                    <h3>Évaluations</h3>

                    <strong>
                        <?= $totalEvaluations; ?>
                    </strong>

                </div>

                <a href="index.php?page=evaluation/index"  class="btn btn-primary">
                    Voir les évaluations →
                </a>

            </div>


            <!-- UTILISATEURS -->

            <div class="dashboard-card">

                <div class="dashboard-card-icon">
                    👤
                </div>

                <div class="dashboard-card-content">

                    <h3>Utilisateurs</h3>

                    <strong>
                        <?= $totalUtilisateurs; ?>
                    </strong>

                </div>

                <a href="index.php?page=utilisateur/index"  class="btn btn-primary">
                    Voir les utilisateurs →
                </a>

            </div>


        </div>

    </div>

</main>


<?php require_once __DIR__ . '/../layouts/footer.php'; ?>