<?php

require_once __DIR__ . '/../core/Model.php';


class Encadreur extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM encadreur";
        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create( $nom, $prenom, $email, $telephone, $fonction)
    {
        $sql = "INSERT INTO encadreur
                (nom_encadreur, prenom_encadreur, email, telephone, fonction )
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([ $nom, $prenom, $email, $telephone, $fonction]);
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM encadreur
                WHERE id_encadreur = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update(
        $id, $nom, $prenom, $email, $telephone, $fonction
    )
    {
        $sql = "UPDATE encadreur
                SET nom_encadreur = ?,
                    prenom_encadreur = ?,
                    email = ?,
                    telephone = ?,
                    fonction = ?
                WHERE id_encadreur = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom, $prenom, $email, $telephone, $fonction, $id
        ]);
    }


    public function delete($id)
    {
        $sql = "DELETE FROM encadreur
                WHERE id_encadreur = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }

}