<?php
require_once __DIR__ . '/../../config/auth.php';
requireAdmin();

/** @var array $user */
?>
<nav class="admin-navbar">
    <div class="navbar-container">
       <!-- LOGO / NOM -->
        <div class="navbar-brand">

            <a >  GestionStage </a>
            <br><br>
            <?php if ($user): ?>

            <span class="user-name">
                <?= htmlspecialchars($user['nom_utilisateur']); ?>
            </span>

        <?php endif; ?>

        </div>
        <!-- BOUTON MENU MOBILE -->
        <button
            class="menu-toggle"
            id="menuToggle"
            type="button"
            aria-label="Ouvrir le menu">           
        </button>

        <div class="navbar-menu" id="navbarMenu">


            <!-- TABLEAU DE BORD -->

           <a href="index.php?page=dashboard/index"  class="nav-link">
            Tableau de bord
            </a>


            <!-- ÉTUDIANTS -->

            <a
                href="index.php?page=etudiant/index"
                class="nav-link"
            >
                 Étudiants
            </a>


            <!-- ENTREPRISES -->

            <a
                href="index.php?page=entreprise/index"
                class="nav-link"
            >
                 Entreprises
            </a>


            <!-- ENCADREURS -->

            <a
                href="index.php?page=encadreur/index"
                class="nav-link"
            >
                Encadreurs
            </a>


            <!-- STAGES -->

            <a
                href="index.php?page=stage/index"
                class="nav-link"
            >
                Stages
            </a>


            <!-- RAPPORTS -->

            <a
                href="index.php?page=rapport/index"
                class="nav-link"
            >
                Rapports
            </a>


            <!-- ÉVALUATIONS -->

            <a
                href="index.php?page=evaluation/index"
                class="nav-link"
            >
                Évaluations
            </a>


            <!-- PARAMÈTRES -->

            <div class="nav-dropdown">

                <button
                    type="button"
                    class="dropdown-button"
                >
                    ⚙️ Paramètres ▾
                </button>


                <div class="dropdown-menu">

                    <a
                        href="index.php?page=filiere/index"
                    >
                         Filières
                    </a>


                    <a
                        href="index.php?page=niveau/index"
                    >
                         Niveaux
                    </a>


                    <a
                        href="index.php?page=annee/index"
                    >
                         Années académiques
                    </a>


                    <a
                        href="index.php?page=utilisateur/index"
                    >
                         Utilisateurs
                    </a>

                </div>

            </div>


            <!-- DÉCONNEXION -->

            <a
                href="index.php?page=auth/logout"
                class="nav-link logout-link"
                onclick="return confirm('Voulez-vous vraiment vous déconnecter ?');"
            >
                 Déconnexion
            </a>

        </div>

    </div>

</nav>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.getElementById('menuToggle');

    const navbarMenu = document.getElementById('navbarMenu');

    const dropdownButton =
        document.querySelector('.dropdown-button');

    const dropdown =
        document.querySelector('.nav-dropdown');


    /*
    |--------------------------------------------------------------------------
    | MENU MOBILE
    |--------------------------------------------------------------------------
    */

    if (menuToggle) {

        menuToggle.addEventListener('click', function () {

            navbarMenu.classList.toggle('active');

        });

    }


    /*
    |--------------------------------------------------------------------------
    | MENU PARAMÈTRES
    |--------------------------------------------------------------------------
    */

    if (dropdownButton) {

        dropdownButton.addEventListener('click', function () {

            dropdown.classList.toggle('active');

        });

    }

});

</script>