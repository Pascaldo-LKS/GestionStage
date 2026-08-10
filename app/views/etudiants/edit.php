<!DOCTYPE html>
<html>

<head>
    <title>Modifier un étudiant</title>
</head>
<?php
/** @var array $filieres */
/** @var array $niveaux */
/** @var array $annees */
/** @var array $etudiant*/
?>
<body>

<h1>Modifier un étudiant</h1>

<form method="POST" action="index.php?page=etudiant/update">

<input type="hidden"
       name="id_etudiant"
       value="<?= $etudiant['id_etudiant']; ?>">
<label>Nom :</label>
<input type="text"
       name="nom"
       value="<?= $etudiant['nom']; ?>">
<br><br>

<label>Prénom :</label>
<input type="text"
       name="prenom"
       value="<?= $etudiant['prenom']; ?>">
<br><br>

<label>Email :</label>
<input type="email"
       name="email"
       value="<?= $etudiant['email']; ?>">
<br><br>

<label>Filière :</label>
<select name="id_filiere">

    <?php foreach($filieres as $filiere): ?>

        <option
            value="<?= $filiere['id_filiere']; ?>"
            <?= $filiere['id_filiere'] == $etudiant['id_filiere'] ? 'selected' : ''; ?>
        >

            <?= $filiere['nom_filiere']; ?>

        </option>

    <?php endforeach; ?>

</select>

<br><br>
<label>Niveau :</label>

<select name="id_niveau">

    <?php foreach($niveaux as $niveau): ?>

        <option
            value="<?= $niveau['id_niveau']; ?>"
            <?= $niveau['id_niveau'] == $etudiant['id_niveau'] ? 'selected' : ''; ?>
        >

            <?= $niveau['nom_niveau']; ?>

        </option>

    <?php endforeach; ?>

</select>

<br><br>


<label>Année académique :</label>

<select name="id_annee">

    <?php foreach($annees as $annee): ?>

        <option
            value="<?= $annee['id_annee']; ?>"
            <?= $annee['id_annee'] == $etudiant['id_annee'] ? 'selected' : ''; ?>
        >

            <?= $annee['libelle']; ?>

        </option>

    <?php endforeach; ?>

</select>

<br><br>


<button type="submit">
    Modifier
</button>


</form>


<br>

<a href="index.php?page=etudiant/index">
    Retour à la liste
</a>


</body>

</html>