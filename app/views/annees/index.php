<!DOCTYPE html>
<html>
    <head>
        <title>Annee</title>
    </head>
    <?php /** @var array $annees */ ?>
    <body>
        <h1>Les Annees</h1>
        <a href="index.php?page=annee/create"> Ajouter une année</a>
        
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Année</th>
                <th>Action</tr>
            </tr>
            <?php foreach($annees as $annee): ?>
            <tr>
                <td> <?= $annee['id_annee']; ?> </td>
                
                <td> <?= $annee['libelle']; ?> </td>

                <td><a href="index.php?page=annee/edit&id=<?= $annee['id_annee']; ?>"> Modifier </a>
                <a href="index.php?page=annee/delete&id=<?= $annee['id_annee']; ?>"
                onclick="return confirm('Voulez-vous supprimer cette année ?');"> Supprimer </a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </body>
</html>