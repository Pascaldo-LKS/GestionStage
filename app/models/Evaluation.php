<?php

require_once __DIR__ . '/../core/Database.php';

class Evaluation
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAll()
    {
        $sql = "
            SELECT
                e.id_evaluation,
                e.note,
                e.appreciation,
                e.date_evaluation,
                e.id_stage,

                s.date_debut,
                s.date_fin,

                et.nom,
                et.prenom,

                en.nom_entreprise

            FROM evaluation e

            INNER JOIN stage s
                ON e.id_stage = s.id_stage

            INNER JOIN etudiant et
                ON s.id_etudiant = et.id_etudiant

            INNER JOIN entreprise en
                ON s.id_entreprise = en.id_entreprise

            ORDER BY e.id_evaluation DESC
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /*
    |--------------------------------------------------------------------------
    | Récupérer une évaluation
    |--------------------------------------------------------------------------
    */

    public function getById($id)
    {
        $sql = "
            SELECT *
            FROM evaluation
            WHERE id_evaluation = ?
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    /*
    |--------------------------------------------------------------------------
    | Ajouter une évaluation
    |--------------------------------------------------------------------------
    */

    public function create($note, $appreciation, $date_evaluation, $id_stage)
    {
        $sql = "
            INSERT INTO evaluation
            (
                note,
                appreciation,
                date_evaluation,
                id_stage
            )
            VALUES (?, ?, ?, ?)
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $note,
            $appreciation,
            $date_evaluation,
            $id_stage
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Modifier une évaluation
    |--------------------------------------------------------------------------
    */

    public function update(
        $id_evaluation,
        $note,
        $appreciation,
        $date_evaluation,
        $id_stage
    ) {
        $sql = "
            UPDATE evaluation
            SET
                note = ?,
                appreciation = ?,
                date_evaluation = ?,
                id_stage = ?
            WHERE id_evaluation = ?
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $note,
            $appreciation,
            $date_evaluation,
            $id_stage,
            $id_evaluation
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Supprimer une évaluation
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {
        $sql = "
            DELETE FROM evaluation
            WHERE id_evaluation = ?
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$id]);
    }
}