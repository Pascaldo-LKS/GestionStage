<?php

require_once __DIR__ . '/../models/Entreprise.php';

class EntrepriseController
{
    public function index()
    {
        $model = new Entreprise();

        $entreprises = $model->getAll();

        require_once __DIR__ . '/../views/entreprises/index.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../views/entreprises/create.php';
    }

    public function store()
    {
        if(
            isset($_POST['nom_entreprise']) &&
            isset($_POST['adresse']) &&
            isset($_POST['telephone']) &&
            isset($_POST['email'])
        )
        {
            $nom = $_POST['nom_entreprise'];
            $adresse = $_POST['adresse'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];

            $model = new Entreprise();

            $model->create(
                $nom,
                $adresse,
                $telephone,
                $email
            );

            header("Location: index.php?page=entreprise/index");

            exit;
        }
    }

    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Entreprise();

            $entreprise = $model->getById($id);

            require_once __DIR__ . '/../views/entreprises/edit.php';
        }
    }

    public function update()
    {
        if(
            isset($_POST['id_entreprise']) &&
            isset($_POST['nom_entreprise']) &&
            isset($_POST['adresse']) &&
            isset($_POST['telephone']) &&
            isset($_POST['email'])
        )
        {
            $id = $_POST['id_entreprise'];
            $nom = $_POST['nom_entreprise'];
            $adresse = $_POST['adresse'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];

            $model = new Entreprise();

            $model->update(
                $id,
                $nom,
                $adresse,
                $telephone,
                $email
            );

            header("Location: index.php?page=entreprise/index");

            exit;
        }
    }

    public function delete()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Entreprise();

            $model->delete($id);

            header("Location: index.php?page=entreprise/index");

            exit;
        }
    }

}