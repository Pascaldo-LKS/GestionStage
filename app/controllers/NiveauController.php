<?php
require_once __DIR__ . '/../models/Niveau.php';

class NiveauController
{
    public function index()
    {
        $model = new Niveau();

        $niveaux = $model->getAll();

        require_once __DIR__ . '/../views/niveaux/index.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../views/niveaux/create.php';
    }

    public function store()
    {
        if(isset($_POST['nom_niveau']))
        {
            $nom = $_POST['nom_niveau'];

            $model = new Niveau();

            $model->create($nom);

            header("Location: index.php?page=niveau/index");

            exit;
        }

    }
    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Niveau();

            $niveau = $model->getById($id);


            require_once __DIR__ . '/../views/niveaux/edit.php';
        }
    }

  public function update()
    {
        if(isset($_POST['id_niveau']) && isset($_POST['nom_niveau']))
        {
            $id = $_POST['id_niveau'];

            $nom = $_POST['nom_niveau'];

            $model = new Niveau();

            $model->update($id, $nom);

            header("Location: index.php?page=niveau/index");

            exit;
        }
    }

    public function delete()
{
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $model = new Niveau();

        $model->delete($id);


        header("Location: index.php?page=niveau/index");

        exit;
    }
}

}