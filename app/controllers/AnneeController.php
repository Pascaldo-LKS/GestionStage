<?php
require_once __DIR__ . '/../models/Annee.php';

class AnneeController {
    public function index(){
        $model = New Annee();
        $annees = $model->getAll();
        require_once __DIR__ . '/../views/annees/index.php';
    }
    
    public function create() {
        require_once __DIR__ . '/../views/annees/create.php';
    }
    public function store()
    {
        if(isset($_POST['libelle']))
        {
            $nom = $_POST['libelle'];

            $model = new Annee();

            $model->create($nom);

            header("Location: index.php?page=annee/index");

            exit;
        }

   }
       public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Annee();

            $annee = $model->getById($id);


            require_once __DIR__ . '/../views/annees/edit.php';
        }
    }

  public function update()
    {
        if(isset($_POST['id_annee']) && isset($_POST['libelle']))
        {
            $id = $_POST['id_annee'];

            $nom = $_POST['libelle'];

            $model = new Annee();

            $model->update($id, $nom);

            header("Location: index.php?page=annee/index");

            exit;
        }
    }

    public function delete()
{
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $model = new Annee();

        $model->delete($id);


        header("Location: index.php?page=annee/index");

        exit;
    }
}

}