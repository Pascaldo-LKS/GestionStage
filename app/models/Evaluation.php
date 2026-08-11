<?php

require_once __DIR__ . '/../core/Model.php';


class Evaluation extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM evaluation";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function create(
        $note,
        $appreciation,
        $date_evaluation,
        $id_stage
    )
    {
        $sql = "INSERT INTO evaluation
                (
                    note,
                    appreciation,
                    date_evaluation,
                    id_stage
                )
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $note,
            $appreciation,
            $date_evaluation,
            $id_stage
        ]);
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM evaluation
                WHERE id_evaluation = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update(
        $id,
        $note,
        $appreciation,
        $date_evaluation,
        $id_stage
    )
    {
        $sql = "UPDATE evaluation
                SET note = ?,
                    appreciation = ?,
                    date_evaluation = ?,
                    id_stage = ?
                WHERE id_evaluation = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $note,
            $appreciation,
            $date_evaluation,
            $id_stage,
            $id
        ]);
    }


    public function delete($id)
    {
        $sql = "DELETE FROM evaluation
                WHERE id_evaluation = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }

}