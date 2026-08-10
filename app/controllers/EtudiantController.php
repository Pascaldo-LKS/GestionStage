<?php
require_once __DIR__ . '/../models/Etudiant.php';
require_once __DIR__ . '/../models/Annee.php';
require_once __DIR__ . '/../models/Filiere.php';
require_once __DIR__ . '/../models/Niveau.php';

class EtudiantController
{
    public function index()
    {
        $model = new Etudiant();
        $etudiants = $model->getAll();

        require_once __DIR__ . '/../views/etudiants/index.php';
    }

    public function create(){
        $niveauModel = new Niveau();
        $filiereModel = new Filiere();
        $anneeModel = new Annee();

        $niveaux = $niveauModel->getAll();
        $filieres = $filiereModel->getAll();
        $annee = $anneeModel->getAll();
        require_once __DIR__ . '/../views/etudiants/create.php';

    }
    public function store(){
        if(
        isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['email']) &&
        isset($_POST['id_filiere']) &&
        isset($_POST['id_niveau']) &&
        isset($_POST['id_annee']) 
        )
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $id_filiere = $_POST['id_filiere'];
            $id_niveau = $_POST['id_niveau'];
            $id_annee = $_POST['id_annee'];    

            $model  = new Etudiant();
            $model->create($nom, $prenom, $email, $id_filiere, $id_niveau, $id_annee);

            header("Location : index.php?page=etudiant/index");
                exit;
        }
    }

}