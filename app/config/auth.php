<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Vérifier si l'utilisateur est connecté
|--------------------------------------------------------------------------
*/
function estConnecte()
{
    return isset($_SESSION['id_utilisateur']);
}

/*
|--------------------------------------------------------------------------
| Récupérer l'utilisateur connecté
|--------------------------------------------------------------------------
*/

function utilisateurConnecte()
{
    if (!estConnecte()) {
        return null;
    }

    return [
        'id_utilisateur' => $_SESSION['id_utilisateur'],
        'nom_utilisateur' => $_SESSION['nom_utilisateur'],
        'role' => $_SESSION['role'],
        'id_etudiant' => $_SESSION['id_etudiant']
    ];
}


/*
|--------------------------------------------------------------------------
| Vérifier la connexion
|--------------------------------------------------------------------------
*/

function requireConnexion()
{
    if (!estConnecte()) {

        header("Location: index.php?page=auth/etudiant-login");

        exit;
    }
}


/*
|--------------------------------------------------------------------------
| Vérifier le rôle administrateur
|--------------------------------------------------------------------------
*/

function requireAdmin()
{
    if (!estConnecte()) {

        header("Location: index.php?page=auth/admin-login");

        exit;
    }


    if ($_SESSION['role'] !== 'Administrateur') {

        header("Location: index.php?page=auth/etudiant-login");

        exit;
    }
}


/*
|--------------------------------------------------------------------------
| Vérifier le rôle étudiant
|--------------------------------------------------------------------------
*/

function requireEtudiant()
{
    if (!estConnecte()) {

        header("Location: index.php?page=auth/etudiant-login");

        exit;
    }


    if ($_SESSION['role'] !== 'Etudiant') {

        header("Location: index.php?page=auth/admin-login");

        exit;
    }
}