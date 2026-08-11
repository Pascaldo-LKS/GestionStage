<!DOCTYPE html>
<html>

<head>
    <title>Déposer un rapport</title>
</head>
<?php /** @var array $stage */ ?>
<body>

<h1>Déposer mon rapport</h1>

<p>
    Stage en cours :
    <strong>
        <?= $stage['date_debut']; ?>
        au
        <?= $stage['date_fin']; ?>
    </strong>
</p>

<form method="POST"
      action="index.php?page=rapport/store"
      enctype="multipart/form-data">

    <label>Choisir mon rapport PDF :</label>

    <br><br>

    <input type="file"
           name="fichier"
           accept=".pdf"
           required>

    <br><br>

    <button type="submit">
        Déposer mon rapport
    </button>

</form>

<br>

<a href="index.php?page=rapport/index">
    Retour
</a>

</body>

</html>