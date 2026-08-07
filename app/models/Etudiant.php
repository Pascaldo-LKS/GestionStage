<?php

require_once __DIR__ . "/../core/Model.php";

class Etudiant extends Model
{
    public function getAll()
{
    $sql = "SELECT * FROM etudiant";

    $stmt = $this->conn->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}