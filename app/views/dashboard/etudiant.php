<?php

$title = "Tableau de bord étudiant";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-etudiant.php';

?>

<main class="main-content">

    <div class="dashboard-header">

        <h1>
            Bonjour <?= htmlspecialchars($etudiant['prenom_etudiant']); ?> 👋
        </h1>

        <p>
            Bienvenue dans votre espace étudiant.
        </p>

    </div>


    <!-- CARTES -->

    <div class="dashboard-cards">

        <!-- STAGE -->

        <div class="dashboard-card">

            <div class="card-icon">
                📋
            </div>

            <div>

                <h3>Mon stage</h3>

                <?php if($stage): ?>

                    <p>
                        <?= htmlspecialchars($stage['statut']); ?>
                    </p>

                <?php else: ?>

                    <p>
                        Aucun stage en cours
                    </p>

                <?php endif; ?>

            </div>

        </div>


        <!-- RAPPORTS -->

        <div class="dashboard-card">

            <div class="card-icon">
                📄
            </div>

            <div>

                <h3>Mes rapports</h3>

                <p>
                    <?= $totalRapports; ?> rapport(s)
                </p>

            </div>

        </div>


        <!-- EVALUATION -->

        <div class="dashboard-card">

            <div class="card-icon">
                ⭐
            </div>

            <div>

                <h3>Mon évaluation</h3>

                <p>
                    <?= $totalEvaluations; ?> évaluation(s)
                </p>

            </div>

        </div>

    </div>


    <!-- MESSAGE -->

    <div class="dashboard-welcome">

        <h2>
            🎓 Votre espace de stage
        </h2>

        <p>
            Depuis cet espace, vous pouvez consulter les informations
            concernant votre stage, déposer votre rapport et consulter
            votre évaluation.
        </p>

        <?php if($stage): ?>

            <div class="stage-info">

                <h3>
                    📋 Stage en cours
                </h3>

                <p>
                    <strong>Entreprise :</strong>
                    <?= htmlspecialchars($stage['nom_entreprise'] ?? ''); ?>
                </p>

                <p>
                    <strong>Du :</strong>
                    <?= htmlspecialchars($stage['date_debut']); ?>
                </p>

                <p>
                    <strong>Au :</strong>
                    <?= htmlspecialchars($stage['date_fin']); ?>
                </p>

            </div>

        <?php else: ?>

            <p>
                ℹ️ Vous n'avez actuellement aucun stage en cours.
            </p>

        <?php endif; ?>

    </div>


</main>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>