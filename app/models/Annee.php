<?php
require_once __DIR__ . '/../core/Model.php';

class Annee extends Model {

    public function getAll() {
        $sql = "SELECT * FROM annee_academique";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($nom)
    {
        $sql = "INSERT INTO annee_academique(libelle)
                VALUES(?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$nom]);
    }

    public function getById($id)
{
    $sql = "SELECT * FROM annee_academique WHERE id_annee = ?";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function update($id, $nom)
    {
        $sql = "UPDATE annee_academique
                SET libelle = ?
                WHERE id_annee = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([ $nom, $id ]);
    }

    public function delete($id)
{
    $sql = "DELETE FROM annee_academique WHERE id_annee = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([$id]);
}


}