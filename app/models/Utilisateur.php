<?php

require_once __DIR__ . '/../core/Model.php';


class Utilisateur extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM utilisateur";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function create(
        $nom_utilisateur,
        $mot_de_passe,
        $role,
        $id_etudiant
    )
    {
        $mot_de_passe = password_hash(
            $mot_de_passe,
            PASSWORD_DEFAULT
        );

        $sql = "INSERT INTO utilisateur
                (
                    nom_utilisateur,
                    mot_de_passe,
                    role,
                    id_etudiant
                )
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom_utilisateur,
            $mot_de_passe,
            $role,
            $id_etudiant
        ]);
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM utilisateur
                WHERE id_utilisateur = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update(
        $id,
        $nom_utilisateur,
        $role,
        $id_etudiant
    )
    {
        $sql = "UPDATE utilisateur
                SET nom_utilisateur = ?,
                    role = ?,
                    id_etudiant = ?
                WHERE id_utilisateur = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $nom_utilisateur,
            $role,
            $id_etudiant,
            $id
        ]);
    }


    public function delete($id)
    {
        $sql = "DELETE FROM utilisateur
                WHERE id_utilisateur = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }


    public function login($nom_utilisateur)
    {
        $sql = "SELECT * FROM utilisateur
                WHERE nom_utilisateur = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$nom_utilisateur]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}