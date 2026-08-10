<!DOCTYPE html>
<html>

<head>
    <title>Modifier un rapport</title>
</head>
<?php  /** @var array $rapport */ 
 /** @var array $stages */  ?>
<body>

<h1>Modifier un rapport</h1>

<form method="POST"
      action="index.php?page=rapport/update"
      enctype="multipart/form-data">

    <input type="hidden"
           name="id_rapport"
           value="<?= $rapport['id_rapport']; ?>">


    <p>
        Fichier actuel :
        <strong><?= $rapport['fichier']; ?></strong>
    </p>


    <label>Nouveau fichier PDF :</label>

    <input type="file"
           name="fichier"
           accept=".pdf">

    <br><br>


    <label>Statut :</label>

    <select name="statut_validation">

        <option value="En attente"
            <?= $rapport['statut_validation'] == 'En attente' ? 'selected' : ''; ?>>
            En attente
        </option>

        <option value="Valide"
            <?= $rapport['statut_validation'] == 'Valide' ? 'selected' : ''; ?>>
            Valide
        </option>

        <option value="Refuse"
            <?= $rapport['statut_validation'] == 'Refuse' ? 'selected' : ''; ?>>
            Refusé
        </option>

    </select>

    <br><br>


    <label>Stage :</label>

    <select name="id_stage" required>

        <?php foreach($stages as $stage): ?>

            <option
                value="<?= $stage['id_stage']; ?>"
                <?= $stage['id_stage'] == $rapport['id_stage'] ? 'selected' : ''; ?>
            >

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
        Modifier
    </button>

</form>

<br>

<a href="index.php?page=rapport/index">
    Retour à la liste
</a>

</body>

</html>