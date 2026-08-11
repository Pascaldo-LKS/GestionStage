<?php

require_once __DIR__ . '/../config/auth.php';
require_once __DIR__ . '/../models/Utilisateur.php';


class AuthController
{

    // ==========================
    // CONNEXION ÉTUDIANT
    // ==========================

    public function loginEtudiant()
    {
        require_once __DIR__ . '/../views/auth/etudiant-login.php';
    }


    public function authenticateEtudiant()
    {
        if (
            isset($_POST['nom_utilisateur']) &&
            isset($_POST['mot_de_passe'])
        ) {

            $nom_utilisateur = $_POST['nom_utilisateur'];
            $mot_de_passe = $_POST['mot_de_passe'];

            $model = new Utilisateur();

            $utilisateur = $model->login($nom_utilisateur);


            if (
                $utilisateur &&
                $utilisateur['role'] === 'Etudiant' &&
                password_verify(
                    $mot_de_passe,
                    $utilisateur['mot_de_passe']
                )
            ) {

                $_SESSION['id_utilisateur'] =
                    $utilisateur['id_utilisateur'];

                $_SESSION['nom_utilisateur'] =
                    $utilisateur['nom_utilisateur'];

                $_SESSION['role'] =
                    $utilisateur['role'];

                $_SESSION['id_etudiant'] =
                    $utilisateur['id_etudiant'];


                header(
                    "Location: index.php?page=stage/index"
                );

                exit;
            }


            $erreur = "Identifiants étudiant incorrects.";

            require_once __DIR__ .
                '/../views/auth/etudiant-login.php';
        }
    }


    // ==========================
    // CONNEXION ADMINISTRATEUR
    // ==========================

    public function loginAdmin()
    {
        require_once __DIR__ . '/../views/auth/admin-login.php';
    }


    public function authenticateAdmin()
    {
        if (
            isset($_POST['nom_utilisateur']) &&
            isset($_POST['mot_de_passe'])
        ) {

            $nom_utilisateur = $_POST['nom_utilisateur'];
            $mot_de_passe = $_POST['mot_de_passe'];

            $model = new Utilisateur();

            $utilisateur = $model->login($nom_utilisateur);


            if (
                $utilisateur &&
                $utilisateur['role'] === 'Administrateur' &&
                password_verify(
                    $mot_de_passe,
                    $utilisateur['mot_de_passe']
                )
            ) {

                $_SESSION['id_utilisateur'] =
                    $utilisateur['id_utilisateur'];

                $_SESSION['nom_utilisateur'] =
                    $utilisateur['nom_utilisateur'];

                $_SESSION['role'] =
                    $utilisateur['role'];

                $_SESSION['id_etudiant'] =
                    $utilisateur['id_etudiant'];


                header(
                    "Location: index.php?page=utilisateur/index"
                );

                exit;
            }


            $erreur = "Identifiants administrateur incorrects.";

            require_once __DIR__ .
                '/../views/auth/admin-login.php';
        }
    }


    // ==========================
    // DÉCONNEXION
    // ==========================

    public function logout()
    {
        session_unset();

        session_destroy();

        header(
            "Location: index.php?page=auth/etudiant-login"
        );

        exit;
    }

}