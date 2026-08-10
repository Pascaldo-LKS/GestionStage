<!DOCTYPE html>
<html>

<head>
    <title>Ajouter un stage</title>
</head>
<?php  /** @var array $etudiants */
/** @var array $entreprises */ ?>
<body>

<h1>Ajouter un stage</h1>

<form method="POST" action="index.php?page=stage/store">

    <label>Date de début :</label>

    <input type="date" name="date_debut" required>

    <br><br>
    <label>Date de fin :</label>

    <input type="date" name="date_fin" required>

    <br><br>

    <label>Statut :</label>

    <select name="statut">
        <option>Prévue </option>
        <option value="En cours"> En cours </option>
        <option value="Termine">  Terminé </option>

    </select>

    <br><br>
    <label>Étudiant :</label>

    <select name="id_etudiant" required>

        <option value="">
            -- Choisir un étudiant --
        </option>

        <?php foreach($etudiants as $etudiant): ?>

            <option value="<?= $etudiant['id_etudiant']; ?>">

                <?= $etudiant['nom'] . ' ' . $etudiant['prenom']; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <label>Entreprise :</label>

    <select name="id_entreprise" required>

        <option value="">
            -- Choisir une entreprise --
        </option>

        <?php foreach($entreprises as $entreprise): ?>

            <option value="<?= $entreprise['id_entreprise']; ?>">

                <?= $entreprise['nom_entreprise']; ?>

            </option>

        <?php endforeach; ?>
    </select>
    <br><br>
    <button type="submit">
        Enregistrer
    </button>

</form>

<br>

<a href="index.php?page=stage/index">
    Retour à la liste
</a>

</body>

</html>