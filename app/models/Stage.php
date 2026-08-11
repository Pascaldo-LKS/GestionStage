<?php

require_once __DIR__ . '/../core/Model.php';


class Stage extends Model
{

    public function getAll()
{
    $sql = "SELECT
                stage.*,
                e.nom AS nom_etudiant,
                e.prenom AS prenom_etudiant,
                en.nom_entreprise
            FROM stage
            INNER JOIN etudiant e
                ON stage.id_etudiant = e.id_etudiant
            INNER JOIN entreprise en
                ON stage.id_entreprise = en.id_entreprise";

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

    public function getStageEnCours($id_etudiant)
{
    $sql = "SELECT * FROM stage
            WHERE id_etudiant = ?
            AND statut = 'En cours'
            LIMIT 1";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([$id_etudiant]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
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