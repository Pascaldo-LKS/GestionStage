<?php

require_once __DIR__ . '/../core/Model.php';


class Stage extends Model
{

    public function getAll()
{
    $sql = "SELECT
                stage.*,
                etudiant.nom AS nom_etudiant,
                etudiant.prenom AS prenom_etudiant,
                entreprise.nom_entreprise
            FROM stage
            INNER JOIN etudiant
                ON stage.id_etudiant = etudiant.id_etudiant
            INNER JOIN entreprise
                ON stage.id_entreprise = entreprise.id_entreprise";

    $stmt = $this->conn->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    public function create(
        $date_debut,
        $date_fin,
        $statut,
        $id_etudiant,
        $id_entreprise
    )
    {
        $sql = "INSERT INTO stage
                (
                    date_debut,
                    date_fin,
                    statut,
                    id_etudiant,
                    id_entreprise
                )
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $date_debut,
            $date_fin,
            $statut,
            $id_etudiant,
            $id_entreprise
        ]);
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM stage
                WHERE id_stage = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update(
        $id,
        $date_debut,
        $date_fin,
        $statut,
        $id_etudiant,
        $id_entreprise
    )
    {
        $sql = "UPDATE stage
                SET date_debut = ?,
                    date_fin = ?,
                    statut = ?,
                    id_etudiant = ?,
                    id_entreprise = ?
                WHERE id_stage = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $date_debut,
            $date_fin,
            $statut,
            $id_etudiant,
            $id_entreprise,
            $id
        ]);
    }


    public function delete($id)
    {
        $sql = "DELETE FROM stage
                WHERE id_stage = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }

}