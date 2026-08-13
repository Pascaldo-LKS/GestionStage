<!DOCTYPE html>
<html>

<head>
    <title>Modifier une filière</title>
</head>
<?php
/** @var array $annee */
$title = "Modifiern l'znnée";

require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/menu-admin.php';

?>

<main>
    <div class="page-content">

        <div class="page-header">

            <div>

                <h1>Modifier une date</h1>

                <p>
                    Modification.
                </p>

            </div>

        </div>
       
        <div class="form-card">

            <form method="POST" action="index.php?page=annee/update"  enctype="multipart/form-data">

            <input type="hidden"  name="id_annee"  value="<?= $annee['id_annee']; ?> ">

            <div class="form-group">

                <label  for="libelle"> Année academique :  </label>
                <input type="text" name="libelle" value="<?= $annee['libelle']; ?>" required >
            </div>    
                <br><br>
                    <div class="form-actions">

                        <a href="index.php?page=annee/index" class="btn btn-secondary" > Annuler</a>


                        <button type="submit" class="btn btn-primary"> Modifier</button>

                    </div>
            </form>
            <?php

            require_once __DIR__ . '/../layouts/footer.php';

            ?>
        </div>
    </div>

</main>
</html>