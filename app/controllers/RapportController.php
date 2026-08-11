<?php

require_once __DIR__ . '/../models/Rapport.php';
require_once __DIR__ . '/../models/Stage.php';
require_once __DIR__ . '/../config/auth.php';


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
    requireEtudiant();

    $id_etudiant = $_SESSION['id_etudiant'];

    $stageModel = new Stage();

    $stage = $stageModel->getStageEnCours($id_etudiant);

    if (!$stage) {
        echo "Vous n'avez aucun stage en cours.";
        exit;
    }

    require_once __DIR__ . '/../views/rapports/create.php';
}

   public function store()
{
    requireEtudiant();

    if (isset($_FILES['fichier'])) {

        $id_etudiant = $_SESSION['id_etudiant'];

        $stageModel = new Stage();

        $stage = $stageModel->getStageEnCours($id_etudiant);

        if (!$stage) {
            echo "Vous n'avez aucun stage en cours.";
            exit;
        }

        $id_stage = $stage['id_stage'];

        $fichier = $_FILES['fichier'];

        if ($fichier['error'] !== UPLOAD_ERR_OK) {
            echo "Erreur lors de l'envoi du fichier.";
            exit;
        }

        $extension = strtolower(
            pathinfo($fichier['name'], PATHINFO_EXTENSION)
        );

        if ($extension !== 'pdf') {
            echo "Seuls les fichiers PDF sont acceptés.";
            exit;
        }

        $nom_fichier = time() . '_' . basename($fichier['name']);

        $dossier = __DIR__ . '/../../public/uploads/rapports/';

        if (!is_dir($dossier)) {
            mkdir($dossier, 0777, true);
        }

        move_uploaded_file(
            $fichier['tmp_name'],
            $dossier . $nom_fichier
        );

        $date_depot = date('Y-m-d');

        $statut_validation = 'En attente';

        $model = new Rapport();

        $model->create(
            $nom_fichier,
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

    public function validate()
{
    requireAdmin();

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $model = new Rapport();

        $model->updateStatut($id, 'Valide');

        header("Location: index.php?page=rapport/index");

        exit;
    }
}

public function refuse()
{
    requireAdmin();

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $model = new Rapport();

        $model->updateStatut($id, 'Refuse');

        header("Location: index.php?page=rapport/index");

        exit;
    }
}

}