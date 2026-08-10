<?php
require_once __DIR__ . '/../core/Model.php';
class Niveau extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM niveau";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($nom)
    {
        $sql = "INSERT INTO niveau(nom_niveau)
                VALUES(?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$nom]);
    }

    public function getById($id)
{
    $sql = "SELECT * FROM niveau WHERE id_niveau = ?";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function update($id, $nom)
    {
        $sql = "UPDATE niveau
                SET nom_niveau = ?
                WHERE id_niveau = ?";


        $stmt = $this->conn->prepare($sql);


        return $stmt->execute([
            $nom,
            $id
        ]);
    }

    public function delete($id)
{
    $sql = "DELETE FROM niveau WHERE id_niveau = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([$id]);
}

}