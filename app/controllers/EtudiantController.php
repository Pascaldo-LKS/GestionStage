<?php

require_once __DIR__ . '/../models/Etudiant.php';
require_once __DIR__ . '/../models/Filiere.php';
require_once __DIR__ . '/../models/Niveau.php';
require_once __DIR__ . '/../models/Annee.php';
require_once __DIR__ . '/../models/Encadreur.php';


class EtudiantController
{
    public function index()
    {
        $model = new Etudiant();
        $etudiants = $model->getAll();

        require_once __DIR__ . '/../views/etudiants/index.php';
    }

    public function create()
    {
        $filiereModel = new Filiere();
        $niveauModel = new Niveau();
        $anneeModel = new Annee();
        $encadreurModel = new Encadreur();

        $filieres = $filiereModel->getAll();
        $niveaux = $niveauModel->getAll();
        $annees = $anneeModel->getAll();
        $encadreurs =$encadreurModel->getAll();

        require_once __DIR__ . '/../views/etudiants/create.php';
    }

    public function store()
{
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

        $id_encadreur = !empty($_POST['id_encadreur'])
            ? $_POST['id_encadreur']
            : null;


        $model = new Etudiant();

        $model->create(
            $nom,
            $prenom,
            $email,
            $id_filiere,
            $id_niveau,
            $id_annee,
            $id_encadreur
        );


        header("Location: index.php?page=etudiant/index");

        exit;
    }
}
    

    public function edit()
{
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $model = new Etudiant();
        $etudiant = $model->getById($id);

        $filiereModel = new Filiere();
        $niveauModel = new Niveau();
        $anneeModel = new Annee();
        $encadreurModel = new Encadreur();

        $filieres = $filiereModel->getAll();
        $niveaux = $niveauModel->getAll();
        $annees = $anneeModel->getAll();
        $encadreurs =$encadreurModel->getAll();


        require_once __DIR__ . '/../views/etudiants/edit.php';
    }
}

public function update()
{
    if(
        isset($_POST['id_etudiant']) &&
        isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['email']) &&
        isset($_POST['id_filiere']) &&
        isset($_POST['id_niveau']) &&
        isset($_POST['id_annee']) 
    )
    {
        $id = $_POST['id_etudiant'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $id_filiere = $_POST['id_filiere'];
        $id_niveau = $_POST['id_niveau'];
        $id_annee = $_POST['id_annee'];
        $id_encadreur = !empty($_POST['id_encadreur'])
            ? $_POST['id_encadreur']
            : null;


        $model = new Etudiant();

        $model->update(
            $id,
            $nom,
            $prenom,
            $email,
            $id_filiere,
            $id_niveau,
            $id_annee,
            $id_encadreur
        );
        header("Location: index.php?page=etudiant/index");

        exit;
    }
}

public function delete()
{
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $model = new Etudiant();

        $model->delete($id);


        header("Location: index.php?page=etudiant/index");

        exit;
    }
}

}