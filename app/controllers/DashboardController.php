<?php

require_once __DIR__ . '/../models/Etudiant.php';
require_once __DIR__ . '/../models/Entreprise.php';
require_once __DIR__ . '/../models/Encadreur.php';
require_once __DIR__ . '/../models/Stage.php';
require_once __DIR__ . '/../models/Rapport.php';
require_once __DIR__ . '/../models/Evaluation.php';
require_once __DIR__ . '/../models/Utilisateur.php';

//require_once __DIR__ . '/../../config/auth.php';


class DashboardController
{
    public function index()
    {
      //  requireAdmin();

        $etudiantModel = new Etudiant();
        $entrepriseModel = new Entreprise();
        $encadreurModel = new Encadreur();
        $stageModel = new Stage();
        $rapportModel = new Rapport();
        $evaluationModel = new Evaluation();
        $utilisateurModel = new Utilisateur();


        $etudiants = $etudiantModel->getAll();
        $entreprises = $entrepriseModel->getAll();
        $encadreurs = $encadreurModel->getAll();
        $stages = $stageModel->getAll();
        $rapports = $rapportModel->getAll();
        $evaluations = $evaluationModel->getAll();
        $utilisateurs = $utilisateurModel->getAll();


        $totalEtudiants = count($etudiants);
        $totalEntreprises = count($entreprises);
        $totalEncadreurs = count($encadreurs);
        $totalStages = count($stages);
        $totalRapports = count($rapports);
        $totalEvaluations = count($evaluations);
        $totalUtilisateurs = count($utilisateurs);


        require_once __DIR__ . '/../views/dashboard/index.php';
    }
}