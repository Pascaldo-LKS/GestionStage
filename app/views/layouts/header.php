<?php

require_once __DIR__ . '/../../config/auth.php';

$user = utilisateurConnecte();

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'GestionStage'; ?></title>

    <link rel="stylesheet"
      href="/GestionStage/app/views/layouts/style.css">

</head>

<body>

<header class="topbar">

    <div class="topbar-left">

        <button class="menu-toggle"
                onclick="toggleMenu()">
            ☰
        </button>

    </div>

</header>


<div class="app-container">

    <main>