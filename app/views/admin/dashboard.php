<?php

$title = "Tableau de bord";

require_once __DIR__ . '/../layouts/header.php';

require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<div class="page-content">

```
<div class="page-header">

    <div>

        <h1>Tableau de bord</h1>

        <p>
            Bienvenue dans l'administration de GestionStage.
        </p>

    </div>

</div>


<div class="dashboard-grid">


    <!-- ÉTUDIANTS -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            👨‍🎓
        </div>

        <div>

            <h2>Étudiants</h2>

            <p>
                Gérer les étudiants inscrits.
            </p>

            <a
                href="index.php?page=etudiant/index"
                class="btn btn-primary"
            >
                Voir les étudiants
            </a>

        </div>

    </div>


    <!-- ENTREPRISES -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            🏢
        </div>

        <div>

            <h2>Entreprises</h2>

            <p>
                Gérer les entreprises d'accueil.
            </p>

            <a
                href="index.php?page=entreprise/index"
                class="btn btn-primary"
            >
                Voir les entreprises
            </a>

        </div>

    </div>


    <!-- ENCADREURS -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            👨‍🏫
        </div>

        <div>

            <h2>Encadreurs</h2>

            <p>
                Gérer les encadreurs de stage.
            </p>

            <a
                href="index.php?page=encadreur/index"
                class="btn btn-primary"
            >
                Voir les encadreurs
            </a>

        </div>

    </div>


    <!-- STAGES -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            📋
        </div>

        <div>

            <h2>Stages</h2>

            <p>
                Gérer les stages des étudiants.
            </p>

            <a
                href="index.php?page=stage/index"
                class="btn btn-primary"
            >
                Voir les stages
            </a>

        </div>

    </div>


    <!-- RAPPORTS -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            📄
        </div>

        <div>

            <h2>Rapports</h2>

            <p>
                Consulter et valider les rapports.
            </p>

            <a
                href="index.php?page=rapport/index"
                class="btn btn-primary"
            >
                Voir les rapports
            </a>

        </div>

    </div>


    <!-- ÉVALUATIONS -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            ⭐
        </div>

        <div>

            <h2>Évaluations</h2>

            <p>
                Gérer les évaluations des stages.
            </p>

            <a
                href="index.php?page=evaluation/index"
                class="btn btn-primary"
            >
                Voir les évaluations
            </a>

        </div>

    </div>


    <!-- FILIÈRES -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            🎓
        </div>

        <div>

            <h2>Filières</h2>

            <p>
                Gérer les filières de formation.
            </p>

            <a
                href="index.php?page=filiere/index"
                class="btn btn-primary"
            >
                Gérer les filières
            </a>

        </div>

    </div>


    <!-- NIVEAUX -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            📚
        </div>

        <div>

            <h2>Niveaux</h2>

            <p>
                Gérer les niveaux d'études.
            </p>

            <a
                href="index.php?page=niveau/index"
                class="btn btn-primary"
            >
                Gérer les niveaux
            </a>

        </div>

    </div>


    <!-- ANNÉES ACADÉMIQUES -->

    <div class="dashboard-card">

        <div class="dashboard-card-icon">
            📅
        </div>

        <div>

            <h2>Années académiques</h2>

            <p>
                Gérer les années académiques.
            </p>

            <a
                href="index.php?page=annee/index"
                class="btn btn-primary"
            >
                Gérer les années
            </a>

        </div>

    </div>


</div>
```

</div>

<?php

require_once __DIR__ . '/../layouts/footer.php';

?>
