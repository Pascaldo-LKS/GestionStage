<?php

require_once __DIR__ . '/../core/Model.php';

class Entreprise extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM entreprise";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(
        $nom_entreprise,
        $adresse,
        $telephone,
        $email
    )
    {
        $sql = "INSERT INTO entreprise
                (
                    nom_entreprise,
                    adresse,
                    telephone,
                    email
                )
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom_entreprise,
            $adresse,
            $telephone,
            $email
        ]);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM entreprise
                WHERE id_entreprise = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(
        $id,
        $nom_entreprise,
        $adresse,
        $telephone,
        $email
    )
    {
        $sql = "UPDATE entreprise
                SET nom_entreprise = ?,
                    adresse = ?,
                    telephone = ?,
                    email = ?
                WHERE id_entreprise = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom_entreprise,
            $adresse,
            $telephone,
            $email,
            $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM entreprise
                WHERE id_entreprise = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }

}