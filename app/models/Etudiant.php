<<?php

require_once __DIR__ . '/../core/Model.php';

class Etudiant extends Model
{
    public function getAll()
    {
        $sql = "SELECT  e.id_etudiant, e.nom, e.prenom, e.email, f.nom_filiere, n.nom_niveau, a.libelle, d.nom_encadreur , d.prenom_encadreur

                FROM etudiant e

                INNER JOIN filiere f ON e.id_filiere = f.id_filiere

                INNER JOIN niveau n ON e.id_niveau = n.id_niveau

                INNER JOIN annee_academique a ON e.id_annee = a.id_annee

                INNER JOIN encadreur d ON e.id_encadreur = d.id_encadreur";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


   public function create($nom, $prenom, $email, $id_filiere, $id_niveau, $id_annee,  $id_encadreur)
{
    $sql = "INSERT INTO etudiant
            (nom, prenom, email, id_filiere,id_niveau, id_annee,  id_encadreur)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([ $nom, $prenom, $email, $id_filiere, $id_niveau, $id_annee, $id_encadreur ]);
}

public function getById($id)
{
    $sql = "SELECT * FROM etudiant
            WHERE id_etudiant = ?";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function update(
    $id,
    $nom,
    $prenom,
    $email,
    $id_filiere,
    $id_niveau,
    $id_annee,
    $id_encadreur
)
{
    $sql = "UPDATE etudiant
            SET nom = ?,
                prenom = ?,
                email = ?,
                id_filiere = ?,
                id_niveau = ?,
                id_annee = ?,
                id_encadreur = ?
            WHERE id_etudiant = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        $nom,
        $prenom,
        $email,
        $id_filiere,
        $id_niveau,
        $id_annee,
        $id_encadreur,
        $id
    ]);
}

public function delete($id)
{
    $sql = "DELETE FROM etudiant
            WHERE id_etudiant = ?";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([$id]);
}
}