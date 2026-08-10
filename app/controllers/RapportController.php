<?php

require_once __DIR__ . '/../models/Rapport.php';
require_once __DIR__ . '/../models/Stage.php';


class RapportController
{

    public function index()
    {
        $model = new Rapport();

        $rapports = $model->getAll();

        require_once __DIR__ . '/../views/rapports/index.php';
    }


    public function create()
    {
        $stageModel = new Stage();

        $stages = $stageModel->getAll();

        require_once __DIR__ . '/../views/rapports/create.php';
    }


    public function store()
    {
        if(
            isset($_FILES['fichier']) &&
            isset($_POST['id_stage'])
        )
        {
            $fichier = $_FILES['fichier'];
            $id_stage = $_POST['id_stage'];


            // Vérifier que c'est un PDF
            if($fichier['type'] != 'application/pdf')
            {
                die("Veuillez sélectionner un fichier PDF.");
            }


            // Dossier de stockage
            $dossier = __DIR__ . '/../../public/uploads/rapports/';


            // Créer le dossier s'il n'existe pas
            if(!is_dir($dossier))
            {
                mkdir($dossier, 0777, true);
            }


            // Nom du fichier
            $nomFichier = time() . '_' . $fichier['name'];


            // Déplacer le fichier
            move_uploaded_file(
                $fichier['tmp_name'],
                $dossier . $nomFichier
            );


            // Date actuelle
            $date_depot = date('Y-m-d');


            // Statut par défaut
            $statut_validation = 'En attente';


            // Enregistrer dans la base
            $model = new Rapport();

            $model->create(
                $nomFichier,
                $date_depot,
                $statut_validation,
                $id_stage
            );


            header("Location: index.php?page=rapport/index");

            exit;
        }
    }


    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Rapport();

            $rapport = $model->getById($id);


            $stageModel = new Stage();

            $stages = $stageModel->getAll();


            require_once __DIR__ . '/../views/rapports/edit.php';
        }
    }


    public function update()
    {
        if(isset($_POST['id_rapport']))
        {
            $id = $_POST['id_rapport'];

            $model = new Rapport();

            $rapport = $model->getById($id);


            $fichier = $rapport['fichier'];


            // Si un nouveau PDF est envoyé
            if(
                isset($_FILES['fichier']) &&
                $_FILES['fichier']['error'] == 0
            )
            {
                if($_FILES['fichier']['type'] != 'application/pdf')
                {
                    die("Veuillez sélectionner un fichier PDF.");
                }


                $dossier = __DIR__ . '/../../public/uploads/rapports/';


                if(!is_dir($dossier))
                {
                    mkdir($dossier, 0777, true);
                }


                $nomFichier = time() . '_' . $_FILES['fichier']['name'];


                move_uploaded_file(
                    $_FILES['fichier']['tmp_name'],
                    $dossier . $nomFichier
                );


                $fichier = $nomFichier;
            }


            $date_depot = date('Y-m-d');

            $statut_validation = $_POST['statut_validation'];

            $id_stage = $_POST['id_stage'];


            $model->update(
                $id,
                $fichier,
                $date_depot,
                $statut_validation,
                $id_stage
            );


            header("Location: index.php?page=rapport/index");

            exit;
        }
    }


    public function delete()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $model = new Rapport();

            $model->delete($id);

            header("Location: index.php?page=rapport/index");

            exit;
        }
    }

}