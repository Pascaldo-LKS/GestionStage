<?php

require_once __DIR__ . '/../models/Encadreur.php';

class EncadreurController
{
    public function index()
    {
        $model = new Encadreur();

        $encadreurs = $model->getAll();

        require_once __DIR__ . '/../views/encadreurs/index.php';
    }


    public function create()
    {
        require_once __DIR__ . '/../views/encadreurs/create.php';
    }


    public function store()
    {
        if(
            isset($_POST['nom']) &&
            isset($_POST['prenom']) &&
            isset($_POST['email']) &&
            isset($_POST['telephone']) &&
            isset($_POST['fonction'])
        )
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $fonction = $_POST['fonction'];

            $model = new Encadreur();

            $model->create(
                $nom,
                $prenom,
                $email,
                $telephone,
                $fonction
            );

            header("Location: index.php?page=encadreur/index");

            exit;
        }
    }


    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Encadreur();

            $encadreur = $model->getById($id);

            require_once __DIR__ . '/../views/encadreurs/edit.php';
        }
    }


    public function update()
    {
        if(
            isset($_POST['id_encadreur']) &&
            isset($_POST['nom']) &&
            isset($_POST['prenom']) &&
            isset($_POST['email']) &&
            isset($_POST['telephone']) &&
            isset($_POST['fonction'])
        )
        {
            $id = $_POST['id_encadreur'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $fonction = $_POST['fonction'];

            $model = new Encadreur();

            $model->update(
                $id,
                $nom,
                $prenom,
                $email,
                $telephone , $fonction
            );

            header("Location: index.php?page=encadreur/index");

            exit;
        }
    }


    public function delete()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Encadreur();

            $model->delete($id);

            header("Location: index.php?page=encadreur/index");

            exit;
        }
    }

}