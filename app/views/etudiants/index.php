<!DOCTYPE html>
<html>
    <head>
        <title>Liste etudiants</title>
    </head>
    <?php
/** @var array $etudiants */
?>
    <body>
        <h1>Liste des etudiants en stage</h1>
        <a href="index.php?page=etudiant/create"><button>Ajouter un etudiant</button></a>
        <br><br>

        <table border="2">
            <tr>
                <th>N°</th> 
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Filiere</th>
                <th>Niveau</th>
                <th>Annee academique </th>
            </tr>
            <?php foreach($etudiants as $etudiants): ?> 
                <tr>
                    <td><?= $etudiants['id_etudiant']; ?></td>
                    <td><?= $etudiants['nom']; ?></td>
                </tr>  
            <?php endforeach; ?>
        </table>
    </body>
</html>