<?php

require_once __DIR__ . '/../core/Model.php';


class Filiere extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM filiere";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($nom)
    {
        $sql = "INSERT INTO filiere(nom_filiere)
                VALUES(?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$nom]);
    }

    public function getById($id)
{
    $sql = "SELECT * FROM filiere WHERE id_filiere = ?";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function update($id, $nom)
    {
        $sql = "UPDATE filiere 
                SET nom_filiere = ?
                WHERE id_filiere = ?";


        $stmt = $this->conn->prepare($sql);


        return $stmt->execute([
            $nom,
            $id
        ]);
    }

    public function delete($id)
{
    $sql = "DELETE FROM filiere WHERE id_filiere = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([$id]);
}

}