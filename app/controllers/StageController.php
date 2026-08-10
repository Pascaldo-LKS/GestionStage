<?php

require_once __DIR__ . '/../models/Stage.php';
require_once __DIR__ . '/../models/Etudiant.php';
require_once __DIR__ . '/../models/Entreprise.php';


class StageController
{

    public function index()
    {
        $model = new Stage();

        $stages = $model->getAll();

        require_once __DIR__ . '/../views/stages/index.php';
    }


    public function create()
    {
        $etudiantModel = new Etudiant();
        $entrepriseModel = new Entreprise();

        $etudiants = $etudiantModel->getAll();
        $entreprises = $entrepriseModel->getAll();

        require_once __DIR__ . '/../views/stages/create.php';
    }


    public function store()
    {
        if(
            isset($_POST['date_debut']) &&
            isset($_POST['date_fin']) &&
            isset($_POST['statut']) &&
            isset($_POST['id_etudiant']) &&
            isset($_POST['id_entreprise'])
        )
        {
            $date_debut = $_POST['date_debut'];
            $date_fin = $_POST['date_fin'];
            $statut = $_POST['statut'];
            $id_etudiant = $_POST['id_etudiant'];
            $id_entreprise = $_POST['id_entreprise'];


            $model = new Stage();

            $model->create(
                $date_debut,
                $date_fin,
                $statut,
                $id_etudiant,
                $id_entreprise
            );


            header("Location: index.php?page=stage/index");

            exit;
        }
    }


    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Stage();

            $stage = $model->getById($id);


            $etudiantModel = new Etudiant();
            $entrepriseModel = new Entreprise();

            $etudiants = $etudiantModel->getAll();
            $entreprises = $entrepriseModel->getAll();


            require_once __DIR__ . '/../views/stages/edit.php';
        }
    }


    public function update()
    {
        if(
            isset($_POST['id_stage']) &&
            isset($_POST['date_debut']) &&
            isset($_POST['date_fin']) &&
            isset($_POST['statut']) &&
            isset($_POST['id_etudiant']) &&
            isset($_POST['id_entreprise'])
        )
        {
            $id = $_POST['id_stage'];

            $date_debut = $_POST['date_debut'];
            $date_fin = $_POST['date_fin'];
            $statut = $_POST['statut'];
            $id_etudiant = $_POST['id_etudiant'];
            $id_entreprise = $_POST['id_entreprise'];


            $model = new Stage();

            $model->update(
                $id,
                $date_debut,
                $date_fin,
                $statut,
                $id_etudiant,
                $id_entreprise
            );


            header("Location: index.php?page=stage/index");

            exit;
        }
    }


    public function delete()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Stage();

            $model->delete($id);

            header("Location: index.php?page=stage/index");

            exit;
        }
    }

}