<?php

require_once __DIR__ . "/../core/Model.php";

class Etudiant extends Model
{
    public function getAll()
    {
        $sql = "SELECT e.*, f.nom_filiere, n.nom_niveau, a.libelle, d.nom
        FROM etudiant e 
        JOIN filiere f ON e.id_filiere = f.id_filiere
        JOIN niveau n ON e.id_niveau = n.id_niveau
        JOIN annee_academique a ON e.id_annee = a.id_annee
        JOIN encadreur d ON e.id_encadreur = d.id_encadreur ";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($nom, $prenom, $email, $id_filiere, $id_niveau, $id_annee) {
        $sql = "INSERT INTO etudiant(nom, prenom, email, id_filiere, id_niveau, id_annee)
        VALUE (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$nom, $prenom, $email, $id_filiere, $id_niveau, $id_annee]);
    }
}