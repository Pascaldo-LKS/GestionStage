<!DOCTYPE html>
<html>

<head>
    <title>Modifier un stage</title>
</head>
<?php /** @var array $stage*/ 
/** @var array $etudiants */
/** @var array $entreprises */ ?>
<body>

<h1>Modifier un stage</h1>

<form method="POST" action="index.php?page=stage/update">

    <input type="hidden"
           name="id_stage"
           value="<?= $stage['id_stage']; ?>">


    <label>Date de début :</label>

    <input type="date"
           name="date_debut"
           value="<?= $stage['date_debut']; ?>"
           required>

    <br><br>


    <label>Date de fin :</label>

    <input type="date"
           name="date_fin"
           value="<?= $stage['date_fin']; ?>"
           required>

    <br><br>


    <label>Statut :</label>

    <select name="statut">

        <option value="En cours"
            <?= $stage['statut'] == 'En cours' ? 'selected' : ''; ?>>
            En cours
        </option>

        <option value="Termine"
            <?= $stage['statut'] == 'Termine' ? 'selected' : ''; ?>>
            Terminé
        </option>

    </select>

    <br><br>


    <label>Étudiant :</label>

    <select name="id_etudiant" required>

        <?php foreach($etudiants as $etudiant): ?>

            <option
                value="<?= $etudiant['id_etudiant']; ?>"
                <?= $etudiant['id_etudiant'] == $stage['id_etudiant'] ? 'selected' : ''; ?>
            >

                <?= $etudiant['nom'] . ' ' . $etudiant['prenom']; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <label>Entreprise :</label>

    <select name="id_entreprise" required>

        <?php foreach($entreprises as $entreprise): ?>

            <option
                value="<?= $entreprise['id_entreprise']; ?>"
                <?= $entreprise['id_entreprise'] == $stage['id_entreprise'] ? 'selected' : ''; ?>
            >

                <?= $entreprise['nom_entreprise']; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <br><br>


    <button type="submit">
        Modifier
    </button>

</form>

<br>

<a href="index.php?page=stage/index">
    Retour à la liste
</a>

</body>

</html>