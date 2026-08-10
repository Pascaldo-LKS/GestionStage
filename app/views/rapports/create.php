<!DOCTYPE html>
<html>

<head>
    <title>Déposer un rapport</title>
</head>
<?php /** @var array $stages */ ?>
<body>

<h1>Déposer un rapport</h1>

<form method="POST"
      action="index.php?page=rapport/store"
      enctype="multipart/form-data">

    <label>Fichier du rapport :</label>

    <input type="file"
           name="fichier"
           accept=".pdf"
           required>

    <br><br>


    <label>Stage :</label>

    <select name="id_stage" required>

        <option value="">
            -- Choisir un stage --
        </option>

        <?php foreach($stages as $stage): ?>

            <option value="<?= $stage['id_stage']; ?>">

                Stage <?= $stage['id_stage']; ?>

                -
                <?= $stage['date_debut']; ?>

                au

                <?= $stage['date_fin']; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <button type="submit">
        Déposer le rapport
    </button>

</form>

<br>

<a href="index.php?page=rapport/index">
    Retour à la liste
</a>

</body>

</html>