<?php
require_once __DIR__ . '/../config/auth.php';
require_once __DIR__ . '/../models/Utilisateur.php';
require_once __DIR__ . '/../models/Etudiant.php';


class UtilisateurController
{

    public function index()
    {   requireAdmin();
        $model = new Utilisateur();

        $utilisateurs = $model->getAll();

        require_once __DIR__ . '/../views/utilisateurs/index.php';
    }


    public function create()
    {   requireAdmin();
        $etudiantModel = new Etudiant();

        $etudiants = $etudiantModel->getAll();

        require_once __DIR__ . '/../views/utilisateurs/create.php';
    }


    public function store()
    {   requireAdmin();
        if(
            isset($_POST['nom_utilisateur']) &&
            isset($_POST['mot_de_passe']) &&
            isset($_POST['role'])
        )
        {
            $nom_utilisateur = $_POST['nom_utilisateur'];
            $mot_de_passe = $_POST['mot_de_passe'];
            $role = $_POST['role'];

            $id_etudiant = !empty($_POST['id_etudiant'])
                ? $_POST['id_etudiant']
                : null;


            $model = new Utilisateur();

            $model->create(
                $nom_utilisateur,
                $mot_de_passe,
                $role,
                $id_etudiant
            );


            header("Location: index.php?page=utilisateur/index");

            exit;
        }
    }


    public function edit()
    {   requireAdmin(); 
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Utilisateur();

            $utilisateur = $model->getById($id);


            $etudiantModel = new Etudiant();

            $etudiants = $etudiantModel->getAll();


            require_once __DIR__ . '/../views/utilisateurs/edit.php';
        }
    }


    public function update()
    {   requireAdmin();
        if(isset($_POST['id_utilisateur']))
        {
            $id = $_POST['id_utilisateur'];

            $nom_utilisateur = $_POST['nom_utilisateur'];

            $role = $_POST['role'];

            $id_etudiant = !empty($_POST['id_etudiant'])
                ? $_POST['id_etudiant']
                : null;


            $model = new Utilisateur();

            $model->update(
                $id,
                $nom_utilisateur,
                $role,
                $id_etudiant
            );


            header("Location: index.php?page=utilisateur/index");

            exit;
        }
    }


    public function delete()
    {   requireAdmin();
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Utilisateur();

            $model->delete($id);


            header("Location: index.php?page=utilisateur/index");

            exit;
        }
    }

}