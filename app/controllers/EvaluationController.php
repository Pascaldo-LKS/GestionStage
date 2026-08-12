<?php

require_once __DIR__ . '/../models/Evaluation.php';
require_once __DIR__ . '/../models/Stage.php';
require_once __DIR__ . '/../config/auth.php';

class EvaluationController
{
    private $evaluationModel;
    private $stageModel;

    public function __construct()
    {
        $this->evaluationModel = new Evaluation();
        $this->stageModel = new Stage();
    }

    public function index()
    {
        requireAdmin();

        $evaluations = $this->evaluationModel->getAll();

        require_once __DIR__ . '/../views/evaluations/index.php';
    }

    public function create()
    {
        requireAdmin();

        $stages = $this->stageModel->getAll();

        require_once __DIR__ . '/../views/evaluations/create.php';
    }

    public function store()
    {
        requireAdmin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $note = $_POST['note'] ?? null;
            $appreciation = $_POST['appreciation'] ?? null;
            $date_evaluation = $_POST['date_evaluation'] ?? null;
            $id_stage = $_POST['id_stage'] ?? null;

            $this->evaluationModel->create(
                $note,
                $appreciation,
                $date_evaluation,
                $id_stage
            );
        }

        header("Location: index.php?page=evaluation/index");
        exit;
    }

    public function edit()
    {
        requireAdmin();

        $id = $_GET['id'] ?? null;

        if (!$id) {
            header("Location: index.php?page=evaluation/index");
            exit;
        }

        $evaluation = $this->evaluationModel->getById($id);

        $stages = $this->stageModel->getAll();

        require_once __DIR__ . '/../views/evaluations/edit.php';
    }

    public function update()
    {
        requireAdmin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id_evaluation = $_POST['id_evaluation'];

            $note = $_POST['note'] ?? null;
            $appreciation = $_POST['appreciation'] ?? null;
            $date_evaluation = $_POST['date_evaluation'] ?? null;
            $id_stage = $_POST['id_stage'] ?? null;

            $this->evaluationModel->update(
                $id_evaluation,
                $note,
                $appreciation,
                $date_evaluation,
                $id_stage
            );
        }

        header("Location: index.php?page=evaluation/index");
        exit;
    }

    public function delete()
    {
        requireAdmin();

        $id = $_GET['id'] ?? null;

        if ($id) {
            $this->evaluationModel->delete($id);
        }

        header("Location: index.php?page=evaluation/index");
        exit;
    }
}