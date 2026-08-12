<!DOCTYPE html>
<html>
    <head>
        <title> Ajouter unz annee</title>
    </head>
    <body>
        <h1>Ajouter une Année</h1>
        <form method="POST" action="index.php?page=annee/store">
            <label>Année acdémique :</label>
            <input type="text" name="libelle" required/>

            <button type="submit">Enregistrer</button>
        </form>
        <?php

require_once __DIR__ . '/../layouts/footer.php';

?>

    </body>
</html>