<?php

require_once __DIR__ . '/../core/Model.php';

class Rapport extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Liste des rapports
    |--------------------------------------------------------------------------
    */

    public function getAll()
    {
        $sql = "SELECT
                    rapport.id_rapport,
                    rapport.fichier,
                    rapport.date_depot,
                    rapport.statut_validation,
                    rapport.id_stage,

                    etudiant.nom AS nom_etudiant,
                    etudiant.prenom AS prenom_etudiant,

                    entreprise.nom_entreprise

                FROM rapport

                LEFT JOIN stage
                    ON rapport.id_stage = stage.id_stage

                LEFT JOIN etudiant
                    ON stage.id_etudiant = etudiant.id_etudiant

                LEFT JOIN entreprise
                    ON stage.id_entreprise = entreprise.id_entreprise

                ORDER BY rapport.id_rapport DESC";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /*
    |--------------------------------------------------------------------------
    | Ajouter un rapport
    |--------------------------------------------------------------------------
    */

    public function create(
        $fichier,
        $date_depot,
        $statut_validation,
        $id_stage
    )
    {
        $sql = "INSERT INTO rapport
                (
                    fichier,
                    date_depot,
                    statut_validation,
                    id_stage
                )
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $fichier,
            $date_depot,
            $statut_validation,
            $id_stage
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Récupérer un rapport par son ID
    |--------------------------------------------------------------------------
    */

    public function getById($id)
    {
        $sql = "SELECT *
                FROM rapport
                WHERE id_rapport = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    /*
    |--------------------------------------------------------------------------
    | Modifier un rapport
    |--------------------------------------------------------------------------
    */

    public function update(
        $id,
        $fichier,
        $date_depot,
        $statut_validation,
        $id_stage
    )
    {
        $sql = "UPDATE rapport
                SET fichier = ?,
                    date_depot = ?,
                    statut_validation = ?,
                    id_stage = ?

                WHERE id_rapport = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $fichier,
            $date_depot,
            $statut_validation,
            $id_stage,
            $id
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | Supprimer un rapport
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {
        $sql = "DELETE FROM rapport
                WHERE id_rapport = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }


    /*
    |--------------------------------------------------------------------------
    | Modifier uniquement le statut
    |--------------------------------------------------------------------------
    */

    public function updateStatut($id, $statut)
    {
        $sql = "UPDATE rapport
                SET statut_validation = ?

                WHERE id_rapport = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $statut,
            $id
        ]);
    }

    public function getByStage($id_stage)
{
    $sql = "SELECT
                rapport.*,

                etudiant.nom AS nom_etudiant,
                etudiant.prenom AS prenom_etudiant,

                entreprise.nom_entreprise

            FROM rapport

            LEFT JOIN stage
                ON rapport.id_stage = stage.id_stage

            LEFT JOIN etudiant
                ON stage.id_etudiant = etudiant.id_etudiant

            LEFT JOIN entreprise
                ON stage.id_entreprise = entreprise.id_entreprise

            WHERE rapport.id_stage = ?

            LIMIT 1";


    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id_stage]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function getByEtudiant($id_etudiant)
{
    $sql = "SELECT
                rapport.*,
                stage.date_debut,
                stage.date_fin,
                stage.statut,
                entreprise.nom_entreprise

            FROM rapport

            INNER JOIN stage
                ON rapport.id_stage = stage.id_stage

            INNER JOIN entreprise
                ON stage.id_entreprise = entreprise.id_entreprise

            WHERE stage.id_etudiant = ?

            ORDER BY rapport.id_rapport DESC";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id_etudiant]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
