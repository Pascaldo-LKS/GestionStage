<!DOCTYPE html>
<html>
    <head>
        <title>Annee</title>
    </head>
    <?php /** @var array $annees */ 
$title = "Déposer un rapport";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';
?>
<

    <main>
        <div class="page-content">

                <div class="page-header">

                    <div>
                        <h1>Liste des année academique</h1>

                        <p>
                            Gestion des année academique
                        </p>
                    </div>

                    <a
                        href="index.php?page=annee/create"
                        class="btn btn-primary"
                    >
                        + Ajouter une module
                    </a>
            </div>

            <div class="table-container">
                <table  class="data-table">
                    <tr>
                        <th>ID</th>
                        <th>Année</th>
                        <th>Action</tr>
                    </tr>
                    <?php foreach($annees as $annee): ?>
                    <tr>
                        <td> <?= $annee['id_annee']; ?> </td>
                        
                        <td> <?= $annee['libelle']; ?> </td>

                        <td>
                             <div class="action-buttons">
                            
                                <a href="index.php?page=annee/edit&id=<?= $annee['id_annee'];  ?>"   class="btn btn-edit"> Modifier </a>
                                <a href="index.php?page=annee/delete&id=<?= $annee['id_annee']; ?>" class="btn btn-delete"
                                onclick="return confirm('Voulez-vous supprimer cette année ?'); "> Supprimer </a>
                             </div>
                            </td>

                    </tr>

                    <?php endforeach; ?>
                </table>
            </div>
                <?php require_once __DIR__ . '/../layouts/footer.php';?>
        </div>

     </main>
</html>