<?php

require_once __DIR__ . '/../models/Etudiant.php';
require_once __DIR__ . '/../models/Stage.php';
require_once __DIR__ . '/../models/Rapport.php';
require_once __DIR__ . '/../models/Evaluation.php';
require_once __DIR__ . '/../config/auth.php';

class DashboardEtudiantController
{
    public function index()
    {
        requireEtudiant();

        $id_etudiant = $_SESSION['id_etudiant'];

        $stageModel = new Stage();
        $rapportModel = new Rapport();
        $evaluationModel = new Evaluation();
        $etudiantModel = new Etudiant();

        $etudiant = $etudiantModel->getById($id_etudiant);

        $stage = $stageModel->getStageEnCours($id_etudiant);

        $rapports = $rapportModel->getByEtudiant($id_etudiant);

        $evaluations = $evaluationModel->getByEtudiant($id_etudiant);

        $totalRapports = count($rapports);
        $totalEvaluations = count($evaluations);

        require_once __DIR__ . '/../views/dashboard/etudiant.php';
    }
}