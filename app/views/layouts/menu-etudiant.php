<?php

require_once __DIR__ . '/../../config/auth.php';

requireEtudiant();

?>

<aside class="sidebar" id="sidebar">

    <div class="sidebar-title">
        Espace étudiant
    </div>


    <nav class="sidebar-menu">

        <a href="index.php?page=dashboard/etudiant">
            🏠
            <span>Accueil</span>
        </a>


        <a href="index.php?page=etudiant/profile">
            👤
            <span>Mon profil</span>
        </a>


        <a href="index.php?page=stage/index">
            📋
            <span>Mon stage</span>
        </a>


        <a href="index.php?page=rapport/index">
            📄
            <span>Mes rapports</span>
        </a>


        <a href="index.php?page=rapport/create">
            📤
            <span>Déposer un rapport</span>
        </a>


        <a href="index.php?page=evaluation/index">
            ⭐
            <span>Mon évaluation</span>
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