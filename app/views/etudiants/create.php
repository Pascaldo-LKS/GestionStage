<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un étudiant</title>
</head>
<?php
/** @var array $filieres */
/** @var array $niveaux */
/** @var array $annees */
/** @var array $encadreurs */
?>
<body>

<h1>Ajouter un étudiant</h1>

<form method="POST" action="index.php?page=etudiant/store">

    <label>Nom :</label>
    <input type="text" name="nom">

    <br><br>

    <label>Prénom :</label>
    <input type="text" name="prenom">

    <br><br>

    <label>Email :</label>
    <input type="email" name="email">

    <br><br>


    <label>Filière :</label>

    <select name="id_filiere">

        <option value="">-- Choisir une filière --</option>

        <?php foreach($filieres as $filiere): ?>

            <option value="<?= $filiere['id_filiere']; ?>">
                <?= $filiere['nom_filiere']; ?>
            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <label>Niveau :</label>

    <select name="id_niveau">

        <option value="">-- Choisir un niveau --</option>

        <?php foreach($niveaux as $niveau): ?>

            <option value="<?= $niveau['id_niveau']; ?>">
                <?= $niveau['nom_niveau']; ?>
            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <label>Année académique :</label>

    <select name="id_annee">

        <option value="">-- Choisir une année --</option>

        <?php foreach($annees as $annee): ?>

            <option value="<?= $annee['id_annee']; ?>">
                <?= $annee['libelle']; ?>
            </option>

        <?php endforeach; ?>

    </select>

    <br><br>

<div id="encadreurDiv" style="display: none;">

    <label>Encadreur :</label>

    <select name="id_encadreur">

        <option value=""> Choisir un encadreur </option>

        <?php foreach($encadreurs as $encadreur): ?>

            <option value="<?= $encadreur['id_encadreur']; ?>">
                <?= $encadreur['nom_encadreur'] . ' ' . $encadreur['prenom_encadreur']; ?>
            </option>

        <?php endforeach; ?>

    </select>

    <br><br>

</div>

<br><br>

    <button type="submit">
        Enregistrer
    </button>

</form>

<br>

<a href="index.php?page=etudiant/index">
    Retour à la liste
</a>

<script>

function afficherEncadreur()
{
    let niveau = document.querySelector('select[name="id_niveau"]');

    let encadreurDiv = document.getElementById('encadreurDiv');

    if(niveau.options[niveau.selectedIndex].text === "Licence 3")
    {
        encadreurDiv.style.display = "block";
    }
    else
    {
        encadreurDiv.style.display = "none";
    }
}


document.querySelector('select[name="id_niveau"]')
    .addEventListener('change', afficherEncadreur);

</script>

</body>

</html>