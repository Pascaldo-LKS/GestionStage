<?php
require_once __DIR__ . '/../models/Filiere.php';

class FiliereController
{
    public function index()
    {
        $model = new Filiere();

        $filieres = $model->getAll();

        require_once __DIR__ . '/../views/filieres/index.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../views/filieres/create.php';
    }

    public function store()
    {
        if(isset($_POST['nom_filiere']))
        {
            $nom = $_POST['nom_filiere'];

            $model = new Filiere();

            $model->create($nom);


            header("Location: index.php?page=filiere/index");

            exit;
        }

    }
    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Filiere();

            $filiere = $model->getById($id);


            require_once __DIR__ . '/../views/filieres/edit.php';
        }
    }

  public function update()
    {
        if(isset($_POST['id_filiere']) && isset($_POST['nom_filiere']))
        {
            $id = $_POST['id_filiere'];

            $nom = $_POST['nom_filiere'];


            $model = new Filiere();


            $model->update($id, $nom);


            header("Location: index.php?page=filiere/index");

            exit;
        }
    }

}