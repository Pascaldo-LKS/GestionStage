<?php

require_once __DIR__ . '/../core/Model.php';


class Rapport extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM rapport";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


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


    public function getById($id)
    {
        $sql = "SELECT * FROM rapport
                WHERE id_rapport = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


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


    public function delete($id)
    {
        $sql = "DELETE FROM rapport
                WHERE id_rapport = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }

}