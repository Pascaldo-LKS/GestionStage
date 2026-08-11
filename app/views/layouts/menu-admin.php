<?php

require_once __DIR__ . '/../../config/auth.php';

requireAdmin();

?>

<aside class="sidebar" id="sidebar">

    <div class="sidebar-title">
        Administration
    </div>


    <nav class="sidebar-menu">

        <a href="index.php?page=admin/dashboard">
            🏠
            <span>Tableau de bord</span>
        </a>


        <a href="index.php?page=etudiant/index">
            👨‍🎓
            <span>Étudiants</span>
        </a>


        <a href="index.php?page=entreprise/index">
            🏢
            <span>Entreprises</span>
        </a>


        <a href="index.php?page=encadreur/index">
            👨‍🏫
            <span>Encadreurs</span>
        </a>


        <a href="index.php?page=stage/index">
            📋
            <span>Stages</span>
        </a>


        <a href="index.php?page=rapport/index">
            📄
            <span>Rapports</span>
        </a>


        <a href="index.php?page=evaluation/index">
            ⭐
            <span>Évaluations</span>
        </a>


        <a href="index.php?page=utilisateur/index">
            👤
            <span>Utilisateurs</span>
        </a>

    </nav>


    <div class="sidebar-bottom">

        <a href="index.php?page=auth/logout"
           class="logout-link">

            🚪
            <span>Déconnexion</span>

        </a>

    </div>

</aside>