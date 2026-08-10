<!DOCTYPE html>
<html>

<head>
    <title>Liste des étudiants</title>
</head>
<?php
/** @var array $etudiants */
?>
<body>

<h1>Liste des étudiants</h1>

<a href="index.php?page=etudiant/create">
    Ajouter un étudiant
</a>

<br><br>

<table border="3">

    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Encadreur</th>
        <th>Filière</th>
        <th>Niveau</th>
        <th>Année académique</th>
        <th>Action</th>
    </tr>

    <?php foreach($etudiants as $etudiant): ?>
    <tr>
        <td> <?= $etudiant['id_etudiant']; ?> </td>

        <td>   <?= $etudiant['nom']; ?></td>

        <td>   <?= $etudiant['prenom']; ?> </td>

        <td>     <?= $etudiant['email']; ?> </td>

        <td>   <?= $etudiant['nom']." ". $etudiant['prenom'] ;  ?> 

        <td>   <?= $etudiant['nom_filiere']; ?> </td>

        <td>    <?= $etudiant['nom_niveau']; ?> </td>

        <td>    <?= $etudiant['libelle']; ?></td>

        <td>
            <a href="index.php?page=etudiant/edit&id=<?= $etudiant['id_etudiant']; ?>">   Modifier</a>

             <a href="index.php?page=etudiant/delete&id=<?= $etudiant['id_etudiant']; ?>"
            onclick="return confirm('Voulez-vous supprimer cet étudiant ?');"> Supprimer</a>
        </td>
    </tr>
     <?php endforeach; ?>

</table>

</body>

</html>